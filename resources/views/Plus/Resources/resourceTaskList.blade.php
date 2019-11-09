@extends('Plus.template')

@section('body')

<!-- ================================= Main Content of the Resource Tasks in the Plus general Overview Menu ============================= -->
		<div class="card float-md-left col-md-9 mt-1 p-0 mb-5 shadow">
			<div class="card-header h4 py-2 bg-info text-white"><strong>Resource Tasks</strong></div>
			<div class="card-text">
    <!-- ==================================== List of tasks is progress ======================================= -->		
				@if(count($tasks)==0)
					<p class="text-center h5 py-5">No resource tasks are active currently.</p>					
				@else
				
        		@foreach(['danger','success','warning','info'] as $msg)
        			@if(Session::has($msg))
        	        	<div class="alert alert-{{ $msg }} text-center my-1" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>{{ Session::get($msg) }}
                        </div>
                    @endif
                @endforeach
                
				<div class="text-center col-md-11 my-2 p-0">
					<table class="table align-middle small col-md-9 mx-auto">
						<thead class="thead-inverse">
    						<tr>
    							<th class="">Target</th>
    							<th class="">Resources</th>
    							<th class="">Pref</th>    							
    							<th class="">%</th>
    							<th class="">Target Time</th>
    							<th class=""></th>    							
    						</tr>
						</thead>
						@foreach($tasks as $task)
    						<tr>
    							<td><a href="https://{{Session::get('server.url')}}/karte.php?x={{$task->x}}&y={{$task->y}}" target="_blank">
    								<strong>{{$task->player }} ({{$task->village}})</strong></a>
    							</td>
    							<td>{{$task->res_total}}</td>
    							<td data-toggle="tooltip" data-placement="top" title="{{$task->type}}"><img alt="all" src="/images/x.gif" class="res {{$task->type}}"></td>							
    							<td>{{$task->res_percent}}%</td>
    							<td>{{$task->target_time}}</td>
    							<td><a class="btn btn-outline-secondary" href="/plus/resource/{{$task->task_id}}">
    								<i class="fa fa-angle-double-right"></i> Details</a>
    							</td>
    						</tr>
						@endforeach
					</table>
				</div>
				
				@endif
			</div>
		</div>
@endsection