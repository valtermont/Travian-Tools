<?php

namespace App\Http\Controllers\Plus\Offense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\OPSPlan;
use App\OPSWaves;
use App\Account;
use App\Units;
use App\Troops;

class OffenseController extends Controller
{
    public function offenseTaskList(Request $request){
        
        session(['title'=>'Offense']);        
        $ops = null;
        $plans = OPSPlan::where('server_id',$request->session()->get('server.id'))
                        ->where('plus_id',$request->session()->get('plus.plus_id'))
                        ->where('status','PUBLISH')->get();
        
        if(count($plans)>0){            
            $account=Account::where('server_id',$request->session()->get('server.id'))
                        ->where('user_id',Auth::user()->id)->first();
            $units = array();
            $rows = Units::select('image','name','speed')->where('tribe',$account->tribe)
                        ->orderBy('id','asc')->get();
            foreach($rows as $row){
                $units[$row->image]['name']=$row->name;
                $units[$row->image]['speed']=$row->speed;
            }

            foreach($plans as $plan){                
                $waves=OPSWaves::where('server_id',$request->session()->get('server.id'))
                            ->where('plus_id',$request->session()->get('plus.plus_id'))
                            ->where('plan_id',$plan->id)->where('a_uid',$account->uid)
                            ->orderBy('landtime','asc')->get();

                if(count($waves)>0){
                    $waves = $waves->toArray();
                    foreach($waves as $i=>$wave){
                        $waves[$i]['name']=$units[$wave['unit']]['name'];
                        $waves[$i]['timer']=0;
                        
                        $waves[$i]['starttime']=Carbon::parse($wave['starttime'])->format($request->session()->get('dateFormat'));                        
                        $waves[$i]['landtime'] =Carbon::parse($wave['landtime'])->format($request->session()->get('dateFormat'));
                        
                        if(strtotime($wave['starttime']) < strtotime(Carbon::now())){
                            $waves[$i]['timer']=1;
                        }
                        
                    }
                    $ops[]=array(
                        'id'=>$plan->id,
                        'name'=>$plan->name,
                        'create'=>$plan->create_by,
                        'update'=>$plan->update_by,
                        'waves'=>$waves                         
                    );
                }                 
            }
        } 
        return view('Plus.Offense.offenseTasks')->with(['ops'=>$ops]);        
    }
    
    public function updateOffenseTask(Request $request){
        session(['title'=>'Offense']);
        
        $id = $request->id;
        $type = strtoupper($request->name);
        $value = $request->value;
        
        $task = OPSWaves::where('server_id',$request->session()->get('server.id'))
                        ->where('plus_id',$request->session()->get('plus.plus_id'))
                        ->where('id',$id)->first();                                             
        
        if($type=="STATUS"){
            OPSWaves::where('server_id',$request->session()->get('server.id'))
                    ->where('plus_id',$request->session()->get('plus.plus_id'))
                    ->where('id',$id)->update([ 'status'=> $value ]); 
        }
        if($type=="REPORT"){
            OPSWaves::where('server_id',$request->session()->get('server.id'))
                    ->where('plus_id',$request->session()->get('plus.plus_id'))
                    ->where('id',$id)->update([ 'report'=> $value ]);
        }
        
        // Discord Notifications
        if($request->session()->get('discord')==1 && $type=="STATUS"){
            
            $discord['plan_link']   = env("SITE_URL","https://www.travian-tools.com").'/offense/status/'.$task->plan_id;
            $discord['status']      = ucfirst(strtolower($value));
            $discord['attack']      = $task->a_player.' ('.$task->a_village.')';
            $discord['a_link']      = 'https://'.$request->session()->get('server.url').'/position_details.php?x='.$task->a_x.'&y='.$task->a_y;
            $discord['target']      = $task->d_player.' ('.$task->d_village.')';
            $discord['t_link']      = 'https://'.$request->session()->get('server.url').'/position_details.php?x='.$task->d_x.'&y='.$task->d_y;
            $discord['waves']       = $task->waves;
            $discord['type']        = ucfirst(strtolower($task->type));
            
            DiscordOpsWaveNotification($discord,$request->session()->get('server.id'),$request->session()->get('plus.plus_id'));
                        
        }  
        
        $message = 'success';
        return response()->json(['message'=>$message]);    
    }
}
