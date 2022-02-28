@extends('admin.main')

@section('main_content')
  <!-- <h2> Customers List </h2> -->

  <div class="row crearfix  page_header">
    <div class="col-md-6">
      <h2> Customers List </h2>
    </div>
    <div class="col-md-6 text-right">

    <a href="{{ route('users.customers.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Customer Info </a>

    </div>
  </div>

  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Customers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      @foreach($customers as $customer)
                      <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->date }}</td>
                            <td class="text-right">
                              
                              <form action="{{ route('users.customers.destroy', ['customer' => $customer->id]) }}" method="post">
                                <a href="{{ route('users.customers.show', ['customer' => $customer->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye"></i> 
                                    </a>
                                    <a href="{{ route('users.customers.edit', ['customer' => $customer->id]) }}" class="btn btn-primary btn-sm">
                                  <i class="fa fa-edit"></i> 
                                </a>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i> 
                                </button>
                              </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop