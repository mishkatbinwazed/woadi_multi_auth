@extends('admin.main')

@section('main_content')
	<div class="container">
      <div class="card shadow mb-4 mt-3">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> {{ $customer->name }} </h6>
          </div>
        
          <div class="card-body">
            <div class="row clearfix justify-content-md-center">
              <div class="col-md-10">
                <table class="table table-borderless table-striped">
                  <tr>
                    <th class="text-right">Name :</th>
                    <td> {{ $customer->name }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Phone : </th>
                    <td> {{ $customer->phone }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Handled By : </th>
                    <td> {{ $customer->handled_by }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Updated By : </th>
                    <td> {{ $customer->updated_by }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Eamil : </th>
                    <td> {{ $customer->email }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Service Query : </th>
                    <td> {{ $customer->service_query }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Description : </th>
                    <td> {{ $customer->description }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Address : </th>
                    <td> {{ $customer->address }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Remarks : </th>
                    <td> {{ $customer->remarks }} </td>
                  </tr>
                  <tr>
                    <th class="text-right">Date : </th>
                    <td> {{ $customer->date }} </td>
                  </tr>
                 </table>
              </div>
            </div>
          </div>
      </div>
  </div>
@stop