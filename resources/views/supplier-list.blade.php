@extends("/layouts.app")

@section('wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Show Supplier</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <div class="container">

            <div class="row">



                <div class="col-xl-9 mx-auto">

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
                            <form action="{{ url('/') }}/get-supplier" method='get'>
                                <label for="validationCustom01" class="form-label">Client Name</label>
                                <select name="user_id" class="form-select mb-2" onchange="this.form.submit()" aria-label="Default select example">
                                    <option selected value="null">Select Client</option>
                                    @foreach($clients as $client)
                                    @if (request()->get('user_id') == $client->id)
                                    <option selected value=" {{ $client->id }}">{{ $client->name }}</option>
                                    @else
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                    </form>

                </div>


            </div>
            </form>

        </div>

        @if (isset($suppliers))
        <h6 class="mb-0 text-uppercase">Supplier List</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Supplier Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->id }}</td>
                                <td>{{ $supplier->client->name }}</td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->client->email }}</td>
                                <td>{{ $supplier->client->password }}</td>

                                <td>
                                    <a href="{{ url('/') }}/delete-supplier/ {{ $supplier->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @endif

    </div>


    <!--end row-->
</div>
</div>
@endsection

@section('script')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection