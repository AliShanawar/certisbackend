@extends("layouts.app")

	@section("style")
	<link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	@endsection

		@section("wrapper")
		<div class="page-wrapper">
			<div class="page-content">

             <div class="dash-wrapper bg-dark">
                 <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-xxl-5">
					 <div class="col border-end border-light-2">
						 <div class="card bg-transparent shadow-none mb-0">
							 <div class="card-body text-center">
								<p class="mb-1 text-white">Supplier</p>  
								<h3 class="mb-3 text-white">10+</h3>
							 </div>
						 </div>
					 </div>
					 <div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
							   <p class="mb-1 text-white">Total Users</p>  
							   <h3 class="mb-3 text-white">20+</h3>
							   {{-- <div id="chart2"></div> --}}
							</div>
						</div>
					</div>
					<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
							   <p class="mb-1 text-white">Category</p>  
							   <h3 class="mb-3 text-white">30+</h3>
							   {{-- <div id="chart3"></div> --}}
							</div>
						</div>
					</div>
					<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
							   <p class="mb-1 text-white">Sub category</p>  
							   <h3 class="mb-3 text-white">40+</h3>
							   {{-- <div id="chart4"></div> --}}
							</div>
						</div>
					</div>
					<div class="col border-end border-light-2">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
							   <p class="mb-1 text-white">Files</p>  
							   <h3 class="mb-3 text-white">40+</h3>
							  
							</div>
						</div>
					</div>
					{{-- <div class="col">
						<div class="card bg-transparent shadow-none mb-0">
							<div class="card-body text-center">
							   <p class="mb-1 text-white">Avg. Session Duration</p>  
							   <h3 class="mb-3 text-white">00:04:60</h3>
							   <p class="font-13 text-white"><span class="text-danger"><i class="lni lni-arrow-down"></i> 5.2%</span> vs last 7 days</p>
							   <div id="chart5"></div>
							</div>
						</div>
					</div> --}}
				 </div><!--end row-->
			 </div>
<!--end row-->

			  <!--end row-->

			  
			  
			  <!--end row-->
<!--end row-->
			</div>
		</div>
		@endsection
	@section("script")
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/exporting.js"></script>
	<script src="assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="assets/plugins/highcharts/js/export-data.js"></script>
	<script src="assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script>
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
	<script>
		$(".topbar").addClass('topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom');
		$(".nav-link").addClass('text-white');
		$(".user-name").addClass('text-white');
	</script>
	<script src="assets/js/index.js"></script>
	@endsection