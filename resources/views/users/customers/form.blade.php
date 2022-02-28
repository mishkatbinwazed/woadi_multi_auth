@extends('users.main')

@section('main_content')
	<div class="container">
		<div class="row clearfix mt-3">
			<div class="col-md-12">
				<form action="{{ route('users.customers.store') }}" method="post">
					@csrf
				  <div class="form-group">
				    <label for="name">Name <span class="text-danger">*</span></label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
				  </div>

				  <div class="form-group">
				    <label for="phone">Phone <span class="text-danger">*</span></label>
				    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
				  </div>

				  <div class="form-group">
				    <label for="HandledBy">Handled By</label>
				    
				    <select class="form-control" name="handled_by">
						<option value="" selected>Select Options</option>
						<option value="Humayun">Humayun</option>
						<option value="Asif">Asif</option>
						<option value="Trisha">Trisha</option>
						<option value="Mishkat">Mishkat</option>
				  	</select>
				  </div>

				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				  </div>

				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
				  </div>

				  <div class="form-group">
				    <label for="service_query">Service Query</label>
				    <input type="text" class="form-control" id="service_query" name="service_query" placeholder="Enter Service Query">
				  </div>

				  <div class="form-group">
				    <label for="description">Description</label>
				    <textarea class="form-control" placeholder="Enter Description" name="description" rows="5"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" id="date" name="date">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop