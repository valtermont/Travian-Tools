@extends('Calculators.template')

@section('body')

<!-- =================================== Cropper input screen================================== -->
    <div class="card float-md-left my-1 p-0 col-md-12 shadow">
        <div class="card-header h4 py-2 bg-primary text-white col-md-12">
            <strong>Wheat Scout</strong>
        </div>
        <div class="card-text mx-auto text-center mt-2">
            <form action="{{route('wheatScout')}}" method="POST">
            	{{ csrf_field() }}
                <table class="table table-borderless mt-2">
                    <tr>
                        <td class="py-0">
                            <div class="">
                                <strong>First Report</strong>
                            </div>
                        </td>
                        <td class="py-0">
                            <div class="">
                                <strong>Second Report</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-0">
                            <div class="">
                                <textarea class="form-control" rows="3" name="report1" required></textarea>
                            </div>
                        </td>
                        <td class="py-0">
                            <div class="">
                                <textarea class="form-control" rows="3" name="report2" required></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	<td class="py-2">
                			<strong>Reports Interval </strong><input type="text" size="5" name="intrl" required/><small>secs</small>
                		</td>
                		<td class="py-2">
                			<strong>Scout Target </strong>
                				<select name="target">
									<option value="village">Village</option>
									<option value="oasis">Oasis</option>
								</select>
                    	</td> 
                	</tr>
                	<tr>
                    	<td class="py-2" colspan="2">
                    		<span class="px-3">
                    			<strong>Oasis</strong>                    				                			
                    				<select name="oasis">
        								<option value="0">0%</option>
        								<option value="0.25">25%</option>
        								<option value="0.50">50%</option>
        								<option value="0.75">75%</option>
        								<option value="1">100%</option>
        								<option value="1.25">125%</option>
        								<option value="1.5">150%</option>
        							</select>
                    		</span>
                    		<span class="px-3">
                    			<input type="checkbox" name="cap"/><strong> Capital</strong>
                    		</span>
                    		<span class="px-3">
                    			<strong>Min Crop field lvl </strong><input type="text" size="5" name="minLvl"/>
                    		</span>
                    	</td>                    	
                    </tr>
                    <tr>
                    	<td colspan="2">
                	    	<div  class="py-1">
                                <button class="btn btn-outline-primary px-5" type="submit"><strong>Calculate</strong></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>        
    </div>    
    
    @yield('result') 
		
@endsection