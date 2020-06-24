@extends('Layouts.general')

@section('content')

    <header id="main-header" class="py-1 bg-warning text-white">
        <div class="container">
            <p class="h4 font-weight-bold d-inline-block">Account</p>
            <div class="float-right">
                <div class="btn btn-light dropdown d-inline-block">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                    	@if(Session::has('server'))
                    		{{ Session::get('server.url')}}
                    	@else 	{{ ' Select Server '}}
                    	@endif
    				</a>
                    <div class="dropdown-menu">
                        <a href="{{route('servers')}}" class="dropdown-item"><i class="fas fa-server"></i> Change Server</a>
                    </div>              
                </div>            
            </div>
        </div>
    </header>
	@guest
	<div class="container">
        <div class="alert alert-warning text-center my-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>Please <a href="{{route('login')}}" class="text-weight-bold"><strong>Login</strong></a> to access your account           
        </div>
    </div>    	
	@endguest	
    	
	@auth
    <div class="container mx-auto">
    	@if(!Session::has('server'))
    	<div class="alert alert-warning text-center my-1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>You have not selected a server, <a href="{{route('servers')}}" class="text-weight-bold"><strong>Select Server</strong></a>            
        </div>
        @else
      	<div class="d-inline">
          <!-- ======================================= Account Side menu =================================== -->
  			<div class="list-group text-center text-white mt-1 mx-1 float-md-left">
				<a class="list-group-item py-1 bg-dark h5">Account</a>
				<a href="{{route('account')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Overview</a>
				<a href="{{route('accountSupport')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Sitters & Duals</a>
				<a href="{{route('accountTroops')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Troops Overview</a>
				<a href="{{route('accountHero')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Hero Details</a>
				<a href="{{route('accountVillages')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Villages Overview</a>
				<a href="{{route('accountTimings')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Online Timings</a>
				<a href="{{route('accountAlliance')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Alliance</a>
				<a href="{{route('accountPlan')}}" class="list-group-item py-1 list-group-item-action bg-warning text-white h6">Troops Plan</a>				
  			</div>	
	    </div> 
	    	
		@yield('body')	 
  	@endif         
    </div>    
    @endauth
    
@endsection