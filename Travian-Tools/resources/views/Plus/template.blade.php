@extends('layouts.general')


@section('content')
    <?php 
        $_SESSION['plus']='Yes';
        unset($_SESSION['plus']);
    ?>
    
    <header id="main-header" class="py-1 bg-info text-white">
        <div class="container">
            <p class="h3 font-weight-bold d-inline-block">Plus</p>
            <div class="float-right">
                <div class="btn btn-light dropdown d-inline-block">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                    	@if(Session::has('server'))
                    		{{ Session::get('server.url')}}
                    	@else 	{{ ' Select Server '}}
                    	@endif
    				</a>
                    <div class="dropdown-menu">
                        <a href="/servers" class="dropdown-item"><i class="fas fa-server"></i> Change Server</a>
                    </div>              
                </div>
            	<p class="h6 d-inline-block px-2"><span id="clock"></span></p>
            </div>
        </div>
    </header>
	@if(Session::has('plus'))
		<div class="container">
			<div class="card shadow my-1">
				<div class="py-5 mx-auto">
    				<p class="h5 py-1">You are not associated with any Plus group.</p>
    				<p class="h6 py-1"><a href="/plus/creategroup" class="text-info"><strong>Click here</strong></a> to proceed to create a Plus group</p>
				</div>
			</div>		
		</div>
	@else
	@if(Session::has('plus') and Session::get('plus.access')!=1)
		<div class="container">
			<div class="card shadow my-1">
				<div class="py-5 mx-auto">
    				<p class="h5 py-1">Access denied to Plus group, please contact the group leader.</p>    				
				</div>
			</div>		
		</div>
	@endif
    <div class="container">
        <div class="d-inline float-md-left col-md-3">
            <!-- ======================================= Finders Side menu =================================== -->
            <div class="list-group text-center text-white mt-1">
                <a class="list-group-item py-1 bg-dark h4">Plus Menu</a>
                <a href="/plus" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Overview</a>
                <a href="/plus/member" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Member Details</a>
                <a href="/plus/incoming" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Report Incomings</a>
                <a href="/plus/defense" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Defense Tasks</a>
                <a href="/plus/offense" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Offense Tasks</a>
                <a href="/plus/resource" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Resource Tasks</a>
            </div>       
        
            <!-- =================================== Plus Leader/Owner menu ================================== -->
            <div class="list-group text-center text-white mt-1">
                <a class="list-group-item py-1 bg-dark h4">Leader Menu</a>
                <a href="/leader/access" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Access</a>
                <a href="/leader/subscription" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Subscription</a>
                <a href="/leader/rankings" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Rankings</a>
            </div>
                
            <!-- =================================== Defense menu ================================== -->
            <div class="list-group text-center text-white mt-1">
                <a class="list-group-item py-1 bg-dark h4">Defense Menu</a>
                <a href="/defense/incoming" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Incomings</a>
                <a href="/defense/cfd" class="list-group-item py-1 list-group-item-action bg-info text-white h5">CFD Status</a>
                <a href="/defense/search" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Search Defense</a>
            </div>
  
            <!-- =================================== Offense menu ================================== -->
            <div class="list-group text-center text-white mt-1">
                <a class="list-group-item py-1 bg-dark h4">Offense Menu</a>                 
                <a href="/offense/status" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Ops Status</a>
                <a href="/offense/troops" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Troops Details</a>
                <a href="/offense/archive" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Archive</a>                  
            </div>

            <!-- =================================== Resource menu ================================== -->
            <div class="list-group text-center text-white mt-1">
                <a class="list-group-item py-1 bg-dark h4">Resource Menu</a>                
                <a href="/resource" class="list-group-item py-1 list-group-item-action bg-info text-white h5">Push Status</a>
            </div>        
        </div>
		@foreach(['danger','success','warning','info'] as $msg)
			@if(Session::has($msg))
	        	<div class="alert alert-{{ $msg }} text-center my-1" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>{{ Session::get($msg) }}
                </div>
            @endif
        @endforeach

        @yield('body')

    </div>
    @endif
    
@endsection