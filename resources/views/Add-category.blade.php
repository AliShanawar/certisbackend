@extends("layouts.app")

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
                            <li class="breadcrumb-item active" aria-current="page">Validations</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
            <!--end breadcrumb-->
            <div class="container">

                <div class="row">



                    <div class="col-xl-9 mx-auto">

                        <h6 class="mb-0 text-uppercase"></h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('/') }}/Add-category" method='post'>
                                    @csrf
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">Add Category</label>
                                                <input name="name" type="text" class="form-control"
                                                    id="validationCustom01" required>
                                                <span class="Text-danger">
                                                    @if ($errors->has('name'))
                                                        {{ $errors->first('name') }}
                                                    @endif
                                                </span>

                                            </div>




                                            <div class="col-12">
                                                <button style="margin-top: 30px" class="btn btn-primary" type="submit">Submit</button>
                                            </div>

                                    </div>
                            </div>
                        </div>
                        </form>

                    </div>


                </div>
                </form>

            </div>
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
