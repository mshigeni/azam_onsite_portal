<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
  <!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 09:35:20 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>AZAM | Temesa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo-wanamaji.png') }}">
    <!-- jsvectormap css -->
    <link href="{{ asset('/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="{{ asset('/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{ asset('/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <!-- gridjs init -->
    <script src="assets/js/pages/gridjs.init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sockjs-client@1/dist/sockjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/stompjs@2.3.3/lib/stomp.min.js"></script>

    <style>

        /* Apply background color to navbar */
        .navbar-menu {
            background-color: #7388c7ff !important;
            color: #282c36ff;             /* Text color */
        }

        /* If you want to target the app-menu too */
        .app-menu {
            background-color: #242323ff !important;
            color: white;
        }
        /* General table styling */
        .table {
            width: 100%;
            /* border-collapse: separate; */
            border-spacing: 0;
        }

        /* Header styling */
        .table thead th {
            vertical-align: middle;
            font-weight: 600;
            text-align: center;
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            padding: 12px;
        }

        /* Body cells */
        .table tbody td {
            vertical-align: middle;
            text-align: center;
            padding: 10px 12px;
            border-top: 1px solid #dee2e6;
        }

        /* Wrapping for specific columns */
        .table td:nth-child(4),   /* Service Type column */
        .table td:nth-child(6),
        .table td:nth-child(9) {  /* Task Assigned To column */
            white-space: normal;
            word-wrap: break-word;
            max-width: 180px;  /* Adjust width for wrapping */
        }

        /* Action buttons */
        .table td .btn {
            padding: 2px 8px;
            font-size: 0.85rem;
        }

        /* Hover effect for rows */
        .table tbody tr:hover {
            background-color: #f1f3f5;
        }

        /* Optional: Checkbox alignment */
        .table .form-check {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .layout-wrapper.landing {
            background-color: var(--vz-card-bg-custom);
            font-size: 12px;
        }

        .divider {
            border-left: 1px solid #d3d3d3;
            height: 100%;
        }

        .bordered {
            border: 0.1px solid #f0f0f0;
            padding: 20px;
        }


        /* HTML: <div class="loader"></div> */

        .see-more-button {
            width: 40px;
            height: 40px;
            background-color: #343a40;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: -35px auto 10px auto; / Center and overlap with the card footer /
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .see-more-text {
            text-align: center;
        }

        .loader-overlay {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .loader {
            width: 50px;
            aspect-ratio: 1;
            box-shadow: 0 0 0 3px #fff inset;
            border-radius: 50%;
            position: relative;
            animation: l11 7s infinite;
            }
            .loader:before,
            .loader:after {
            content: "";
            position: absolute;
            top: calc(100% + 3px);
            left: calc(50% - 12.5px);
            box-shadow: inherit;
            width: 25px;
            aspect-ratio: 1;
            border-radius: 50%;
            transform-origin: 50% -28px;
            animation: l11 1.5s infinite;
        }
        .loader:after {
        animation-delay: -0.75s;
        }
        @keyframes l11 {
            100% {
                transform: rotate(360deg);
            }
        }
        /* .gridjs-search input {
            width: 100%;
            max-width: 400px;
            padding: 10px 14px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 16px;
            color: #495057;
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        } */
            .gridjs-search input:focus {
            outline: none;
            border-color: #0d6efd; /* Bootstrap primary */
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
            .gridjs-search {
            margin-bottom: 3px;
        }
            .gridjs-search::before {
            display: none; /* or customize here */
        }
        /* Target the current page button */
        .gridjs-currentPage {
            background-color:rgb(30, 92, 208) !important; /* Dark blue or your preferred color */
            /* color: black !important;              Set text to black */
            font-weight: normal;
            border-radius: 6px;
        }

    </style>

  </head>
  <body>

    <div class="loader-overlay" id="loader">
        <div class="loader"></div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.header')
        @include('layouts.menu')

        @yield('content')

    </div>
    <!-- END layout-wrapper -->
    
    @include('layouts.footer')
  
    <!-- JAVASCRIPT -->
    <script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector map-->
    <script src="{{ asset('/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <!--Swiper slider js-->
    <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- form wizard init -->
    <!-- <script src="{{ asset('/assets/js/pages/form-wizard.init.js') }}?v=1.1"></script> -->
    <!-- Dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const firstName = sessionStorage.getItem("first_name") || "Guest";
            const middleName = sessionStorage.getItem("middle_name") || "";
            const lastName = sessionStorage.getItem("last_name") || "";

            // Combine into one display name
            const fullName = [firstName, middleName, lastName].filter(Boolean).join(" ");

            // Put into HTML
            const welcomeElement = "Welcome " + firstName;
            document.getElementById("userFullName").textContent = fullName;
            document.getElementById("first_name").textContent = welcomeElement;
        });

    </script>

    @if(Route::currentRouteNamed('new-form'))
    <script>
        let taarifaBinafsiSaved = 0; // Track the number of forms generated
        let formCountKozi = 0; // Track the number of forms generated
        let formCountElimuRaia = 0; // Track the number of forms generated
        let formCountMedali = 0; // Track the number of forms generated
        let formCountMisheni = 0; // Track the number of forms generated
        let formCountWatoto = 0; // Track the number of forms generated
        let formCountPriority = 0; // Track the number of forms generated

        document.getElementById('valueInputNambaJeshi').addEventListener('input', function() {
            const pattern = /^(P|p|MT|Mt|mt)/;
            const errorMsg = document.getElementById('jeshiError');
            
            if (!pattern.test(this.value)) {
                errorMsg.style.display = 'block';
                    this.setCustomValidity("Namba ya Jeshi lazima ianze na P/PW au MT/MTM");
            } else {
                errorMsg.style.display = 'none';
                this.setCustomValidity("");
            }
        });
        
        document.getElementById('valueInputNambaSimu').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // toa herufi zote zisizo namba
        });
        
        $(document).ready(function(){
            // Triggered when the value of the first dropdown changes
            $("#owners").change(function(){
                var ownerTypeID = $(this).val(); // Get the selected category ID
                console.log(ownerTypeID);
                //if(ownerTypeID == 0){
                    $('#matokeoKozi').show();
                //}
                
                // Make an AJAX request to fetch items for the selected category
                $.ajax({
                    type: 'POST',
                    //url: '/salsssses-agent/categories/' + ownerTypeID, // PHP script to handle the request
                    url: '{{ route("categories") }}', // PHP script to handle the request
                    data: {event_code: ownerTypeID}, 
                    //dataType: 'json',
                    success: function(data){
                        console.log(data);
                        //$('#categories').empty();
                        $.each(data, function (key, value) {
                            console.log(value.PriceCode);
                            $('#categories').append('<option value="' + value.CategoryCode + '" data-price="' + value.Price + '" data-price_code="' + value.PriceCode + '" data-has_discount="' + value.IsDiscount + '">' + value.CategoryName + '</option>');
                        });
                    },
                    error: function (error) {
                    // Handle errors here
                        console.log(error);
                    }
                });
            }); 
            
            $('#addKozi').click(function () {
                formCountKozi++;
                var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                saveKoziKijeshi.style.display = 'block';

                console.log(formCountKozi);
                //const koziContainer = $('koziContainer');
                const koziContainer = document.getElementById('koziContainer');

                // Create a new form section
                const newKozi = document.createElement('div');
                newKozi.classList.add('form-item');

                newKozi.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountKozi}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountKozi}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountKozi}">
                                    Kozi #${formCountKozi}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountKozi}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountKozi}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">

                                            <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                <label for="valueInput" class="form-label">Mwanajeshi</label>
                                                    <select id = "mwanajeshi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Aina Mwanajeshi</option>
                                                        @foreach($aina_mwanajeshi as $mwanajeshi)
                                                        <option value="{{$mwanajeshi['id']}}" data-merchant_tin="{{$mwanajeshi['name']}}">{{$mwanajeshi['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                <label for="valueInput" class="form-label">Aina Kozi</label>
                                                    <select id = "aina_kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Aina Kozi</option>
                                                        @foreach($kozi_category as $category)
                                                        <option value="{{$category['id']}}" data-merchant_tin="{{$category['name']}}">{{$category['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                <label for="valueInput" class="form-label">Kozi</label>
                                                    <select id = "kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Kozi</option>
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-4 collapse" id="valueInputJinaKoziDIV${formCountKozi}">
                                                <div>
                                                    <label for="valueInputJinaKozi${formCountKozi}" class="form-label">Jina la Kozi</label>
                                                    <input type="text" class="form-control" data-id="" id="valueInputJinaKozi${formCountKozi}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Jina la  Kozi</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputIntake${formCountKozi}" class="form-label">Intake</label>
                                                    <input type="text" class="form-control" data-id="" id="valueInputIntake${formCountKozi}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Intake</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwaka${formCountKozi}" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwaka${formCountKozi}" placeholder="Andika mwaka wa kumaliza">
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputTraining${formCountKozi}" class="form-label">Chuo/Shule/Training Center</label>
                                                    <input type="text" class="form-control" id="valueInputTraining${formCountKozi}" placeholder="Andika Chuo/Shule/Training Center">
                                                </div>
                                                <!--end col-->
                                            </div>
                                            
                                        

                                    

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeKozi${formCountKozi}" data-id="" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(koziContainer);
                koziContainer.appendChild(newKozi);

                const mwanajeshi_select = document.getElementById(`mwanajeshi_select${formCountKozi}`);
                const aina_kozi_select = document.getElementById(`aina_kozi_select${formCountKozi}`);
                const kozi_select = document.getElementById(`kozi_select${formCountKozi}`);
                const valueInputJinaKoziDIV = document.getElementById(`valueInputJinaKoziDIV${formCountKozi}`);

                mwanajeshi_select.addEventListener('change', function() {
                    var ainaMwanajeshiID = mwanajeshi_select.value; 
                    var ainaKoziID = aina_kozi_select.value; 
                    console.log(ainaKoziID);

                    if (ainaMwanajeshiID && ainaKoziID > 0) {
                        // Clear the existing options except for the first placeholder
                        kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                        // Fetch new data based on the selected region
                        fetch('/wanamaji/load-kozi', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data.length);
                            // Check if data is returned and has items
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    console.log(item);
                                    let option = new Option(item.name, item.id);
                                    kozi_select.add(option); // Populate owner_address_region dropdown
                                });
                                kozi_select.add(new Option("Kozi Nyingine", "-1"));
                            } else {
                                kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                            }
                        })
                        .catch(error => {
                            console.error('Error loading the data: ', error);
                            kozi_select.innerHTML = '<option value="">Error loading data</option>';
                        });
                    } else {
                        // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                        // $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                        // $("#modalError").modal('show')
                    }

                });

                aina_kozi_select.addEventListener('change', function() {
                    var ainaKoziID = aina_kozi_select.value; 
                    var ainaMwanajeshiID = mwanajeshi_select.value; 
                    console.log(ainaKoziID);

                    if (ainaKoziID && ainaMwanajeshiID > 0) {
                        // Clear the existing options except for the first placeholder
                        kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                        // Fetch new data based on the selected region
                        fetch('/wanamaji/load-kozi', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data.length);
                            // Check if data is returned and has items
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    console.log(item);
                                    let option = new Option(item.name, item.id);
                                    kozi_select.add(option); // Populate owner_address_region dropdown
                                });
                                kozi_select.add(new Option("Kozi Nyingine", "-1"));
                            } else {
                                kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                            }
                        })
                        .catch(error => {
                            console.error('Error loading the data: ', error);
                            kozi_select.innerHTML = '<option value="">Error loading data</option>';
                        });
                    } else {
                        // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                        $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                        $("#modalError").modal('show')
                    }

                });
                

                kozi_select.addEventListener('change', function() {
                    var koziID = kozi_select.value; 
                    console.log(koziID);

                    if (koziID == -1) {
                        valueInputJinaKoziDIV.style.display = 'block';
                    } else {
                        valueInputJinaKoziDIV.style.display = 'none';
                    }
                });
                
                // Add event listener for remove button
                const removeKozi = document.getElementById(`removeKozi${formCountKozi}`);
                removeKozi.addEventListener('click', function() {
                    koziContainer.removeChild(newKozi); // Remove the entire form element
                    checkIfEmpty();
                });

            });

            $('#addElimuRaia').click(function () {
                formCountElimuRaia++;
                var saveElimuRaia = document.getElementById('saveElimuRaia');
                saveElimuRaia.style.display = 'block';

                console.log(formCountElimuRaia);
                //const elimuRaiaContainer = $('elimuRaiaContainer');
                const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');

                // Create a new form section
                const newElimuRaia = document.createElement('div');
                newElimuRaia.classList.add('form-item');

                newElimuRaia.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountElimuRaia}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountElimuRaia}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountElimuRaia}">
                                    Elimu #${formCountElimuRaia}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountElimuRaia}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountElimuRaia}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">

                                            <div class="col-xxl-3 col-md-4">
                                                <div id = "issuanceCountry${formCountElimuRaia}" class="show elimu-daraja-wrapper">
                                                    <label for="valueInput" class="form-label">Elimu</label>
                                                    <select id = "elimu_kiraia_select${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                        <option value="0" selected>Elimu</option>
                                                        @foreach($elimu as $elimu_key)
                                                        <option value="{{$elimu_key['id']}}" data-merchant_tin="{{$elimu_key['name']}}">{{$elimu_key['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputTaasisi${formCountElimuRaia}" class="form-label">Shule/Chuo/VETA/Taasisi</label>
                                                    <input type="text" class="form-control" id="valueInputTaasisi${formCountElimuRaia}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Taarifa hii</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKuanza${formCountElimuRaia}" class="form-label">Mwaka wa Kuanza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKuanza${formCountElimuRaia}" placeholder="Andika mwaka wa kuanza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kuanza</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKumaliza${formCountElimuRaia}" class="form-label">Mwaka wa Kumaliza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKumaliza${formCountElimuRaia}" placeholder="Andika mwaka wa kumaliza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kumaliza</div>
                                                <!--end col-->
                                            </div>


                                            <div id="professionDiv${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                <div>
                                                    <label for="valueInputProfession${formCountElimuRaia}" id="valueInputProfessionTitle${formCountElimuRaia}" class="form-label">Profession</label>
                                                    <input type="text" class="form-control" id="valueInputProfession${formCountElimuRaia}" placeholder="Jaza taarifa hii">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Jaza taarifa hii</div>
                                                <!--end col-->
                                            </div>
                                            
                                            <div id = "elimuDaraja${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse elimu-daraja-wrapper">
                                                <label for="valueInput" class="form-label">Daraja</label>
                                                <select id = "select_daraja${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                    <option value="0" selected>Chagua</option>
                                                    @foreach($madaraja as $daraja)
                                                    <option value="{{$daraja['id']}}">{{$daraja['name']}}</option>
                                                    @endforeach
                                                </select>
                                            <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeElimuKiraia${formCountElimuRaia}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(elimuRaiaContainer);
                elimuRaiaContainer.appendChild(newElimuRaia);
                // Add event listener for dropdown change
                const elimu_kiraia_select = document.getElementById(`elimu_kiraia_select${formCountElimuRaia}`);
                const elimuDarajaDiv = document.getElementById(`elimuDaraja${formCountElimuRaia}`);
                const professionDiv = document.getElementById(`professionDiv${formCountElimuRaia}`);
                const matokeo_kozi = document.getElementById(`matokeo_kozi${formCountElimuRaia}`);
                const valueInputProfessionTitle = document.getElementById(`valueInputProfessionTitle${formCountElimuRaia}`);
                //const responseDiv = document.getElementById(`response${formCountElimuRaia}`);
                
                elimu_kiraia_select.addEventListener('change', function() {
                    var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                    console.log(elimuTypeID);
                    if(elimuTypeID == 2 || elimuTypeID == 3){
                        elimuDarajaDiv.style.display = 'block';
                        professionDiv.style.display = 'none';
                    }
                    else if(elimuTypeID == 4 || elimuTypeID == 5){
                        valueInputProfessionTitle.textContent = "Profession";
                        professionDiv.style.display = 'block';
                        elimuDarajaDiv.style.display = 'none';
                    }
                    else if(elimuTypeID == 6 || elimuTypeID == 7){
                        valueInputProfessionTitle.textContent = "Ujuzi";
                        professionDiv.style.display = 'block';
                        elimuDarajaDiv.style.display = 'none';
                    }
                    else{
                        elimuDarajaDiv.style.display = 'none';
                        professionDiv.style.display = 'none';
                    }
                });
                
                // matokeo_kozi.addEventListener('change', function() {
                //     var matokeoKoziID = matokeo_kozi.value; // Get the selected category ID
                //     console.log(matokeoKoziID);
                    
                // });
                
                // owner_address_region.addEventListener('change', function() {
                    
                // });
                
                // owner_address_district.addEventListener('change', function() {
                    
                // });
                
                // owner_address_ward.addEventListener('change', function() {
                    
                // });

                // Add event listener for remove button
                const removeElimuKiraia = document.getElementById(`removeElimuKiraia${formCountElimuRaia}`);
                removeElimuKiraia.addEventListener('click', function() {
                    elimuRaiaContainer.removeChild(newElimuRaia); // Remove the entire form element
                    checkIfEmptyElimuKiraia();
                });

            });

            $('#addMedali').click(function () {
                formCountMedali++;

                var saveMedali = document.getElementById('saveMedali');
                saveMedali.style.display = 'block';

                console.log(formCountMedali);
                //const medaliContainer = $('medaliContainer');
                const medaliContainer = document.getElementById('medaliContainer');

                // Create a new form section
                const newMedali = document.createElement('div');
                newMedali.classList.add('form-item');

                newMedali.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMedali}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMedali}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMedali}">
                                    Medali #${formCountMedali}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountMedali}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMedali}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">
                                            
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina ya Medali</label>
                                                    <input type="text" class="form-control" id="valueInputAinaMedali${formCountMedali}" placeholder="Andika aina ya medali">
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaAliotunukiwa${formCountMedali}" placeholder="Andika mwaka wa kutunukiwa">
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeMedali${formCountMedali}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(medaliContainer);
                medaliContainer.appendChild(newMedali);
                // Add event listener for dropdown change
                // const medali_type = document.getElementById(`medali_type${formCountMedali}`);
                
                // medali_type.addEventListener('change', function() {
                //     var medaliTypeID = medali_type.value;; // Get the selected category ID
                //     console.log(medaliTypeID);
                //     // matokeoKoziDiv.style.display = 'block';
                // });
                
                // owner_address_region.addEventListener('change', function() {
                    
                // });
                
                // owner_address_district.addEventListener('change', function() {
                    
                // });
                
                // owner_address_ward.addEventListener('change', function() {
                    
                // });

                // Add event listener for remove button
                const removeMedali = document.getElementById(`removeMedali${formCountMedali}`);
                removeMedali.addEventListener('click', function() {
                    medaliContainer.removeChild(newMedali); // Remove the entire form element
                    checkIfEmptyMedali();
                });

            });

            $('#addMisheni').click(function () {
                formCountMisheni++;

                var saveMisheni = document.getElementById('saveMisheni');
                saveMisheni.style.display = 'block';

                console.log(formCountMisheni);
                //const misheniContainer = $('misheniContainer');
                const misheniContainer = document.getElementById('misheniContainer');

                // Create a new form section
                const newMisheni = document.createElement('div');
                newMisheni.classList.add('form-item');

                newMisheni.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMisheni}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMisheni}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMisheni}">
                                    Misheni #${formCountMisheni}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountMisheni}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMisheni}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">
                                            <div class="col-xxl-3 col-md-4 aina-misheni-select">
                                                <label for="valueInput" class="form-label">Misheni</label>
                                                <select id = "aina_misheni${formCountMisheni}" class="form-select mb-3 aina-misheni-select" aria-label="Default select example">
                                                    <option value="0" selected>Chagua Misheni</option>
                                                    @foreach($aina_misheni as $misheni)
                                                    <option value="{{$misheni['id']}}" data-merchant_tin="{{$misheni['name']}}">{{$misheni['name']}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Tafadhali chagua Misheni</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina ya Misheni</label>
                                                    <input type="text" class="form-control" id="valueInputAinaMisheni${formCountMisheni}" placeholder="Andika Aina ya Misheni">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Aina ya Misheni</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mahali</label>
                                                    <input type="text" class="form-control" id="valueInputMahali${formCountMisheni}" placeholder="Andika Mahali">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza mahali</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaMisheni${formCountMisheni}" placeholder="Andika mwaka wa kutunukiwa">
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeMisheni${formCountMisheni}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(misheniContainer);
                misheniContainer.appendChild(newMisheni);
                // Add event listener for dropdown change
                // const medali_type = document.getElementById(`medali_type${formCountMisheni}`); 
                
                // medali_type.addEventListener('change', function() {
                //     var medaliTypeID = medali_type.value;; // Get the selected category ID
                //     console.log(medaliTypeID);
                //     // matokeoKoziDiv.style.display = 'block';
                // });
                
                // owner_address_region.addEventListener('change', function() {
                    
                // });
                
                // owner_address_district.addEventListener('change', function() {
                    
                // });
                
                // owner_address_ward.addEventListener('change', function() {
                    
                // });

                // Add event listener for remove button
                const removeMisheni = document.getElementById(`removeMisheni${formCountMisheni}`);
                removeMisheni.addEventListener('click', function() {
                    misheniContainer.removeChild(newMisheni); // Remove the entire form element
                    checkIfEmptyMisheni();
                });

            });

            $('#addWatoto').click(function () {
                formCountWatoto++;

                console.log(formCountWatoto);
                //const watotoContainer = $('watotoContainer');
                const watotoContainer = document.getElementById('watotoContainer');

                // Create a new form section
                const newWatoto = document.createElement('div');
                newWatoto.classList.add('form-item');

                newWatoto.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountWatoto}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountWatoto}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountWatoto}">
                                    Mtoto #${formCountWatoto}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountWatoto}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountWatoto}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-6 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Jina Kamili</label>
                                                    <input type="text" class="form-control" id="valueInputJinaKamiliMtoto${formCountWatoto}" placeholder="Andika Jina Kamili">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Jina Kamili</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-6 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina Mtoto</label>
                                                    <select id = "aina_mtoto_select${formCountWatoto}" class="form-select mb-3 aina-watoto-select" aria-label="Default select example">
                                                        
                                                        @foreach($aina_watoto as $mtoto)
                                                        <option value="{{$mtoto['id']}}" data-merchant_tin="{{$mtoto['name']}}">{{$mtoto['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Aina Mtoto</div>
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>
                                        
                                        <div class="row gy-4">
                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMtoto${formCountWatoto}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(watotoContainer);
                watotoContainer.appendChild(newWatoto);

                // Add event listener for remove button
                const removeWatoto = document.getElementById(`removeMtoto${formCountWatoto}`);
                removeWatoto.addEventListener('click', function() {
                    watotoContainer.removeChild(newWatoto); // Remove the entire form element
                    checkIfEmptyWatoto();
                });

            });

            $('#saveTaarifaBinafsi').click(function () {

                let selects = document.querySelectorAll('.taarifa-binafsi-select');

                let allValid = true;

                // Tafuta input zote tunazotaka kuangalia
                var fields = [
                    document.getElementById('valueInputNambaJeshi'),
                    document.getElementById('valueInputFirstName'),
                    document.getElementById('valueInputMiddleName'),
                    document.getElementById('valueInputLastName'),
                    document.getElementById('valueInputUjuzi'),
                    document.getElementById('valueInputCno'),
                    document.getElementById('valueInputNambaKitambulisho'),
                    document.getElementById('valueInputKombania'),
                    document.getElementById('valueInputKikosiUlichotoka'),
                    document.getElementById('valueInputTareheKuzaliwa'),
                    document.getElementById('valueInputUzito'),
                    document.getElementById('valueInputUrefu'),
                    document.getElementById('valueInputTareheKujiungaJeshi'),
                    document.getElementById('valueInputTareheKamisheni'),
                    document.getElementById('valueInputTareheKupandaCheo'),
                    document.getElementById('valueInputTareheKustaafu'),
                    document.getElementById('valueInputAnuani'),
                    document.getElementById('valueInputNambaSimu'),
                    document.getElementById('valueInputMkoaUliozaliwa'),
                    document.getElementById('valueInputWilaya'),
                    document.getElementById('valueInputTarafa'),
                    document.getElementById('valueInputKata'),
                    document.getElementById('valueInputKijiji'),
                    document.getElementById('valueInputKitongoji'),
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


                console.log("VALID B4 : " + allValid);
                
                if (allValid) {
                    Array.from(selects).some(function(select) {
                        if (select.value === "0") {
                            console.log("VALID VALUE : " + select.value);
                            console.log("VALID B4 HERE : " + allValid);
                            select.classList.add("is-invalid");
                            allValid = false;

                            // Smooth scroll and focus
                            select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            select.focus();

                            return true; // exit loop early
                        } else {
                            select.classList.remove("is-invalid");
                            allValid = true;
                            return false;
                        }

                        console.log("VALID AFTR : " + allValid);
                    });
                }

                // Reuse the same fields array for input validation
                fields.forEach(function (field) {
                    field.addEventListener('input', function () {
                        if (this.value.trim() !== "") {
                            this.classList.remove("is-invalid");
                            // Optionally: this.classList.add("is-valid");
                            allValid = true;
                        }
                    });
                });

                // Live remove is-invalid on select change
                selects.forEach(function (select) {
                    select.addEventListener('change', function () {
                        if (this.value !== "0") {
                            this.classList.remove("is-invalid");
                            allValid = true;
                        }
                    });
                });


                console.log("VALID : " + allValid);

                if (allValid) {
                // Kama zote ziko sawa, sasa tuma form

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;
                    const cheo = document.getElementById('selectCheo').value;
                    const first_name = document.getElementById('valueInputFirstName').value;
                    const middle_name = document.getElementById('valueInputMiddleName').value;
                    const last_name = document.getElementById('valueInputLastName').value;
                    const ujuzi = document.getElementById('valueInputUjuzi').value;
                    const cno = document.getElementById('valueInputCno').value;
                    const namba_kitambulisho = document.getElementById('valueInputNambaKitambulisho').value;
                    const kikosi = document.getElementById('selectKikosi').value;
                    const kombania = document.getElementById('valueInputKombania').value;
                    const elimu = document.getElementById('selectElimu').value;
                    const kikosi_ulichotoka = document.getElementById('valueInputKikosiUlichotoka').value;
                    const dob = document.getElementById('valueInputTareheKuzaliwa').value;
                    const kundi_damu = document.getElementById('selectKundiDamu').value;
                    const uzito = document.getElementById('valueInputUzito').value;
                    const urefu = document.getElementById('valueInputUrefu').value;
                    const tarehe_kujiunga_jeshi = document.getElementById('valueInputTareheKujiungaJeshi').value;
                    const tarehe_kamisheni = document.getElementById('valueInputTareheKamisheni').value;
                    const tarehe_kupanda_cheo = document.getElementById('valueInputTareheKupandaCheo').value;
                    const tarehe_kustaafu = document.getElementById('valueInputTareheKustaafu').value;
                    const anuani = document.getElementById('valueInputAnuani').value;
                    const namba_simu = document.getElementById('valueInputNambaSimu').value;
                    const dini = document.getElementById('selectDini').value;
                    const mkoa_kuzaliwa = document.getElementById('valueInputMkoaUliozaliwa').value;
                    const wilaya = document.getElementById('valueInputWilaya').value;
                    const tarafa = document.getElementById('valueInputTarafa').value;
                    const kata = document.getElementById('valueInputKata').value;
                    const kijiji = document.getElementById('valueInputKijiji').value;
                    const kitongoji = document.getElementById('valueInputKitongoji').value;
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";
                
                    document.querySelector('.loader-overlay').style.display = 'flex';
                    $.ajax({
                        url: '/wanamaji/save-taarifa-binafsi',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            cheo : cheo,
                            first_name: first_name,
                            middle_name: middle_name,
                            last_name: last_name,
                            ujuzi : ujuzi,
                            cno : cno,
                            namba_kitambulisho : namba_kitambulisho,
                            kikosi: kikosi,
                            kombania: kombania,
                            elimu: elimu,
                            kikosi_ulichotoka: kikosi_ulichotoka,
                            dob: dob,
                            kundi_damu: kundi_damu,
                            uzito: uzito,
                            urefu: urefu,
                            tarehe_kujiunga_jeshi: tarehe_kujiunga_jeshi,
                            tarehe_kamisheni: tarehe_kamisheni,
                            tarehe_kupanda_cheo: tarehe_kupanda_cheo,
                            tarehe_kustaafu: tarehe_kustaafu,
                            anuani: anuani,
                            namba_simu: namba_simu,
                            dini: dini,
                            mkoa_kuzaliwa: mkoa_kuzaliwa,
                            wilaya: wilaya,
                            tarafa: tarafa,
                            kata: kata,
                            kijiji: kijiji,
                            kitongoji: kitongoji,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                taarifaBinafsiSaved = 1; //Hii kuruhusu other saving buttons to work
                                
                                console.log('Data saved successfully:', response);

                                $('#valueInputNambaJeshi').prop('disabled', true);
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToast').length) {

                                        $('#borderedSuccessToast .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToast'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }
            
            });

            $('#saveKoziKijeshi').click(function () {

                // let selects = document.querySelectorAll('.-select');

                let allValid = true;


                document.querySelectorAll('[id^="mwanajeshi_select"]').forEach(selectEl => {
                    const match = selectEl.id.match(/\d+$/); 
                    if (!match) return;
                    const koziElementID = match[0]; 
                    
                    console.log("Kozi # : " + koziElementID);

                    // let selects = document.querySelectorAll('.kozi-kijeshi-select');

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                        document.getElementById(`mwanajeshi_select${koziElementID}`),
                        document.getElementById(`aina_kozi_select${koziElementID}`),
                        document.getElementById(`kozi_select${koziElementID}`),
                        document.getElementById(`valueInputJinaKozi${formCountKozi}`),
                        document.getElementById(`valueInputIntake${formCountKozi}`),
                        document.getElementById(`valueInputMwaka${formCountKozi}`),
                        document.getElementById(`valueInputTraining${formCountKozi}`),      
                    ];

                    fields.some(function(field) {
                        const isOptional = field.getAttribute("data-optional") === "true";
                        const isHidden = field.offsetParent === null;
                        if (!isHidden && field.value.trim() === "" && !isOptional) {
                            field.classList.add("is-invalid");
                            allValid = false;
                            
                            field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            field.focus();
                            return true;
                        } else {
                            field.classList.remove("is-invalid");
                            allValid = true;
                            return false;
                        }
                    });

                    console.log("VALID KOZI : " + allValid);

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });


                    console.log("VALID TWO : " + allValid);

                    if (allValid) {

                        document.querySelectorAll('.kozi-kijeshi-select-wrapper').forEach(wrapper => {
                            // const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                            const select = wrapper.querySelector('select');

                            if (select && select.value === "0") {
                                select.classList.add("is-invalid");
                                allValid = false;

                                // Smooth scroll and focus
                                select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                select.focus();
                            } else if (select) {
                                select.classList.remove("is-invalid");
                            }
                        });

                    }

                });
                
                    console.log("VALID THREE : " + allValid);

                if (allValid) {

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                    if(namba_jeshi == ""){
                        $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                        $("#modalError").modal('show');
                        return;
                    }
                    else if(taarifaBinafsiSaved == 0){
                        $('#modalErrorMessage').text("Tafadhali hifadhi kwanza Taarifa Binafsi");
                        $("#modalError").modal('show');
                        return;
                    }

                    // Kama zote ziko sawa, sasa tuma form
                    document.querySelector('.loader-overlay').style.display = 'flex';

                    const allKoziKijeshiData = [];
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";
                    //KOZI KIJESHI
                    $('#koziContainer .form-item').each(function(index, element) {
                        const koziKijeshiID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                        console.log('ITERATION:', koziKijeshiID);
                        const data_id = document.querySelector(`#valueInputIntake${koziKijeshiID}`).getAttribute("data-id");
                        const mwanajeshi_id = $(`#mwanajeshi_select${koziKijeshiID}`).val(); 
                        const aina_kozi_id = $(`#aina_kozi_select${koziKijeshiID}`).val(); 
                        const kozi_id = $(`#kozi_select${koziKijeshiID}`).val(); 
                        const jina_kozi = $(`#valueInputJinaKozi${koziKijeshiID}`).val();  // Use the extracted ID to get the value
                        const intake = $(`#valueInputIntake${koziKijeshiID.match(/\d+/)[0]}`).val();
                        const mwaka = $(`#valueInputMwaka${koziKijeshiID.match(/\d+/)[0]}`).val();
                        const taasisi = $(`#valueInputTraining${koziKijeshiID.match(/\d+/)[0]}`).val();

                        allKoziKijeshiData.push({
                            data_id: data_id,
                            mwanajeshi_id: mwanajeshi_id,
                            aina_kozi_id: aina_kozi_id,
                            kozi_id: kozi_id,
                            jina_kozi: jina_kozi,
                            intake: intake,
                            mwaka: mwaka,
                            taasisi: taasisi
                        });
                    });
                
                    $.ajax({
                        url: '/wanamaji/save-kozi-kijeshi',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            data: allKoziKijeshiData,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                
                                console.log('Data saved successfully:', response);

                                $('#valueInputNambaJeshi').prop('disabled', true);
                                // for (let i = 0; i < formCountKozi; i++) {
                                //     const koziContainer = document.getElementById('koziContainer');
                                //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                //     if (newKoziDiv) {
                                //         koziContainer.removeChild(newKoziDiv);
                                //     }
                                // }
                                const allKoziDivs = document.querySelectorAll('#koziContainer .form-item');
                                allKoziDivs.forEach(div => div.remove());
                                formCountKozi = 0;

                                populateKoziKijeshi(response.kozi_data, response.kozi_zenyewe);

                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToastKoziKijeshi').length) {

                                        $('#borderedSuccessToastKoziKijeshi .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastKoziKijeshi'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }
            
            });

            $('#saveElimuRaia').click(function () {

                let allValid = true;

                document.querySelectorAll('[id^="elimu_kiraia_select"]').forEach(selectEl => {
                    const match = selectEl.id.match(/\d+$/); 
                    if (!match) return;
                    const raiaElementID = match[0]; 
                    
                    console.log("Raia # : " + raiaElementID);

                    let selects = document.querySelectorAll('.elimu-raia-select');

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                        document.getElementById(`elimu_kiraia_select${raiaElementID}`),
                        document.getElementById(`valueInputTaasisi${raiaElementID}`),
                        document.getElementById(`valueInputMwakaKuanza${raiaElementID}`),
                        document.getElementById(`valueInputMwakaKumaliza${raiaElementID}`),
                        document.getElementById(`valueInputProfession${raiaElementID}`),
                        document.getElementById(`select_daraja${raiaElementID}`),
                    ];

                    fields.some(function(field) {
                        const isOptional = field.getAttribute("data-optional") === "true";
                        const isHidden = field.offsetParent === null;
                        if (!isHidden && field.value.trim() === "" && !isOptional) {
                            field.classList.add("is-invalid");
                            allValid = false;
                            
                            field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            field.focus();
                            return true;
                        } else {
                            field.classList.remove("is-invalid");
                            allValid = true;
                            return false;
                        }
                    });

                    console.log("VALID RAIA : " + allValid);

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });

                    if (allValid) {

                        document.querySelectorAll('.elimu-daraja-wrapper').forEach(wrapper => {
                            const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                            const select = wrapper.querySelector('select');

                            if (isVisible && select && select.value === "0") {
                                select.classList.add("is-invalid");
                                allValid = false;

                                // Smooth scroll and focus
                                select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                select.focus();
                            } else if (select) {
                                select.classList.remove("is-invalid");
                            }
                        });
                    }

                });

                // Live remove is-invalid on select change
                // selects.forEach(function (select) {
                //     select.addEventListener('change', function () {
                //         if (this.value !== "0") {
                //             this.classList.remove("is-invalid");
                //             allValid = true;
                //         }
                //     });
                // });


                console.log("VALID : " + allValid);

                if (allValid) {

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                    if(namba_jeshi == ""){
                        $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                        $("#modalError").modal('show');
                        return;
                    }
                    else if(taarifaBinafsiSaved == 0){
                        $('#modalErrorMessage').text("Tafadhali hifadhi kwanza Taarifa Binafsi");
                        $("#modalError").modal('show');
                        return;
                    }

                    // Kama zote ziko sawa, sasa tuma form
                    document.querySelector('.loader-overlay').style.display = 'flex';


                    const allElimuKiraiaData = [];
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";
                    //ELIMU KIRAIA
                    $('#elimuRaiaContainer .form-item').each(function(index, element) {
                        const elimuKiraiaID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                        console.log('ITERATION:', elimuKiraiaID);
                        const data_id = document.querySelector(`#valueInputTaasisi${elimuKiraiaID}`).getAttribute("data-id");
                        const elimu = $(`#elimu_kiraia_select${elimuKiraiaID}`).val();  // Use the extracted ID to get the value
                        const jina_taasisi = $(`#valueInputTaasisi${elimuKiraiaID}`).val();  // Use the extracted ID to get the value
                        const mwaka_kuanza = $(`#valueInputMwakaKuanza${elimuKiraiaID.match(/\d+/)[0]}`).val();
                        const mwaka_kumaliza = $(`#valueInputMwakaKumaliza${elimuKiraiaID.match(/\d+/)[0]}`).val();
                        const select_daraja = $(`#select_daraja${elimuKiraiaID.match(/\d+/)[0]}`).val();
                        const profession = $(`#valueInputProfession${elimuKiraiaID.match(/\d+/)[0]}`).val();

                        allElimuKiraiaData.push({
                            data_id: data_id,
                            elimu: elimu,
                            jina_taasisi: jina_taasisi,
                            mwaka_kuanza: mwaka_kuanza,
                            mwaka_kumaliza: mwaka_kumaliza,
                            daraja: select_daraja,
                            profession: profession,
                        });
                    });

                    $.ajax({
                        url: '/wanamaji/save-elimu-kiraia',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            data: allElimuKiraiaData,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                
                                console.log('Data saved successfully:', response);

                                // $('#valueInputNambaJeshi').prop('disabled', true);
                                // for (let i = 0; i < formCountKozi; i++) {
                                //     const koziContainer = document.getElementById('koziContainer');
                                //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                //     if (newKoziDiv) {
                                //         koziContainer.removeChild(newKoziDiv);
                                //     }
                                // }
                                const allElimuKiraiaDivs = document.querySelectorAll('#elimuRaiaContainer .form-item');
                                allElimuKiraiaDivs.forEach(div => div.remove());
                                formCountElimuRaia = 0;
                                
                                populateElimuRaia(response.elimu_raia);

                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToastElimuKiraia').length) {

                                        $('#borderedSuccessToastElimuKiraia .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastElimuKiraia'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }

            });

            $('#saveMedali').click(function () {

                // let selects = document.querySelectorAll('.-select');

                let allValid = true;


                console.log("Medali # : " + formCountMedali);

                // Tafuta input zote tunazotaka kuangalia
                var fields = [
                        document.getElementById(`valueInputAinaMedali${formCountMedali}`),
                        document.getElementById(`valueInputMwakaAliotunukiwa${formCountMedali}`),
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

                console.log("VALID B4 : " + allValid);

                // Reuse the same fields array for input validation
                fields.forEach(function (field) {
                    field.addEventListener('input', function () {
                        if (this.value.trim() !== "") {
                            this.classList.remove("is-invalid");
                            // Optionally: this.classList.add("is-valid");
                            allValid = true;
                        }
                    });
                });

                // Live remove is-invalid on select change
                // selects.forEach(function (select) {
                //     select.addEventListener('change', function () {
                //         if (this.value !== "0") {
                //             this.classList.remove("is-invalid");
                //             allValid = true;
                //         }
                //     });
                // });


                console.log("VALID : " + allValid);

                if (allValid) {

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                    if(namba_jeshi == ""){
                        $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                        $("#modalError").modal('show');
                        return;
                    }
                    else if(taarifaBinafsiSaved == 0){
                        $('#modalErrorMessage').text("Tafadhali hifadhi kwanza Taarifa Binafsi");
                        $("#modalError").modal('show');
                        return;
                    }

                    // Kama zote ziko sawa, sasa tuma form
                    document.querySelector('.loader-overlay').style.display = 'flex';

                    const allMedaliData = [];
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";
                    //MEDALI
                    $('#medaliContainer .form-item').each(function(index, element) {
                        const $ainaInput = $(element).find("input[id^='valueInputAinaMedali']");// Directly get the ID of the select element
                        const ainaMedaliID = $ainaInput.attr('id').match(/\d+/)[0];

                        console.log('ITERATION:', ainaMedaliID);
                        const data_id = document.querySelector(`#valueInputAinaMedali${ainaMedaliID}`).getAttribute("data-id");
                        const aina_medali = $(`#valueInputAinaMedali${ainaMedaliID}`).val();  // Use the extracted ID to get the value
                        const mwaka = $(`#valueInputMwakaAliotunukiwa${ainaMedaliID.match(/\d+/)[0]}`).val();

                        allMedaliData.push({
                            data_id: data_id,
                            aina_medali: aina_medali,
                            mwaka: mwaka,
                        });
                    });
                
                    $.ajax({
                        url: '/wanamaji/save-aina-medali',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            data: allMedaliData,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                
                                console.log('Data saved successfully:', response);

                                $('#valueInputNambaJeshi').prop('disabled', true);
                               
                                const allMedaliDivs = document.querySelectorAll('#medaliContainer .form-item');
                                allMedaliDivs.forEach(div => div.remove());
                                formCountMedali = 0;

                                populateAinaMedali(response.medali);

                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToastMedali').length) {

                                        $('#borderedSuccessToastMedali .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastMedali'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }
            
            });

            $('#saveMisheni').click(function () {


                let allValid = true;

                document.querySelectorAll('[id^="aina_misheni"]').forEach(selectEl => {
                    const match = selectEl.id.match(/\d+$/); 
                    if (!match) return;
                    const misheniElementID = match[0]; 
                    
                    console.log("Misheni # : " + misheniElementID);

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                        // document.getElementById(`elimu_kiraia_select${misheniElementID}`),
                        document.getElementById(`aina_misheni${misheniElementID}`),
                        document.getElementById(`valueInputAinaMisheni${misheniElementID}`),
                        document.getElementById(`valueInputMahali${misheniElementID}`),
                        document.getElementById(`valueInputMwakaMisheni${misheniElementID}`),
                    ];

                    fields.some(function(field) {
                        const isOptional = field.getAttribute("data-optional") === "true";
                        // const isHidden = field.offsetParent === null;
                        if (field.value.trim() === "" && !isOptional) {
                            field.classList.add("is-invalid");
                            allValid = false;
                            
                            field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            field.focus();
                            return true;
                        } else {
                            field.classList.remove("is-invalid");
                            allValid = true;
                            return false;
                        }
                    });

                    console.log("VALID MISHENI : " + allValid);

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });

                    // if (allValid) {

                    //     document.querySelectorAll('.elimu-daraja-wrapper').forEach(wrapper => {
                    //         const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                    //         const select = wrapper.querySelector('select');

                    //         if (isVisible && select && select.value === "0") {
                    //             select.classList.add("is-invalid");
                    //             allValid = false;

                    //             // Smooth scroll and focus
                    //             select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    //             select.focus();
                    //         } else if (select) {
                    //             select.classList.remove("is-invalid");
                    //         }
                    //     });
                    // }

                });

                if (allValid) {

                    document.querySelectorAll('.aina-misheni-select').forEach(wrapper => {
                        // const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                        const select = wrapper.querySelector('select');

                        if (select && select.value === "0") {
                            select.classList.add("is-invalid");
                            allValid = false;

                            // Smooth scroll and focus
                            select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            select.focus();
                        } else if (select) {
                            select.classList.remove("is-invalid");
                        }
                    });
                }

                console.log("VALID : " + allValid);

                if (allValid) {

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                    if(namba_jeshi == ""){
                        $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                        $("#modalError").modal('show');
                        return;
                    }
                    else if(taarifaBinafsiSaved == 0){
                        $('#modalErrorMessage').text("Tafadhali hifadhi kwanza Taarifa Binafsi");
                        $("#modalError").modal('show');
                        return;
                    }

                    // Kama zote ziko sawa, sasa tuma form
                    document.querySelector('.loader-overlay').style.display = 'flex';


                    const misheniData = [];
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";
                    //ELIMU KIRAIA
                    $('#misheniContainer .form-item').each(function(index, element) {
                        const misheniID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                        console.log('ITERATION:', misheniID);
                        const data_id = document.querySelector(`#valueInputAinaMisheni${misheniID}`).getAttribute("data-id");
                        const misheni = $(`#aina_misheni${misheniID}`).val();  // Use the extracted ID to get the value
                        const aina_misheni = $(`#valueInputAinaMisheni${misheniID}`).val();  // Use the extracted ID to get the value
                        const mahali = $(`#valueInputMahali${misheniID.match(/\d+/)[0]}`).val();
                        const mwaka = $(`#valueInputMwakaMisheni${misheniID.match(/\d+/)[0]}`).val();

                        misheniData.push({
                            data_id: data_id,
                            misheni: misheni,
                            aina_misheni: aina_misheni,
                            mahali: mahali,
                            mwaka: mwaka,
                        });
                    });

                    $.ajax({
                        url: '/wanamaji/save-misheni',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            data: misheniData,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                
                                console.log('Data saved successfully:', response);

                                // $('#valueInputNambaJeshi').prop('disabled', true);
                                // for (let i = 0; i < formCountKozi; i++) {
                                //     const koziContainer = document.getElementById('koziContainer');
                                //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                //     if (newKoziDiv) {
                                //         koziContainer.removeChild(newKoziDiv);
                                //     }
                                // }
                                const allMisheniDivs = document.querySelectorAll('#misheniContainer .form-item');
                                allMisheniDivs.forEach(div => div.remove());
                                formCountMisheni = 0;
                                
                                populateMisheni(response.misheni);

                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToastMisheni').length) {

                                        $('#borderedSuccessToastMisheni .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastMisheni'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }

            });

            $('#saveTaarifaFamilia').click(function () {

                let selects = document.querySelectorAll('.taarifa-familia-select');

                let allValid = true;

                // Tafuta input zote tunazotaka kuangalia
                var fields = [
                    document.getElementById('valueInputJinaBaba'),
                    document.getElementById('valueInputJinaMama'),
                    document.getElementById('valueInputJinaMwenza'),
                    document.getElementById('valueInputJinaBabaMkwe'),
                    document.getElementById('valueInputJinaMamaMkwe'),
                    document.getElementById('valueInputJinaMrithi')
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


                console.log("VALID B4 : " + allValid);
                
                if (allValid) {
                    Array.from(selects).some(function(select) {
                        if (select.value === "0") {
                            console.log("VALID VALUE : " + select.value);
                            console.log("VALID B4 HERE : " + allValid);
                            select.classList.add("is-invalid");
                            allValid = false;

                            // Smooth scroll and focus
                            select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            select.focus();

                            return true; // exit loop early
                        } else {
                            select.classList.remove("is-invalid");
                            allValid = true;
                            return false;
                        }

                        console.log("VALID AFTR : " + allValid);
                    });
                }

                // Reuse the same fields array for input validation
                fields.forEach(function (field) {
                    field.addEventListener('input', function () {
                        if (this.value.trim() !== "") {
                            this.classList.remove("is-invalid");
                            // Optionally: this.classList.add("is-valid");
                            allValid = true;
                        }
                    });
                });

                // Live remove is-invalid on select change
                selects.forEach(function (select) {
                    select.addEventListener('change', function () {
                        if (this.value !== "0") {
                            this.classList.remove("is-invalid");
                            allValid = true;
                        }
                    });
                });

                console.log("VALID : " + allValid);

                if (allValid && formCountWatoto > 0) {

                    document.querySelectorAll('[id^="valueInputJinaKamiliMtoto"]').forEach(selectEl => {
                        const match = selectEl.id.match(/\d+$/); 
                        if (!match) return;
                        const watotoElementID = match[0]; 
                        
                        console.log("Watoto # : " + watotoElementID);

                        // let selects = document.querySelectorAll('.elimu-raia-select');

                        // Tafuta input zote tunazotaka kuangalia
                        var fields = [
                            document.getElementById(`valueInputJinaKamiliMtoto${watotoElementID}`)
                        ];

                        fields.some(function(field) {
                            const isOptional = field.getAttribute("data-optional") === "true";
                            const isHidden = field.offsetParent === null;
                            if (!isHidden && field.value.trim() === "" && !isOptional) {
                                field.classList.add("is-invalid");
                                allValid = false;
                                
                                field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                field.focus();
                                return true;
                            } else {
                                field.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }
                        });

                        console.log("VALID WATOTO : " + allValid);

                        // Reuse the same fields array for input validation
                        fields.forEach(function (field) {
                            field.addEventListener('input', function () {
                                if (this.value.trim() !== "") {
                                    this.classList.remove("is-invalid");
                                    // Optionally: this.classList.add("is-valid");
                                    allValid = true;
                                }
                            });
                        });

                    });

                }
                

                if (allValid) {

                    const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                    if(namba_jeshi == ""){
                        $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                        $("#modalError").modal('show');
                        return;
                    }
                    else if(taarifaBinafsiSaved == 0){
                        $('#modalErrorMessage').text("Tafadhali hifadhi kwanza Taarifa Binafsi");
                        $("#modalError").modal('show');
                        return;
                    }

                    // Kama zote ziko sawa, sasa tuma form
                    document.querySelector('.loader-overlay').style.display = 'flex';

                    // Kama zote ziko sawa, sasa tuma form
                    const jina_baba = document.getElementById('valueInputJinaBaba').value;
                    const hali_baba = document.getElementById('selectHaliBaba').value;
                    const jina_mama = document.getElementById('valueInputJinaMama').value;
                    const hali_mama = document.getElementById('selectHaliMama').value;
                    const jina_mwenza = document.getElementById('valueInputJinaMwenza').value;
                    const mwenza = document.getElementById('selectMwenza').value;
                    const hali_mwenza = document.getElementById('selectHaliMwenza').value;
                    const jina_baba_mkwe = document.getElementById('valueInputJinaBabaMkwe').value;
                    const hali_baba_mkwe = document.getElementById('selectHaliBabaMkwe').value;
                    const jina_mama_mkwe = document.getElementById('valueInputJinaMamaMkwe').value;
                    const hali_mama_mkwe = document.getElementById('selectHaliMamaMkwe').value;
                    const jina_mrithi = document.getElementById('valueInputJinaMrithi').value;
                    const created_by = "ADMIN";
                    const updated_by = "ADMIN";

                    //WATOTO   
                    const watotoData = [];             
                    const watotoElements = $('#watotoContainer .form-item'); //Hii item ni class added upon dynamic creation
                    console.log("WATOTO ELEMENTS : ");
                    console.log(watotoElements);
                    if (watotoElements.length === 0) {
                        console.log('No watoto found, sending empty array.');
                    } else {
                        watotoElements.each(function(index, element) {
                            const mtotoID = $(element).find('.form-control').attr('id').match(/\d+/)[0];

                            console.log('ITERATION:', mtotoID);
                            const data_id = document.querySelector(`#valueInputJinaKamiliMtoto${mtotoID}`).getAttribute("data-id");
                            const jina_kamili = $(`#valueInputJinaKamiliMtoto${mtotoID}`).val();
                            const aina_mtoto = $(`#aina_mtoto_select${mtotoID.match(/\d+/)[0]}`).val();

                            watotoData.push({
                                data_id: data_id,
                                jina_kamili: jina_kamili,
                                aina_mtoto: aina_mtoto,
                            });
                        });
                    }
            
                    console.log('WATOTO JSON:', JSON.stringify(watotoData));

                    
                    document.querySelector('.loader-overlay').style.display = 'flex';
                    $.ajax({
                        url: '/wanamaji/save-taarifa-familia',  // Your endpoint
                        type: 'POST',
                        data: {
                            namba_jeshi : namba_jeshi,
                            jina_baba : jina_baba,
                            hali_baba: hali_baba,
                            jina_mama: jina_mama,
                            hali_mama: hali_mama,
                            jina_mwenza : jina_mwenza,
                            mwenza : mwenza,
                            hali_mwenza : hali_mwenza,
                            jina_baba_mkwe: jina_baba_mkwe,
                            hali_baba_mkwe: hali_baba_mkwe,
                            jina_mama_mkwe: jina_mama_mkwe,
                            hali_mama_mkwe: hali_mama_mkwe,
                            jina_mrithi: jina_mrithi,
                            watoto: watotoData,
                            created_by: created_by,
                            updated_by: updated_by,
                        },

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                        success: function(response) {
                            console.log('RESPONSE : ', response);
                            if(response.error == 0){
                                applicationSubmitted = 1; //Hii kuzuia mtu akirudi back then Next
                                application_id = response.application_id;
                                
                                console.log('Data saved successfully:', response);

                                $('#valueInputNambaJeshi').prop('disabled', true);

                                const allWatotoDivs = document.querySelectorAll('#watotoContainer .form-item');
                                allWatotoDivs.forEach(div => div.remove());

                                formCountWatoto = 0;
                                
                                populateWatoto(response.watoto);

                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                    if ($('#borderedSuccessToastTaarifaFamilia').length) {

                                        $('#borderedSuccessToastTaarifaFamilia .toast-body h6').text(response.message);
                                        const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastTaarifaFamilia'));
                                        toastInstance.show();
                                    }
                                }, 1000);

                            }else{
                                setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                            }

                            // You might want to clear forms or show a success message
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving data:', xhr.responseText);
                            setTimeout(function() {
                                    document.querySelector('.loader-overlay').style.display = 'none';
                            }, 1000);
                            // Handle errors here
                        }
                    });
                }else{

                }
            
            });

        });

        //Function to check if formContainer is empty
        function checkIfEmpty() {
            const koziContainer = document.getElementById('koziContainer');
            if (koziContainer.children.length === 0) {
                formCountKozi = 0; // Reset the form count if all forms are removed

                var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                saveKoziKijeshi.style.display = 'none';
                console.log("All forms removed. Form count reset.");
            }

        }
        
        function checkIfEmptyElimuKiraia() {
            const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');
            if (elimuRaiaContainer.children.length === 0) {
                formCountElimuRaia = 0; // Reset the form count if all forms are removed
                var saveElimuRaia = document.getElementById('saveElimuRaia');
                saveElimuRaia.style.display = 'none';
                console.log("All forms removed. Form count reset.");
            }
        }
        function checkIfEmptyMedali() {
            const koziContainer = document.getElementById('koziContainer');
            if (koziContainer.children.length === 0) {
                formCountMedali = 0; // Reset the form count if all forms are removed
                var saveMedali = document.getElementById('saveMedali');
                saveMedali.style.display = 'none';
                console.log("All forms removed. Form count reset.");
            }
        }

        function checkIfEmptyMisheni() {
            const misheniContainer = document.getElementById('misheniContainer');
            if (misheniContainer.children.length === 0) {
                formCountMisheni = 0; // Reset the form count if all forms are removed
                var saveElimuRaia = document.getElementById('saveElimuRaia');
                saveElimuRaia.style.display = 'none';
                console.log("All forms removed. Form count reset.");
            }
        }

        function checkIfEmptyWatoto() {
            const watotoContainer = document.getElementById('watotoContainer');
            if (watotoContainer.children.length === 0) {
                formCountWatoto = 0; // Reset the form count if all forms are removed
                console.log("All forms removed. Form count reset.");
            }
        }
        
        //Function to check if formContainer is empty
        function checkIfEmptyRepresentatives() {
            const representativesContainer = document.getElementById('representativesContainer');
            if (representativesContainer.children.length === 0) {
                formCountRepresentatives = 0; // Reset the form count if all forms are removed
                console.log("All forms removed. Form count reset.");
            }
        }
        
        //Function to check if formContainer is empty
        function checkIfEmptyPriorities() {
            const priorityContainer = document.getElementById('priorityContainer');
            if (priorityContainer.children.length === 0) {
                formCountPriority = 0; // Reset the form count if all forms are removed
                console.log("All forms removed. Form count reset.");
            }
        }
        
        //Function to check if formContainer is empty
        function checkIfEmptyNices() {
            const niceContainer = document.getElementById('niceContainer');
            if (niceContainer.children.length === 0) {
                formCountNice = 0; // Reset the form count if all forms are removed
                console.log("All forms removed. Form count reset.");
            }
        }

        function populateKoziKijeshi(koziData, koziZenyewe){
            koziData.forEach(function(kozi) {

                formCountKozi++;
                var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                saveKoziKijeshi.style.display = 'block';

                console.log(formCountKozi);
                //const koziContainer = $('koziContainer');
                const koziContainer = document.getElementById('koziContainer');

                // Create a new form section
                const newKozi = document.createElement('div');
                newKozi.classList.add('form-item');

                newKozi.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountKozi}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountKozi}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountKozi}">
                                    Kozi #${formCountKozi}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountKozi}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountKozi}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">

                                            <div class="col-xxl-3 col-md-4">
                                                <label for="valueInput" class="form-label">Mwanajeshi</label>
                                                    <select id = "mwanajeshi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Aina Mwanajeshi</option>
                                                        @foreach($aina_mwanajeshi as $mwanajeshi)
                                                        <option value="{{$mwanajeshi['id']}}" data-merchant_tin="{{$mwanajeshi['name']}}">{{$mwanajeshi['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <label for="valueInput" class="form-label">Aina Kozi</label>
                                                    <select id = "aina_kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Aina Kozi</option>
                                                        @foreach($kozi_category as $category)
                                                        <option value="{{$category['id']}}" data-merchant_tin="{{$category['name']}}">{{$category['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <label for="valueInput" class="form-label">Kozi</label>
                                                    <select id = "kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                        @foreach($kozi_zenyewe as $kozi)
                                                            <option value="{{$kozi['id']}}" data-merchant_tin="{{$kozi['id']}}">{{$kozi['name']}}</option>
                                                        @endforeach
                                                        <option value="-1" selected>Kozi Nyingine</option>
                                                    </select>
                                                <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                <!--end col-->
                                            </div>
                                            
                                                <div class="col-xxl-3 col-md-4 collapse" id="valueInputJinaKoziDIV${formCountKozi}">
                                                <div>
                                                    <label for="valueInputJinaKozi${formCountKozi}" class="form-label">Jina la Kozi</label>
                                                    <input type="text" class="form-control" data-id="" id="valueInputJinaKozi${formCountKozi}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Jina la  Kozi</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputIntake${formCountKozi}" class="form-label">Intake</label>
                                                    <input type="text" class="form-control" data-id="" id="valueInputIntake${formCountKozi}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Intake</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwaka${formCountKozi}" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwaka${formCountKozi}" placeholder="Andika mwaka wa kumaliza">
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputTraining${formCountKozi}" class="form-label">Chuo/Shule/Training Center</label>
                                                    <input type="text" class="form-control" id="valueInputTraining${formCountKozi}" placeholder="Andika Chuo/Shule/Training Center">
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeKozi${formCountKozi}" data-id="" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                console.log(koziContainer);
                koziContainer.appendChild(newKozi);
                
                const mwanajeshi_select = document.getElementById(`mwanajeshi_select${formCountKozi}`);
                const aina_kozi_select = document.getElementById(`aina_kozi_select${formCountKozi}`);
                const kozi_select = document.getElementById(`kozi_select${formCountKozi}`);
                const valueInputJinaKoziDIV = document.getElementById(`valueInputJinaKoziDIV${formCountKozi}`);

                // Populate the kozi with data
                koziZenyewe.forEach(function(item) {
                    console.log(item);
                    let option = new Option(item.name, item.id);
                    kozi_select.add(option); // Populate owner_address_region dropdown
                });
                kozi_select.add(new Option("Kozi Nyingine", "-1"));

                var mwanajeshiTypeID = kozi.mwanajeshi_id;
                var ainaKoziTypeID = kozi.aina_kozi_id;
                var koziTypeID = kozi.kozi_id;

                for (let option of mwanajeshi_select.options) {
                    console.log("MWANAJESHILOOP, "+option.value);
                    if (option.value === mwanajeshiTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }
                
                for (let option of aina_kozi_select.options) {
                    console.log("AINAKOZILOOP, "+option.value);
                    if (option.value === ainaKoziTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }
                for (let option of kozi_select.options) {
                    console.log("KOZILOOP, "+option.value);
                    if (option.value === koziTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }

                mwanajeshi_select.addEventListener('change', function() {
                    var ainaMwanajeshiID = mwanajeshi_select.value; 
                    var ainaKoziID = aina_kozi_select.value; 
                    console.log(ainaKoziID);

                    if (ainaMwanajeshiID && ainaKoziID > 0) {
                        // Clear the existing options except for the first placeholder
                        kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                        // Fetch new data based on the selected region
                        fetch('/wanamaji/load-kozi', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data.length);
                            // Check if data is returned and has items
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    console.log(item);
                                    let option = new Option(item.name, item.id);
                                    kozi_select.add(option); // Populate owner_address_region dropdown
                                });
                                kozi_select.add(new Option("Kozi Nyingine", "-1"));
                            } else {
                                kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                            }
                        })
                        .catch(error => {
                            console.error('Error loading the data: ', error);
                            kozi_select.innerHTML = '<option value="">Error loading data</option>';
                        });
                    } else {
                        // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                        // $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                        // $("#modalError").modal('show')
                    }

                });

                aina_kozi_select.addEventListener('change', function() {
                    var ainaKoziID = aina_kozi_select.value; 
                    var ainaMwanajeshiID = mwanajeshi_select.value; 
                    console.log(ainaKoziID);

                    if (ainaKoziID && ainaMwanajeshiID > 0) {
                        // Clear the existing options except for the first placeholder
                        kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                        // Fetch new data based on the selected region
                        fetch('/wanamaji/load-kozi', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data.length);
                            // Check if data is returned and has items
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    console.log(item);
                                    let option = new Option(item.name, item.id);
                                    kozi_select.add(option); // Populate owner_address_region dropdown
                                });
                                kozi_select.add(new Option("Kozi Nyingine", "-1"));
                            } else {
                                kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                            }
                        })
                        .catch(error => {
                            console.error('Error loading the data: ', error);
                            kozi_select.innerHTML = '<option value="">Error loading data</option>';
                        });
                    } else {
                        // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                        $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                        $("#modalError").modal('show')
                    }

                });

                kozi_select.addEventListener('change', function() {
                    var koziID = kozi_select.value; 
                    console.log(koziID);

                    if (koziID == -1) {
                        valueInputJinaKoziDIV.style.display = 'block';
                    } else {
                        valueInputJinaKoziDIV.style.display = 'none';
                    }
                });
                
                // document.getElementById(`valueInputAinaKozi${formCountKozi}`).value = kozi.aina_kozi || '';
                document.getElementById(`valueInputIntake${formCountKozi}`).setAttribute('data-id', kozi.id || '');
                document.getElementById(`valueInputIntake${formCountKozi}`).value = kozi.intake || '';
                document.getElementById(`valueInputMwaka${formCountKozi}`).value = kozi.mwaka || '';
                document.getElementById(`valueInputTraining${formCountKozi}`).value = kozi.taasisi || '';

                // Add event listener for remove button
                const removeKozi = document.getElementById(`removeKozi${formCountKozi}`);
                removeKozi.addEventListener('click', function() {
                    koziContainer.removeChild(newKozi); // Remove the entire form element
                    checkIfEmpty();
                });
            });
        }

        function populateElimuRaia(elimuRaia){

            console.log(elimuRaia);
            elimuRaia.forEach(function(elimu) {
                formCountElimuRaia++;
                var saveElimuRaia = document.getElementById('saveElimuRaia');
                saveElimuRaia.style.display = 'block';

                console.log(elimu);
                //const elimuRaiaContainer = $('elimuRaiaContainer');
                const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');

                // Create a new form section
                const newElimuRaia = document.createElement('div');
                newElimuRaia.classList.add('form-item');

                newElimuRaia.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountElimuRaia}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountElimuRaia}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountElimuRaia}">
                                    Elimu #${formCountElimuRaia}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountElimuRaia}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountElimuRaia}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">

                                            <div class="col-xxl-3 col-md-4">
                                                <div id = "elimu${formCountElimuRaia}" class="show">
                                                    <label for="valueInput" class="form-label">Elimu</label>
                                                    <select id = "elimu_kiraia_select${formCountElimuRaia}" class="form-select mb-3" aria-label="Default select example">
                                                        <option value="0" selected>Elimu</option>
                                                        @foreach($elimu as $elimu_key)
                                                        <option value="{{$elimu_key['id']}}" data-merchant_tin="{{$elimu_key['name']}}">{{$elimu_key['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputTaasisi${formCountElimuRaia}" class="form-label">Shule/Chuo/VETA/Taasisi</label>
                                                    <input type="text" class="form-control" id="valueInputTaasisi${formCountElimuRaia}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Taarifa hii</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKuanza${formCountElimuRaia}" class="form-label">Mwaka wa Kuanza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKuanza${formCountElimuRaia}" placeholder="Andika mwaka wa kuanza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kuanza</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKumaliza${formCountElimuRaia}" class="form-label">Mwaka wa Kumaliza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKumaliza${formCountElimuRaia}" placeholder="Andika mwaka wa kumaliza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kumaliza</div>
                                                <!--end col-->
                                            </div>


                                            <div id="professionDiv${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                <div>
                                                    <label for="valueInputProfession${formCountElimuRaia}" id="valueInputProfessionTitle${formCountElimuRaia}" class="form-label">Profession</label>
                                                    <input type="text" class="form-control" id="valueInputProfession${formCountElimuRaia}" placeholder="Jaza taarifa hii">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Jaza taarifa hii</div>
                                                <!--end col-->
                                            </div>
                                            
                                            <div id = "elimuDaraja${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                <label for="select_daraja${formCountElimuRaia}" class="form-label">Daraja</label>
                                                <select id = "select_daraja${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                    <option value="0" selected>Chagua</option>
                                                    @foreach($madaraja as $daraja)
                                                    <option value="{{$daraja['id']}}">{{$daraja['name']}}</option>
                                                    @endforeach
                                                </select>
                                            <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeElimuKiraia${formCountElimuRaia}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(elimuRaiaContainer);
                elimuRaiaContainer.appendChild(newElimuRaia);
                // Add event listener for dropdown change
                const elimu_kiraia_select = document.getElementById(`elimu_kiraia_select${formCountElimuRaia}`);
                const elimuDarajaDiv = document.getElementById(`elimuDaraja${formCountElimuRaia}`);
                const select_daraja = document.getElementById(`select_daraja${formCountElimuRaia}`);
                const professionDiv = document.getElementById(`professionDiv${formCountElimuRaia}`);
                const valueInputProfessionTitle = document.getElementById(`valueInputProfessionTitle${formCountElimuRaia}`);

                var elimuTypeID = elimu.elimu; // Get the selected from elimu data

                console.log("elimuTypeID:"+elimuTypeID);
                console.log("formCountElimuRaia:"+formCountElimuRaia);
                console.log("elimuDarajaDiv:"+elimuDarajaDiv);
                console.log("elimu_kiraia_select:"+elimu_kiraia_select);
                

                for (let option of elimu_kiraia_select.options) {
                    console.log("ELIMULOOP, "+option.value);
                    if (option.value === elimuTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }

                document.getElementById(`valueInputTaasisi${formCountElimuRaia}`).value = elimu.jina_taasisi || '';
                document.getElementById(`valueInputTaasisi${formCountElimuRaia}`).setAttribute('data-id', elimu.id || '');
                document.getElementById(`valueInputMwakaKuanza${formCountElimuRaia}`).value = elimu.mwaka_kuanza || '';
                document.getElementById(`valueInputMwakaKumaliza${formCountElimuRaia}`).value = elimu.mwaka_kumaliza || '';
                document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                
                $(document).ready(function () {
                    if(elimuTypeID == 2 || elimuTypeID == 3){
                        elimuDarajaDiv.style.display = 'block';
                        professionDiv.style.display = 'none';

                        for (let option of select_daraja.options) {
                            console.log("ELIMULOOP, "+option.value);
                            if (option.value === elimu.daraja ) {
                                option.selected = true;
                                break; // Stop looping after finding the match
                            }
                        }
                    }
                    else if(elimuTypeID == 4 || elimuTypeID == 5){
                        valueInputProfessionTitle.textContent = "Profession";
                        professionDiv.style.display = 'block';
                        elimuDarajaDiv.style.display = 'none';
                    }
                    else if(elimuTypeID == 6 || elimuTypeID == 7){
                        valueInputProfessionTitle.textContent = "Ujuzi";
                        professionDiv.style.display = 'block';
                        elimuDarajaDiv.style.display = 'none';
                    }
                    else{
                        elimuDarajaDiv.style.display = 'none';
                        professionDiv.style.display = 'none';
                    }
                    
                    elimu_kiraia_select.addEventListener('change', function() {
                        var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                        console.log(elimuTypeID);
                        
                        if(elimuTypeID == 2 || elimuTypeID == 3){
                            elimuDarajaDiv.style.display = 'block';
                            professionDiv.style.display = 'none';

                            for (let option of select_daraja.options) {
                                console.log("ELIMULOOP, "+option.value);
                                if (option.value === elimu.daraja ) {
                                    option.selected = true;
                                    break; // Stop looping after finding the match
                                }
                            }
                        }
                        else if(elimuTypeID == 4 || elimuTypeID == 5){
                            valueInputProfessionTitle.textContent = "Profession";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else if(elimuTypeID == 6 || elimuTypeID == 7){
                            valueInputProfessionTitle.textContent = "Ujuzi";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else{
                            elimuDarajaDiv.style.display = 'none';
                            professionDiv.style.display = 'none';
                        }
                    });
                });

                // Add event listener for remove button
                const removeElimuKiraia = document.getElementById(`removeElimuKiraia${formCountElimuRaia}`);
                removeElimuKiraia.addEventListener('click', function() {
                    elimuRaiaContainer.removeChild(newElimuRaia); // Remove the entire form element
                    checkIfEmptyElimuKiraia();
                });
                
            });
        }

        function populateAinaMedali(medaliData){
            medaliData.forEach(function(medali) {

                formCountMedali++;
                var saveMedali = document.getElementById('saveMedali');
                saveMedali.style.display = 'block';

                console.log(formCountMedali);
                //const medaliContainer = $('medaliContainer');
                const medaliContainer = document.getElementById('medaliContainer');

                // Create a new form section
                const newMedali = document.createElement('div');
                newMedali.classList.add('form-item');

                newMedali.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMedali}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMedali}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMedali}">
                                    Medali #${formCountMedali}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountMedali}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMedali}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">
                                            
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina ya Medali</label>
                                                    <input type="text" class="form-control" id="valueInputAinaMedali${formCountMedali}" placeholder="Andika aina ya medali">
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaAliotunukiwa${formCountMedali}" placeholder="Andika mwaka wa kutunukiwa">
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeMedali${formCountMedali}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                console.log(medaliContainer);
                medaliContainer.appendChild(newMedali);

                document.getElementById(`valueInputAinaMedali${formCountMedali}`).value = medali.aina_medali || '';
                document.getElementById(`valueInputAinaMedali${formCountMedali}`).setAttribute('data-id', medali.id || '');
                document.getElementById(`valueInputMwakaAliotunukiwa${formCountMedali}`).value = medali.mwaka || '';

                // Add event listener for remove button
                const removeMedali = document.getElementById(`removeMedali${formCountMedali}`);
                removeMedali.addEventListener('click', function() {
                    medaliContainer.removeChild(newMedali); // Remove the entire form element
                    checkIfEmpty();
                });
            });
        }

        function populateMisheni(misheni){

            console.log(misheni);
            misheni.forEach(function(mishe) {
                formCountMisheni++;
                var saveMisheni = document.getElementById('saveMisheni');
                saveMisheni.style.display = 'block';

                console.log(mishe);
                //const misheniContainer = $('misheniContainer');
                const misheniContainer = document.getElementById('misheniContainer');

                // Create a new form section
                const newMisheni = document.createElement('div');
                newMisheni.classList.add('form-item');

                newMisheni.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMisheni}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMisheni}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMisheni}">
                                    Misheni #${formCountMisheni}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountMisheni}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMisheni}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">
                                            <div class="col-xxl-3 col-md-4 aina-misheni-select">
                                                <label for="valueInput" class="form-label">Misheni</label>
                                                <select id = "aina_misheni${formCountMisheni}" class="form-select mb-3 aina-misheni-select" aria-label="Default select example">
                                                    <option value="0" selected>Chagua Misheni</option>
                                                    @foreach($aina_misheni as $misheni)
                                                    <option value="{{$misheni['id']}}" data-merchant_tin="{{$misheni['name']}}">{{$misheni['name']}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Tafadhali chagua Misheni</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina ya Misheni</label>
                                                    <input type="text" class="form-control" id="valueInputAinaMisheni${formCountMisheni}" placeholder="Andika Aina ya Misheni">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Aina ya Misheni</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mahali</label>
                                                    <input type="text" class="form-control" id="valueInputMahali${formCountMisheni}" placeholder="Andika Mahali">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza mahali</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Mwaka</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaMisheni${formCountMisheni}" placeholder="Andika mwaka wa kutunukiwa">
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeMisheni${formCountMisheni}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(misheniContainer);
                misheniContainer.appendChild(newMisheni);
                // Add event listener for dropdown change
                const aina_misheni = document.getElementById(`aina_misheni${formCountMisheni}`);

                var misheniTypeID = mishe.misheni; // Get the selected from elimu data

                console.log("formCountMisheni:"+formCountMisheni);

                for (let option of aina_misheni.options) {
                    console.log("AINAMISHENI, "+option.value);
                    if (option.value === misheniTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }

                document.getElementById(`valueInputAinaMisheni${formCountMisheni}`).value = mishe.aina_misheni || '';
                document.getElementById(`valueInputAinaMisheni${formCountMisheni}`).setAttribute('data-id', mishe.id || '');
                document.getElementById(`valueInputMahali${formCountMisheni}`).value = mishe.mahali || '';
                document.getElementById(`valueInputMwakaMisheni${formCountMisheni}`).value = mishe.mwaka || '';
                
                // $(document).ready(function () {
                //     if(elimuTypeID == 2 || elimuTypeID == 3){
                //         elimuDarajaDiv.style.display = 'block';
                //         professionDiv.style.display = 'none';

                //         for (let option of select_daraja.options) {
                //             console.log("ELIMULOOP, "+option.value);
                //             if (option.value === elimu.daraja ) {
                //                 option.selected = true;
                //                 break; // Stop looping after finding the match
                //             }
                //         }
                //     }
                //     else if(elimuTypeID == 4 || elimuTypeID == 5){
                //         professionDiv.style.display = 'block';
                //         elimuDarajaDiv.style.display = 'none';
                //         document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                //     }else{
                //         elimuDarajaDiv.style.display = 'none';
                //         professionDiv.style.display = 'none';
                //     }
                    
                //     elimu_kiraia_select.addEventListener('change', function() {
                //         var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                //         console.log(elimuTypeID);
                        
                //         if(elimuTypeID == 2 || elimuTypeID == 3){
                //             elimuDarajaDiv.style.display = 'block';
                //             professionDiv.style.display = 'none';

                //             for (let option of select_daraja.options) {
                //                 console.log("ELIMULOOP, "+option.value);
                //                 if (option.value === elimu.daraja ) {
                //                     option.selected = true;
                //                     break; // Stop looping after finding the match
                //                 }
                //             }
                //         }
                //         else if(elimuTypeID == 4 || elimuTypeID == 5){
                //             professionDiv.style.display = 'block';
                //             elimuDarajaDiv.style.display = 'none';
                //             document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                //         }else{
                //             elimuDarajaDiv.style.display = 'none';
                //             professionDiv.style.display = 'none';
                //         }
                //     });
                // });

                // Add event listener for remove button
                const removeMisheni = document.getElementById(`removeMisheni${formCountMisheni}`);
                removeMisheni.addEventListener('click', function() {
                    misheniContainer.removeChild(newMisheni); // Remove the entire form element
                    checkIfEmptyMisheni();
                });
                
            });
        }

        function populateWatoto(watoto){

            console.log(watoto);

            watoto.forEach(function(mtoto) {

                formCountWatoto++;

                console.log(formCountWatoto);
                //const watotoContainer = $('watotoContainer');
                const watotoContainer = document.getElementById('watotoContainer');

                // Create a new form section
                const newWatoto = document.createElement('div');
                newWatoto.classList.add('form-item');

                newWatoto.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountWatoto}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountWatoto}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountWatoto}">
                                    Mtoto #${formCountWatoto}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountWatoto}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountWatoto}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">

                                            <div class="col-xxl-6 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Jina Kamili</label>
                                                    <input type="text" class="form-control" id="valueInputJinaKamiliMtoto${formCountWatoto}" placeholder="Andika Jina Kamili">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Jina Kamili</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-6 col-md-4">
                                                <div>
                                                    <label for="valueInput" class="form-label">Aina Mtoto</label>
                                                    <select id = "aina_mtoto_select${formCountWatoto}" class="form-select mb-3 aina-watoto-select" aria-label="Default select example">
                                                        
                                                        @foreach($aina_watoto as $mtoto)
                                                        <option value="{{$mtoto['id']}}" data-merchant_tin="{{$mtoto['name']}}">{{$mtoto['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Aina Mtoto</div>
                                                </div>
                                                <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeMtoto${formCountWatoto}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                console.log(watotoContainer);
                watotoContainer.appendChild(newWatoto);


                document.getElementById(`valueInputJinaKamiliMtoto${formCountWatoto}`).value = mtoto.jina_kamili || '';
                document.getElementById(`valueInputJinaKamiliMtoto${formCountWatoto}`).setAttribute('data-id', mtoto.id || '');
                
                var mtotoTypeID = mtoto.aina_mtoto; // Get the selected from elimu data
                const aina_mtoto_select = document.getElementById(`aina_mtoto_select${formCountWatoto}`);
                for (let option of aina_mtoto_select.options) {
                    console.log("WATOTOLOOP, "+option.value);
                    if (option.value === mtotoTypeID) {
                        option.selected = true;
                        break; // Stop looping after finding the match
                    }
                }

                // Add event listener for remove button
                const removeWatoto = document.getElementById(`removeMtoto${formCountWatoto}`);
                removeWatoto.addEventListener('click', function() {
                    watotoContainer.removeChild(newWatoto); // Remove the entire form element
                    checkIfEmptyWatoto();
                });
            });
        }

        $(document).ready(function(){
            // Triggered when the value of the first dropdown changes
            $("#matokeo_kozi").change(function(){
                var matokeoKoziID = $(this).val(); // Get the selected category ID
                console.log(matokeoKoziID);
                if(matokeoKoziID == 0){
                    $('#issuanceCountry').show();
                    $('#naturalPersonData').show();
                    $('#passport_id').show();
                    $('#national_id').hide();
                }else{
                    $('#issuanceCountry').hide();
                    $('#naturalPersonData').show();
                    $('#passport_id').hide();
                    $('#national_id').show();
                }

                // Make an AJAX request to fetch items for the selected category
                $.ajax({
                    type: 'POST',
                    //url: '/salsssses-agent/categories/' + ownerTypeID, // PHP script to handle the request
                    url: '{{ route("categories") }}', // PHP script to handle the request
                    data: {event_code: ownerTypeID}, 
                    //dataType: 'json',
                    success: function(data){
                        console.log(data);
                        //$('#categories').empty();
                        $.each(data, function (key, value) {
                            console.log(value.PriceCode);
                            $('#categories').append('<option value="' + value.CategoryCode + '" data-price="' + value.Price + '" data-price_code="' + value.PriceCode + '" data-has_discount="' + value.IsDiscount + '">' + value.CategoryName + '</option>');
                        });
                    },
                    error: function (error) {
                    // Handle errors here
                        console.log(error);
                    }
                });
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            $('#buttonCheckCardNo').click(function () {
                var selectedEvent = $('#events :selected');
                var positionEvent = $('#events option').index(selectedEvent);
                
                var selectedCategory = $('#categories :selected');
                var positionCategory = $('#categories option').index(selectedCategory);

                console.log($("#events").val());
                console.log($("#categories").val());
                if(positionEvent == 0){
                    $('#modalErrorMessage').text("No Event is selected!");
                            $("#modalError").modal('show')
                }
                else if(positionCategory == 0){
                    $('#modalErrorMessage').text("No Ticket is selected!");
                            $("#modalError").modal('show')
                }
                else if($("#card_no").val() == ""){
                    $('#modalErrorMessage').text("Card Number is required!");
                            $("#modalError").modal('show')
                }else{
                    $('#userInfo').hide();
                    $('#progressBar').show();
                    $.ajax({
                        type: 'POST',
                        url: '{{ route("card-info") }}',
                        data: {card_no: $("#card_no").val()}, 
                        success: function (response) {
                            console.log(response);
                            console.log(response.resultcode);
                            if(response.resultcode == "0"){
                                //var fullName = response.member_data.first_name + " " + response.member_data.last_name
                                //var mobile = response.member_data.mobile
                                //var cardNo = response.member_data.reg_no
                                //var status = response.member_data.professional_category
                                console.log(fullName);
                                $('#fullName').text(response.full_name);
                                $('#mobile').text(response.phone_number);
                                $('#cardNo').text($("#card_no").val());
                                //$('#member_status').text(response.status);
                                $('#member_status_div').empty();
                                $('#member_status_div').append('<p class="fs-16 mb-12 text-muted" data-status_value="' + response.status + '" data-card_uid="' + response.cardUID + '" id="member_status">' + response.status + '</p>');
                                $('#userInfo').show();
                                $('#sellTicket').show();
                                $('#progressBar').hide();
                            }else{
                                console.log("HERE");
                                $('#modalErrorMessage').text(response.message);
                                $("#modalError").modal('show')
                                $('#progressBar').hide();
                            }
                            // Handle success response
                        },
                        error: function (error) {
                            $('#modalErrorMessage').text("Request Timeout!");
                                $("#modalError").modal('show')
                            $('#progressBar').hide();
                            console.log("ERROR1");
                            console.log(error);
                            // Handle error response
                        }
                    });
                }
            });
            
            $('#purchaseTicket').click(function () {
                
                // Get the selected option element
                var selectedCategory = $('#categories :selected');

                // Access the data attributes
                var price = selectedCategory.data('price');
                var price_code = selectedCategory.data('price_code');
                var has_discount = selectedCategory.data('has_discount');
                var member_status = $("#member_status").data('status_value');
                
                console.log(has_discount);
                console.log(member_status);

                if(has_discount && member_status == "INACTIVE"){
                    $('#modalErrorMessage').text("Activate your card to get ticket discount!");
                    $("#modalError").modal('show')
                }
                else if(has_discount && member_status == "ACTIVE"){
                    $('#modalConfirmPurchaseDiscountMessage').text("Purchase ticket with Discount?");
                    $("#modalConfirmPurchaseDiscount").modal('show')
                }else{
                    // $('#modalConfirmPurchaseMessage').text(response.message);
                    $("#modalConfirmPurchase").modal('show')
                }
            });

            $('#confirmPurchaseTicket').click(function () {
                purchaseTicket();
            });

            $('#confirmPurchaseTicketDiscount').click(function () {
                purchaseTicket();
            });
        });

        function  purchaseTicket(){   
            $('#progressBarPurchase').show();
            // Get the selected option element
            var selectedEvent = $('#events :selected');
            var selectedCategory = $('#categories :selected');

            // Access the data attributes
            var price = selectedCategory.data('price');
            var price_code = selectedCategory.data('price_code');        
            var merchant_tin = selectedEvent.data('merchant_tin');
            
            var card_uid = $("#member_status").data('card_uid');
            
            console.log(card_uid);
            console.log(price);
            console.log(price_code);
            $.ajax({
                type: 'POST',
                url: '{{ route("purchase") }}',
                data: {
                    card_no: $("#card_no").val(),
                    card_uid: card_uid,
                    event_code: $('#events').val(),
                    category_code: $('#categories').val(),
                    price: price,
                    price_code: price_code,
                    merchant_tin: merchant_tin,
                }, 
                success: function (response) {
                    console.log(response);
                    console.log(response.Message);
                    if(response.Status == "1"){
                        $('#modalSuccessMessage').text(response.Message);
                        $('#modalEventName').text(response.Data.EventName);
                        $('#modalTicketName').text(response.Data.Ticket_Category);
                        $("#modalSuccessCenter").modal('show')
                        $('#progressBarPurchase').hide();
                    }else{
                        $('#modalErrorMessage').text(response.Message);
                        $("#modalError").modal('show')
                        $('#progressBarPurchase').hide();
                    }
                    // Handle success response
                },
                error: function (error) {
                    console.log(error);
                    $('#progressBarPurchase').hide();
                    // Handle error response
                }
            });
        }

    </script>

    <script>

        const formSteps = document.querySelectorAll(".form-steps");

        if (formSteps) {
            Array.from(formSteps).forEach((formStep) => {
                const nextTabs = formStep.querySelectorAll(".nexttab");
                // const tabButtons = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
                // Array.from(tabButtons).forEach((tabButton) => {
                //     tabButton.addEventListener("show.bs.tab", (event) => {
                //         //console.log("EventTriggered : ", allValid);
                //         //if (allValid) {
                //             event.target.classList.add("done");
                //             // No 'was-validated' class, no green ticks.
                //         //}
                //     });
                // });

                if (nextTabs) {
                    Array.from(nextTabs).forEach((nextTabButton) => {

                        let allValid = true;
                        nextTabButton.addEventListener("click", () => {
                            // Check the dropdown select with id 'selectService' for the first tab
                            // allValid = true;

                            // GENERIC VALIDATE fields in the current tab
                            const currentTabFields = formStep.querySelectorAll('.tab-pane.active .form-control');
                            Array.from(currentTabFields).forEach((field) => {
                                
                                if (field.value.trim() === "") {
                                    allValid = false;
                                    field.classList.add("is-invalid");
                                } else {
                                    field.classList.remove("is-invalid");
                                    //field.classList.add("is-valid");
                                }
                            });

                            // GENERIC LISTENER to remove 'is-invalid' when a user types in a field
                            const formControls = formStep.querySelectorAll('.form-control');
                            Array.from(formControls).forEach((control) => {
                                control.addEventListener('input', () => {
                                    if (control.classList.contains('is-invalid')) {
                                        control.classList.remove('is-invalid');  // Remove 'is-invalid' when a value is entered
                                    }
                                });
                            });

                            // SPECIFIC validation for each tab
                            // Find the active nav link and corresponding tab pane
                            const activeNavLink = formStep.querySelector('.nav-link.active');
                            const activeTabId = activeNavLink.getAttribute('href').substring(1);  // Get the tab pane ID (e.g., #tab1)
                            const activeTabPane = document.getElementById(activeTabId);
                            console.log('Active Tab:', activeTabId);
                            console.log('Active Pane:', activeTabPane);
                            
                            console.log(activeTabId);
                            if (activeTabId === "pills-start-application-tab") {
                                const selectService = document.getElementById("selectService");
                                if (selectService) {
                                // Validate if a service is selected (value should not be empty or default)
                                    if (selectService.value == 0) {
                                        allValid = false;
                                        selectService.classList.add("is-invalid");  // Add a red border if not selected
                                        //alert("Please select a service before proceeding to the next tab.");
                                    } else {
                                        allValid = true;
                                        selectService.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");  // Add a green border if valid
                                    }
                                }
                            }
                            else if (activeTabId === "pills-prepare-tab") {
                                console.log("PREPARE_APP TAB");
                                // Specific validation for tab1 (e.g., selectService must be selected)
                                const selectGender = document.getElementById("applicant_gender");
                                const select_applicant_country = document.getElementById("select_applicant_country");
                                const select_applicant_owner_type = document.getElementById("select_applicant_owner_type");
                                const select_mark_types = document.getElementById("select_mark_types");
                                const select_sign_types = document.getElementById("select_sign_types");
                                
                                console.log("GENDER", selectGender.value);
                                if (selectGender.value == 0) {
                                    allValid = false;
                                    selectGender.classList.add("is-invalid");
                                }

                                if (select_applicant_country.value == 0) {
                                    allValid = false;
                                    select_applicant_country.classList.add("is-invalid");
                                }

                                if (select_applicant_owner_type.value == 0) {
                                    allValid = false;
                                    select_applicant_owner_type.classList.add("is-invalid");
                                }

                                if (select_mark_types.value == 0) {
                                    allValid = false;
                                    select_mark_types.classList.add("is-invalid");
                                }

                                if (select_sign_types.value == 0) {
                                    allValid = false;
                                    select_sign_types.classList.add("is-invalid");
                                }

                                //Type
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_type = document.getElementById(`owner_type${formCountKozi}`);
                                    if(owner_type){
                                        if (owner_type.value == 0) {
                                        allValid = false;
                                        owner_type.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Origin
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const matokeo_kozi = document.getElementById(`matokeo_kozi${formCountKozi}`);
                                    if(matokeo_kozi){
                                        if (matokeo_kozi.value == 0) {
                                        allValid = false;
                                        matokeo_kozi.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Owner passport Issuance Country
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_passport_issuance_country = document.getElementById(`owner_passport_issuance_country${formCountKozi}`);
                                    if(owner_passport_issuance_country){
                                        if (owner_passport_issuance_country.value == 0) {
                                        allValid = false;
                                        owner_passport_issuance_country.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Owner Gender
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_gender = document.getElementById(`owner_gender${formCountKozi}`);
                                    if(owner_gender){
                                        if (owner_gender.value == 0) {
                                        allValid = false;
                                        owner_gender.classList.add("is-invalid");
                                        }
                                    }
                                }

                                // Owner Nationality
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_nationality = document.getElementById(`owner_nationality${formCountKozi}`);
                                    if(owner_nationality){
                                        if (owner_nationality.value == 0) {
                                        allValid = false;
                                        owner_nationality.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Address Country
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_address_country = document.getElementById(`owner_address_country${formCountKozi}`);
                                    if(owner_address_country){
                                        if (owner_address_country.value == 0) {
                                        allValid = false;
                                        owner_address_country.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Address Region
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_address_region = document.getElementById(`owner_address_region${formCountKozi}`);
                                    if(owner_address_region){
                                        if (owner_address_region.value == 0) {
                                        allValid = false;
                                        owner_address_region.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Address District
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_address_district = document.getElementById(`owner_address_district${formCountKozi}`);
                                    if(owner_address_district){
                                        if (owner_address_district.value == 0) {
                                        allValid = false;
                                        owner_address_district.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Address Ward
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const owner_address_ward = document.getElementById(`owner_address_ward${formCountKozi}`);
                                    if(owner_address_ward){
                                        if (owner_address_ward.value == 0) {
                                        allValid = false;
                                        owner_address_ward.classList.add("is-invalid");
                                        }
                                    }
                                }
                                
                                //Address Type Of Local Address
                                for (var i = 1; i <= formCountKozi; i++) {
                                    const type_of_local_address = document.getElementById(`type_of_local_address${formCountKozi}`);
                                    if(type_of_local_address){
                                        if (type_of_local_address.value == 0) {
                                        allValid = false;
                                        type_of_local_address.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Type
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_types = document.getElementById(`representative_types${formCountRepresentatives}`);
                                    if(representative_types){
                                        if (representative_types.value == 0) {
                                        allValid = false;
                                        representative_types.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Type Type
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representatives_type_type = document.getElementById(`representatives_type_type${formCountRepresentatives}`);
                                    if(representatives_type_type){
                                        if (representatives_type_type.value == 0) {
                                        allValid = false;
                                        representatives_type_type.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Sub Type
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representatives_type_type = document.getElementById(`representatives_sub_type${formCountRepresentatives}`);
                                    if(representatives_sub_type){
                                        if (representatives_sub_type.value == 0) {
                                        allValid = false;
                                        representatives_sub_type.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Gender
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_gender = document.getElementById(`representative_gender${formCountRepresentatives}`);
                                    if(representative_gender){
                                        if (representative_gender.value == 0) {
                                        allValid = false;
                                        representative_gender.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Nationality
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_nationality = document.getElementById(`representative_nationality${formCountRepresentatives}`);
                                    if(representative_nationality){
                                        if (representative_nationality.value == 0) {
                                        allValid = false;
                                        representative_nationality.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Local Address Type
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_local_address_type = document.getElementById(`representative_local_address_type${formCountRepresentatives}`);
                                    if(representative_local_address_type){
                                        if (representative_local_address_type.value == 0) {
                                        allValid = false;
                                        representative_local_address_type.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Type of Local Address
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_local_address_type = document.getElementById(`representative_local_address_type${formCountRepresentatives}`);
                                    if(representative_local_address_type){
                                        if (representative_local_address_type.value == 0) {
                                        allValid = false;
                                        representative_local_address_type.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Address Region
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_address_region = document.getElementById(`representative_address_region${formCountRepresentatives}`);
                                    if(representative_address_region){
                                        if (representative_address_region.value == 0) {
                                        allValid = false;
                                        representative_address_region.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Address District
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_address_district = document.getElementById(`representative_address_district${formCountRepresentatives}`);
                                    if(representative_address_district){
                                        if (representative_address_district.value == 0) {
                                        allValid = false;
                                        representative_address_district.classList.add("is-invalid");
                                        }
                                    }
                                }

                                //Representantive Address Ward
                                for (var i = 1; i <= formCountRepresentatives; i++) {
                                    const representative_address_ward = document.getElementById(`representative_address_ward${formCountRepresentatives}`);
                                    if(representative_address_ward){
                                        if (representative_address_ward.value == 0) {
                                        allValid = false;
                                        representative_address_ward.classList.add("is-invalid");
                                        }
                                    }
                                }

                                const owner_gender = document.querySelectorAll(`[id^=owner_gender]`); // Select all elements with IDs starting with "owner_gender"
                                const owner_nationality = document.querySelectorAll(`[id^=owner_nationality]`); 
                                const owner_type = document.querySelectorAll(`[id^=owner_type]`); 
                                const matokeo_kozi = document.querySelectorAll(`[id^=matokeo_kozi]`); 
                                const owner_passport_issuance_country = document.querySelectorAll(`[id^=owner_passport_issuance_country]`); 
                                const owner_address_country = document.querySelectorAll(`[id^=owner_address_country]`); 
                                const owner_address_region = document.querySelectorAll(`[id^=owner_address_region]`); 
                                const owner_address_district = document.querySelectorAll(`[id^=owner_address_district]`); 
                                const owner_address_ward = document.querySelectorAll(`[id^=owner_address_ward]`); 
                                const type_of_local_address = document.querySelectorAll(`[id^=type_of_local_address]`); 
                                const representative_types = document.querySelectorAll(`[id^=representative_types]`); 
                                const representatives_type_type = document.querySelectorAll(`[id^=representatives_type_type]`);
                                const representatives_sub_type = document.querySelectorAll(`[id^=representatives_sub_type]`);
                                const representative_gender = document.querySelectorAll(`[id^=representative_gender]`);
                                const representative_nationality = document.querySelectorAll(`[id^=representative_nationality]`);
                                const representative_local_address_type = document.querySelectorAll(`[id^=representative_local_address_type]`);
                                const representative_address_country = document.querySelectorAll(`[id^=representative_address_country]`);
                                const representative_address_region = document.querySelectorAll(`[id^=representative_address_region]`);
                                const representative_address_district = document.querySelectorAll(`[id^=representative_address_district]`);
                                const representative_address_ward = document.querySelectorAll(`[id^=representative_address_ward]`);
    
                                if(owner_type){
                                    owner_type.forEach((ownerTypeElement) => {
                                        ownerTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerTypeElement.value !== "0") {
                                                ownerTypeElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }
    
                                if(matokeo_kozi){
                                    matokeo_kozi.forEach((ownersOriginElement) => {
                                        ownersOriginElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownersOriginElement.value !== "0") {
                                                ownersOriginElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_passport_issuance_country){
                                    owner_passport_issuance_country.forEach((ownerPassportIssuanceCountryElement) => {
                                        ownerPassportIssuanceCountryElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerPassportIssuanceCountryElement.value !== "0") {
                                                ownerPassportIssuanceCountryElement.classList.remove("is-invalid");
                                                //ownerPassportIssuanceCountryElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_gender){
                                    owner_gender.forEach((genderElement) => {
                                        genderElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (genderElement.value !== "0") {
                                                genderElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_nationality){
                                    owner_nationality.forEach((ownerNationalityElement) => {
                                        ownerNationalityElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerNationalityElement.value !== "0") {
                                                ownerNationalityElement.classList.remove("is-invalid");
                                                //ownerNationalityElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_address_country){
                                    owner_address_country.forEach((ownerAddressCountryElement) => {
                                        ownerAddressCountryElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerAddressCountryElement.value !== "0") {
                                                ownerAddressCountryElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }
                                  
                                if(owner_address_region){
                                    owner_address_region.forEach((ownerAddressRegionElement) => {
                                        ownerAddressRegionElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerAddressRegionElement.value !== "0") {
                                                ownerAddressRegionElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_address_district){
                                    owner_address_district.forEach((ownerAddressDistrictElement) => {
                                        ownerAddressDistrictElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerAddressDistrictElement.value !== "0") {
                                                ownerAddressDistrictElement.classList.remove("is-invalid");
                                                //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(owner_address_ward){
                                    owner_address_ward.forEach((ownerAddressWardElement) => {
                                        ownerAddressWardElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (ownerAddressWardElement.value !== "0") {
                                                ownerAddressWardElement.classList.remove("is-invalid");
                                                //ownerAddressWardElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(type_of_local_address){
                                    type_of_local_address.forEach((typeOfLocalAddressElement) => {
                                        typeOfLocalAddressElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (typeOfLocalAddressElement.value !== "0") {
                                                typeOfLocalAddressElement.classList.remove("is-invalid");
                                                //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_types){
                                    representative_types.forEach((representativeTypesElement) => {
                                        representativeTypesElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeTypesElement.value !== "0") {
                                                representativeTypesElement.classList.remove("is-invalid");
                                                //representativeTypesElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representatives_type_type){
                                    representatives_type_type.forEach((representativeTypeTypeElement) => {
                                        representativeTypeTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeTypeTypeElement.value !== "0") {
                                                representativeTypeTypeElement.classList.remove("is-invalid");
                                                //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representatives_sub_type){
                                    representatives_sub_type.forEach((representativeSubTypeElement) => {
                                        representativeSubTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeSubTypeElement.value !== "0") {
                                                representativeSubTypeElement.classList.remove("is-invalid");
                                                //representativeSubTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_gender){
                                    representative_gender.forEach((representativeGenderElement) => {
                                        representativeGenderElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeGenderElement.value !== "0") {
                                                representativeGenderElement.classList.remove("is-invalid");
                                                //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_nationality){
                                    representative_nationality.forEach((representativeNationalityElement) => {
                                        representativeNationalityElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeNationalityElement.value !== "0") {
                                                representativeNationalityElement.classList.remove("is-invalid");
                                                //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_local_address_type){
                                    representative_local_address_type.forEach((representativeLocalAddressTypeElement) => {
                                        representativeLocalAddressTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeLocalAddressTypeElement.value !== "0") {
                                                representativeLocalAddressTypeElement.classList.remove("is-invalid");
                                                //representativeLocalAddressTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_address_country){
                                    representative_address_country.forEach((representativeLocalAddressCountryTypeElement) => {
                                        representativeLocalAddressCountryTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeLocalAddressCountryTypeElement.value !== "0") {
                                                representativeLocalAddressCountryTypeElement.classList.remove("is-invalid");
                                                //representativeLocalAddressCountryTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_address_region){
                                    representative_address_region.forEach((representativeLocalAddressRegionTypeElement) => {
                                        representativeLocalAddressRegionTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeLocalAddressRegionTypeElement.value !== "0") {
                                                representativeLocalAddressRegionTypeElement.classList.remove("is-invalid");
                                                //representativeLocalAddressRegionTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_address_district){
                                    representative_address_district.forEach((representativeLocalAddressDistrictTypeElement) => {
                                        representativeLocalAddressDistrictTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeLocalAddressDistrictTypeElement.value !== "0") {
                                                representativeLocalAddressDistrictTypeElement.classList.remove("is-invalid");
                                                //representativeLocalAddressDistrictTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }

                                if(representative_address_ward){
                                    representative_address_ward.forEach((representativeLocalAddressWardTypeElement) => {
                                        representativeLocalAddressWardTypeElement.addEventListener("change", () => {
                                            // Remove is-invalid class when a valid option is selected
                                            if (representativeLocalAddressWardTypeElement.value !== "0") {
                                                representativeLocalAddressWardTypeElement.classList.remove("is-invalid");
                                                //representativeLocalAddressWardTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                            }
                                        });
                                    });
                                }
    
                            }
                            else if (activeTabId === "pills-upload-attachments-tab") {
                                // Specific validation for tab2 (e.g., validate email format)
                                const emailField = document.getElementById("email");
                                if (emailField && !validateEmail(emailField.value)) {
                                    allValid = false;
                                    emailField.classList.add("is-invalid");
                                }
                            } else if (activeTabId === "tab3") {
                                // Specific validation for tab3 (e.g., check if a number is in a certain range)
                                const numberField = document.getElementById("number");
                                if (numberField && (parseInt(numberField.value) < 10 || parseInt(numberField.value) > 100)) {
                                    allValid = false;
                                    numberField.classList.add("is-invalid");
                                }
                            }

                            console.log("allValid", allValid);
                            // Proceed to the next tab only if all checks pass
                            if (allValid) {
                                document.querySelector('.loader-overlay').style.display = 'flex';
                                $.ajax({
                                    url: '/wanamaji/save-first-tab',  // Your endpoint
                                    type: 'POST',
                                    data: {
                                        application_id : application_id,
                                        namba_jeshi : namba_jeshi,
                                        cheo : cheo,
                                        first_name: first_name,
                                        middle_name: middle_name,
                                        last_name: last_name,
                                        ujuzi : ujuzi,
                                        c_no : c_no,
                                        namba_kitambulisho : namba_kitambulisho,
                                        kikosi: kikosi,
                                        kombania: kombania,
                                        elimu: elimu,
                                        kikosi_ulichotoka: kikosi_ulichotoka,
                                        dob: dob,
                                        kundi_damu: kundi_damu,
                                        uzito: uzito,
                                        urefu: urefu,
                                        tarehe_kujiunga_jeshi: tarehe_kujiunga_jeshi,
                                        tarehe_kamisheni: tarehe_kamisheni,
                                        tarehe_kupanda_cheo: tarehe_kupanda_cheo,
                                        tarehe_kustaafu: tarehe_kustaafu,
                                        anuani: anuani,
                                        namba_simu: namba_simu,
                                        dini: dini,
                                        mkoa_kuzaliwa: mkoa_kuzaliwa,
                                        wilaya: wilaya,
                                        tarfa: tarfa,
                                    },
                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                                    success: function(response) {
                                        if(response.error == 0){
                                            applicationSubmitted = 1; //Hii kuzuia mtu akirudi back then Next
                                            application_id = response.application_id;
                                            console.log('Data saved successfully:', response);
                                            document.querySelector('.loader-overlay').style.display = 'none';

                                            const nextTab = nextTabButton.getAttribute("data-nexttab");
                                            const nextTabElement = document.getElementById(nextTab);
                                            nextTabElement.click();
                                            onStepOpened("pills-upload-attachments-tab");
                                        }else{
                                            document.querySelector('.loader-overlay').style.display = 'none';
                                            $('#modalErrorMessage').text(response.message);
                                            $("#modalError").modal('show')
                                        }
                                        // You might want to clear forms or show a success message
                                    },
                                    error: function(xhr, status, error) {
                                        console.log('Error saving data:', xhr.responseText);
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        // Handle errors here
                                    }
                                });
                            }else {
                                $('#modalErrorMessage').text("Please complete all required fields!");
                                $("#modalError").modal('show')
                            }
                        });

                        // Add an event listener to listen for changes on the selectService dropdown
                        const selectService = document.getElementById("selectService");
                        const selectGender = document.getElementById("applicant_gender");
                        const select_applicant_owner_type = document.getElementById("select_applicant_owner_type");
                        const select_mark_types = document.getElementById("select_mark_types");
                        const select_mark_sign_types = document.getElementById("select_mark_sign_types");
                        if (selectService) {
                            selectService.addEventListener("change", () => {
                                // Remove is-invalid class when a valid option is selected
                                if (selectService.value !== "0") {
                                    selectService.classList.remove("is-invalid");
                                    //selectService.classList.add("is-valid");
                                }
                            });
                        }

                        if (selectGender) {
                            selectGender.addEventListener("change", () => {
                                // Remove is-invalid class when a valid option is selected
                                if (selectGender.value !== "0") {
                                    selectGender.classList.remove("is-invalid");
                                    //selectService.classList.add("is-valid");
                                }
                            });
                        }

                        if (select_applicant_owner_type) {
                            select_applicant_owner_type.addEventListener("change", () => {
                                // Remove is-invalid class when a valid option is selected
                                if (select_applicant_owner_type.value !== "0") {
                                    select_applicant_owner_type.classList.remove("is-invalid");
                                    //selectService.classList.add("is-valid");
                                }
                            });
                        }

                        if (select_mark_types) {
                            select_mark_types.addEventListener("change", () => {
                                // Remove is-invalid class when a valid option is selected
                                if (select_mark_types.value !== "0") {
                                    select_mark_types.classList.remove("is-invalid");
                                    //selectService.classList.add("is-valid");
                                } 
                            });
                        }

                        if (select_mark_sign_types) {
                            select_mark_sign_types.addEventListener("change", () => {
                                // Remove is-invalid class when a valid option is selected
                                if (select_mark_sign_types.value !== "0") {
                                    select_mark_sign_types.classList.remove("is-invalid");
                                    //selectService.classList.add("is-valid");
                                }
                            });
                        }

                    });
                }

                 // Handling "Previous" button click
                if (formStep.querySelectorAll(".previestab")) {
                    Array.from(formStep.querySelectorAll(".previestab")).forEach(function(prevTabBtn) {
                        prevTabBtn.addEventListener("click", function() {
                            var previousTab = prevTabBtn.getAttribute("data-previous");
                            var doneTabs = prevTabBtn.closest("form").querySelectorAll(".custom-nav .done").length;
                            
                            // Remove the "done" class from the steps
                            for (var i = doneTabs - 1; i < doneTabs; i++) {
                                var doneTab = prevTabBtn.closest("form").querySelectorAll(".custom-nav .done")[i];
                                if (doneTab) {
                                    doneTab.classList.remove("done");
                                }
                            }

                            document.getElementById(previousTab).click();
                        });
                    });
                }

                // Progress bar handling
                var progressTabs = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
                if (progressTabs) {
                    Array.from(progressTabs).forEach(function(tabBtn, index) {
                        tabBtn.setAttribute("data-position", index);

                        tabBtn.addEventListener("click", function() {
                            var totalTabs = formStep.querySelectorAll(".custom-nav .done").length;
                            var progressBar = document.getElementById("custom-progress-bar");

                            formStep.classList.remove("was-validated");

                            // Update progress bar
                            if (tabBtn.getAttribute("data-progressbar")) {
                                var progressMax = progressBar.querySelectorAll("li").length - 1;
                                var progressPercent = (index / progressMax) * 100;
                                progressBar.querySelector(".progress-bar").style.width = progressPercent + "%";
                            }

                            // Mark steps as done or active
                            Array.from(formStep.querySelectorAll(".custom-nav .done")).forEach(function(doneTab) {
                                doneTab.classList.remove("done");
                            });

                            for (var i = 0; i <= index; i++) {
                                if (progressTabs[i].classList.contains("active")) {
                                    progressTabs[i].classList.remove("done");
                                } else {
                                    progressTabs[i].classList.add("done");
                                }
                            }
                        });
                    });
                }

                // const previousTabs = formStep.querySelectorAll(".previestab");

                // if (previousTabs) {
                //     Array.from(previousTabs).forEach((previousTabButton) => {
                //         previousTabButton.addEventListener("click", () => {
                //             const previousTab = previousTabButton.getAttribute("data-previous");
                //             document.getElementById(previousTab).click();
                //         });
                //     });
                // }

                // const progressTabs = formStep.querySelectorAll('button[data-bs-toggle="pill"]');

                // if (progressTabs) {
                //     Array.from(progressTabs).forEach((progressTabButton, index) => {
                //         progressTabButton.setAttribute("data-position", index);

                //         progressTabButton.addEventListener("click", () => {
                //             const progressBar = progressTabButton.getAttribute("data-progressbar");

                //             if (progressBar) {
                //                 const totalSteps = document.getElementById("custom-progress-bar").querySelectorAll("li").length - 1;
                //                 const progressPercentage = (index / totalSteps) * 100;
                //                 document.getElementById("custom-progress-bar").querySelector(".progress-bar").style.width = progressPercentage + "%";
                //             }
                //         });
                //     });
                // }
            });
        }

    </script>
    @endif

    @if(Route::currentRouteNamed('users-page'))
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tableContainer = document.getElementById("table-users-gridjs");

            if (tableContainer) {
                const grid = new gridjs.Grid({
                    columns: [
                        { name: "Namba Jeshi", width: "100px" },
                        {
                            name: "Jina Kamili",
                            width: "140px",
                            formatter: e => gridjs.html(`<a href="#">${e}</a>`)
                        },
                        { name: "Cheo", width: "96px" },
                        { name: "Kikosi", width: "120px" },
                        { name: "Kombania", width: "96px" },
                        { name: "Simu", width: "96px" },
                        {
                            name: "Actions",
                            width: "120px",
                            formatter: (cell, row) => gridjs.html(`
                                <button type="button" class="btn btn-sm btn-soft-info edit-btn" data-form_id="${row.cells[0].data}">View</button>
                                <button type="button" class="btn btn-sm btn-soft-danger delete-btn" data-form_id="${row.cells[0].data}">Delete</button>
                            `)
                        }
                    ],
                    pagination: { limit: 5 },
                    sort: true,
                    search: true,
                    data: () => {
                        const loader = document.querySelector('.loader-overlay');
                        if (loader) loader.style.display = 'flex'; // Show loader before fetch

                        return fetch("/wanamaji/load-users")
                            .then(response => response.json())
                            .then(json => {
                                console.log("Users loaded:", json.users.data);
                                if (loader) loader.style.display = 'none'; // Hide loader after success
                                return json.users.data.map(form => [
                                    form.namba_jeshi,
                                    `${form.fname} ${form.middle || ''} ${form.lname || ''}`.trim(),
                                    form.cheo.name,
                                    form.kikosi.name,
                                    form.kombania,
                                    form.namba_simu,
                                    null
                                ]);
                            })
                            .catch(error => {
                                console.error("Error loading users:", error);
                                if (loader) loader.style.display = 'none'; // Hide loader on error
                                return []; // Prevent Grid.js from breaking
                            });
                    }
                }).render(tableContainer);

                    // Attach listener AFTER Grid.js renders
                    grid.on('ready', () => {
                    tableContainer.addEventListener('click', function (event) {
                        const target = event.target;

                        if (target.classList.contains('edit-btn')) {
                        const formId = target.getAttribute('data-form_id');
                        // window.location.href = '/wanamaji/form/' + formId + '/edit';
                        window.location.href = '/wanamaji/form/' + btoa(formId) + '/edit';

                        }

                        if (target.classList.contains('delete-btn')) {
                        const formId = target.getAttribute('data-form_id');
                        if (confirm('Are you sure you want to delete this form?')) {
                            // Handle deletion here via AJAX or redirect
                            console.log('Delete form ID:', formId);
                        }
                        }
                    });
                    });
                }
            });


        $('.edit-btn').on('click', function() {
            var id = $(this).data('form_id');
            // window.location.href = '' + id + '/edit';
            window.location.href = '/wanamaji/form/' + id + '/edit';
        });
        
    </script>
    @endif

    @if(Route::currentRouteNamed('dashboard'))
    <script>

        $(document).ready(function () {
            const token = sessionStorage.getItem("api-token");
            // const roles = JSON.parse(sessionStorage.getItem("roles") || "[]");

            if (!token) {
                // Not logged in
                window.location.href = '{{ route("logout") }}';
                return;
            }

            // ✅ Role check on frontend
            // if (!roles.includes("USER")) {
            //     alert("You do not have permission to access this page!");
            //     window.location.href = "/login.html";
            //     return;
            // }

            // 1️⃣ Initial snapshot from REST
            $.ajax({
                url: "http://azam-onsite.local:9090/api/dashboard/summary",
                headers: { "Authorization": "Bearer " + token },
                success: function (data) {
                    $("#totalTrxs").text(data.totalTrxs);
                    $("#magogoniTrxs").text(data.magogoniTrxs);
                    $("#kigamboniTrxs").text(data.kigamboniTrxs);
                    $("#offlineTrxs").text(data.offlineTrxs);
                },
                error: function (xhr) {
                    console.error("Failed to load initial summary", xhr);
                    if (xhr.status === 401) {
                        alert("Session expired, please login again.");
                        window.location.href = '{{ route("logout") }}';
                    } else if (xhr.status === 403) {
                        alert("Forbidden: wrong role.");
                        window.location.href = '{{ route("logout") }}';
                    }
                }
            });

            // Get today's date in YYYY-MM-DD format
            const todayDate = new Date().toISOString().split('T')[0];
            console.log("Today:", todayDate);
            document.getElementById("valueInputStartDate").value = todayDate;
            document.getElementById("valueInputEndDate").value = todayDate;

            function updateWsStatus(connected) {
                const statusEl = document.getElementById("wsStatus");
                if (connected) {
                    statusEl.textContent = "🟢 Connected";
                    statusEl.className = "badge bg-success";
                } else {
                    statusEl.textContent = "🔴 Disconnected";
                    statusEl.className = "badge bg-danger";
                }
            }
            
            // ✅ WebSocket connection
            function connect() {
                console.log("Connecting to WebSocket...");
                const socket = new SockJS("http://azam-onsite.local:9090/ws");

                const stompClient = Stomp.over(socket);
                let reconnectDelay = 2000; // start with 2 seconds

                // Optionally disable debug logs
                stompClient.debug = null;

                stompClient.connect(
                    { Authorization: "Bearer " + token }, // ✅ send JWT if needed
                    function () {
                        console.log("✅ Connected to WebSocket!");
                        updateWsStatus(true);
                        reconnectDelay = 2000; 

                        // Subscribe to topic
                        stompClient.subscribe("/topic/dashboard", function (message) {
                            try {
                                console.log("📊 Dashboard update:", message.body);
                                const data = JSON.parse(message.body);
                                $("#totalTrxs").text(data.totalTrxs);
                                $("#magogoniTrxs").text(data.magogoniTrxs);
                                $("#kigamboniTrxs").text(data.kigamboniTrxs);
                                $("#offlineTrxs").text(data.offlineTrxs);
                            } catch (err) {
                                console.error("Invalid message:", message.body);
                            }
                        });
                    },
                    function (error) {
                        console.error("❌ WebSocket error:", error);
                        updateWsStatus(false);
                        console.log(`Reconnecting in ${reconnectDelay / 1000} seconds...`);
                        // Attempt reconnect after delay
                        setTimeout(() => {
                            reconnectDelay = Math.min(reconnectDelay * 2, 30000); // max 30s
                            console.log(`♻️ Reconnecting in ${reconnectDelay / 1000}s...`);
                            connect();
                        }, reconnectDelay);
                    }
                );
            }

            // Call directly (no need for another DOMContentLoaded)
            connect();

        });

        // document.addEventListener("DOMContentLoaded", () => {
        //     const tableContainer = document.getElementById("table-gridjs");

        //     if (tableContainer) {
        //         let grid = new gridjs.Grid({
        //             columns: [
        //                 { name: "Namba Jeshi", width: "100px" },
        //                 {
        //                     name: "Jina Kamili",
        //                     width: "140px",
        //                     formatter: e => gridjs.html(`<a href="#">${e}</a>`)
        //                 },
        //                 { name: "Cheo", width: "96px" },
        //                 { name: "Kikosi", width: "120px" },
        //                 { name: "Kombania", width: "96px" },
        //                 { name: "Simu", width: "96px" },
        //                 {
        //                     name: "Actions",
        //                     width: "120px",
        //                     formatter: (cell, row) => gridjs.html(`
        //                         <button type="button" class="btn btn-sm btn-soft-info edit-btn" data-form_id="${row.cells[0].data}">View</button>
        //                         <button type="button" class="btn btn-sm btn-soft-danger delete-btn" data-form_id="${row.cells[0].data}">Delete</button>
        //                     `)
        //                 }
        //             ],
        //             pagination: { limit: 5 },
        //             sort: true,
        //             search: true,
        //             data: loadData // function below
        //         }).render(tableContainer);

        //         // ---- Data loader with POST filters ----
        //         function loadData() {
        //             const loader = document.querySelector('.loader-overlay');
        //             if (loader) loader.style.display = 'flex';

        //             // Get filter values
        //             const kikosi = document.getElementById("selectKikosi").value;
        //             const misheni = document.getElementById("aina_misheni").value;
        //             const kozi   = document.getElementById("kozi_kijeshi").value;

        //             return fetch("/wanamaji/filter-data", {
        //                 method: "POST",
        //                 headers: {
        //                     "Content-Type": "application/json",
        //                     // "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content") // Laravel CSRF
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 },
        //                 body: JSON.stringify({
        //                     kikosi: kikosi,
        //                     misheni: misheni,
        //                     kozi: kozi
        //                 })
        //             })
        //                 .then(response => response.json())
        //                 .then(json => {
        //                     if (loader) loader.style.display = 'none';
        //                     // --- Update Dashboard Summary ---
        //                     document.getElementById("maafisaCount").innerText = json.summary.maafisa;
        //                     document.getElementById("askariCount").innerText  = json.summary.askari;
        //                     document.getElementById("jumlaCount").innerText   = json.summary.jumla;

        //                     // --- Populate table ---
        //                     return json.forms.data.map(form => [
        //                         form.namba_jeshi,
        //                         `${form.fname} ${form.middle || ''} ${form.lname || ''}`.trim(),
        //                         form.cheo.name,
        //                         form.kikosi.name,
        //                         form.kombania,
        //                         form.namba_simu,
        //                         null
        //                     ]);
        //                 })
        //                 .catch(error => {
        //                     console.error("Error loading forms:", error);
        //                     if (loader) loader.style.display = 'none';
        //                     return [];
        //                 });
        //         }

        //         // ---- Refresh when Tafuta clicked ----
        //         document.getElementById("filterData").addEventListener("click", () => {
        //             grid.updateConfig({ data: loadData }).forceRender();
        //         });

        //         // ---- Action buttons ----
        //         grid.on('ready', () => {
        //             tableContainer.addEventListener('click', function (event) {
        //                 const target = event.target;

        //                 if (target.classList.contains('edit-btn')) {
        //                     const formId = target.getAttribute('data-form_id');
        //                     // window.location.href = '/wanamaji/form/' + formId + '/edit';
        //                     window.location.href = '/wanamaji/form/' + btoa(formId) + '/edit';
        //                 }

        //                 if (target.classList.contains('delete-btn')) {
        //                     const formId = target.getAttribute('data-form_id');
        //                     if (confirm('Are you sure you want to delete this form?')) {
        //                         console.log('Delete form ID:', formId);
        //                         // Perform delete AJAX if needed
        //                     }
        //                 }
        //             });
        //         });
        //     }
        // });
        
    </script>
    @endif

    @if(Route::currentRouteNamed('form.edit'))
        <script>
            let formCountKozi = 0; // Track the number of forms generated
            let formCountElimuRaia = 0; // Track the number of forms generated
            let formCountMedali = 0; // Track the number of forms generated
            let formCountMisheni = 0; // Track the number of forms generated
            let formCountWatoto = 0; // Track the number of forms generated
            let formCountPriority = 0; // Track the number of forms generated

            document.getElementById('valueInputNambaJeshi').addEventListener('input', function() {
            const pattern = /^(P|p|MT|Mt|mt)/;
                const errorMsg = document.getElementById('jeshiError');
                
                if (!pattern.test(this.value)) {
                    errorMsg.style.display = 'block';
                    this.setCustomValidity("Namba ya Jeshi lazima ianze na P/PW au MT/MTM");
                } else {
                    errorMsg.style.display = 'none';
                    this.setCustomValidity("");
                }
            });
        
            document.getElementById('valueInputNambaSimu').addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, ''); // toa herufi zote zisizo namba
            });

            $(document).ready(function(){
                
                const selectCheo = document.getElementById('selectCheo');
                var cheoID = @json($taarifa_binafsi->cheo ?? 'No Value');
                var kozi_kijeshi = @json($kozi_kijeshi ?? []);
                var kozi_zenyewe = @json($kozi_zenyewe ?? []);
                var elimu_raia = @json($elimu_raia ?? []);
                var medali = @json($medali ?? []);
                var misheni = @json($misheni ?? []);
                var taarifa_familia = @json($taarifa_familia);
                var watoto = @json($watoto ?? []);
                console.log(taarifa_familia);
                console.log(watoto);

                if (kozi_kijeshi.length > 0) {
                    console.log("Kozi Kijeshi has data.");

                    var collapseElement = document.getElementById('collapseTwo');
                    collapseElement.classList.add('show');
                    var button = document.querySelector('button[data-bs-target="#collapseTwo"]');
                    button.classList.remove('collapsed'); // remove 'collapsed'
                    button.setAttribute('aria-expanded', 'true');
                    
                    populateKoziKijeshi(kozi_kijeshi, kozi_zenyewe);
                }

                if (elimu_raia.length > 0) {
                    console.log("Elimu Raia has data.");

                    var collapseElement = document.getElementById('collapseThree');
                    collapseElement.classList.add('show');
                    var button = document.querySelector('button[data-bs-target="#collapseThree"]');
                    button.classList.remove('collapsed'); // remove 'collapsed'
                    button.setAttribute('aria-expanded', 'true');
                    
                    populateElimuRaia(elimu_raia);
                }

                if (medali.length > 0) {
                    console.log("Medali has data.");

                    var collapseElement = document.getElementById('collapseFour');
                    collapseElement.classList.add('show');
                    var button = document.querySelector('button[data-bs-target="#collapseFour"]');
                    button.classList.remove('collapsed'); // remove 'collapsed'
                    button.setAttribute('aria-expanded', 'true');
                    
                    populateAinaMedali(medali);
                }

                if (misheni.length > 0) {
                    console.log("Misheni has data.");

                    var collapseElement = document.getElementById('collapseFive');
                    collapseElement.classList.add('show');
                    var button = document.querySelector('button[data-bs-target="#collapseFive"]');
                    button.classList.remove('collapsed'); // remove 'collapsed'
                    button.setAttribute('aria-expanded', 'true');
                    
                    populateMisheni(misheni);
                }

                if (watoto.length > 0 || taarifa_familia.hali_baba) {
                    console.log("Watoto has data.");

                    var collapseElement = document.getElementById('collapseSix');
                    collapseElement.classList.add('show');
                    var button = document.querySelector('button[data-bs-target="#collapseSix"]');
                    button.classList.remove('collapsed'); // remove 'collapsed'
                    button.setAttribute('aria-expanded', 'true');
                    
                    populateWatoto(watoto);
                }

                // for (let option of selectCheo.options) {
                //     if (option.value === cheoID) {
                //         option.selected = true;
                //         break; // Stop looping after finding the match
                //     }
                // }

                $("#owners").change(function(){
                    var ownerTypeID = $(this).val(); // Get the selected category ID
                    console.log(ownerTypeID);
                    //if(ownerTypeID == 0){
                        $('#matokeoKozi').show();
                    //}
                    
                    // Make an AJAX request to fetch items for the selected category
                    $.ajax({
                        type: 'POST',
                        //url: '/salsssses-agent/categories/' + ownerTypeID, // PHP script to handle the request
                        url: '{{ route("categories") }}', // PHP script to handle the request
                        data: {event_code: ownerTypeID}, 
                        //dataType: 'json',
                        success: function(data){
                            console.log(data);
                            //$('#categories').empty();
                            $.each(data, function (key, value) {
                                console.log(value.PriceCode);
                                $('#categories').append('<option value="' + value.CategoryCode + '" data-price="' + value.Price + '" data-price_code="' + value.PriceCode + '" data-has_discount="' + value.IsDiscount + '">' + value.CategoryName + '</option>');
                            });
                        },
                        error: function (error) {
                        // Handle errors here
                            console.log(error);
                        }
                    });
                }); 
                
                $('#addKozi').click(function () {
                    formCountKozi++;
                    var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                    saveKoziKijeshi.style.display = 'block';

                    console.log(formCountKozi);
                    //const koziContainer = $('koziContainer');
                    const koziContainer = document.getElementById('koziContainer');

                    // Create a new form section
                    const newKozi = document.createElement('div');
                    newKozi.classList.add('form-item');

                    newKozi.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountKozi}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountKozi}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountKozi}">
                                        Kozi #${formCountKozi}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountKozi}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountKozi}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">

                                                <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                    <label for="valueInput" class="form-label">Mwanajeshi</label>
                                                        <select id = "mwanajeshi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            <option value="0" selected>Chagua Aina Mwanajeshi</option>
                                                            @foreach($aina_mwanajeshi as $mwanajeshi)
                                                            <option value="{{$mwanajeshi['id']}}" data-merchant_tin="{{$mwanajeshi['name']}}">{{$mwanajeshi['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                    <label for="valueInput" class="form-label">Aina Kozi</label>
                                                        <select id = "aina_kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            <option value="0" selected>Chagua Aina Kozi</option>
                                                            @foreach($kozi_category as $category)
                                                            <option value="{{$category['id']}}" data-merchant_tin="{{$category['name']}}">{{$category['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4 kozi-kijeshi-select-wrapper">
                                                    <label for="valueInput" class="form-label">Kozi</label>
                                                        <select id = "kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            <option value="0" selected>Chagua Kozi</option>
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4 collapse" id="valueInputJinaKoziDIV${formCountKozi}">
                                                    <div>
                                                        <label for="valueInputJinaKozi${formCountKozi}" class="form-label">Jina la Kozi</label>
                                                        <input type="text" class="form-control" data-id="" id="valueInputJinaKozi${formCountKozi}" placeholder="">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Jina la  Kozi</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputIntake${formCountKozi}" class="form-label">Intake</label>
                                                        <input type="text" class="form-control" data-id="" id="valueInputIntake${formCountKozi}" placeholder="">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Intake</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputMwaka${formCountKozi}" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwaka${formCountKozi}" placeholder="Andika mwaka wa kumaliza">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputTraining${formCountKozi}" class="form-label">Chuo/Shule/Training Center</label>
                                                        <input type="text" class="form-control" id="valueInputTraining${formCountKozi}" placeholder="Andika Chuo/Shule/Training Center">
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                
                                            

                                        

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeKozi${formCountKozi}" data-id="" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(koziContainer);
                    koziContainer.appendChild(newKozi);

                    const mwanajeshi_select = document.getElementById(`mwanajeshi_select${formCountKozi}`);
                    const aina_kozi_select = document.getElementById(`aina_kozi_select${formCountKozi}`);
                    const kozi_select = document.getElementById(`kozi_select${formCountKozi}`);
                    const valueInputJinaKoziDIV = document.getElementById(`valueInputJinaKoziDIV${formCountKozi}`);

                    mwanajeshi_select.addEventListener('change', function() {
                        var ainaMwanajeshiID = mwanajeshi_select.value; 
                        var ainaKoziID = aina_kozi_select.value; 
                        console.log(ainaKoziID);

                        if (ainaMwanajeshiID && ainaKoziID > 0) {
                            // Clear the existing options except for the first placeholder
                            kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                            // Fetch new data based on the selected region
                            fetch('/wanamaji/load-kozi', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                console.log(data.length);
                                // Check if data is returned and has items
                                if (data.length > 0) {
                                    data.forEach(function(item) {
                                        console.log(item);
                                        let option = new Option(item.name, item.id);
                                        kozi_select.add(option); // Populate owner_address_region dropdown
                                    });
                                    kozi_select.add(new Option("Kozi Nyingine", "-1"));
                                } else {
                                    kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                                }
                            })
                            .catch(error => {
                                console.error('Error loading the data: ', error);
                                kozi_select.innerHTML = '<option value="">Error loading data</option>';
                            });
                        } else {
                            // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                            // $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                            // $("#modalError").modal('show')
                        }

                    });

                    aina_kozi_select.addEventListener('change', function() {
                        var ainaKoziID = aina_kozi_select.value; 
                        var ainaMwanajeshiID = mwanajeshi_select.value; 
                        console.log(ainaKoziID);

                        if (ainaKoziID && ainaMwanajeshiID > 0) {
                            // Clear the existing options except for the first placeholder
                            kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                            // Fetch new data based on the selected region
                            fetch('/wanamaji/load-kozi', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                console.log(data.length);
                                // Check if data is returned and has items
                                if (data.length > 0) {
                                    data.forEach(function(item) {
                                        console.log(item);
                                        let option = new Option(item.name, item.id);
                                        kozi_select.add(option); // Populate owner_address_region dropdown
                                    });
                                    kozi_select.add(new Option("Kozi Nyingine", "-1"));
                                } else {
                                    kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                                }
                            })
                            .catch(error => {
                                console.error('Error loading the data: ', error);
                                kozi_select.innerHTML = '<option value="">Error loading data</option>';
                            });
                        } else {
                            // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                            $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                            $("#modalError").modal('show')
                        }

                    });
                    

                    kozi_select.addEventListener('change', function() {
                        var koziID = kozi_select.value; 
                        console.log(koziID);

                        if (koziID == -1) {
                            valueInputJinaKoziDIV.style.display = 'block';
                        } else {
                            valueInputJinaKoziDIV.style.display = 'none';
                        }
                    });
                    
                    // Add event listener for remove button
                    const removeKozi = document.getElementById(`removeKozi${formCountKozi}`);
                    removeKozi.addEventListener('click', function() {
                        koziContainer.removeChild(newKozi); // Remove the entire form element
                        checkIfEmpty();
                    });

                });

                $('#addElimuRaia').click(function () {
                    formCountElimuRaia++;
                    var saveElimuRaia = document.getElementById('saveElimuRaia');
                    saveElimuRaia.style.display = 'block';

                    console.log(formCountElimuRaia);
                    //const elimuRaiaContainer = $('elimuRaiaContainer');
                    const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');

                    // Create a new form section
                    const newElimuRaia = document.createElement('div');
                    newElimuRaia.classList.add('form-item');

                    newElimuRaia.innerHTML = `
                    <div class="card">
                        <div class="accordion-item">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountElimuRaia}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountElimuRaia}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountElimuRaia}">
                                    Elimu #${formCountElimuRaia}
                                </button>
                            </h4>
                            <div id="accor_nesting2Examplecollapse${formCountElimuRaia}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountElimuRaia}" data-bs-parent="#accordionnesting2">
                                <div class="accordion-body">
                                    <div class="live-preview">
                                        <div class="row gy-3">

                                            <div class="col-xxl-3 col-md-4">
                                                <div id = "issuanceCountry${formCountElimuRaia}" class="show elimu-daraja-wrapper">
                                                    <label for="valueInput" class="form-label">Elimu</label>
                                                    <select id = "elimu_kiraia_select${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                        <option value="0" selected>Elimu</option>
                                                        @foreach($elimu as $elimu_key)
                                                        <option value="{{$elimu_key['id']}}" data-merchant_tin="{{$elimu_key['name']}}">{{$elimu_key['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputTaasisi${formCountElimuRaia}" class="form-label">Shule/Chuo/VETA/Taasisi</label>
                                                    <input type="text" class="form-control" id="valueInputTaasisi${formCountElimuRaia}" placeholder="">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali jaza Taarifa hii</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKuanza${formCountElimuRaia}" class="form-label">Mwaka wa Kuanza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKuanza${formCountElimuRaia}" placeholder="Andika mwaka wa kuanza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kuanza</div>
                                                <!--end col-->
                                            </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="valueInputMwakaKumaliza${formCountElimuRaia}" class="form-label">Mwaka wa Kumaliza</label>
                                                    <input type="text" class="form-control" id="valueInputMwakaKumaliza${formCountElimuRaia}" placeholder="Andika mwaka wa kumaliza">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Andika Mwaka wa kumaliza</div>
                                                <!--end col-->
                                            </div>


                                            <div id="professionDiv${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                <div>
                                                    <label for="valueInputProfession${formCountElimuRaia}" id="valueInputProfessionTitle${formCountElimuRaia}" class="form-label">Profession</label>
                                                    <input type="text" class="form-control" id="valueInputProfession${formCountElimuRaia}" placeholder="Jaza taarifa hii">
                                                </div>
                                                <div class="invalid-feedback">Tafadhali Jaza taarifa hii</div>
                                                <!--end col-->
                                            </div>
                                            
                                            <div id = "elimuDaraja${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse elimu-daraja-wrapper">
                                                <label for="valueInput" class="form-label">Daraja</label>
                                                <select id = "select_daraja${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                    <option value="0" selected>Chagua</option>
                                                    @foreach($madaraja as $daraja)
                                                    <option value="{{$daraja['id']}}">{{$daraja['name']}}</option>
                                                    @endforeach
                                                </select>
                                            <!--end col-->
                                            </div>

                                        </div>

                                        <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                            <div class="container d-flex justify-content-end align-items-end">
                                                <button id="removeElimuKiraia${formCountElimuRaia}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;


                    console.log(elimuRaiaContainer);
                    elimuRaiaContainer.appendChild(newElimuRaia);
                    // Add event listener for dropdown change
                    const elimu_kiraia_select = document.getElementById(`elimu_kiraia_select${formCountElimuRaia}`);
                    const elimuDarajaDiv = document.getElementById(`elimuDaraja${formCountElimuRaia}`);
                    const select_daraja = document.getElementById(`select_daraja${formCountElimuRaia}`);
                    const professionDiv = document.getElementById(`professionDiv${formCountElimuRaia}`);
                    const valueInputProfessionTitle = document.getElementById(`valueInputProfessionTitle${formCountElimuRaia}`);
                    //const responseDiv = document.getElementById(`response${formCountElimuRaia}`);
                    
                    elimu_kiraia_select.addEventListener('change', function() {
                        var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                        console.log(elimuTypeID);
                        if(elimuTypeID == 2 || elimuTypeID == 3){
                            elimuDarajaDiv.style.display = 'block';
                            professionDiv.style.display = 'none';
                        }
                        else if(elimuTypeID == 4 || elimuTypeID == 5){
                            valueInputProfessionTitle.textContent = "Profession";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else if(elimuTypeID == 6 || elimuTypeID == 7){
                            valueInputProfessionTitle.textContent = "Ujuzi";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else{
                            elimuDarajaDiv.style.display = 'none';
                            professionDiv.style.display = 'none';
                        }
                    });
                    
                    // matokeo_kozi.addEventListener('change', function() {
                    //     var matokeoKoziID = matokeo_kozi.value; // Get the selected category ID
                    //     console.log(matokeoKoziID);
                        
                    // });
                    
                    // owner_address_region.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_district.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_ward.addEventListener('change', function() {
                        
                    // });

                    // Add event listener for remove button
                    const removeElimuKiraia = document.getElementById(`removeElimuKiraia${formCountElimuRaia}`);
                    removeElimuKiraia.addEventListener('click', function() {
                        elimuRaiaContainer.removeChild(newElimuRaia); // Remove the entire form element
                        checkIfEmptyElimuKiraia();
                    });

                });

                $('#addMedali').click(function () {
                    formCountMedali++;

                    var saveMedali = document.getElementById('saveMedali');
                    saveMedali.style.display = 'block';

                    console.log(formCountMedali);
                    //const medaliContainer = $('medaliContainer');
                    const medaliContainer = document.getElementById('medaliContainer');

                    // Create a new form section
                    const newMedali = document.createElement('div');
                    newMedali.classList.add('form-item');

                    newMedali.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMedali}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMedali}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMedali}">
                                        Medali #${formCountMedali}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountMedali}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMedali}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina ya Medali</label>
                                                        <input type="text" class="form-control" id="valueInputAinaMedali${formCountMedali}" placeholder="Andika aina ya medali">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaAliotunukiwa${formCountMedali}" placeholder="Andika mwaka wa kutunukiwa">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMedali${formCountMedali}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(medaliContainer);
                    medaliContainer.appendChild(newMedali);
                    // Add event listener for dropdown change
                    // const medali_type = document.getElementById(`medali_type${formCountMedali}`);
                    
                    // medali_type.addEventListener('change', function() {
                    //     var medaliTypeID = medali_type.value;; // Get the selected category ID
                    //     console.log(medaliTypeID);
                    //     // matokeoKoziDiv.style.display = 'block';
                    // });
                    
                    // owner_address_region.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_district.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_ward.addEventListener('change', function() {
                        
                    // });

                    // Add event listener for remove button
                    const removeMedali = document.getElementById(`removeMedali${formCountMedali}`);
                    removeMedali.addEventListener('click', function() {
                        medaliContainer.removeChild(newMedali); // Remove the entire form element
                        checkIfEmptyMedali();
                    });

                });

                $('#addMisheni').click(function () {
                    formCountMisheni++;

                    var saveMisheni = document.getElementById('saveMisheni');
                    saveMisheni.style.display = 'block';

                    console.log(formCountMisheni);
                    //const misheniContainer = $('misheniContainer');
                    const misheniContainer = document.getElementById('misheniContainer');

                    // Create a new form section
                    const newMisheni = document.createElement('div');
                    newMisheni.classList.add('form-item');

                    newMisheni.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMisheni}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMisheni}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMisheni}">
                                        Misheni #${formCountMisheni}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountMisheni}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMisheni}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                <div class="col-xxl-3 col-md-4 aina-misheni-select">
                                                    <label for="valueInput" class="form-label">Misheni</label>
                                                    <select id = "aina_misheni${formCountMisheni}" class="form-select mb-3 aina-misheni-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Misheni</option>
                                                        @foreach($aina_misheni as $misheni)
                                                        <option value="{{$misheni['id']}}" data-merchant_tin="{{$misheni['name']}}">{{$misheni['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali chagua Misheni</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina ya Misheni</label>
                                                        <input type="text" class="form-control" id="valueInputAinaMisheni${formCountMisheni}" placeholder="Andika Aina ya Misheni">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza Aina ya Misheni</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mahali</label>
                                                        <input type="text" class="form-control" id="valueInputMahali${formCountMisheni}" placeholder="Andika Mahali">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza mahali</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaMisheni${formCountMisheni}" placeholder="Andika mwaka wa kutunukiwa">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMisheni${formCountMisheni}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(misheniContainer);
                    misheniContainer.appendChild(newMisheni);
                    // Add event listener for dropdown change
                    // const medali_type = document.getElementById(`medali_type${formCountMisheni}`); 
                    
                    // medali_type.addEventListener('change', function() {
                    //     var medaliTypeID = medali_type.value;; // Get the selected category ID
                    //     console.log(medaliTypeID);
                    //     // matokeoKoziDiv.style.display = 'block';
                    // });
                    
                    // owner_address_region.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_district.addEventListener('change', function() {
                        
                    // });
                    
                    // owner_address_ward.addEventListener('change', function() {
                        
                    // });

                    // Add event listener for remove button
                    const removeMisheni = document.getElementById(`removeMisheni${formCountMisheni}`);
                    removeMisheni.addEventListener('click', function() {
                        misheniContainer.removeChild(newMisheni); // Remove the entire form element
                        checkIfEmptyMisheni();
                    });

                });

                $('#addWatoto').click(function () {
                    formCountWatoto++;

                    console.log(formCountWatoto);
                    //const watotoContainer = $('watotoContainer');
                    const watotoContainer = document.getElementById('watotoContainer');

                    // Create a new form section
                    const newWatoto = document.createElement('div');
                    newWatoto.classList.add('form-item');

                    newWatoto.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountWatoto}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountWatoto}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountWatoto}">
                                        Mtoto #${formCountWatoto}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountWatoto}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountWatoto}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">

                                                <div class="col-xxl-6 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Jina Kamili</label>
                                                        <input type="text" class="form-control" id="valueInputJinaKamiliMtoto${formCountWatoto}" placeholder="Andika Jina Kamili">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza Jina Kamili</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-6 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina Mtoto</label>
                                                        <select id = "aina_mtoto_select${formCountWatoto}" class="form-select mb-3 aina-watoto-select" aria-label="Default select example">
                                                            
                                                            @foreach($aina_watoto as $mtoto)
                                                            <option value="{{$mtoto['id']}}" data-merchant_tin="{{$mtoto['name']}}">{{$mtoto['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Tafadhali Chagua Aina Mtoto</div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                    <div class="container d-flex justify-content-end align-items-end">
                                                        <button id="removeMtoto${formCountWatoto}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(watotoContainer);
                    watotoContainer.appendChild(newWatoto);

                    // Add event listener for remove button
                    const removeWatoto = document.getElementById(`removeMtoto${formCountWatoto}`);
                    removeWatoto.addEventListener('click', function() {
                        watotoContainer.removeChild(newWatoto); // Remove the entire form element
                        checkIfEmptyWatoto();
                    });

                });

                $('#saveTaarifaBinafsi').click(function () {

                    let selects = document.querySelectorAll('.taarifa-binafsi-select');

                    let allValid = true;

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                        document.getElementById('valueInputNambaJeshi'),
                        document.getElementById('valueInputFirstName'),
                        document.getElementById('valueInputMiddleName'),
                        document.getElementById('valueInputLastName'),
                        document.getElementById('valueInputUjuzi'),
                        document.getElementById('valueInputCno'),
                        document.getElementById('valueInputNambaKitambulisho'),
                        document.getElementById('valueInputKombania'),
                        document.getElementById('valueInputKikosiUlichotoka'),
                        document.getElementById('valueInputTareheKuzaliwa'),
                        document.getElementById('valueInputUzito'),
                        document.getElementById('valueInputUrefu'),
                        document.getElementById('valueInputTareheKujiungaJeshi'),
                        document.getElementById('valueInputTareheKamisheni'),
                        document.getElementById('valueInputTareheKupandaCheo'),
                        document.getElementById('valueInputTareheKustaafu'),
                        document.getElementById('valueInputAnuani'),
                        document.getElementById('valueInputNambaSimu'),
                        document.getElementById('valueInputMkoaUliozaliwa'),
                        document.getElementById('valueInputWilaya'),
                        document.getElementById('valueInputTarafa'),
                        document.getElementById('valueInputKata'),
                        document.getElementById('valueInputKijiji'),
                        document.getElementById('valueInputKitongoji'),
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


                    console.log("VALID B4 : " + allValid);
                    
                    if (allValid) {
                        Array.from(selects).some(function(select) {
                            if (select.value === "0") {
                                console.log("VALID VALUE : " + select.value);
                                console.log("VALID B4 HERE : " + allValid);
                                select.classList.add("is-invalid");
                                allValid = false;

                                // Smooth scroll and focus
                                select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                select.focus();

                                return true; // exit loop early
                            } else {
                                select.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }

                            console.log("VALID AFTR : " + allValid);
                        });
                    }

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });

                    // Live remove is-invalid on select change
                    selects.forEach(function (select) {
                        select.addEventListener('change', function () {
                            if (this.value !== "0") {
                                this.classList.remove("is-invalid");
                                allValid = true;
                            }
                        });
                    });


                    console.log("VALID : " + allValid);

                    if (allValid) {
                    // Kama zote ziko sawa, sasa tuma form

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;
                        const cheo = document.getElementById('selectCheo').value;
                        const first_name = document.getElementById('valueInputFirstName').value;
                        const middle_name = document.getElementById('valueInputMiddleName').value;
                        const last_name = document.getElementById('valueInputLastName').value;
                        const ujuzi = document.getElementById('valueInputUjuzi').value;
                        const cno = document.getElementById('valueInputCno').value;
                        const namba_kitambulisho = document.getElementById('valueInputNambaKitambulisho').value;
                        const kikosi = document.getElementById('selectKikosi').value;
                        const kombania = document.getElementById('valueInputKombania').value;
                        const elimu = document.getElementById('selectElimu').value;
                        const kikosi_ulichotoka = document.getElementById('valueInputKikosiUlichotoka').value;
                        const dob = document.getElementById('valueInputTareheKuzaliwa').value;
                        const kundi_damu = document.getElementById('selectKundiDamu').value;
                        const uzito = document.getElementById('valueInputUzito').value;
                        const urefu = document.getElementById('valueInputUrefu').value;
                        const tarehe_kujiunga_jeshi = document.getElementById('valueInputTareheKujiungaJeshi').value;
                        const tarehe_kamisheni = document.getElementById('valueInputTareheKamisheni').value;
                        const tarehe_kupanda_cheo = document.getElementById('valueInputTareheKupandaCheo').value;
                        const tarehe_kustaafu = document.getElementById('valueInputTareheKustaafu').value;
                        const anuani = document.getElementById('valueInputAnuani').value;
                        const namba_simu = document.getElementById('valueInputNambaSimu').value;
                        const dini = document.getElementById('selectDini').value;
                        const mkoa_kuzaliwa = document.getElementById('valueInputMkoaUliozaliwa').value;
                        const wilaya = document.getElementById('valueInputWilaya').value;
                        const tarafa = document.getElementById('valueInputTarafa').value;
                        const kata = document.getElementById('valueInputKata').value;
                        const kijiji = document.getElementById('valueInputKijiji').value;
                        const kitongoji = document.getElementById('valueInputKitongoji').value;
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";
                    
                        document.querySelector('.loader-overlay').style.display = 'flex';
                        $.ajax({
                            url: '/wanamaji/save-taarifa-binafsi',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                cheo : cheo,
                                first_name: first_name,
                                middle_name: middle_name,
                                last_name: last_name,
                                ujuzi : ujuzi,
                                cno : cno,
                                namba_kitambulisho : namba_kitambulisho,
                                kikosi: kikosi,
                                kombania: kombania,
                                elimu: elimu,
                                kikosi_ulichotoka: kikosi_ulichotoka,
                                dob: dob,
                                kundi_damu: kundi_damu,
                                uzito: uzito,
                                urefu: urefu,
                                tarehe_kujiunga_jeshi: tarehe_kujiunga_jeshi,
                                tarehe_kamisheni: tarehe_kamisheni,
                                tarehe_kupanda_cheo: tarehe_kupanda_cheo,
                                tarehe_kustaafu: tarehe_kustaafu,
                                anuani: anuani,
                                namba_simu: namba_simu,
                                dini: dini,
                                mkoa_kuzaliwa: mkoa_kuzaliwa,
                                wilaya: wilaya,
                                tarafa: tarafa,
                                kata: kata,
                                kijiji: kijiji,
                                kitongoji: kitongoji,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    applicationSubmitted = 1; //Hii kuzuia mtu akirudi back then Next
                                    application_id = response.application_id;
                                    
                                    console.log('Data saved successfully:', response);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToast').length) {

                                            $('#borderedSuccessToast .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToast'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                    }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }
                
                });

                $('#saveKoziKijeshi').click(function () {

                    // let selects = document.querySelectorAll('.-select');

                    let allValid = true;


                    document.querySelectorAll('[id^="mwanajeshi_select"]').forEach(selectEl => {
                        const match = selectEl.id.match(/\d+$/); 
                        if (!match) return;
                        const koziElementID = match[0]; 
                        
                        console.log("Kozi # : " + koziElementID);

                        // let selects = document.querySelectorAll('.kozi-kijeshi-select');

                        // Tafuta input zote tunazotaka kuangalia
                        var fields = [
                            document.getElementById(`mwanajeshi_select${koziElementID}`),
                            document.getElementById(`aina_kozi_select${koziElementID}`),
                            document.getElementById(`kozi_select${koziElementID}`),
                            document.getElementById(`valueInputIntake${formCountKozi}`),
                            document.getElementById(`valueInputJinaKozi${formCountKozi}`),
                            document.getElementById(`valueInputMwaka${formCountKozi}`),
                            document.getElementById(`valueInputTraining${formCountKozi}`),      
                        ];

                        fields.some(function(field) {
                            const isOptional = field.getAttribute("data-optional") === "true";
                            const isHidden = field.offsetParent === null;
                            if (!isHidden && field.value.trim() === "" && !isOptional) {
                                field.classList.add("is-invalid");
                                allValid = false;
                                
                                field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                field.focus();
                                return true;
                            } else {
                                field.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }
                        });

                        console.log("VALID KOZI : " + allValid);

                        // Reuse the same fields array for input validation
                        fields.forEach(function (field) {
                            field.addEventListener('input', function () {
                                if (this.value.trim() !== "") {
                                    this.classList.remove("is-invalid");
                                    // Optionally: this.classList.add("is-valid");
                                    allValid = true;
                                }
                            });
                        });


                        console.log("VALID TWO : " + allValid);

                        if (allValid) {

                            document.querySelectorAll('.kozi-kijeshi-select-wrapper').forEach(wrapper => {
                                // const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                                const select = wrapper.querySelector('select');

                                if (select && select.value === "0") {
                                    select.classList.add("is-invalid");
                                    allValid = false;

                                    // Smooth scroll and focus
                                    select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                    select.focus();
                                } else if (select) {
                                    select.classList.remove("is-invalid");
                                }
                            });

                        }

                    });
                    
                        console.log("VALID THREE : " + allValid);

                    if (allValid) {

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                        if(namba_jeshi == ""){
                            $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                            $("#modalError").modal('show');
                            return;
                        }

                        // Kama zote ziko sawa, sasa tuma form
                        document.querySelector('.loader-overlay').style.display = 'flex';

                        const allKoziKijeshiData = [];
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";
                        //KOZI KIJESHI
                        $('#koziContainer .form-item').each(function(index, element) {
                            const koziKijeshiID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                            console.log('ITERATION:', koziKijeshiID);
                            const data_id = document.querySelector(`#valueInputIntake${koziKijeshiID}`).getAttribute("data-id");
                            const mwanajeshi_id = $(`#mwanajeshi_select${koziKijeshiID}`).val(); 
                            const aina_kozi_id = $(`#aina_kozi_select${koziKijeshiID}`).val(); 
                            const kozi_id = $(`#kozi_select${koziKijeshiID}`).val(); 
                            const jina_kozi = $(`#valueInputJinaKozi${koziKijeshiID}`).val();  // Use the extracted ID to get the value
                            const intake = $(`#valueInputIntake${koziKijeshiID.match(/\d+/)[0]}`).val();
                            const mwaka = $(`#valueInputMwaka${koziKijeshiID.match(/\d+/)[0]}`).val();
                            const taasisi = $(`#valueInputTraining${koziKijeshiID.match(/\d+/)[0]}`).val();

                            allKoziKijeshiData.push({
                                data_id: data_id,
                                mwanajeshi_id: mwanajeshi_id,
                                aina_kozi_id: aina_kozi_id,
                                kozi_id: kozi_id,
                                jina_kozi: jina_kozi,
                                intake: intake,
                                mwaka: mwaka,
                                taasisi: taasisi
                            });
                        });
                    
                        $.ajax({
                            url: '/wanamaji/save-kozi-kijeshi',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                data: allKoziKijeshiData,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    
                                    console.log('Data saved successfully:', response);

                                    $('#valueInputNambaJeshi').prop('disabled', true);
                                    // for (let i = 0; i < formCountKozi; i++) {
                                    //     const koziContainer = document.getElementById('koziContainer');
                                    //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                    //     if (newKoziDiv) {
                                    //         koziContainer.removeChild(newKoziDiv);
                                    //     }
                                    // }
                                    const allKoziDivs = document.querySelectorAll('#koziContainer .form-item');
                                    allKoziDivs.forEach(div => div.remove());
                                    formCountKozi = 0;

                                    populateKoziKijeshi(response.kozi_data, response.kozi_zenyewe);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToastKoziKijeshi').length) {

                                            $('#borderedSuccessToastKoziKijeshi .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastKoziKijeshi'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                    }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }
                
                });

                $('#saveElimuRaia').click(function () {


                    let allValid = true;

                    document.querySelectorAll('[id^="elimu_kiraia_select"]').forEach(selectEl => {
                        const match = selectEl.id.match(/\d+$/); 
                        if (!match) return;
                        const raiaElementID = match[0]; 
                        
                        console.log("Raia # : " + raiaElementID);

                        let selects = document.querySelectorAll('.elimu-raia-select');

                        // Tafuta input zote tunazotaka kuangalia
                        var fields = [
                            document.getElementById(`elimu_kiraia_select${raiaElementID}`),
                            document.getElementById(`valueInputTaasisi${raiaElementID}`),
                            document.getElementById(`valueInputMwakaKuanza${raiaElementID}`),
                            document.getElementById(`valueInputMwakaKumaliza${raiaElementID}`),
                            document.getElementById(`valueInputProfession${raiaElementID}`),
                            document.getElementById(`select_daraja${raiaElementID}`),
                        ];

                        fields.some(function(field) {
                            const isOptional = field.getAttribute("data-optional") === "true";
                            const isHidden = field.offsetParent === null;
                            if (!isHidden && field.value.trim() === "" && !isOptional) {
                                field.classList.add("is-invalid");
                                allValid = false;
                                
                                field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                field.focus();
                                return true;
                            } else {
                                field.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }
                        });

                        console.log("VALID RAIA : " + allValid);

                        // Reuse the same fields array for input validation
                        fields.forEach(function (field) {
                            field.addEventListener('input', function () {
                                if (this.value.trim() !== "") {
                                    this.classList.remove("is-invalid");
                                    // Optionally: this.classList.add("is-valid");
                                    allValid = true;
                                }
                            });
                        });

                        if (allValid) {

                            document.querySelectorAll('.elimu-daraja-wrapper').forEach(wrapper => {
                                const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                                const select = wrapper.querySelector('select');

                                if (isVisible && select && select.value === "0") {
                                    select.classList.add("is-invalid");
                                    allValid = false;

                                    // Smooth scroll and focus
                                    select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                    select.focus();
                                } else if (select) {
                                    select.classList.remove("is-invalid");
                                }
                            });
                        }

                    });

                    // Live remove is-invalid on select change
                    // selects.forEach(function (select) {
                    //     select.addEventListener('change', function () {
                    //         if (this.value !== "0") {
                    //             this.classList.remove("is-invalid");
                    //             allValid = true;
                    //         }
                    //     });
                    // });


                    console.log("VALID : " + allValid);

                    if (allValid) {

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                        if(namba_jeshi == ""){
                            $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                            $("#modalError").modal('show');
                            return;
                        }

                        // Kama zote ziko sawa, sasa tuma form
                        document.querySelector('.loader-overlay').style.display = 'flex';


                        const allElimuKiraiaData = [];
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";
                        //ELIMU KIRAIA
                        $('#elimuRaiaContainer .form-item').each(function(index, element) {
                            const elimuKiraiaID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                            console.log('ITERATION:', elimuKiraiaID);
                            const data_id = document.querySelector(`#valueInputTaasisi${elimuKiraiaID}`).getAttribute("data-id");
                            const elimu = $(`#elimu_kiraia_select${elimuKiraiaID}`).val();  // Use the extracted ID to get the value
                            const jina_taasisi = $(`#valueInputTaasisi${elimuKiraiaID}`).val();  // Use the extracted ID to get the value
                            const mwaka_kuanza = $(`#valueInputMwakaKuanza${elimuKiraiaID.match(/\d+/)[0]}`).val();
                            const mwaka_kumaliza = $(`#valueInputMwakaKumaliza${elimuKiraiaID.match(/\d+/)[0]}`).val();
                            const select_daraja = $(`#select_daraja${elimuKiraiaID.match(/\d+/)[0]}`).val();
                            const profession = $(`#valueInputProfession${elimuKiraiaID.match(/\d+/)[0]}`).val();

                            allElimuKiraiaData.push({
                                data_id: data_id,
                                elimu: elimu,
                                jina_taasisi: jina_taasisi,
                                mwaka_kuanza: mwaka_kuanza,
                                mwaka_kumaliza: mwaka_kumaliza,
                                daraja: select_daraja,
                                profession: profession,
                            });
                        });

                        $.ajax({
                            url: '/wanamaji/save-elimu-kiraia',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                data: allElimuKiraiaData,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    
                                    console.log('Data saved successfully:', response);

                                    // $('#valueInputNambaJeshi').prop('disabled', true);
                                    // for (let i = 0; i < formCountKozi; i++) {
                                    //     const koziContainer = document.getElementById('koziContainer');
                                    //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                    //     if (newKoziDiv) {
                                    //         koziContainer.removeChild(newKoziDiv);
                                    //     }
                                    // }
                                    const allElimuKiraiaDivs = document.querySelectorAll('#elimuRaiaContainer .form-item');
                                    allElimuKiraiaDivs.forEach(div => div.remove());
                                    formCountElimuRaia = 0;
                                    
                                    populateElimuRaia(response.elimu_raia);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToastElimuKiraia').length) {

                                            $('#borderedSuccessToastElimuKiraia .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastElimuKiraia'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                    }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }

                });

                $('#saveMedali').click(function () {

                    // let selects = document.querySelectorAll('.-select');

                    let allValid = true;


                    console.log("Medali # : " + formCountMedali);

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                            document.getElementById(`valueInputAinaMedali${formCountMedali}`),
                            document.getElementById(`valueInputMwakaAliotunukiwa${formCountMedali}`),
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

                    console.log("VALID B4 : " + allValid);

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });

                    // Live remove is-invalid on select change
                    // selects.forEach(function (select) {
                    //     select.addEventListener('change', function () {
                    //         if (this.value !== "0") {
                    //             this.classList.remove("is-invalid");
                    //             allValid = true;
                    //         }
                    //     });
                    // });


                    console.log("VALID : " + allValid);

                    if (allValid) {

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                        if(namba_jeshi == ""){
                            $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                            $("#modalError").modal('show');
                            return;
                        }

                        // Kama zote ziko sawa, sasa tuma form
                        document.querySelector('.loader-overlay').style.display = 'flex';

                        const allMedaliData = [];
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";
                        //MEDALI
                        $('#medaliContainer .form-item').each(function(index, element) {
                            const $ainaInput = $(element).find("input[id^='valueInputAinaMedali']");// Directly get the ID of the select element
                            const ainaMedaliID = $ainaInput.attr('id').match(/\d+/)[0];

                            console.log('ITERATION:', ainaMedaliID);
                            const data_id = document.querySelector(`#valueInputAinaMedali${ainaMedaliID}`).getAttribute("data-id");
                            const aina_medali = $(`#valueInputAinaMedali${ainaMedaliID}`).val();  // Use the extracted ID to get the value
                            const mwaka = $(`#valueInputMwakaAliotunukiwa${ainaMedaliID.match(/\d+/)[0]}`).val();

                            allMedaliData.push({
                                data_id: data_id,
                                aina_medali: aina_medali,
                                mwaka: mwaka,
                            });
                        });
                    
                        $.ajax({
                            url: '/wanamaji/save-aina-medali',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                data: allMedaliData,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    
                                    console.log('Data saved successfully:', response);

                                    $('#valueInputNambaJeshi').prop('disabled', true);
                                
                                    const allMedaliDivs = document.querySelectorAll('#medaliContainer .form-item');
                                    allMedaliDivs.forEach(div => div.remove());
                                    formCountMedali = 0;

                                    populateAinaMedali(response.medali);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToastMedali').length) {

                                            $('#borderedSuccessToastMedali .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastMedali'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                    }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }
                
                });

                $('#saveMisheni').click(function () {

                    let allValid = true;

                    document.querySelectorAll('[id^="aina_misheni"]').forEach(selectEl => {
                        const match = selectEl.id.match(/\d+$/); 
                        if (!match) return;
                        const misheniElementID = match[0]; 
                        
                        console.log("Misheni # : " + misheniElementID);

                        // Tafuta input zote tunazotaka kuangalia
                        var fields = [
                            // document.getElementById(`elimu_kiraia_select${misheniElementID}`),
                            document.getElementById(`aina_misheni${misheniElementID}`),
                            document.getElementById(`valueInputAinaMisheni${misheniElementID}`),
                            document.getElementById(`valueInputMahali${misheniElementID}`),
                            document.getElementById(`valueInputMwakaMisheni${misheniElementID}`),
                        ];

                        fields.some(function(field) {
                            const isOptional = field.getAttribute("data-optional") === "true";
                            // const isHidden = field.offsetParent === null;
                            if (field.value.trim() === "" && !isOptional) {
                                field.classList.add("is-invalid");
                                allValid = false;
                                
                                field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                field.focus();
                                return true;
                            } else {
                                field.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }
                        });

                        console.log("VALID MISHENI : " + allValid);

                        // Reuse the same fields array for input validation
                        fields.forEach(function (field) {
                            field.addEventListener('input', function () {
                                if (this.value.trim() !== "") {
                                    this.classList.remove("is-invalid");
                                    // Optionally: this.classList.add("is-valid");
                                    allValid = true;
                                }
                            });
                        });

                        // if (allValid) {

                        //     document.querySelectorAll('.elimu-daraja-wrapper').forEach(wrapper => {
                        //         const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                        //         const select = wrapper.querySelector('select');

                        //         if (isVisible && select && select.value === "0") {
                        //             select.classList.add("is-invalid");
                        //             allValid = false;

                        //             // Smooth scroll and focus
                        //             select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        //             select.focus();
                        //         } else if (select) {
                        //             select.classList.remove("is-invalid");
                        //         }
                        //     });
                        // }

                    });

                    if (allValid) {

                        document.querySelectorAll('.aina-misheni-select').forEach(wrapper => {
                            // const isVisible = wrapper.offsetHeight > 0 && wrapper.offsetParent !== null;
                            const select = wrapper.querySelector('select');

                            if (select && select.value === "0") {
                                select.classList.add("is-invalid");
                                allValid = false;

                                // Smooth scroll and focus
                                select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                select.focus();
                            } else if (select) {
                                select.classList.remove("is-invalid");
                            }
                        });
                    }

                    console.log("VALID : " + allValid);

                    if (allValid) {

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                        if(namba_jeshi == ""){
                            $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                            $("#modalError").modal('show');
                            return;
                        }

                        // Kama zote ziko sawa, sasa tuma form
                        document.querySelector('.loader-overlay').style.display = 'flex';


                        const misheniData = [];
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";
                        //ELIMU KIRAIA
                        $('#misheniContainer .form-item').each(function(index, element) {
                            const misheniID = $(element).find('.form-select').attr('id').match(/\d+/)[0];  // Directly get the ID of the select element

                            console.log('ITERATION:', misheniID);
                            const data_id = document.querySelector(`#valueInputAinaMisheni${misheniID}`).getAttribute("data-id");
                            const misheni = $(`#aina_misheni${misheniID}`).val();  // Use the extracted ID to get the value
                            const aina_misheni = $(`#valueInputAinaMisheni${misheniID}`).val();  // Use the extracted ID to get the value
                            const mahali = $(`#valueInputMahali${misheniID.match(/\d+/)[0]}`).val();
                            const mwaka = $(`#valueInputMwakaMisheni${misheniID.match(/\d+/)[0]}`).val();

                            misheniData.push({
                                data_id: data_id,
                                misheni: misheni,
                                aina_misheni: aina_misheni,
                                mahali: mahali,
                                mwaka: mwaka,
                            });
                        });

                        $.ajax({
                            url: '/wanamaji/save-misheni',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                data: misheniData,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    
                                    console.log('Data saved successfully:', response);

                                    // $('#valueInputNambaJeshi').prop('disabled', true);
                                    // for (let i = 0; i < formCountKozi; i++) {
                                    //     const koziContainer = document.getElementById('koziContainer');
                                    //     const newKoziDiv = koziContainer.querySelector('.new-kozi');
                                    //     if (newKoziDiv) {
                                    //         koziContainer.removeChild(newKoziDiv);
                                    //     }
                                    // }
                                    const allMisheniDivs = document.querySelectorAll('#misheniContainer .form-item');
                                    allMisheniDivs.forEach(div => div.remove());
                                    formCountMisheni = 0;
                                    
                                    populateMisheni(response.misheni);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToastMisheni').length) {

                                            $('#borderedSuccessToastMisheni .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastMisheni'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                            }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }

                });  

                $('#saveTaarifaFamilia').click(function () {

                    let selects = document.querySelectorAll('.taarifa-familia-select');

                    let allValid = true;

                    // Tafuta input zote tunazotaka kuangalia
                    var fields = [
                        document.getElementById('valueInputJinaBaba'),
                        document.getElementById('valueInputJinaMama'),
                        document.getElementById('valueInputJinaMwenza'),
                        document.getElementById('valueInputJinaBabaMkwe'),
                        document.getElementById('valueInputJinaMamaMkwe'),
                        document.getElementById('valueInputJinaMrithi')
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


                    console.log("VALID B4 : " + allValid);
                    
                    if (allValid) {
                        Array.from(selects).some(function(select) {
                            if (select.value === "0") {
                                console.log("VALID VALUE : " + select.value);
                                console.log("VALID B4 HERE : " + allValid);
                                select.classList.add("is-invalid");
                                allValid = false;

                                // Smooth scroll and focus
                                select.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                select.focus();

                                return true; // exit loop early
                            } else {
                                select.classList.remove("is-invalid");
                                allValid = true;
                                return false;
                            }

                            console.log("VALID AFTR : " + allValid);
                        });
                    }

                    // Reuse the same fields array for input validation
                    fields.forEach(function (field) {
                        field.addEventListener('input', function () {
                            if (this.value.trim() !== "") {
                                this.classList.remove("is-invalid");
                                // Optionally: this.classList.add("is-valid");
                                allValid = true;
                            }
                        });
                    });

                    // Live remove is-invalid on select change
                    selects.forEach(function (select) {
                        select.addEventListener('change', function () {
                            if (this.value !== "0") {
                                this.classList.remove("is-invalid");
                                allValid = true;
                            }
                        });
                    });

                    console.log("VALID : " + allValid);

                    if (allValid && formCountWatoto > 0) {

                        document.querySelectorAll('[id^="valueInputJinaKamiliMtoto"]').forEach(selectEl => {
                            const match = selectEl.id.match(/\d+$/); 
                            if (!match) return;
                            const watotoElementID = match[0]; 
                            
                            console.log("Watoto # : " + watotoElementID);

                            // let selects = document.querySelectorAll('.elimu-raia-select');

                            // Tafuta input zote tunazotaka kuangalia
                            var fields = [
                                document.getElementById(`valueInputJinaKamiliMtoto${watotoElementID}`)
                            ];

                            fields.some(function(field) {
                                const isOptional = field.getAttribute("data-optional") === "true";
                                const isHidden = field.offsetParent === null;
                                if (!isHidden && field.value.trim() === "" && !isOptional) {
                                    field.classList.add("is-invalid");
                                    allValid = false;
                                    
                                    field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                    field.focus();
                                    return true;
                                } else {
                                    field.classList.remove("is-invalid");
                                    allValid = true;
                                    return false;
                                }
                            });

                            console.log("VALID WATOTO : " + allValid);

                            // Reuse the same fields array for input validation
                            fields.forEach(function (field) {
                                field.addEventListener('input', function () {
                                    if (this.value.trim() !== "") {
                                        this.classList.remove("is-invalid");
                                        // Optionally: this.classList.add("is-valid");
                                        allValid = true;
                                    }
                                });
                            });

                        });

                    }
                    

                    if (allValid) {

                        const namba_jeshi = document.getElementById('valueInputNambaJeshi').value;

                        if(namba_jeshi == ""){
                            $('#modalErrorMessage').text("Tafadhali jaza Namba ya Jeshi");
                            $("#modalError").modal('show');
                            return;
                        }

                        // Kama zote ziko sawa, sasa tuma form
                        document.querySelector('.loader-overlay').style.display = 'flex';

                        // Kama zote ziko sawa, sasa tuma form
                        const jina_baba = document.getElementById('valueInputJinaBaba').value;
                        const hali_baba = document.getElementById('selectHaliBaba').value;
                        const jina_mama = document.getElementById('valueInputJinaMama').value;
                        const hali_mama = document.getElementById('selectHaliMama').value;
                        const jina_mwenza = document.getElementById('valueInputJinaMwenza').value;
                        const mwenza = document.getElementById('selectMwenza').value;
                        const hali_mwenza = document.getElementById('selectHaliMwenza').value;
                        const jina_baba_mkwe = document.getElementById('valueInputJinaBabaMkwe').value;
                        const hali_baba_mkwe = document.getElementById('selectHaliBabaMkwe').value;
                        const jina_mama_mkwe = document.getElementById('valueInputJinaMamaMkwe').value;
                        const hali_mama_mkwe = document.getElementById('selectHaliMamaMkwe').value;
                        const jina_mrithi = document.getElementById('valueInputJinaMrithi').value;
                        const created_by = "ADMIN";
                        const updated_by = "ADMIN";

                        //WATOTO   
                        const watotoData = [];             
                        const watotoElements = $('#watotoContainer .form-item'); //Hii item ni class added upon dynamic creation
                        console.log("WATOTO ELEMENTS : ");
                        console.log(watotoElements);
                        if (watotoElements.length === 0) {
                            console.log('No watoto found, sending empty array.');
                        } else {
                            watotoElements.each(function(index, element) {
                                const mtotoID = $(element).find('.form-control').attr('id').match(/\d+/)[0];

                                console.log('ITERATION:', mtotoID);
                                const data_id = document.querySelector(`#valueInputJinaKamiliMtoto${mtotoID}`).getAttribute("data-id");
                                const jina_kamili = $(`#valueInputJinaKamiliMtoto${mtotoID}`).val();
                                const aina_mtoto = $(`#aina_mtoto_select${mtotoID.match(/\d+/)[0]}`).val();

                                watotoData.push({
                                    data_id: data_id,
                                    jina_kamili: jina_kamili,
                                    aina_mtoto: aina_mtoto,
                                });
                            });
                        }
                
                        console.log('WATOTO JSON:', JSON.stringify(watotoData));

                        
                        document.querySelector('.loader-overlay').style.display = 'flex';
                        $.ajax({
                            url: '/wanamaji/save-taarifa-familia',  // Your endpoint
                            type: 'POST',
                            data: {
                                namba_jeshi : namba_jeshi,
                                jina_baba : jina_baba,
                                hali_baba: hali_baba,
                                jina_mama: jina_mama,
                                hali_mama: hali_mama,
                                jina_mwenza : jina_mwenza,
                                mwenza : mwenza,
                                hali_mwenza : hali_mwenza,
                                jina_baba_mkwe: jina_baba_mkwe,
                                hali_baba_mkwe: hali_baba_mkwe,
                                jina_mama_mkwe: jina_mama_mkwe,
                                hali_mama_mkwe: hali_mama_mkwe,
                                jina_mrithi: jina_mrithi,
                                watoto: watotoData,
                                created_by: created_by,
                                updated_by: updated_by,
                            },

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                            success: function(response) {
                                console.log('RESPONSE : ', response);
                                if(response.error == 0){
                                    applicationSubmitted = 1; //Hii kuzuia mtu akirudi back then Next
                                    application_id = response.application_id;
                                    
                                    console.log('Data saved successfully:', response);

                                    $('#valueInputNambaJeshi').prop('disabled', true);

                                    const allWatotoDivs = document.querySelectorAll('#watotoContainer .form-item');
                                    allWatotoDivs.forEach(div => div.remove());

                                    formCountWatoto = 0;
                                    
                                    populateWatoto(response.watoto);

                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                        if ($('#borderedSuccessToastTaarifaFamilia').length) {

                                            $('#borderedSuccessToastTaarifaFamilia .toast-body h6').text(response.message);
                                            const toastInstance = bootstrap.Toast.getOrCreateInstance(document.getElementById('borderedSuccessToastTaarifaFamilia'));
                                            toastInstance.show();
                                        }
                                    }, 1000);

                                }else{
                                    setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                    }, 1000);
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                }

                                // You might want to clear forms or show a success message
                            },
                            error: function(xhr, status, error) {
                                console.log('Error saving data:', xhr.responseText);
                                setTimeout(function() {
                                        document.querySelector('.loader-overlay').style.display = 'none';
                                }, 1000);
                                // Handle errors here
                            }
                        });
                    }else{

                    }
                
                });

            });

            //Function to check if formContainer is empty
            function checkIfEmpty() {
                const koziContainer = document.getElementById('koziContainer');
                if (koziContainer.children.length === 0) {
                    formCountKozi = 0; // Reset the form count if all forms are removed
                    
                    var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                    saveKoziKijeshi.style.display = 'none';
                    console.log("All forms removed. Form count reset.");
                }

            }
            
            function checkIfEmptyElimuKiraia() {
                const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');
                if (elimuRaiaContainer.children.length === 0) {
                    formCountElimuRaia = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }
            function checkIfEmptyMedali() {
                const medaliContainer = document.getElementById('medaliContainer');
                if (medaliContainer.children.length === 0) {
                    formCountMedali = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }

            function checkIfEmptyMisheni() {
                const misheniContainer = document.getElementById('misheniContainer');
                if (misheniContainer.children.length === 0) {
                    formCountMisheni = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }

            function checkIfEmptyWatoto() {
                const watotoContainer = document.getElementById('watotoContainer');
                if (watotoContainer.children.length === 0) {
                    formCountWatoto = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }
            
            //Function to check if formContainer is empty
            function checkIfEmptyRepresentatives() {
                const representativesContainer = document.getElementById('representativesContainer');
                if (representativesContainer.children.length === 0) {
                    formCountRepresentatives = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }
            
            //Function to check if formContainer is empty
            function checkIfEmptyPriorities() {
                const priorityContainer = document.getElementById('priorityContainer');
                if (priorityContainer.children.length === 0) {
                    formCountPriority = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }
            
            //Function to check if formContainer is empty
            function checkIfEmptyNices() {
                const niceContainer = document.getElementById('niceContainer');
                if (niceContainer.children.length === 0) {
                    formCountNice = 0; // Reset the form count if all forms are removed
                    console.log("All forms removed. Form count reset.");
                }
            }

            function populateKoziKijeshi(koziData, koziZenyewe){
                koziData.forEach(function(kozi) {

                    formCountKozi++;
                    var saveKoziKijeshi = document.getElementById('saveKoziKijeshi');
                    saveKoziKijeshi.style.display = 'block';

                    console.log(formCountKozi);
                    //const koziContainer = $('koziContainer');
                    const koziContainer = document.getElementById('koziContainer');

                    // Create a new form section
                    const newKozi = document.createElement('div');
                    newKozi.classList.add('form-item');

                    newKozi.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountKozi}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountKozi}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountKozi}">
                                        Kozi #${formCountKozi}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountKozi}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountKozi}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">

                                                <div class="col-xxl-3 col-md-4">
                                                    <label for="valueInput" class="form-label">Mwanajeshi</label>
                                                        <select id = "mwanajeshi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            <option value="0" selected>Chagua Aina Mwanajeshi</option>
                                                            @foreach($aina_mwanajeshi as $mwanajeshi)
                                                            <option value="{{$mwanajeshi['id']}}" data-merchant_tin="{{$mwanajeshi['name']}}">{{$mwanajeshi['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <label for="valueInput" class="form-label">Aina Kozi</label>
                                                        <select id = "aina_kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            <option value="0" selected>Chagua Aina Kozi</option>
                                                            @foreach($kozi_category as $category)
                                                            <option value="{{$category['id']}}" data-merchant_tin="{{$category['name']}}">{{$category['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <label for="valueInput" class="form-label">Kozi</label>
                                                        <select id = "kozi_select${formCountKozi}" class="form-select mb-3 kozi-kijeshi-select" aria-label="Default select example">
                                                            @foreach($kozi_zenyewe as $kozi)
                                                                <option value="{{$kozi['id']}}" data-merchant_tin="{{$kozi['id']}}">{{$kozi['name']}}</option>
                                                            @endforeach
                                                            <option value="-1" selected>Kozi Nyingine</option>
                                                        </select>
                                                    <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    <!--end col-->
                                                </div>
                                                
                                                    <div class="col-xxl-3 col-md-4 collapse" id="valueInputJinaKoziDIV${formCountKozi}">
                                                    <div>
                                                        <label for="valueInputJinaKozi${formCountKozi}" class="form-label">Jina la Kozi</label>
                                                        <input type="text" class="form-control" data-id="" id="valueInputJinaKozi${formCountKozi}" placeholder="">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Jina la  Kozi</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputIntake${formCountKozi}" class="form-label">Intake</label>
                                                        <input type="text" class="form-control" data-id="" id="valueInputIntake${formCountKozi}" placeholder="">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Intake</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputMwaka${formCountKozi}" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwaka${formCountKozi}" placeholder="Andika mwaka wa kumaliza">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputTraining${formCountKozi}" class="form-label">Chuo/Shule/Training Center</label>
                                                        <input type="text" class="form-control" id="valueInputTraining${formCountKozi}" placeholder="Andika Chuo/Shule/Training Center">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeKozi${formCountKozi}" data-id="" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    console.log(koziContainer);
                    koziContainer.appendChild(newKozi);
                    
                    const mwanajeshi_select = document.getElementById(`mwanajeshi_select${formCountKozi}`);
                    const aina_kozi_select = document.getElementById(`aina_kozi_select${formCountKozi}`);
                    const kozi_select = document.getElementById(`kozi_select${formCountKozi}`);
                    const valueInputJinaKoziDIV = document.getElementById(`valueInputJinaKoziDIV${formCountKozi}`);

                    // Populate the kozi with data
                    koziZenyewe.forEach(function(item) {
                        console.log(item);
                        let option = new Option(item.name, item.id);
                        kozi_select.add(option); // Populate owner_address_region dropdown
                    });
                    kozi_select.add(new Option("Kozi Nyingine", "-1"));

                    var mwanajeshiTypeID = kozi.mwanajeshi_id;
                    var ainaKoziTypeID = kozi.aina_kozi_id;
                    var koziTypeID = kozi.kozi_id;

                    for (let option of mwanajeshi_select.options) {
                        console.log("MWANAJESHILOOP, "+option.value);
                        if (option.value === mwanajeshiTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }
                    
                    for (let option of aina_kozi_select.options) {
                        console.log("AINAKOZILOOP, "+option.value);
                        if (option.value === ainaKoziTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }
                    for (let option of kozi_select.options) {
                        console.log("KOZILOOP, "+option.value);
                        if (option.value === koziTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }

                    mwanajeshi_select.addEventListener('change', function() {
                        var ainaMwanajeshiID = mwanajeshi_select.value; 
                        var ainaKoziID = aina_kozi_select.value; 
                        console.log(ainaKoziID);

                        if (ainaMwanajeshiID && ainaKoziID > 0) {
                            // Clear the existing options except for the first placeholder
                            kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                            // Fetch new data based on the selected region
                            fetch('/wanamaji/load-kozi', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                console.log(data.length);
                                // Check if data is returned and has items
                                if (data.length > 0) {
                                    data.forEach(function(item) {
                                        console.log(item);
                                        let option = new Option(item.name, item.id);
                                        kozi_select.add(option); // Populate owner_address_region dropdown
                                    });
                                    kozi_select.add(new Option("Kozi Nyingine", "-1"));
                                } else {
                                    kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                                }
                            })
                            .catch(error => {
                                console.error('Error loading the data: ', error);
                                kozi_select.innerHTML = '<option value="">Error loading data</option>';
                            });
                        } else {
                            // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                            // $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                            // $("#modalError").modal('show')
                        }

                    });

                    aina_kozi_select.addEventListener('change', function() {
                        var ainaKoziID = aina_kozi_select.value; 
                        var ainaMwanajeshiID = mwanajeshi_select.value; 
                        console.log(ainaKoziID);

                        if (ainaKoziID && ainaMwanajeshiID > 0) {
                            // Clear the existing options except for the first placeholder
                            kozi_select.innerHTML = '<option value="0">Chagua Kozi</option>';

                            // Fetch new data based on the selected region
                            fetch('/wanamaji/load-kozi', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({ aina_mwanajeshi: ainaMwanajeshiID, aina_kozi: ainaKoziID })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                console.log(data.length);
                                // Check if data is returned and has items
                                if (data.length > 0) {
                                    data.forEach(function(item) {
                                        console.log(item);
                                        let option = new Option(item.name, item.id);
                                        kozi_select.add(option); // Populate owner_address_region dropdown
                                    });
                                    kozi_select.add(new Option("Kozi Nyingine", "-1"));
                                } else {
                                    kozi_select.innerHTML = '<option value="">Hakuna Kozi!</option>';
                                }
                            })
                            .catch(error => {
                                console.error('Error loading the data: ', error);
                                kozi_select.innerHTML = '<option value="">Error loading data</option>';
                            });
                        } else {
                            // kozi_select.innerHTML = '<option value="">Please select a region first</option>';
                            $('#modalErrorMessage').text("Chagua Aina ya Mwanajeshi");
                            $("#modalError").modal('show')
                        }

                    });

                    kozi_select.addEventListener('change', function() {
                        var koziID = kozi_select.value; 
                        console.log(koziID);

                        if (koziID == -1) {
                            valueInputJinaKoziDIV.style.display = 'block';
                        } else {
                            valueInputJinaKoziDIV.style.display = 'none';
                        }
                    });
                    
                    // document.getElementById(`valueInputAinaKozi${formCountKozi}`).value = kozi.aina_kozi || '';
                    document.getElementById(`valueInputIntake${formCountKozi}`).setAttribute('data-id', kozi.id || '');
                    document.getElementById(`valueInputIntake${formCountKozi}`).value = kozi.intake || '';
                    document.getElementById(`valueInputMwaka${formCountKozi}`).value = kozi.mwaka || '';
                    document.getElementById(`valueInputTraining${formCountKozi}`).value = kozi.taasisi || '';

                    // Add event listener for remove button
                    const removeKozi = document.getElementById(`removeKozi${formCountKozi}`);
                    removeKozi.addEventListener('click', function() {
                        koziContainer.removeChild(newKozi); // Remove the entire form element
                        checkIfEmpty();
                    });
                });
            }

            function populateElimuRaia(elimuRaia){
                console.log(elimuRaia);
                elimuRaia.forEach(function(elimu) {
                    formCountElimuRaia++;
                    var saveElimuRaia = document.getElementById('saveElimuRaia');
                    saveElimuRaia.style.display = 'block';

                    console.log(elimu);
                    //const elimuRaiaContainer = $('elimuRaiaContainer');
                    const elimuRaiaContainer = document.getElementById('elimuRaiaContainer');

                    // Create a new form section
                    const newElimuRaia = document.createElement('div');
                    newElimuRaia.classList.add('form-item');

                    newElimuRaia.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountElimuRaia}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountElimuRaia}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountElimuRaia}">
                                        Elimu #${formCountElimuRaia}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountElimuRaia}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountElimuRaia}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">

                                                <div class="col-xxl-3 col-md-4">
                                                    <div id = "elimu${formCountElimuRaia}" class="show">
                                                        <label for="valueInput" class="form-label">Elimu</label>
                                                        <select id = "elimu_kiraia_select${formCountElimuRaia}" class="form-select mb-3" aria-label="Default select example">
                                                            <option value="0" selected>Elimu</option>
                                                            @foreach($elimu as $elimu_key)
                                                            <option value="{{$elimu_key['id']}}" data-merchant_tin="{{$elimu_key['name']}}">{{$elimu_key['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Tafadhali Chagua Elimu</div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputTaasisi${formCountElimuRaia}" class="form-label">Shule/Chuo/VETA/Taasisi</label>
                                                        <input type="text" class="form-control" id="valueInputTaasisi${formCountElimuRaia}" placeholder="">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza Taarifa hii</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputMwakaKuanza${formCountElimuRaia}" class="form-label">Mwaka wa Kuanza</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaKuanza${formCountElimuRaia}" placeholder="Andika mwaka wa kuanza">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Mwaka wa kuanza</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInputMwakaKumaliza${formCountElimuRaia}" class="form-label">Mwaka wa Kumaliza</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaKumaliza${formCountElimuRaia}" placeholder="Andika mwaka wa kumaliza">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Andika Mwaka wa kumaliza</div>
                                                    <!--end col-->
                                                </div>


                                                <div id="professionDiv${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                    <div>
                                                        <label for="valueInputProfession${formCountElimuRaia}" id="valueInputProfessionTitle${formCountElimuRaia}" class="form-label">Profession</label>
                                                        <input type="text" class="form-control" id="valueInputProfession${formCountElimuRaia}" placeholder="Jaza taarifa hii">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali Jaza taarifa hii</div>
                                                    <!--end col-->
                                                </div>
                                                
                                                <div id = "elimuDaraja${formCountElimuRaia}" class="col-xxl-3 col-md-4 collapse">
                                                    <label for="select_daraja${formCountElimuRaia}" class="form-label">Daraja</label>
                                                    <select id = "select_daraja${formCountElimuRaia}" class="form-select mb-3 elimu-raia-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua</option>
                                                        @foreach($madaraja as $daraja)
                                                        <option value="{{$daraja['id']}}">{{$daraja['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeElimuKiraia${formCountElimuRaia}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(elimuRaiaContainer);
                    elimuRaiaContainer.appendChild(newElimuRaia);
                    // Add event listener for dropdown change
                    const elimu_kiraia_select = document.getElementById(`elimu_kiraia_select${formCountElimuRaia}`);
                    const elimuDarajaDiv = document.getElementById(`elimuDaraja${formCountElimuRaia}`);
                    const select_daraja = document.getElementById(`select_daraja${formCountElimuRaia}`);
                    const professionDiv = document.getElementById(`professionDiv${formCountElimuRaia}`);
                    const valueInputProfessionTitle = document.getElementById(`valueInputProfessionTitle${formCountElimuRaia}`);

                    var elimuTypeID = elimu.elimu; // Get the selected from elimu data

                    console.log("elimuTypeID:"+elimuTypeID);
                    console.log("formCountElimuRaia:"+formCountElimuRaia);
                    console.log("elimuDarajaDiv:"+elimuDarajaDiv);
                    console.log("elimu_kiraia_select:"+elimu_kiraia_select);
                    

                    for (let option of elimu_kiraia_select.options) {
                        console.log("ELIMULOOP, "+option.value);
                        if (option.value === elimuTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }

                    document.getElementById(`valueInputTaasisi${formCountElimuRaia}`).value = elimu.jina_taasisi || '';
                    document.getElementById(`valueInputTaasisi${formCountElimuRaia}`).setAttribute('data-id', elimu.id || '');
                    document.getElementById(`valueInputMwakaKuanza${formCountElimuRaia}`).value = elimu.mwaka_kuanza || '';
                    document.getElementById(`valueInputMwakaKumaliza${formCountElimuRaia}`).value = elimu.mwaka_kumaliza || '';
                    document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                    
                    $(document).ready(function () {
                        if(elimuTypeID == 2 || elimuTypeID == 3){
                            elimuDarajaDiv.style.display = 'block';
                            professionDiv.style.display = 'none';

                            for (let option of select_daraja.options) {
                                console.log("ELIMULOOP, "+option.value);
                                if (option.value === elimu.daraja ) {
                                    option.selected = true;
                                    break; // Stop looping after finding the match
                                }
                            }
                        }
                        else if(elimuTypeID == 4 || elimuTypeID == 5){
                            valueInputProfessionTitle.textContent = "Profession";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else if(elimuTypeID == 6 || elimuTypeID == 7){
                            valueInputProfessionTitle.textContent = "Ujuzi";
                            professionDiv.style.display = 'block';
                            elimuDarajaDiv.style.display = 'none';
                        }
                        else{
                            elimuDarajaDiv.style.display = 'none';
                            professionDiv.style.display = 'none';
                        }
                        
                        elimu_kiraia_select.addEventListener('change', function() {
                            var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                            console.log(elimuTypeID);
                            
                            if(elimuTypeID == 2 || elimuTypeID == 3){
                                elimuDarajaDiv.style.display = 'block';
                                professionDiv.style.display = 'none';

                                for (let option of select_daraja.options) {
                                    console.log("ELIMULOOP, "+option.value);
                                    if (option.value === elimu.daraja ) {
                                        option.selected = true;
                                        break; // Stop looping after finding the match
                                    }
                                }
                            }
                            else if(elimuTypeID == 4 || elimuTypeID == 5){
                                valueInputProfessionTitle.textContent = "Profession";
                                professionDiv.style.display = 'block';
                                elimuDarajaDiv.style.display = 'none';
                            }
                            else if(elimuTypeID == 6 || elimuTypeID == 7){
                                valueInputProfessionTitle.textContent = "Ujuzi";
                                professionDiv.style.display = 'block';
                                elimuDarajaDiv.style.display = 'none';
                            }
                            else{
                                elimuDarajaDiv.style.display = 'none';
                                professionDiv.style.display = 'none';
                            }
                        });
                    });

                    // Add event listener for remove button
                    const removeElimuKiraia = document.getElementById(`removeElimuKiraia${formCountElimuRaia}`);
                    removeElimuKiraia.addEventListener('click', function() {
                        elimuRaiaContainer.removeChild(newElimuRaia); // Remove the entire form element
                        checkIfEmptyElimuKiraia();
                    });
                    
                });
            }

            function populateAinaMedali(medaliData){
                medaliData.forEach(function(medali) {

                    formCountMedali++;
                    var saveMedali = document.getElementById('saveMedali');
                    saveMedali.style.display = 'block';

                    console.log(formCountMedali);
                    //const medaliContainer = $('medaliContainer');
                    const medaliContainer = document.getElementById('medaliContainer');

                    // Create a new form section
                    const newMedali = document.createElement('div');
                    newMedali.classList.add('form-item');

                    newMedali.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMedali}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMedali}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMedali}">
                                        Medali #${formCountMedali}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountMedali}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMedali}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina ya Medali</label>
                                                        <input type="text" class="form-control" id="valueInputAinaMedali${formCountMedali}" placeholder="Andika aina ya medali">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaAliotunukiwa${formCountMedali}" placeholder="Andika mwaka wa kutunukiwa">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMedali${formCountMedali}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    console.log(medaliContainer);
                    medaliContainer.appendChild(newMedali);

                    document.getElementById(`valueInputAinaMedali${formCountMedali}`).value = medali.aina_medali || '';
                    document.getElementById(`valueInputAinaMedali${formCountMedali}`).setAttribute('data-id', medali.id || '');
                    document.getElementById(`valueInputMwakaAliotunukiwa${formCountMedali}`).value = medali.mwaka || '';

                    // Add event listener for remove button
                    const removeMedali = document.getElementById(`removeMedali${formCountMedali}`);
                    removeMedali.addEventListener('click', function() {
                        medaliContainer.removeChild(newMedali); // Remove the entire form element
                        checkIfEmpty();
                    });
                });
            }

            function populateMisheni(misheni){

                console.log(misheni);
                misheni.forEach(function(mishe) {
                    formCountMisheni++;

                    var saveMisheni = document.getElementById('saveMisheni');
                    saveMisheni.style.display = 'block';

                    console.log(mishe);
                    //const misheniContainer = $('misheniContainer');
                    const misheniContainer = document.getElementById('misheniContainer');

                    // Create a new form section
                    const newMisheni = document.createElement('div');
                    newMisheni.classList.add('form-item');

                    newMisheni.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountMisheni}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountMisheni}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountMisheni}">
                                        Misheni #${formCountMisheni}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountMisheni}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountMisheni}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                <div class="col-xxl-3 col-md-4 aina-misheni-select">
                                                    <label for="valueInput" class="form-label">Misheni</label>
                                                    <select id = "aina_misheni${formCountMisheni}" class="form-select mb-3 aina-misheni-select" aria-label="Default select example">
                                                        <option value="0" selected>Chagua Misheni</option>
                                                        @foreach($aina_misheni as $misheni)
                                                        <option value="{{$misheni['id']}}" data-merchant_tin="{{$misheni['name']}}">{{$misheni['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">Tafadhali chagua Misheni</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina ya Misheni</label>
                                                        <input type="text" class="form-control" id="valueInputAinaMisheni${formCountMisheni}" placeholder="Andika Aina ya Misheni">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza Aina ya Misheni</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mahali</label>
                                                        <input type="text" class="form-control" id="valueInputMahali${formCountMisheni}" placeholder="Andika Mahali">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza mahali</div>
                                                    <!--end col-->
                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Mwaka</label>
                                                        <input type="text" class="form-control" id="valueInputMwakaMisheni${formCountMisheni}" placeholder="Andika mwaka wa kutunukiwa">
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMisheni${formCountMisheni}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(misheniContainer);
                    misheniContainer.appendChild(newMisheni);
                    // Add event listener for dropdown change
                    const aina_misheni = document.getElementById(`aina_misheni${formCountMisheni}`);

                    var misheniTypeID = mishe.misheni; // Get the selected from elimu data

                    console.log("formCountMisheni:"+formCountMisheni);

                    for (let option of aina_misheni.options) {
                        console.log("AINAMISHENI, "+option.value);
                        if (option.value === misheniTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }

                    document.getElementById(`valueInputAinaMisheni${formCountMisheni}`).value = mishe.aina_misheni || '';
                    document.getElementById(`valueInputAinaMisheni${formCountMisheni}`).setAttribute('data-id', mishe.id || '');
                    document.getElementById(`valueInputMahali${formCountMisheni}`).value = mishe.mahali || '';
                    document.getElementById(`valueInputMwakaMisheni${formCountMisheni}`).value = mishe.mwaka || '';
                    
                    // $(document).ready(function () {
                    //     if(elimuTypeID == 2 || elimuTypeID == 3){
                    //         elimuDarajaDiv.style.display = 'block';
                    //         professionDiv.style.display = 'none';

                    //         for (let option of select_daraja.options) {
                    //             console.log("ELIMULOOP, "+option.value);
                    //             if (option.value === elimu.daraja ) {
                    //                 option.selected = true;
                    //                 break; // Stop looping after finding the match
                    //             }
                    //         }
                    //     }
                    //     else if(elimuTypeID == 4 || elimuTypeID == 5){
                    //         professionDiv.style.display = 'block';
                    //         elimuDarajaDiv.style.display = 'none';
                    //         document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                    //     }else{
                    //         elimuDarajaDiv.style.display = 'none';
                    //         professionDiv.style.display = 'none';
                    //     }
                        
                    //     elimu_kiraia_select.addEventListener('change', function() {
                    //         var elimuTypeID = elimu_kiraia_select.value;; // Get the selected category ID
                    //         console.log(elimuTypeID);
                            
                    //         if(elimuTypeID == 2 || elimuTypeID == 3){
                    //             elimuDarajaDiv.style.display = 'block';
                    //             professionDiv.style.display = 'none';

                    //             for (let option of select_daraja.options) {
                    //                 console.log("ELIMULOOP, "+option.value);
                    //                 if (option.value === elimu.daraja ) {
                    //                     option.selected = true;
                    //                     break; // Stop looping after finding the match
                    //                 }
                    //             }
                    //         }
                    //         else if(elimuTypeID == 4 || elimuTypeID == 5){
                    //             professionDiv.style.display = 'block';
                    //             elimuDarajaDiv.style.display = 'none';
                    //             document.getElementById(`valueInputProfession${formCountElimuRaia}`).value = elimu.profession  || '';
                    //         }else{
                    //             elimuDarajaDiv.style.display = 'none';
                    //             professionDiv.style.display = 'none';
                    //         }
                    //     });
                    // });

                    // Add event listener for remove button
                    const removeMisheni = document.getElementById(`removeMisheni${formCountMisheni}`);
                    removeMisheni.addEventListener('click', function() {
                        misheniContainer.removeChild(newMisheni); // Remove the entire form element
                        checkIfEmptyMisheni();
                    });
                    
                });
            }

            function populateWatoto(watoto){

                console.log(watoto);

                watoto.forEach(function(mtoto) {

                    formCountWatoto++;

                    console.log(formCountWatoto);
                    //const watotoContainer = $('watotoContainer');
                    const watotoContainer = document.getElementById('watotoContainer');

                    // Create a new form section
                    const newWatoto = document.createElement('div');
                    newWatoto.classList.add('form-item');

                    newWatoto.innerHTML = `
                        <div class="card">
                            <div class="accordion-item">
                                <h4 class="card-title mb-0 flex-grow-1" id="heading${formCountWatoto}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse${formCountWatoto}" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse${formCountWatoto}">
                                        Mtoto #${formCountWatoto}
                                    </button>
                                </h4>
                                <div id="accor_nesting2Examplecollapse${formCountWatoto}" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example${formCountWatoto}" data-bs-parent="#accordionnesting2">
                                    <div class="accordion-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">

                                                <div class="col-xxl-6 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Jina Kamili</label>
                                                        <input type="text" class="form-control" id="valueInputJinaKamiliMtoto${formCountWatoto}" placeholder="Andika Jina Kamili">
                                                    </div>
                                                    <div class="invalid-feedback">Tafadhali jaza Jina Kamili</div>
                                                    <!--end col-->
                                                </div>

                                                
                                                <div class="col-xxl-6 col-md-4">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Aina Mtoto</label>
                                                        <select id = "aina_mtoto_select${formCountWatoto}" class="form-select mb-3 aina-watoto-select" aria-label="Default select example">
                                                            
                                                            @foreach($aina_watoto as $mtoto)
                                                            <option value="{{$mtoto['id']}}" data-merchant_tin="{{$mtoto['name']}}">{{$mtoto['name']}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Tafadhali Chagua Aina Mtoto</div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>

                                            <div class="col-xxl-12 col-md-12" style="padding-top: 16px; padding-left: 0px;">
                                                <div class="container d-flex justify-content-end align-items-end">
                                                    <button id="removeMtoto${formCountWatoto}" type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    console.log(watotoContainer);
                    watotoContainer.appendChild(newWatoto);


                    document.getElementById(`valueInputJinaKamiliMtoto${formCountWatoto}`).value = mtoto.jina_kamili || '';
                    document.getElementById(`valueInputJinaKamiliMtoto${formCountWatoto}`).setAttribute('data-id', mtoto.id || '');

                    var mtotoTypeID = mtoto.aina_mtoto; // Get the selected from elimu data
                    const aina_mtoto_select = document.getElementById(`aina_mtoto_select${formCountWatoto}`);
                    for (let option of aina_mtoto_select.options) {
                        console.log("WATOTOLOOP, "+option.value);
                        if (option.value === mtotoTypeID) {
                            option.selected = true;
                            break; // Stop looping after finding the match
                        }
                    }
                    

                    // Add event listener for remove button
                    const removeWatoto = document.getElementById(`removeMtoto${formCountWatoto}`);
                    removeWatoto.addEventListener('click', function() {
                        watotoContainer.removeChild(newWatoto); // Remove the entire form element
                        checkIfEmptyWatoto();
                    });
                });
            }

            $(document).ready(function(){
                // Triggered when the value of the first dropdown changes
                $("#matokeo_kozi").change(function(){
                    var matokeoKoziID = $(this).val(); // Get the selected category ID
                    console.log(matokeoKoziID);
                    if(matokeoKoziID == 0){
                        $('#issuanceCountry').show();
                        $('#naturalPersonData').show();
                        $('#passport_id').show();
                        $('#national_id').hide();
                    }else{
                        $('#issuanceCountry').hide();
                        $('#naturalPersonData').show();
                        $('#passport_id').hide();
                        $('#national_id').show();
                    }

                    // Make an AJAX request to fetch items for the selected category
                    $.ajax({
                        type: 'POST',
                        //url: '/salsssses-agent/categories/' + ownerTypeID, // PHP script to handle the request
                        url: '{{ route("categories") }}', // PHP script to handle the request
                        data: {event_code: ownerTypeID}, 
                        //dataType: 'json',
                        success: function(data){
                            console.log(data);
                            //$('#categories').empty();
                            $.each(data, function (key, value) {
                                console.log(value.PriceCode);
                                $('#categories').append('<option value="' + value.CategoryCode + '" data-price="' + value.Price + '" data-price_code="' + value.PriceCode + '" data-has_discount="' + value.IsDiscount + '">' + value.CategoryName + '</option>');
                            });
                        },
                        error: function (error) {
                        // Handle errors here
                            console.log(error);
                        }
                    });
                });
            });

        </script>

        <script>
            $(document).ready(function () {
                $('#buttonCheckCardNo').click(function () {
                    var selectedEvent = $('#events :selected');
                    var positionEvent = $('#events option').index(selectedEvent);
                    
                    var selectedCategory = $('#categories :selected');
                    var positionCategory = $('#categories option').index(selectedCategory);

                    console.log($("#events").val());
                    console.log($("#categories").val());
                    if(positionEvent == 0){
                        $('#modalErrorMessage').text("No Event is selected!");
                                $("#modalError").modal('show')
                    }
                    else if(positionCategory == 0){
                        $('#modalErrorMessage').text("No Ticket is selected!");
                                $("#modalError").modal('show')
                    }
                    else if($("#card_no").val() == ""){
                        $('#modalErrorMessage').text("Card Number is required!");
                                $("#modalError").modal('show')
                    }else{
                        $('#userInfo').hide();
                        $('#progressBar').show();
                        $.ajax({
                            type: 'POST',
                            url: '{{ route("card-info") }}',
                            data: {card_no: $("#card_no").val()}, 
                            success: function (response) {
                                console.log(response);
                                console.log(response.resultcode);
                                if(response.resultcode == "0"){
                                    //var fullName = response.member_data.first_name + " " + response.member_data.last_name
                                    //var mobile = response.member_data.mobile
                                    //var cardNo = response.member_data.reg_no
                                    //var status = response.member_data.professional_category
                                    console.log(fullName);
                                    $('#fullName').text(response.full_name);
                                    $('#mobile').text(response.phone_number);
                                    $('#cardNo').text($("#card_no").val());
                                    //$('#member_status').text(response.status);
                                    $('#member_status_div').empty();
                                    $('#member_status_div').append('<p class="fs-16 mb-12 text-muted" data-status_value="' + response.status + '" data-card_uid="' + response.cardUID + '" id="member_status">' + response.status + '</p>');
                                    $('#userInfo').show();
                                    $('#sellTicket').show();
                                    $('#progressBar').hide();
                                }else{
                                    console.log("HERE");
                                    $('#modalErrorMessage').text(response.message);
                                    $("#modalError").modal('show')
                                    $('#progressBar').hide();
                                }
                                // Handle success response
                            },
                            error: function (error) {
                                $('#modalErrorMessage').text("Request Timeout!");
                                    $("#modalError").modal('show')
                                $('#progressBar').hide();
                                console.log("ERROR1");
                                console.log(error);
                                // Handle error response
                            }
                        });
                    }
                });
                
                $('#purchaseTicket').click(function () {
                    
                    // Get the selected option element
                    var selectedCategory = $('#categories :selected');

                    // Access the data attributes
                    var price = selectedCategory.data('price');
                    var price_code = selectedCategory.data('price_code');
                    var has_discount = selectedCategory.data('has_discount');
                    var member_status = $("#member_status").data('status_value');
                    
                    console.log(has_discount);
                    console.log(member_status);

                    if(has_discount && member_status == "INACTIVE"){
                        $('#modalErrorMessage').text("Activate your card to get ticket discount!");
                        $("#modalError").modal('show')
                    }
                    else if(has_discount && member_status == "ACTIVE"){
                        $('#modalConfirmPurchaseDiscountMessage').text("Purchase ticket with Discount?");
                        $("#modalConfirmPurchaseDiscount").modal('show')
                    }else{
                        // $('#modalConfirmPurchaseMessage').text(response.message);
                        $("#modalConfirmPurchase").modal('show')
                    }
                });

                $('#confirmPurchaseTicket').click(function () {
                    purchaseTicket();
                });

                $('#confirmPurchaseTicketDiscount').click(function () {
                    purchaseTicket();
                });
            });

        </script>

        <script>

            const formSteps = document.querySelectorAll(".form-steps");

            if (formSteps) {
                Array.from(formSteps).forEach((formStep) => {
                    const nextTabs = formStep.querySelectorAll(".nexttab");
                    // const tabButtons = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
                    // Array.from(tabButtons).forEach((tabButton) => {
                    //     tabButton.addEventListener("show.bs.tab", (event) => {
                    //         //console.log("EventTriggered : ", allValid);
                    //         //if (allValid) {
                    //             event.target.classList.add("done");
                    //             // No 'was-validated' class, no green ticks.
                    //         //}
                    //     });
                    // });

                    if (nextTabs) {
                        Array.from(nextTabs).forEach((nextTabButton) => {

                            let allValid = true;
                            nextTabButton.addEventListener("click", () => {
                                // Check the dropdown select with id 'selectService' for the first tab
                                // allValid = true;

                                // GENERIC VALIDATE fields in the current tab
                                const currentTabFields = formStep.querySelectorAll('.tab-pane.active .form-control');
                                Array.from(currentTabFields).forEach((field) => {
                                    const isOptional = field.getAttribute("data-optional") === "true";
                                    
                                    if (field.value.trim() === "" && !isOptional) {
                                        allValid = false;
                                        field.classList.add("is-invalid");
                                    } else {
                                        field.classList.remove("is-invalid");
                                        //field.classList.add("is-valid");
                                    }
                                });

                                // GENERIC LISTENER to remove 'is-invalid' when a user types in a field
                                const formControls = formStep.querySelectorAll('.form-control');
                                Array.from(formControls).forEach((control) => {
                                    control.addEventListener('input', () => {
                                        if (control.classList.contains('is-invalid')) {
                                            control.classList.remove('is-invalid');  // Remove 'is-invalid' when a value is entered
                                        }
                                    });
                                });

                                // SPECIFIC validation for each tab
                                // Find the active nav link and corresponding tab pane
                                const activeNavLink = formStep.querySelector('.nav-link.active');
                                const activeTabId = activeNavLink.getAttribute('href').substring(1);  // Get the tab pane ID (e.g., #tab1)
                                const activeTabPane = document.getElementById(activeTabId);
                                console.log('Active Tab:', activeTabId);
                                console.log('Active Pane:', activeTabPane);
                                
                                console.log(activeTabId);
                                if (activeTabId === "pills-start-application-tab") {
                                    const selectService = document.getElementById("selectService");
                                    if (selectService) {
                                    // Validate if a service is selected (value should not be empty or default)
                                        if (selectService.value == 0) {
                                            allValid = false;
                                            selectService.classList.add("is-invalid");  // Add a red border if not selected
                                            //alert("Please select a service before proceeding to the next tab.");
                                        } else {
                                            allValid = true;
                                            selectService.classList.remove("is-invalid");
                                            //selectService.classList.add("is-valid");  // Add a green border if valid
                                        }
                                    }
                                }
                                else if (activeTabId === "pills-prepare-tab") {
                                    console.log("PREPARE_APP TAB");
                                    // Specific validation for tab1 (e.g., selectService must be selected)
                                    const selectGender = document.getElementById("applicant_gender");
                                    const select_applicant_country = document.getElementById("select_applicant_country");
                                    const select_applicant_owner_type = document.getElementById("select_applicant_owner_type");
                                    const select_mark_types = document.getElementById("select_mark_types");
                                    const select_sign_types = document.getElementById("select_sign_types");
                                    
                                    console.log("GENDER", selectGender.value);
                                    if (selectGender.value == 0) {
                                        allValid = false;
                                        selectGender.classList.add("is-invalid");
                                    }

                                    if (select_applicant_country.value == 0) {
                                        allValid = false;
                                        select_applicant_country.classList.add("is-invalid");
                                    }

                                    if (select_applicant_owner_type.value == 0) {
                                        allValid = false;
                                        select_applicant_owner_type.classList.add("is-invalid");
                                    }

                                    if (select_mark_types.value == 0) {
                                        allValid = false;
                                        select_mark_types.classList.add("is-invalid");
                                    }

                                    if (select_sign_types.value == 0) {
                                        allValid = false;
                                        select_sign_types.classList.add("is-invalid");
                                    }

                                    //Type
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_type = document.getElementById(`owner_type${formCountKozi}`);
                                        if(owner_type){
                                            if (owner_type.value == 0) {
                                            allValid = false;
                                            owner_type.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Origin
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const matokeo_kozi = document.getElementById(`matokeo_kozi${formCountKozi}`);
                                        if(matokeo_kozi){
                                            if (matokeo_kozi.value == 0) {
                                            allValid = false;
                                            matokeo_kozi.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Owner passport Issuance Country
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_passport_issuance_country = document.getElementById(`owner_passport_issuance_country${formCountKozi}`);
                                        if(owner_passport_issuance_country){
                                            if (owner_passport_issuance_country.value == 0) {
                                            allValid = false;
                                            owner_passport_issuance_country.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Owner Gender
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_gender = document.getElementById(`owner_gender${formCountKozi}`);
                                        if(owner_gender){
                                            if (owner_gender.value == 0) {
                                            allValid = false;
                                            owner_gender.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    // Owner Nationality
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_nationality = document.getElementById(`owner_nationality${formCountKozi}`);
                                        if(owner_nationality){
                                            if (owner_nationality.value == 0) {
                                            allValid = false;
                                            owner_nationality.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Address Country
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_address_country = document.getElementById(`owner_address_country${formCountKozi}`);
                                        if(owner_address_country){
                                            if (owner_address_country.value == 0) {
                                            allValid = false;
                                            owner_address_country.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Address Region
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_address_region = document.getElementById(`owner_address_region${formCountKozi}`);
                                        if(owner_address_region){
                                            if (owner_address_region.value == 0) {
                                            allValid = false;
                                            owner_address_region.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Address District
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_address_district = document.getElementById(`owner_address_district${formCountKozi}`);
                                        if(owner_address_district){
                                            if (owner_address_district.value == 0) {
                                            allValid = false;
                                            owner_address_district.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Address Ward
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const owner_address_ward = document.getElementById(`owner_address_ward${formCountKozi}`);
                                        if(owner_address_ward){
                                            if (owner_address_ward.value == 0) {
                                            allValid = false;
                                            owner_address_ward.classList.add("is-invalid");
                                            }
                                        }
                                    }
                                    
                                    //Address Type Of Local Address
                                    for (var i = 1; i <= formCountKozi; i++) {
                                        const type_of_local_address = document.getElementById(`type_of_local_address${formCountKozi}`);
                                        if(type_of_local_address){
                                            if (type_of_local_address.value == 0) {
                                            allValid = false;
                                            type_of_local_address.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Type
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_types = document.getElementById(`representative_types${formCountRepresentatives}`);
                                        if(representative_types){
                                            if (representative_types.value == 0) {
                                            allValid = false;
                                            representative_types.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Type Type
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representatives_type_type = document.getElementById(`representatives_type_type${formCountRepresentatives}`);
                                        if(representatives_type_type){
                                            if (representatives_type_type.value == 0) {
                                            allValid = false;
                                            representatives_type_type.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Sub Type
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representatives_type_type = document.getElementById(`representatives_sub_type${formCountRepresentatives}`);
                                        if(representatives_sub_type){
                                            if (representatives_sub_type.value == 0) {
                                            allValid = false;
                                            representatives_sub_type.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Gender
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_gender = document.getElementById(`representative_gender${formCountRepresentatives}`);
                                        if(representative_gender){
                                            if (representative_gender.value == 0) {
                                            allValid = false;
                                            representative_gender.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Nationality
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_nationality = document.getElementById(`representative_nationality${formCountRepresentatives}`);
                                        if(representative_nationality){
                                            if (representative_nationality.value == 0) {
                                            allValid = false;
                                            representative_nationality.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Local Address Type
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_local_address_type = document.getElementById(`representative_local_address_type${formCountRepresentatives}`);
                                        if(representative_local_address_type){
                                            if (representative_local_address_type.value == 0) {
                                            allValid = false;
                                            representative_local_address_type.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Type of Local Address
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_local_address_type = document.getElementById(`representative_local_address_type${formCountRepresentatives}`);
                                        if(representative_local_address_type){
                                            if (representative_local_address_type.value == 0) {
                                            allValid = false;
                                            representative_local_address_type.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Address Region
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_address_region = document.getElementById(`representative_address_region${formCountRepresentatives}`);
                                        if(representative_address_region){
                                            if (representative_address_region.value == 0) {
                                            allValid = false;
                                            representative_address_region.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Address District
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_address_district = document.getElementById(`representative_address_district${formCountRepresentatives}`);
                                        if(representative_address_district){
                                            if (representative_address_district.value == 0) {
                                            allValid = false;
                                            representative_address_district.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    //Representantive Address Ward
                                    for (var i = 1; i <= formCountRepresentatives; i++) {
                                        const representative_address_ward = document.getElementById(`representative_address_ward${formCountRepresentatives}`);
                                        if(representative_address_ward){
                                            if (representative_address_ward.value == 0) {
                                            allValid = false;
                                            representative_address_ward.classList.add("is-invalid");
                                            }
                                        }
                                    }

                                    const owner_gender = document.querySelectorAll(`[id^=owner_gender]`); // Select all elements with IDs starting with "owner_gender"
                                    const owner_nationality = document.querySelectorAll(`[id^=owner_nationality]`); 
                                    const owner_type = document.querySelectorAll(`[id^=owner_type]`); 
                                    const matokeo_kozi = document.querySelectorAll(`[id^=matokeo_kozi]`); 
                                    const owner_passport_issuance_country = document.querySelectorAll(`[id^=owner_passport_issuance_country]`); 
                                    const owner_address_country = document.querySelectorAll(`[id^=owner_address_country]`); 
                                    const owner_address_region = document.querySelectorAll(`[id^=owner_address_region]`); 
                                    const owner_address_district = document.querySelectorAll(`[id^=owner_address_district]`); 
                                    const owner_address_ward = document.querySelectorAll(`[id^=owner_address_ward]`); 
                                    const type_of_local_address = document.querySelectorAll(`[id^=type_of_local_address]`); 
                                    const representative_types = document.querySelectorAll(`[id^=representative_types]`); 
                                    const representatives_type_type = document.querySelectorAll(`[id^=representatives_type_type]`);
                                    const representatives_sub_type = document.querySelectorAll(`[id^=representatives_sub_type]`);
                                    const representative_gender = document.querySelectorAll(`[id^=representative_gender]`);
                                    const representative_nationality = document.querySelectorAll(`[id^=representative_nationality]`);
                                    const representative_local_address_type = document.querySelectorAll(`[id^=representative_local_address_type]`);
                                    const representative_address_country = document.querySelectorAll(`[id^=representative_address_country]`);
                                    const representative_address_region = document.querySelectorAll(`[id^=representative_address_region]`);
                                    const representative_address_district = document.querySelectorAll(`[id^=representative_address_district]`);
                                    const representative_address_ward = document.querySelectorAll(`[id^=representative_address_ward]`);
        
                                    if(owner_type){
                                        owner_type.forEach((ownerTypeElement) => {
                                            ownerTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerTypeElement.value !== "0") {
                                                    ownerTypeElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }
        
                                    if(matokeo_kozi){
                                        matokeo_kozi.forEach((ownersOriginElement) => {
                                            ownersOriginElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownersOriginElement.value !== "0") {
                                                    ownersOriginElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_passport_issuance_country){
                                        owner_passport_issuance_country.forEach((ownerPassportIssuanceCountryElement) => {
                                            ownerPassportIssuanceCountryElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerPassportIssuanceCountryElement.value !== "0") {
                                                    ownerPassportIssuanceCountryElement.classList.remove("is-invalid");
                                                    //ownerPassportIssuanceCountryElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_gender){
                                        owner_gender.forEach((genderElement) => {
                                            genderElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (genderElement.value !== "0") {
                                                    genderElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_nationality){
                                        owner_nationality.forEach((ownerNationalityElement) => {
                                            ownerNationalityElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerNationalityElement.value !== "0") {
                                                    ownerNationalityElement.classList.remove("is-invalid");
                                                    //ownerNationalityElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_address_country){
                                        owner_address_country.forEach((ownerAddressCountryElement) => {
                                            ownerAddressCountryElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerAddressCountryElement.value !== "0") {
                                                    ownerAddressCountryElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }
                                    
                                    if(owner_address_region){
                                        owner_address_region.forEach((ownerAddressRegionElement) => {
                                            ownerAddressRegionElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerAddressRegionElement.value !== "0") {
                                                    ownerAddressRegionElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_address_district){
                                        owner_address_district.forEach((ownerAddressDistrictElement) => {
                                            ownerAddressDistrictElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerAddressDistrictElement.value !== "0") {
                                                    ownerAddressDistrictElement.classList.remove("is-invalid");
                                                    //genderElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(owner_address_ward){
                                        owner_address_ward.forEach((ownerAddressWardElement) => {
                                            ownerAddressWardElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (ownerAddressWardElement.value !== "0") {
                                                    ownerAddressWardElement.classList.remove("is-invalid");
                                                    //ownerAddressWardElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(type_of_local_address){
                                        type_of_local_address.forEach((typeOfLocalAddressElement) => {
                                            typeOfLocalAddressElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (typeOfLocalAddressElement.value !== "0") {
                                                    typeOfLocalAddressElement.classList.remove("is-invalid");
                                                    //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_types){
                                        representative_types.forEach((representativeTypesElement) => {
                                            representativeTypesElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeTypesElement.value !== "0") {
                                                    representativeTypesElement.classList.remove("is-invalid");
                                                    //representativeTypesElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representatives_type_type){
                                        representatives_type_type.forEach((representativeTypeTypeElement) => {
                                            representativeTypeTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeTypeTypeElement.value !== "0") {
                                                    representativeTypeTypeElement.classList.remove("is-invalid");
                                                    //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representatives_sub_type){
                                        representatives_sub_type.forEach((representativeSubTypeElement) => {
                                            representativeSubTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeSubTypeElement.value !== "0") {
                                                    representativeSubTypeElement.classList.remove("is-invalid");
                                                    //representativeSubTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_gender){
                                        representative_gender.forEach((representativeGenderElement) => {
                                            representativeGenderElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeGenderElement.value !== "0") {
                                                    representativeGenderElement.classList.remove("is-invalid");
                                                    //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_nationality){
                                        representative_nationality.forEach((representativeNationalityElement) => {
                                            representativeNationalityElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeNationalityElement.value !== "0") {
                                                    representativeNationalityElement.classList.remove("is-invalid");
                                                    //typeOfLocalAddressElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_local_address_type){
                                        representative_local_address_type.forEach((representativeLocalAddressTypeElement) => {
                                            representativeLocalAddressTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeLocalAddressTypeElement.value !== "0") {
                                                    representativeLocalAddressTypeElement.classList.remove("is-invalid");
                                                    //representativeLocalAddressTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_address_country){
                                        representative_address_country.forEach((representativeLocalAddressCountryTypeElement) => {
                                            representativeLocalAddressCountryTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeLocalAddressCountryTypeElement.value !== "0") {
                                                    representativeLocalAddressCountryTypeElement.classList.remove("is-invalid");
                                                    //representativeLocalAddressCountryTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_address_region){
                                        representative_address_region.forEach((representativeLocalAddressRegionTypeElement) => {
                                            representativeLocalAddressRegionTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeLocalAddressRegionTypeElement.value !== "0") {
                                                    representativeLocalAddressRegionTypeElement.classList.remove("is-invalid");
                                                    //representativeLocalAddressRegionTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_address_district){
                                        representative_address_district.forEach((representativeLocalAddressDistrictTypeElement) => {
                                            representativeLocalAddressDistrictTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeLocalAddressDistrictTypeElement.value !== "0") {
                                                    representativeLocalAddressDistrictTypeElement.classList.remove("is-invalid");
                                                    //representativeLocalAddressDistrictTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }

                                    if(representative_address_ward){
                                        representative_address_ward.forEach((representativeLocalAddressWardTypeElement) => {
                                            representativeLocalAddressWardTypeElement.addEventListener("change", () => {
                                                // Remove is-invalid class when a valid option is selected
                                                if (representativeLocalAddressWardTypeElement.value !== "0") {
                                                    representativeLocalAddressWardTypeElement.classList.remove("is-invalid");
                                                    //representativeLocalAddressWardTypeElement.classList.add("is-valid"); // Uncomment if you want to add "is-valid" class
                                                }
                                            });
                                        });
                                    }
        
                                }
                                else if (activeTabId === "pills-upload-attachments-tab") {
                                    // Specific validation for tab2 (e.g., validate email format)
                                    const emailField = document.getElementById("email");
                                    if (emailField && !validateEmail(emailField.value)) {
                                        allValid = false;
                                        emailField.classList.add("is-invalid");
                                    }
                                } else if (activeTabId === "tab3") {
                                    // Specific validation for tab3 (e.g., check if a number is in a certain range)
                                    const numberField = document.getElementById("number");
                                    if (numberField && (parseInt(numberField.value) < 10 || parseInt(numberField.value) > 100)) {
                                        allValid = false;
                                        numberField.classList.add("is-invalid");
                                    }
                                }

                                console.log("allValid", allValid);
                                // Proceed to the next tab only if all checks pass
                                if (allValid) {
                                    document.querySelector('.loader-overlay').style.display = 'flex';
                                    $.ajax({
                                        url: '/wanamaji/save-first-tab',  // Your endpoint
                                        type: 'POST',
                                        data: {
                                            application_id : application_id,
                                            namba_jeshi : namba_jeshi,
                                            cheo : cheo,
                                            first_name: first_name,
                                            middle_name: middle_name,
                                            last_name: last_name,
                                            ujuzi : ujuzi,
                                            c_no : c_no,
                                            namba_kitambulisho : namba_kitambulisho,
                                            kikosi: kikosi,
                                            kombania: kombania,
                                            elimu: elimu,
                                            kikosi_ulichotoka: kikosi_ulichotoka,
                                            dob: dob,
                                            kundi_damu: kundi_damu,
                                            uzito: uzito,
                                            urefu: urefu,
                                            tarehe_kujiunga_jeshi: tarehe_kujiunga_jeshi,
                                            tarehe_kamisheni: tarehe_kamisheni,
                                            tarehe_kupanda_cheo: tarehe_kupanda_cheo,
                                            tarehe_kustaafu: tarehe_kustaafu,
                                            anuani: anuani,
                                            namba_simu: namba_simu,
                                            dini: dini,
                                            mkoa_kuzaliwa: mkoa_kuzaliwa,
                                            wilaya: wilaya,
                                            tarfa: tarfa,
                                        },
                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  // Laravel CSRF token
                                        success: function(response) {
                                            if(response.error == 0){
                                                applicationSubmitted = 1; //Hii kuzuia mtu akirudi back then Next
                                                application_id = response.application_id;
                                                console.log('Data saved successfully:', response);
                                                document.querySelector('.loader-overlay').style.display = 'none';

                                                const nextTab = nextTabButton.getAttribute("data-nexttab");
                                                const nextTabElement = document.getElementById(nextTab);
                                                nextTabElement.click();
                                                onStepOpened("pills-upload-attachments-tab");
                                            }else{
                                                document.querySelector('.loader-overlay').style.display = 'none';
                                                $('#modalErrorMessage').text(response.message);
                                                $("#modalError").modal('show')
                                            }
                                            // You might want to clear forms or show a success message
                                        },
                                        error: function(xhr, status, error) {
                                            console.log('Error saving data:', xhr.responseText);
                                            document.querySelector('.loader-overlay').style.display = 'none';
                                            // Handle errors here
                                        }
                                    });
                                }else {
                                    $('#modalErrorMessage').text("Please complete all required fields!");
                                    $("#modalError").modal('show')
                                }
                            });

                            // Add an event listener to listen for changes on the selectService dropdown
                            const selectService = document.getElementById("selectService");
                            const selectGender = document.getElementById("applicant_gender");
                            const select_applicant_owner_type = document.getElementById("select_applicant_owner_type");
                            const select_mark_types = document.getElementById("select_mark_types");
                            const select_mark_sign_types = document.getElementById("select_mark_sign_types");
                            if (selectService) {
                                selectService.addEventListener("change", () => {
                                    // Remove is-invalid class when a valid option is selected
                                    if (selectService.value !== "0") {
                                        selectService.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");
                                    }
                                });
                            }

                            if (selectGender) {
                                selectGender.addEventListener("change", () => {
                                    // Remove is-invalid class when a valid option is selected
                                    if (selectGender.value !== "0") {
                                        selectGender.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");
                                    }
                                });
                            }

                            if (select_applicant_owner_type) {
                                select_applicant_owner_type.addEventListener("change", () => {
                                    // Remove is-invalid class when a valid option is selected
                                    if (select_applicant_owner_type.value !== "0") {
                                        select_applicant_owner_type.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");
                                    }
                                });
                            }

                            if (select_mark_types) {
                                select_mark_types.addEventListener("change", () => {
                                    // Remove is-invalid class when a valid option is selected
                                    if (select_mark_types.value !== "0") {
                                        select_mark_types.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");
                                    } 
                                });
                            }

                            if (select_mark_sign_types) {
                                select_mark_sign_types.addEventListener("change", () => {
                                    // Remove is-invalid class when a valid option is selected
                                    if (select_mark_sign_types.value !== "0") {
                                        select_mark_sign_types.classList.remove("is-invalid");
                                        //selectService.classList.add("is-valid");
                                    }
                                });
                            }

                        });
                    }

                    // Handling "Previous" button click
                    if (formStep.querySelectorAll(".previestab")) {
                        Array.from(formStep.querySelectorAll(".previestab")).forEach(function(prevTabBtn) {
                            prevTabBtn.addEventListener("click", function() {
                                var previousTab = prevTabBtn.getAttribute("data-previous");
                                var doneTabs = prevTabBtn.closest("form").querySelectorAll(".custom-nav .done").length;
                                
                                // Remove the "done" class from the steps
                                for (var i = doneTabs - 1; i < doneTabs; i++) {
                                    var doneTab = prevTabBtn.closest("form").querySelectorAll(".custom-nav .done")[i];
                                    if (doneTab) {
                                        doneTab.classList.remove("done");
                                    }
                                }

                                document.getElementById(previousTab).click();
                            });
                        });
                    }

                    // Progress bar handling
                    var progressTabs = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
                    if (progressTabs) {
                        Array.from(progressTabs).forEach(function(tabBtn, index) {
                            tabBtn.setAttribute("data-position", index);

                            tabBtn.addEventListener("click", function() {
                                var totalTabs = formStep.querySelectorAll(".custom-nav .done").length;
                                var progressBar = document.getElementById("custom-progress-bar");

                                formStep.classList.remove("was-validated");

                                // Update progress bar
                                if (tabBtn.getAttribute("data-progressbar")) {
                                    var progressMax = progressBar.querySelectorAll("li").length - 1;
                                    var progressPercent = (index / progressMax) * 100;
                                    progressBar.querySelector(".progress-bar").style.width = progressPercent + "%";
                                }

                                // Mark steps as done or active
                                Array.from(formStep.querySelectorAll(".custom-nav .done")).forEach(function(doneTab) {
                                    doneTab.classList.remove("done");
                                });

                                for (var i = 0; i <= index; i++) {
                                    if (progressTabs[i].classList.contains("active")) {
                                        progressTabs[i].classList.remove("done");
                                    } else {
                                        progressTabs[i].classList.add("done");
                                    }
                                }
                            });
                        });
                    }

                    // const previousTabs = formStep.querySelectorAll(".previestab");

                    // if (previousTabs) {
                    //     Array.from(previousTabs).forEach((previousTabButton) => {
                    //         previousTabButton.addEventListener("click", () => {
                    //             const previousTab = previousTabButton.getAttribute("data-previous");
                    //             document.getElementById(previousTab).click();
                    //         });
                    //     });
                    // }

                    // const progressTabs = formStep.querySelectorAll('button[data-bs-toggle="pill"]');

                    // if (progressTabs) {
                    //     Array.from(progressTabs).forEach((progressTabButton, index) => {
                    //         progressTabButton.setAttribute("data-position", index);

                    //         progressTabButton.addEventListener("click", () => {
                    //             const progressBar = progressTabButton.getAttribute("data-progressbar");

                    //             if (progressBar) {
                    //                 const totalSteps = document.getElementById("custom-progress-bar").querySelectorAll("li").length - 1;
                    //                 const progressPercentage = (index / totalSteps) * 100;
                    //                 document.getElementById("custom-progress-bar").querySelector(".progress-bar").style.width = progressPercentage + "%";
                    //             }
                    //         });
                    //     });
                    // }
                });
            }

        </script>
    @endif

  </body>
  <!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 09:39:51 GMT -->
</html>