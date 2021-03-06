@extends('Finders.Inactive.inactiveFinder')

@section('result')

<!-- ==================================== Inactive Finder Output -- List Inactives ==================================== -->
    <div class="card float-md-left shadow col-md-12 px-0 mb-5">
        <div class="card-header h4 py-2 bg-success text-white">
            <strong>Inactive Results</strong>
        </div>
        <div class="card-text mx-auto text-center col-md-12">
            <table id="sortableTable" class="table table-border-success table-hover table-sm small">
                <tr class="h6">
                    <th onclick="sortTable(0)" class="">Distance</th>
                    <th onclick="sortTable(1)" class="">Village</th>                    
                    <th onclick="sortTable(2)" class="">Player</th>
                    <th class="">Tribe</th>
                    <th onclick="sortTable(3)" class="">Alliance</th>   
                    <th onclick="sortTable(4)" class="">Pop<small>(+/- 7 days)</small></th>
                    <th onclick="sortTable(5)" class="">Status</th>
                </tr>
                @foreach($villages as $village)
            		@php 
                    	if($village->id === 1){	$tribe='Roman'; }
                		elseif($village->id===2){	$tribe='Teuton';	}
            			elseif($village->id===3){	$tribe='Gaul';	}
            			elseif($village->id===4){	$tribe='Nature';	}
            			elseif($village->id===5){	$tribe='Natar';	}
            			elseif($village->id===6){	$tribe='Egyptian';	}
            			elseif($village->id===7){	$tribe='Hun';	}
            			else {	$tribe='Natar';	}
            			
            			if($village->status=='Inactive'){	$status='text-dark';	}
            			else{	$status='text-danger';	}
        			@endphp
                    <tr>
                        <td class="py-0">{{round(sqrt(pow(($xCor-$village->x),2)+pow(($yCor-$village->y),2)),1)}}</td>
                        <td class="py-0"><a href="https://{{Session::get('server.url')}}/karte.php?x={{$village->x}}&y={{$village->y}}" target="_blank">{{$village->village}}</a></td>                    
                        <td class="py-0"><a href="/finders/player/{{$village->player}}/1">{{$village->player}}</a></td>
                    	<td class="py-0" data-toggle="tooltip" data-placement="top" title="{{$tribe}}"><img alt="" src="/images/x.gif" class="tribe {{$tribe}}"></td>
                        <td class="py-0"><a href="/finders/alliance/{{$village->alliance}}/1">{{$village->alliance}}</a></td>                        
                        <td class="py-0">{{$village->population}}({{$village->diffPop}})</td>
                        <td class="{{$status}} py-0">{{$village->status}}</td>
                    </tr>                
                @endforeach                
            </table>
        </div>
    </div>

@endsection