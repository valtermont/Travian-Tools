<?php

namespace App\Http\Controllers\Finders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use App\Diff;
use App\Players;
use App\Alliances;
use App\MapData;

class NeighbourFinderController extends Controller
{
    public function neighbour(){        
        //Displays the neighbour finder
        return view('finders.Neighbour.neighbourFinder');
    }
    
    public function processNeighbour(Request $request){
        //Process the Neighbour finder form
        
        $xCor=Input::get('xCor');
        $yCor=Input::get('yCor');
        $dist = Input::get('dist');     
        $pop=Input::get('pop');
        
        
        $sqlStr = "SELECT a.* FROM maps_details a, servers b WHERE a.table_id = b.table_id AND b.server_id='".'t6angr1'."' AND".
            "((".$xCor."- a.x)*(".$xCor."- a.x) + (".$yCor."- a.y)*(".$yCor."- a.y)) <= ".$dist."*".$dist.
            " AND a.population <=".$pop.
            " ORDER BY "."((".$xCor."- a.x)*(".$xCor."- a.x) + (".$yCor."- a.y)*(".$yCor."- a.y)) ASC";
        
        $villages= DB::select(DB::raw($sqlStr)); 
        
        
        /* $villages=DB::table('maps_details')
                    ->join('servers','servers.server_id','=','maps_details.server_id')
                    ->selectRaw('maps_details.*')
                    ->where('servers.table_id','=','maps_details.table_id')
                    ->where('servers.server_id','=',$request->session()->get('server.id'))
                    ->where('maps_details.population','<=',$pop)
                    ->whereRaw("((".$xCor."-maps_details.x)*(".$xCor."-maps_details.x)+(".$yCor."-maps_details.y)*(".$yCor."-maps_details.y) <= ".$dist."*".$dist.")")                    
                    ->orderByRaw("(".$xCor."-maps_details.x)*(".$xCor."-maps_details.x)+(".$yCor."-maps_details.y)*(".$yCor."-maps_details.y) ASC")
                    ->paginate(50);    */    

        if(count($villages)==0){
            return view('finders.Neighbour.noNeighbours');
        }else{
            return view('finders.Neighbour.neighbourslist')->with(['villages'=>$villages])
            ->with(['x'=>$xCor])->with(['y'=>$yCor])->with(['dist'=>$dist]);
        }
    }
}
