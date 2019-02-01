@extends('Plus.template')

@section('body')
	

<!-- =============================================Plus Overview=========================================== -->
    <div class="card float-md-left col-md-9 mt-1 p-0 shadow">
        <div class="card-header h4 py-2 bg-info text-white">
            <strong>Member Contact Details</strong>
        </div>
        <div class="p-5 h5">
    		<table>
    			<tr>
    				<td class="text-left text-info py-2 font-weight-bold">Travian Profile </td>
    				<td class="text-left">: {{$name}}</td>
    			</tr>
    			<tr>
    				<td class="text-left py-2 text-info font-weight-bold">TT Account Name </td>
    				<td class="text-left">: {{Auth::user()->name}}</td>
    			</tr>
    			<tr>
    				<td class="text-left py-2 text-info font-weight-bold">Skype </td>
    				<td class="text-left">: {{$contact->skype}}</td>
    			</tr>
    			<tr>
    				<td class="text-left py-2 text-info font-weight-bold">Discord </td>
    				<td class="text-left">: {{$contact->discord}}</td>
    			</tr>
			</table>
        </div>

@endsection