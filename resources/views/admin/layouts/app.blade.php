<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetbackend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetbackend/css/all.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{ asset('assetbackend/css/style.css') }}">

    <!-- Toastr CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    {{-- sweetalert cdn --}}

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    <title>Argil | Admin Panel </title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                {{-- <!-- <h3><img src="images/white-logo.png" height="40px" alt=""></h3> --> --}}
                <h3 class="text-center">Argil</h3>
            </div>
            <ul class="list-unstyled components">

                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i
                            class="bi bi-house-fill"></i> Dashboard</a></li>
                <p><i class="bi bi-box2-fill"></i> Products</p>
                <li class="{{ request()->routeIs('wallshow') ? 'active' : '' }}"><a href="{{ route('wallshow') }}"> Wall</a>
                </li>
                <li class="{{ request()->routeIs('quartzshow') ? 'active' : '' }}"><a href="{{ route('quartzshow') }}">
                        Quartz</a></li>
                <li class="{{ request()->routeIs('lvtshow') ? 'active' : '' }}"><a href="{{ route('lvtshow') }}"> SPC
                        Products</a></li>
                <p><i class="bi bi-chat-left-quote"></i> Inquiry </p>
                <li class="{{ request()->routeIs('inquiryshow') ? 'active' : '' }}"><a href="{{ route('inquiryshow') }}">
                        Inquiry</a></li>
                <li class="{{ request()->routeIs('contactshow') ? 'active' : '' }}"><a href="{{ route('contactshow') }}">
                        Contact-Us </a></li>
                <p><i class="bi bi-sliders"></i> General </p>
                <li class="{{ request()->routeIs('catelogueshow') ? 'active' : '' }}"><a
                        href="{{ route('catelogueshow') }}"> Catelogue</a></li>
                <!-- <li><a href="{{ route('newsroomshow') }}"> News Room</a></li> -->
                <p><i class="bi bi-gear-wide-connected"></i> Setup</p>
                <li class="{{ request()->routeIs('slidershow') ? 'active' : '' }}"><a href="{{ route('slidershow') }}">
                        Slider</a></li>
                <li class="{{ request()->routeIs('homeshow') ? 'active' : '' }}"><a href="{{ route('homeshow') }}"> Home
                    </a></li>
                <li class="{{ request()->routeIs('finishtypeshow') ? 'active' : '' }}"><a
                        href="{{ route('finishtypeshow') }}"> Finish Type</a></li>
                <li class="{{ request()->routeIs('designtypeshow') ? 'active' : '' }}"><a
                        href="{{ route('designtypeshow') }}"> Design Type</a></li>
                <li class="{{ request()->routeIs('qsizeshow') ? 'active' : '' }}"><a href="{{ route('qsizeshow') }}">
                        Q-size</a></li>
                <li class="{{ request()->routeIs('wsizeshow') ? 'active' : '' }}"><a href="{{ route('wsizeshow') }}">
                        W-size</a></li>
                <li class="{{ request()->routeIs('ssizeshow') ? 'active' : '' }}"><a href="{{ route('ssizeshow') }}">
                        SPC-size</a></li>
                <li class="{{ request()->routeIs('stockshow') ? 'active' : '' }}"><a
                        href="{{ route('stockshow') }}">Stock</a></li>
                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>

                {{-- <li><a href="{{ route('logout') }}">logout</a></li> --}}
            </ul>
        </nav>


        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="text-end">
                        Argil
                        <a href="{{ Route('logout') }}" class="btn btn-outline-dark me-2">Logout</a>
                    </div>




                    <!-- @auth
                    {{ auth()->user()->name }}<i class="bi bi-person-circle ms-1"></i>
                    <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Login</a>
                </a>
      @endauth
      @guest
                    <div class="text-end">
                    <li><a class=""  href="{{ route('logout') }}" class="btn btn-outline-dark me-2"> Logout</a></li>

                      </div>
      @endguest
 </li> -->

                </div>
            </nav>
            @yield('content')


        </div>
    </div>

    <script src="{{ asset('assetbackend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/script.js') }}"></script>


    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>


    {{-- SweetAlert2 toast notification code --}}
    @if (Session::has('msg'))
        <script>
            Swal.fire({
                icon: "{{ Session::get('msg_type') ?? 'success' }}", // You can pass 'msg_type' to change the icon dynamically
                title: "{{ Session::get('msg') }}",
                toast: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif


     {{-- sweet alert delete code --}}
     <script>
        function openDeleteModal(url) {
            Swal.fire({
                title: 'Are you sure you want to delete it?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6e7881',
                confirmButtonText: 'Yes, Delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete route
                    window.location.href = url;
                }
            });
        }
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>
