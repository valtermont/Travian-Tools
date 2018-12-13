@extends('Plus.template')

@section('body')

<div class="card float-md-left col-md-9 mt-1 p-0 shadow">
			<div class="card-header h4 py-2 bg-info text-white"><strong>Resource Status</strong></div>
			<div class="card-text">
		<!-- ========================== Create CFD Options ============================== -->
        		<div class="m-3">
            		<div class="card card-header text-center h6 btn btn-block collapsed bg-warning" data-toggle="collapse" href="#task" aria-expanded="false" aria-controls="task">
                		<p class="p-0 m-0">
                    		<i class="fa fa-plus"></i> <span class=""><strong>Create New Resource Push</strong></span>
        			 	</p>
            		</div>
            		<div class="collapse" id="task" style="">
              			<div class="card card-body">
    						<form action="/resource/create" method="POST" class="col-md-8 mx-auto text-center">
        						{{ csrf_field() }}
        						<p class="my-2">
        							<strong>X: <input type="text" name="xCor" size="5" required> | Y: <input type="text" name="yCor" size="5" required></strong>
        						</p>
        						<p class="my-2">
        							<strong>Resources Needed: <input type="text" name="resNeed" size="8" required></strong>
        						</p>
        						<p class="my-2">
        							<strong>Land Time: <input type="text" name="targetTime" size="10"></strong>
        						</p>
    						    <p class="my-2 col-md-12">
        							<strong>Resource Type: </strong>
        								<input type="radio" name="resType" value="ANY" checked> <img alt="all" src="/images/x.gif" class="res all"> 
        								<input type="radio" name="resType" value="WOOD"> <img alt="wood" src="/images/x.gif" class="res wood"> 
        								<input type="radio" name="resType" value="CLAY"> <img alt="clay" src="/images/x.gif" class="res clay"> 
        								<input type="radio" name="resType" value="IRON"> <img alt="iron" src="/images/x.gif" class="res iron"> 
        								<input type="radio" name="resType" value="CROP"> <img alt="crop" src="/images/x.gif" class="res crop">
        						</p>
        						<p class="my-2">
        							<strong>Comments:</strong><textarea name="comments" class="form-control" rows="5"></textarea>
        						</p>
        						<p class="my-2">
        							<button class="btn btn-info px-5" name="createResTask"><strong>Create Task</strong></button>
        						</p> 						
    						</form>
              			</div>
            		</div>	
        		</div>				
			</div>
		@foreach(['danger','success','warning','info'] as $msg)
			@if(Session::has($msg))
	        	<div class="alert alert-{{ $msg }} text-center my-1 mx-auto col-md-11" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>{{ Session::get($msg) }}
                </div>
            @endif
        @endforeach
        
    		@if(count($tasks)==0)
    			<p class="text-center h5 py-2">No resource tasks are active currently.</p>				
    		@endif
    <!-- ==================================== List of CFD is progress ======================================= -->		
				<div class="text-center col-md-11 mx-auto my-2 p-0">
					<table class="table align-middle small">
						<thead class="thead-inverse">
    						<tr>
    							<th class="col-md-1">Target</th>
    							<th class="col-md-1">Resources</th>
    							<th class="col-md-1">Pref</th>
    							<th class="col-md-1">Status</th>
    							<th class="col-md-1">%</th>
    							<th class="col-md-1">Target Time</th>
    							<th class="col-md-1"></th>    							
    						</tr>
						</thead>
							@foreach($tasks as $task)
    						<tr>
    							<td><a href="https://{{Session::get('server.url')}}/karte.php?x={{$task->x}}&y={{$task->y}}" target="_blank">
    								<strong>{{$task->player }}({{$task->village}})</strong></a>
    							</td>
    							<td>{{$task->res_total}}</td>
    							<td data-toggle="tooltip" data-placement="top" title="{{$task->type}}"><img alt="all" src="/images/x.gif" class="res {{$task->type}}"></td>							
    							<td>{{$task->status}}</td>
    							<td>{{$task->res_percent}}%</td>
    							<td>{{$task->target_time}}</td>
    							<td><a class="btn btn-outline-secondary" href="/resource/{{$task->task_id}}">
    								<i class="fa fa-angle-double-right"></i> Details</a>
    							</td>
    						</tr>
						@endforeach						
					</table>
				</div>
			</div>
		</div>
@endsection

@push('scripts')

<script>
$(document).ready(function() {
    $('#modalSubmit').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ url('/resource/create') }}",
            data: {
                x: jQuery('#xCor').val(),
                y: jQuery('#yCor').val(),
                res: jQuery('#resNeed').val(),
                time: jQuery('#targetTime').val(),
                comment: jQuery('#comments').val()
            },
            success: function(result) {
  	      		setTimeout(function(){// wait for 5 secs(2)
       	           location.reload(); // then reload the page.(3)
       	      	}, 5000); 
            }
        });
    });
});
</script>
@endpush