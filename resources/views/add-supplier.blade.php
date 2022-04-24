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
      <div class="breadcrumb-title pe-3">Sub-Category</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Sub-Category</li>
          </ol>
        </nav>
      </div>

    </div>
    <!--end breadcrumb-->
    <div class="container">

      <div class="main-body">
        <div class="row">

          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {!! \Session::get('success') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (\Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {!! \Session::get('error') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ url('/') }}/AddSubCategory" method="POST">
                  @csrf
                  <div class="row mb-3">

                    <div class="col-sm-9 text-secondary">
                      <label for="">Select Category</label>



                      <select required class="form-select" aria-label="Default select example" name="category_id">
                        <option selected="selected">Select Category</option>
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">

                    <div class="col-sm-9 text-secondary">
                      <label for="">Add Subcategory</label>
                      <input required name="sub_categories_name" type="text" class="form-control" value="" />
                      <span>
                        @if($errors->has('sub_categories_name'))
                        {{ $errors->first('sub_categories_name') }}
                        @endif
                      </span>
                    </div>
                  </div>

                  <div style="margin-top: 20px" class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                      <button class="btn btn-primary" type="submit">
                        Add Subcategory
                      </button>
                    </div>
                  </div>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      </form>
    </div>


  </div>
  <!--end page wrapper -->
  @endsection

  @section("script")
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <script>
    $(document).ready(function() {
      var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print']
      });

      table.buttons().container()
        .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
  </script>
  @endsection