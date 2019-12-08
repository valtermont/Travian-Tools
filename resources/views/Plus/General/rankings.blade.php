@extends('Plus.template')

@section('body')

	<!-- =============================================Plus Overview=========================================== -->
    <div class="card float-md-left col-md-9 mt-1 p-0 shadow">
        <div class="card-header h4 py-2 bg-info text-white">
            <strong>Your Rankings</strong>
        </div>
    @if($ranking==null)
        <div class="card-text">
        	<p class="text-center h5 py-5 text-danger">Rankings are disabled for this group</p>        
        </div>        
    @else
        <div class="card-text">
            <div class="text-center col-md-10 mx-auto my-2 p-0">
					<table class="table table-sm table-bordered align-middle small">
						<tr class="bg-info text-white">
							<th class="col-md-1"></th>
							<th class="col-md-1"><span data-toggle="tooltip" data-placement="top" title="Total"><img alt="" src="/images/x.gif" class="res upkeep"></span> Total Troops</th>
							<th class="col-md-1"><span data-toggle="tooltip" data-placement="top" title="Offense"><img alt="" src="/images/x.gif" class="stats off"></span> Offense</th>
							<th class="col-md-1"><span data-toggle="tooltip" data-placement="top" title="Defense"><img alt="" src="/images/x.gif" class="stats def"></span> Defense</th>
							<th class="col-md-1">Hero</th>
							<th class="col-md-1">Population</th>
						</tr>
						<tr class="font-weight-bold">
							<td class="bg-info text-white"><strong>Rank</strong></td>
						@if(!$ranking['total']==null)
							<td>{{$ranking['total'][0]->rank}}</td>
						@else
							<td rowspan="2" class="align-middle small">Ranking not found</td>
						@endif
						
						@if(!$ranking['off']==null)
							<td>{{$ranking['off'][0]->rank}}</td>
						@else
							<td rowspan="2" class="align-middle small">Ranking not found</td>
						@endif
							
						@if(!$ranking['def']==null)
							<td>{{$ranking['def'][0]->rank}}</td>
						@else
							<td rowspan="2" class="align-middle small">Ranking not found</td>
						@endif
							
						@if(!$ranking['hero']==null)
							<td>{{$ranking['hero'][0]->rank}}</td>
						@else
							<td rowspan="2" class="align-middle small">Ranking not found</td>
						@endif
							
						@if(!$ranking['pop']==null)
							<td>{{$ranking['pop'][0]->rank}}</td>
						@else
							<td rowspan="2" class="align-middle small">Ranking not found</td>
						@endif
						</tr>
						<tr class="font-weight-bold">
							<td class="bg-info text-white"><strong>Value</strong></td>
						@if(!$ranking['total']==null)
							<td>{{$ranking['total'][0]->value}}</td>
						@endif
						@if(!$ranking['off']==null)
							<td>{{$ranking['off'][0]->value}}</td>
						@endif
						@if(!$ranking['def']==null)
							<td>{{$ranking['def'][0]->value}}</td>
						@endif
						@if(!$ranking['hero']==null)
							<td>{{$ranking['hero'][0]->exp}} ({{$ranking['hero'][0]->level}})</td>
						@endif
						@if(!$ranking['pop']==null)
							<td>{{$ranking['pop'][0]->value}}</td>
						@endif
						</tr>						
					</table>
				</div>
        </div>
    @endif
    </div>
@endsection