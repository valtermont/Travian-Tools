@extends('Finders.Alliance.allianceFinder')

@section('result')    
<!-- =========================== alliance Finder Output -- Single alliance ====================================== -->
    <div class="card float-md-left shadow col-md-12 px-0 mb-5">
        <div class="card-header h4 py-2 bg-success text-white">
            <strong>Alliance Details</strong>
        </div>
        <div class="card-text mx-auto text-center col-md-12">
            <div>
                <table class="table table-borderless col-md-10 mx-auto mt-3 text-left">
                    <tr>
                        <td>
                            <table class="mx-auto px-0">
                                <tr>
                                    <td class="py-1"><strong><span class="text-success">Alliance</span></strong></td>
                                    <td class="py-1">: <strong>{{$alliance['alliance']}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-success">Rank</span></strong></td>
                                    <td class="py-1">: {{$alliance['rank']}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-success">Players</span></strong></td>
                                    <td class="py-1">: {{$alliance['players']}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-success">Population</span></strong></td>
                                    <td class="py-1">: {{$alliance['population']}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-success">Villages</span></strong></td>
                                    <td class="py-1">: {{$alliance['villages']}}</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="align-center">
                                <tr><td class="py-1 text-success h5"><strong>Ingame Links</strong></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/allianz.php?aid={{$alliance['aid']}}" target="_blank"><strong>Travian Profile</strong></a></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/statistiken.php?id=1&idSub=1&name={{$alliance['alliance']}}" target="_blank"><strong>Attack Points</strong></a></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/statistiken.php?id=1&idSub=2&name={{$alliance['aid']}}" target="_blank"><strong>Defense Points</strong></a></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>                
            </div>
                
            <div class="mt-1 col-md-10 mx-auto">
                <table class="table table-bordered table-hover table-sm">
                    <thead class="thead">
                        <tr>
                            <th colspan="6" class="h5 text-white bg-success"><strong>Players</strong></th>
                        </tr>
                        <tr>
                            <th class="">#</th>
                            <th class="">Player</th>
                            <th class="">Rank</th>
                            <th class="">Tribe</th>                            
                            <th class="">Population</th>
                            <th class="">Villages</th>
                        </tr>
                    </thead>
                    @foreach($players as $index=>$player)
                        <tr>
                            <td class="py-0">{{ $index+1 }}</td>
                            <td class="py-0"><a href="/finders/player/{{$player['player']}}/1"><strong>{{$player['player']}}</strong></a></td>
                            <td class="py-0">{{$player['rank']}}</td>
                            <td class="py-0" data-toggle="tooltip" data-placement="top" title="{{$player->tribe}}"><img alt="" src="/images/x.gif" class="tribe {{$player->tribe}}"></td>
                            <td class="py-0">{{$player['population']}} <span class="small text-@if($player['diffpop'] >0 ){{'success'}}@else{{'danger'}}@endif"
                                    			>({{ $player['diffpop'] }})</span></td>
                            <td class="py-0">{{$player['villages']}}</td>
                        </tr> 
                    @endforeach                    
                </table>
            </div>         
        </div>
    </div>
@endsection