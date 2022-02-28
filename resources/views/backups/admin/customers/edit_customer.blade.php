@extends('admin.main')

@section('main_content')
	<div class="container">
		<div class="row clearfix mt-3">
			<div class="col-md-12">
				<form action="{{ route('admin.customers.update', ['customer' => $customer->id]) }}" method="post">
					@csrf
					@method('PUT')
				  <div class="form-group">
				    <label for="name">Name <span class="text-danger">*</span></label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $customer->name }}">
				  </div>

				  <div class="form-group">
				    <label for="phone">Phone <span class="text-danger">*</span></label>
				    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{ $customer->phone }}">
				  </div>

				  <div class="form-group">
				    <label for="updated_by">Updated By</label>
				    
				    <select class="form-control" name="updated_by" id="updated_by">
						<option value="{{ $customer->handled_by }}" selected>{{ $customer->handled_by }}</option>
						<option value="Asif">Asif</option>
						<option value="Humayun">Humayun</option>
				  	</select>
				  </div>

				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $customer->email }}">
				  </div>

				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ $customer->address }}">
				  </div>

				  <div class="form-group">
				    <label for="service_query">Service Query</label>
				    <input type="text" class="form-control" id="service_query" name="service_query" placeholder="Enter Service Query" value="{{ $customer->service_query }}">
				  </div>

				  <div class="form-group">
				    <label for="description">Description</label>
				    <textarea class="form-control" placeholder="Enter Description" name="description" rows="5">{{ $customer->description }}</textarea>
				  </div>

				  <div class="form-group">
				    <label for="remarks">Remarks</label>
				    <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks" value="{{ $customer->remarks }}">
				  </div>

				  <div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" id="date" name="date" value="{{ $customer->date }}">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop