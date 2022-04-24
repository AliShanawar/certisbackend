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
				<div class="breadcrumb-title pe-3">Category Table</div>
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
			
			
        <h6 class="mb-0 text-uppercase">Category</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                  
                    <th>Actions</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($categories as $categorie)
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->name }}</td>
                    
                    <td>
                        {{-- <a href="{{"edit/".$categorie['id']}}" class="btn btn-primary">Edit</a> --}}
                        <a href="{{ url('/') }}/delete-category/ {{ $categorie->id }}" class="btn btn-danger">Delete</a>
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
{{-- 
@section("script")
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	  } );
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );
	 
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );
</script>
@endsection --}}
