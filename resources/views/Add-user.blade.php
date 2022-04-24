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
                            <li class="breadcrumb-item active" aria-current="page">Add New Client</li>
                        </ol>
                    </nav>
                </div>
               
            </div>
            <!--end breadcrumb-->
            <div class="container">

                <div class="row">



                    <div class="col-xl-9 mx-auto">

                        <h6 class="mb-0 text-uppercase">Client form</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('/') }}/Add-user" method='post'>
                                    @csrf
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" novalidate>
                                            
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">Client Name</label>
                                                <input name="name" type="text" class="form-control"
                                                    id="validationCustom01" required>
                                                <span class="Text-danger">
                                                    @if ($errors->has('name'))
                                                        {{ $errors->first('name') }}
                                                    @endif
                                                </span>

                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">Email</label>
                                                <input name="email" type="email" class="form-control"
                                                    id="validationCustom01" required>
                                                  
                                                <span class="Text-danger">
                                                    @if ($errors->has('email'))
                                                        {{ $errors->first('email') }}
                                                    @endif
                                                </span>

                                            </div>


                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">Password</label>
                                                <input name="password" type="text" class="form-control"
                                                    id="validationCustom03" required>
                                                <span class="Text-danger">
                                                    @if ($errors->has('password'))
                                                        {{ $errors->first('password') }}
                                                    @endif
                                                </span>

                                            </div>

                                            <div class="col-12">
                                                <button style="margin-top: 15px" class="btn btn-primary"
                                                    type="submit">Submit</button>
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
