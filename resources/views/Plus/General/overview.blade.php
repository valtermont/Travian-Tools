@extends('Plus.template')

@section('body')
	<!-- =============================================Plus Overview=========================================== -->
    <div class="card float-md-left col-md-9 mt-1 p-0 shadow">
        <div class="card-header h4 py-2 bg-info text-white">
            <strong>Plus Overview</strong>
        </div>
        <div class="card-text p-3 h5">
            <p>Welcome to Plus group - <span class="text-info"><strong>{{Session::get('plus.name')}}</strong></span></p>
            <br>
            <div class="card mx-auto">
            	<div class="card-header py-2 text-info h4">
            		<strong>Message of the day</strong>
            	</div>
            	<div class="card-body">
            		<p class="card-text font-italic">{{$subscription->message}}</p>
            		<p class="small text-info"><strong>{{$subscription->message_update}} ({{$subscription->message_date}})</strong></p>
            	</div>
            </div>
            <br>
            <div class="card mx-auto">
            	<div class="card-header py-2 text-info h4">
            		<strong>Group Status</strong>
            	</div>
            	<div class="card-body px-5 h6">							
				@if($counts['inc']>0)				
					<p><strong>{{$counts['inc']}} <a href="/plus/incoming" class="text-info">Incoming attacks</strong></a> on your account</p>
				@else
					<p>No <span class="text-info"><strong>Incoming attacks</strong></span> on your account <span class="text-danger">-- under development</span></p>
				@endif
				
				@if($counts['def']>0)				
					<p><strong>{{$counts['def']}} <a href="/plus/defense" class="text-info">Defense Calls</strong></a> are in progress</p>
				@else
					<p>No <span class="text-info"><strong>Defense Calls</strong></span> are currently active</p>
				@endif
				
				@if($counts['off']>0)				
					<p><strong>{{$counts['off']}} <a href="/plus/offense" class="text-info">Offense Plans</strong></a> are in progress</p>
				@else
					<p>No <span class="text-info"><strong>Offense plans</strong></span> are currently active <span class="text-danger">-- under development</span></p>
				@endif	
				
				@if($counts['res']>0)				
					<p><strong>{{$counts['res']}} <a href="/plus/resource" class="text-info">Resource Tasks</strong></a> are active</p>
				@else
					<p>No <span class="text-info"><strong>Resource tasks</strong></span> are currently active</p>
				@endif
            	</div>
            </div>  
            <br>
            <div class="card mx-auto">
            	<div class="card-header py-2 text-info h4">
            		<strong>Group Options</strong>
            	</div>
            	<div class="card-body px-5 h5">
            		<a href="{{route('plusLeave')}}"><button class="btn btn-info p-3"><strong>Leave Plus Group</strong></button></a>
            	</div>
            	            
            </div>          
        </div>
    </div>
    	
@endsection