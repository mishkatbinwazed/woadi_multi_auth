@extends('admin.main')

@section('main_content')
	<div class="container">
		<div class="row clearfix mt-3">
			<div class="col-md-12">
			{!! Form::open(['route' => ['admin.customers.store'], 'method' => 'post']) !!}
			    <div class="form-group">
			    	<label for="name">Name</label>
			    	{{ Form::text('name', NULL, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="name">Phone <span class="text-danger">*</span></label>
			    	{{ Form::text('phone', NULL, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="handled_by">Handled By <span class="text-danger">*</span></label>
			    	{{ Form::select('user_id', $users, NULL, ['class' => 'form-control', 'id' => 'handled_by', 'placeholder' => 'Select User']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="email">Email</label>
			    	{{ Form::text('email', NULL, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="address">Address</label>
			    	{{ Form::text('address', NULL, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Enter Address']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="service_query">Service_query</label>
			    	{{ Form::text('service_query', NULL, ['class' => 'form-control', 'id' => 'service_query', 'placeholder' => 'Service Query']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="description">Description</label>
			    	{{ Form::textarea('description', NULL, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Enter Description']) }}
			  	</div>

			  	<div class="form-group">
			    	<label for="remarks">Remarks</label>
			    	{{ Form::text('remarks', NULL, ['class' => 'form-control', 'id' => 'remarks', 'placeholder' => 'Remarks']) }}
			  	</div>

			  	<div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" id="date" name="date">
				</div>

			  	<div class="mt-4 text-right">
			  		<button type="submit" class="btn btn-primary">Submit</button>
			  	</div>
			{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop