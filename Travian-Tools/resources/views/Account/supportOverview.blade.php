@extends('Account.template')

@section('body')
<!-- =================================== Account Overview screen================================== -->
		<div class="float-md-left col-md-9 mt-1 p-0">
			<div class="card-text">
		@foreach(['danger','success','warning','info'] as $msg)
    		@if(Session::has($msg))
    			<div class="col-md-10 mx-auto">
                	<div class="alert alert-{{ $msg }} text-center my-1" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>{{ Session::get($msg) }}
                    </div>
                </div>
            @endif
        @endforeach
        		<div class="card shadow col-md-12 p-0 mx-auto">
    				<div class="card-header h4 py-2 bg-warning text-white text-center">
    					<strong>Sitter Details</strong>
    				</div>
    				<div class="card-text">
    					<table class="table table-hover col-md-6 text-center mx-auto">
    						<tr>
    							<td class="text-right col-md-6">Sitter 1 :</td>
    							<td contenteditable="true" class="text-left col-md-6" id="sitter1Edit">{{$account->sitter1}}</td>
    						</tr>
    						<tr>
    							<td class="text-right col-md-6">Sitter 2 :</td>
    							<td contenteditable="true" class="text-left col-md-6" id="sitter2Edit">{{$account->sitter2}}</td>
    						</tr>
    					</table>
    					<form id="form" action="/account/sitter/update" method="POST" onsubmit="return updateSitter()" class="text-center pb-3">
    						{{ csrf_field() }}
    						<input id="sitter1" name="sitter1" style="display:none">
    						<input id="sitter2" name="sitter2" style="display:none">    						
    						<button class="btn btn-warning btn-lg px-5" type="submit"><strong>Save</strong></button>						
    					</form>					
    				</div>			
    			</div> 
    			
    			<div class="card shadow col-md-12 p-0 mt-3 mx-auto">
    				<div class="card-header h4 py-2 bg-warning text-white text-center">
    					<strong>Dual Details</strong>
    				</div>  
    				<div class="card-text">
    					<div class="col-md-8 mx-auto text-center py-2">
    						<p>Dual Passcode:	<strong>{{$account->token}}</strong></p>
    					</div>
    					<div class="text-center col-md-8 mx-auto rounded p-2 mb-2" style="background-color:#dbeef4">
    						<p>Enter Dual Passcode to link the Travian profiles</p>
    						<form action="/account/dual/update" method="post">
    							{{csrf_field()}}
    							<p><input name="dualpass" type="text" required>
    								<button class="btn btn-warning btn-sm" type="submit" name="dualUpdate"><strong>Update</strong></button></p>
								<p class="col-md-8 mx-auto"><small>(Note: Entering the dual passcode will make this account dual of the passcode owner's account)</small></p>
    						</form>
    					</div>
    					<table class="table table-hover table-sm table-bordered col-md-8 text-center mx-auto">
    						<thead class="bg-warning">
    							<tr>
        							<th class="text-center">TT Account Name</th>
        							<th class="text-center">Account Type</th>
    							@if($account->status=="PRIMARY")
        							<th class="text-center">Options</th>
    							@endif
    							</tr>
    						</thead>
						@foreach($duals as $dual)
    						<tr>
    							<td>{{$dual->user_name}}</td>
    							<td>{{$dual->status}}</td>
							@if($account->status=="PRIMARY" && $account->user_id==$dual->user_id)
    							<td>
    								<form action="/account/dual/update" method="post">
    									{{csrf_field()}}
    									<button class="btn btn-sm btn-primary" value="{{$dual->user_id}}" name="delDual">Delete</button> 
    									<button class="btn btn-sm btn-primary" value="{{$dual->user_id}}" name="setPrimary">Set as Primary</button>
    								</form>
								</td>
							@endif
    						</tr>
						@endforeach
    					</table>
    				</div>  			
    			</div>
    			     		
			</div>			
		</div>
@endsection

@push('scripts')
        <script>
            function updateSitter() {
            	sitter1=document.getElementById("sitter1Edit").innerHTML;
    			if(sitter1=='<br>'){ sitter1='';}
                document.getElementById("sitter1").value = sitter1;
                
                sitter2=document.getElementById("sitter2Edit").innerHTML;
                if(sitter2=='<br>'){ sitter2='';}
                document.getElementById("sitter2").value = sitter2;             
            }
    	</script>
@endpush