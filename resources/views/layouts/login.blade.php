<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 09:43:46 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Sign In | AZAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("/assets/images/azam-logo.png") }}">

    <!-- Layout config Js -->
    <script src="{{ asset("/assets/js/layout.js") }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("/assets/css/app.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset("/assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-basic py-5 d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(to left, #6699CC, #6699CC, #89CFF0, #B9D9EB);">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-0" style="margin-top:28px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column text-center">
                                            <div class="mb-3">
                                                <a href="{{ url("#") }}" class="d-block">
                                                    <img src="{{ asset("/assets/images/azam-sole-logo.png") }}" alt="" height="86">
                                                </a>
                                            </div>
                                            <div class="mb-4 text-center">
                                                <h4 class ="text-white" style="margin-left:12px">AZAM - TEMESA Portal</h4>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <!-- <i class="ri-double-quotes-l display-4 text-white"></i> -->
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-7 fst-normal">" Fast Ferries "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-7 fst-italic">" Sea Tax"</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-7 fst-normal">" Azam Gusa Card "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-success">Welcome back!</h5>
                                            <p class="text-muted">Sign in to continue . . .</p>
                                        </div>

                                        <div class="mt-4">
                                            <!-- <form id="formLogin" action="{{ route("auth") }}" method="post"> -->
                                            <!-- <form id="formLogin" method="post"> -->

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="username" name="agent_code" placeholder="Enter Username">

                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="{{ url("auth-pass-reset-cover.html") }}" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" name="password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>

                                                <div class="p-2 g-col-6" style = "margin-top:14px">
                                                    <div id="progressBarLogin" class="collapse">
                                                        <div class="progress">
                                                            <!-- <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> -->
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" id="signIn">Sign In</button>
                                                </div>

                                                <!-- <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                    </div>

                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div> -->

                                            <!-- </form> -->
                                        </div>

                                        <!-- <div class="mt-5 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="{{ url("auth-signup-cover.html") }}" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="fs-11 fst-normal text-light">
                                <script>document.write(new Date().getFullYear())</script> Powered by <a href="https://www.azam.co.tz/" target="_blank" class="text-primary text-decoration-underline">AZAM</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        
    </div>
    <!-- end auth-page-wrapper -->

    <!-- Modal Error -->
    <div class="modal fade" id="modalError" data-bs-backdrop="dynamic" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger" id="modalErrorMessage" color> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset("/assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/node-waves/waves.min.js") }}"></script>
    <script src="{{ asset("/assets/libs/feather-icons/feather.min.js") }}"></script>
    <script src="{{ asset("/assets/js/pages/plugins/lord-icon-2.1.0.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins.js") }}"></script>

    <!-- password-addon init -->
    <script src="{{ asset("/assets/js/pages/password-addon.init.js") }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#signIn').click(function () {
                
                console.log($("#username").val());

                let allValid = true;

                // Tafuta input zote tunazotaka kuangalia
                var fields = [
                    document.getElementById('username'),
                    document.getElementById('password'),
                ];

                fields.some(function(field) {
                    const isOptional = field.getAttribute("data-optional") === "true";
                    if (field.value.trim() === "" && !isOptional) {
                        field.classList.add("is-invalid");
                        allValid = false;
                        
                        field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        field.focus();
                        return true;
                    } else {
                        field.classList.remove("is-invalid");
                        return false;
                    }
                });

                fields.forEach(function (field) {
                    field.addEventListener('input', function () {
                        if (this.value.trim() !== "") {
                            this.classList.remove("is-invalid");
                            // Optionally: this.classList.add("is-valid");
                            allValid = true;
                        }
                    });
                });


                console.log("VALID : " + allValid);
                
                if (allValid) {
                    //All Valid
                    $('#progressBarLogin').show();
                    $.ajax({
                        type: 'POST',
                        url: 'http://azam-onsite.local:9090/api/auth/login',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            username: $("#username").val(),
                            password: $("#password").val()
                        }),
                        success: function (response) {
                            console.log(response);
                            console.log(response.Status);
                            if(response.error == 1){
                                $('#progressBarLogin').hide();
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }else{
                                console.log("SUCCESS");
                                sessionStorage.setItem("api-token", response.token)
                                sessionStorage.setItem("roles", JSON.stringify(response.roles));
                                sessionStorage.setItem("first_name", response.first_name || response.username); 
                                sessionStorage.setItem("middle_name", response.middle_name || ""); 
                                sessionStorage.setItem("last_name", response.last_name || "");

                                window.location.href = '{{ route("dashboard") }}';
                                $('#progressBarLogin').hide();
                            }
                        },
                        error: function (error) {
                            $('#progressBarLogin').hide();
                            console.log(error);
                            // Handle error response
                        }
                    });
                } else {
                    
                    $('#modalErrorMessage').text("Fill required fields!");
                    // $("#modalError").modal('show');
                    return; // Stop form submission if any field is invalid
                }
                
            });
        });
    </script>
</body>

<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 09:43:46 GMT -->
</html>