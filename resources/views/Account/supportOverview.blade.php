@extends('Account.template')

@section('body')
<!-- =================================== Account Overview screen================================== -->
		<div class="float-md-left col-md-10 mt-1 p-0">
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
    				<div class="card-header h5 py-2 bg-warning text-white text-center">
    					<strong>Sitter Details</strong>
    				</div>
    				<div class="card-text">
    					<table class="table table-hover col-md-5 text-center mx-auto">
    						<tr>
    							<td class="text-right h6" style="width:10em;">Sitter 1 :</td>
    							<td contenteditable="true" class="text-left" id="sitter1Edit">{{$account->sitter1}}</td>
    						</tr>
    						<tr>
    							<td class="text-right h6" style="width:10em;">Sitter 2 :</td>
    							<td contenteditable="true" class="text-left" id="sitter2Edit">{{$account->sitter2}}</td>
    						</tr>
    						<tr>
    							<td class="" colspan="2">
                					<form id="form" action="{{route('accountSitter')}}" method="POST" onsubmit="return updateSitter()" class="text-center pb-3">
                						{{ csrf_field() }}
                						<input id="sitter1" name="sitter1" style="display:none">
                						<input id="sitter2" name="sitter2" style="display:none">    						
                						<button class="btn btn-warning px-5 py-1" type="submit"><strong>Save</strong></button>						
                					</form>	
    							</td>
    						</tr>
    					</table>				
    				</div>			
    			</div> 
    			
    			<div class="card shadow col-md-12 p-0 mt-3 mb-5 mx-auto">
    				<div class="card-header h5 py-2 bg-warning text-white text-center">
    					<strong>Dual Details</strong>
    				</div>  
    				<div class="card-text">
    					<div class="col-md-8 mx-auto text-center py-2">
    						<p>Dual Passcode:	<span class="h6">{{$account->token}}</span></p>
    					</div>
    					<div class="text-center col-md-8 mx-auto rounded p-2 mb-2" style="background-color:#dbeef4">
    						<p>Enter Dual Passcode to link the Travian profiles</p>
    						<form action="{{route('accountDual')}}" method="post">
    							{{csrf_field()}}
    							<p><input name="dualpass" type="text" required>
    								<button class="btn btn-warning btn-sm" type="submit" name="dualUpdate"><strong>Update</strong></button></p>
								<p class="col-md-8 mx-auto"><small>(Note: Entering the dual passcode will make this account dual of the passcode owner's account)</small></p>
    						</form>
    					</div>
    					<table class="table table-hover table-sm table-bordered col-md-8 text-center mx-auto">
    						<thead class="bg-warning">
    							<tr class="h6">
        							<th class="">TT Account Name</th>
        							<th class="">Account Type</th>
        							<th class="">Options</th>
    							</tr>
    						</thead>
    						<tr style="font-size:0.9em" class="h6">    					
    							<td>{{$account->user_name}}</td>
    							<td>{{ucfirst(strtolower($account->status))}}</td>
    							<td>
								@if(strtoupper($account->status)!="PRIMARY")
									<form action="{{route('accountDual')}}" method="post">
										{{csrf_field()}}   
										<button class="btn btn-sm btn-primary" value="{{$account->user_id}}" name="unlink">Unlink Account</button>
									</form>
								@endif
    							</td>    						
    						</tr>
						@foreach($duals as $dual)
							@if($account->user_id!=$dual->user_id)
    						<tr>
    							<td>{{$dual->user_name}}</td>
    							<td>{{ucfirst(strtolower($dual->status))}}</td>							
    							<td>
    								<form action="{{route('accountDual')}}" method="post">
    									{{csrf_field()}}    									
									@if(strtoupper($account->status)=="PRIMARY")								
										<button class="btn btn-sm btn-danger" value="{{$dual->user_id}}" name="delDual">Delete</button> 
										<button class="btn btn-sm btn-info" value="{{$dual->user_id}}" name="setPrimary">Set as Primary</button>							
									@endif
    								</form>
								</td>							
    						</tr>
    						@endif
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