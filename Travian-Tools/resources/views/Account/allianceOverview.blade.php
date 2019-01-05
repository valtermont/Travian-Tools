@extends('Account.template')

@section('body')
<!-- =================================== Account Overview screen================================== -->
	<div class="card float-md-left col-md-9 mt-1 p-0 shadow">
        <div class="card-header h4 py-2 bg-warning text-white">
            <strong>Alliance Details</strong>
        </div>
        <div class="card-text mx-auto text-center col-md-12">
            <div>
                <table class="table table-borderless mx-auto mt-3 text-left">
                    <tr>
                        <td>
                            <table class="mx-auto px-0">
                                <tr>
                                    <td class="py-1"><strong><span class="text-warning">Alliance</span></strong></td>
                                    <td class="py-1">: <strong>{{$alliance->alliance}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-warning">Rank</span></strong></td>
                                    <td class="py-1">: {{$alliance->rank}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-warning">Players</span></strong></td>
                                    <td class="py-1">: {{$alliance->players}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-warning">Population</span></strong></td>
                                    <td class="py-1">: {{$alliance->population}}</td>
                                </tr>
                                <tr>
                                    <td class="py-1"><strong><span class="text-warning">Villages</span></strong></td>
                                    <td class="py-1">: {{$alliance->villages}}</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="align-center">
                                <tr><td class="py-1 text-warning h5"><strong>Ingame Links</strong></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/allianz.php?aid={{$alliance['aid']}}" target="_blank"><strong>Travian Profile</strong></a></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/statistiken.php?id=1&idSub=1&name={{$alliance['alliance']}}" target="_blank"><strong>Attack Points</strong></a></td></tr>
                                <tr><td class="py-1"><a href="https://{{Session::get('server.url')}}/statistiken.php?id=1&idSub=2&name={{$alliance['aid']}}" target="_blank"><strong>Defense Points</strong></a></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>                
            </div>
                
            <div class="mt-1 col-md-10 mx-auto">
                <table class="table table-bordered table-hover table-sm small">
                    <thead class="thead">
                        <tr>
                            <th colspan="8" class="h5 text-white bg-warning"><strong>Players Details</strong></th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th class="col-md-3">Player</th>
                            <th class="col-md-1">Tribe</th>
                            <th class="col-md-1">Rank</th>
                            <th class="col-md-2">Population</th>
                            <th class="col-md-1">Villages</th>
                            <th class="col-md-2">Sitter 1</th>
                            <th class="col-md-2">Sitter 2</th>
                        </tr>
                    </thead>
                    @foreach($players as $index=>$player)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td><a href="/finder/player/{{$player['player']}}/1" target="_blank"><strong>{{$player['player']}}</strong></a></td>
                        <td class="py-0" data-toggle="tooltip" data-placement="top" title="{{$player['tribe']}}">
                        	<img alt="" src="/images/x.gif" class="tribe {{$player['tribe']}}"></td>
                        <td>{{$player['rank']}}</td>
                        <td>{{$player['population']}} <small>({{$player['diffpop']}})</small></td>
                        <td>{{$player['villages']}}</td>
                        <td><a href="/finder/player/{{$player['sitter1']}}/1">{{$player['sitter1']}}</a></td>
                        <td><a href="/finder/player/{{$player['sitter2']}}/1">{{$player['sitter2']}}</a></td>
                    </tr>                   
                    @endforeach
                </table>
            </div>         
        </div>
    </div>
	

@endsection