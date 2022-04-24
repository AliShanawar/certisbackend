@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
  <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Client Table</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
          </ol>
        </nav>
      </div>

    </div>
    <!--end breadcrumb-->


    <h6 class="mb-0 text-uppercase">Client List</h6>
    <hr />
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example2" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>

                <th>Password</th>
                <th>Supplier</th>
                <th>View Document</th>

                <th>Actions</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($users as $user)
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td id="show_hide_password">{{ $user->password }} <a href="javascript:;"><i class='bx bx-hide'></i></a> </td>
                <th>
                  <a href="{{ url('Supplier') }}" class="btn btn-primary">Add Supplier</a>
                </th>
                <th>
                  <a href="{{ url('Doucment-list') }}" class="btn btn-primary">View Document </a>
                </th>

                <td>
                  {{-- <a href="{{ url('/') }}/Edit-profile/{{ $user->id }}" class="btn btn-primary">Edit</a> --}}
                  <a href="{{ url('/') }}/Delete-user/{{ $user->id }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>

              @endforeach
            </tbody>




            </tfoot>
          </table>
          
        </div>
      </div>
    </div>
    
  </div>
  <!--end page wrapper -->
  @endsection