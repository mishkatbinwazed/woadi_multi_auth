@extends('layouts.main')

@section('main_content')
	<div class="container">
		<div class="row clearfix mt-3">
			<div class="col-md-12">
				<form action="{{ route('customers.store') }}" method="post">
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
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				  </div>

				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
				  </div>

				  <div class="form-group">
				    <label for="description">Description</label>
				    <textarea class="form-control" placeholder="Enter Description" name="description" rows="5"></textarea>
				  </div>

				  <div class="form-group">
				    <label for="remarks">Remarks</label>
				    <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks">
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