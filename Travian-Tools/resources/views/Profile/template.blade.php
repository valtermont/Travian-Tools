@extends('Layouts.general')

@section('content')

    <header id="main-header" class="py-1 bg-warning text-white">
        <div class="container">
            <p class="h3 font-weight-bold d-inline-block">Profile</p>
            <div class="float-right">
                <div class="btn btn-light dropdown d-inline-block">
                    <a class="dropdown-toggle" data-toggle="dropdown">
    					<?php if(isset($_SESSION['SERVER'])){ echo $_SESSION['SERVER']['URL'];}
    					       else { echo " Select Server ";}?>
    				</a>
                    <div class="dropdown-menu">
                        <a href="servers.php" class="dropdown-item"><i class="fas fa-server"></i> Change Server</a>
                    </div>              
                </div>
            	<p class="h6 d-inline-block px-2"><span id="clock"></span></p>
            </div>
        </div>
    </header>

    <div class="container">
      <div class="d-inline">
          <!-- ======================================= Account Side menu =================================== -->
  			<div class="list-group col-md-3 text-center text-white mt-1 float-md-left">
				<a class="list-group-item py-1 bg-dark h4">Profile Menu</a>
				<a href="/profile" class="list-group-item py-1 list-group-item-action bg-warning text-white h5">Overview</a>
				<a href="/profile/contact" class="list-group-item py-1 list-group-item-action bg-warning text-white h5">Contact</a>
				<a href="/profile/settings" class="list-group-item py-1 list-group-item-action bg-warning text-white h5">Settings</a>
  			</div>	
	    </div> 
	
		@yield('body')	 
               
    </div>
@endsection