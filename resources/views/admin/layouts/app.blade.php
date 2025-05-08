<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Argil | Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetbackend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetbackend/css/all.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assetbackend/css/style.css') }}">

    <!-- Toastr CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    {{-- sweetalert cdn --}}

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

</head>

<body>

    <!-- Sidebar -->
    {{-- <div id="sidebar">

        <ul class="sidebar-ul">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i
                        class="bi bi-house-fill"></i> Dashboard</a></li>
            <p><i class="bi bi-box2-fill"></i> Products</p>
            <li class="{{ request()->routeIs('wallshow') ? 'active' : '' }}"><a href="{{ route('wallshow') }}">Wall</a>
            </li>
            <li class="{{ request()->routeIs('quartzshow') ? 'active' : '' }}"><a
                    href="{{ route('quartzshow') }}">Quartz</a></li>
            <li class="{{ request()->routeIs('lvtshow') ? 'active' : '' }}"><a href="{{ route('lvtshow') }}">SPC
                    Products</a></li>
            <p><i class="bi bi-chat-left-quote"></i> Inquiry </p>
            <li class="{{ request()->routeIs('inquiryshow') ? 'active' : '' }}"><a
                    href="{{ route('inquiryshow') }}">Inquiry</a></li>
            <li class="{{ request()->routeIs('contactshow') ? 'active' : '' }}"><a
                    href="{{ route('contactshow') }}">Contact-Us</a></li>
            <p><i class="bi bi-sliders"></i> General </p>
            <li class="{{ request()->routeIs('catelogueshow') ? 'active' : '' }}"><a
                    href="{{ route('catelogueshow') }}">Catelogue</a></li>
            <p><i class="bi bi-gear-wide-connected"></i> Setup</p>
            <li class="{{ request()->routeIs('slidershow') ? 'active' : '' }}"><a
                    href="{{ route('slidershow') }}">Slider</a></li>
            <li class="{{ request()->routeIs('homeshow') ? 'active' : '' }}"><a
                    href="{{ route('homeshow') }}">Home</a></li>
            <li class="{{ request()->routeIs('finishtypeshow') ? 'active' : '' }}"><a
                    href="{{ route('finishtypeshow') }}">Finish Type</a></li>
            <li class="{{ request()->routeIs('designtypeshow') ? 'active' : '' }}"><a
                    href="{{ route('designtypeshow') }}">Design Type</a></li>
            <li class="{{ request()->routeIs('qsizeshow') ? 'active' : '' }}"><a
                    href="{{ route('qsizeshow') }}">Q-size</a></li>
            <li class="{{ request()->routeIs('wsizeshow') ? 'active' : '' }}"><a
                    href="{{ route('wsizeshow') }}">W-size</a></li>
            <li class="{{ request()->routeIs('ssizeshow') ? 'active' : '' }}"><a
                    href="{{ route('ssizeshow') }}">SPC-size</a></li>
            <li class="{{ request()->routeIs('stockshow') ? 'active' : '' }}"><a
                    href="{{ route('stockshow') }}">Stock</a></li>
            <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ request()->routeIs('newarrivalsshow') ? 'active' : '' }}"><a
                    href="{{ route('newarrivalsshow') }}">New Arrivals</a></li>
        </ul>
    </div> --}}


    <div id="sidebar" class="border-right">
        <div id="sidebarAccordion"> <!-- Accordion wrapper -->

            <ul class="nav flex-column">

                <!-- Dashboard -->
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="bi bi-house-fill"></i> Dashboard
                    </a>
                </li>

                <!-- Products -->
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse"
                        href="#productsMenu" role="button" aria-expanded="false" aria-controls="productsMenu">
                        <span><i class="bi bi-box2-fill"></i> Products</span>
                        <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse {{ request()->routeIs('lvtcreate') || request()->routeIs('lvtshow') || request()->routeIs('quartzshow') || request()->routeIs('quartz.edit') || request()->routeIs('quartzcreate') || request()->routeIs('lvt.edit') ? 'show' : '' }}"
                        id="productsMenu" data-parent="#sidebarAccordion">
                        <ul class="nav flex-column ml-3">
                            {{-- <li class="nav-item {{ request()->routeIs('wallshow.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('wallshow') }}">Wall</a>
                            </li> --}}
                            <li
                                class="nav-item {{ request()->routeIs('quartzshow') || request()->routeIs('quartz.edit') || request()->routeIs('quartzcreate') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('quartzshow') }}">Quartz</a>
                            </li>
                            <li
                                class="nav-item  {{ request()->routeIs('lvtcreate') || request()->routeIs('lvt.edit') || request()->routeIs('lvtshow') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('lvtshow') }}">SPC Products</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Inquiry -->
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse"
                        href="#inquiryMenu" role="button" aria-expanded="false" aria-controls="inquiryMenu">
                        <span><i class="bi bi-chat-left-quote"></i> Inquiry</span>
                        <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse {{ request()->routeIs('inquiryshow') || request()->routeIs('contactshow') ? 'show' : '' }}"
                        id="inquiryMenu" data-parent="#sidebarAccordion">
                        <ul class="nav flex-column ml-3">
                            <li class="nav-item {{ request()->routeIs('inquiryshow') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('inquiryshow') }}">Inquiry</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contactshow') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contactshow') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- General Section -->
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse"
                        href="#generalMenu" role="button" aria-expanded="false" aria-controls="generalMenu">
                        <span><i class="bi bi-sliders"></i> General</span>
                        <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse {{ request()->routeIs('cateloguecreate') || request()->routeIs('catelogue.edit') || request()->routeIs('catelogueshow') ? 'show' : '' }}"
                        id="generalMenu" data-parent="#sidebarAccordion">
                        <ul class="nav flex-column ml-3">
                            <li
                                class="nav-item {{ request()->routeIs('cateloguecreate') || request()->routeIs('catelogue.edit') || request()->routeIs('catelogueshow') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('catelogueshow') }}">Catalogue</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Setup Section -->
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="collapse"
                        href="#setupMenu" role="button" aria-expanded="false" aria-controls="setupMenu">
                        <span><i class="bi bi-gear-wide-connected"></i> Setup</span>
                        <i class="bi bi-chevron-down small"></i>
                    </a>
                    <div class="collapse {{ request()->routeIs('slidershow') ||request()->routeIs('slidercreate') ||request()->routeIs('slider.edit') ||request()->routeIs('homeshow') ||request()->routeIs('homecreate') ||request()->routeIs('home.edit') ||request()->routeIs('finishtypeshow') ||request()->routeIs('finishtypecreate') ||request()->routeIs('finishtype.edit') ||request()->routeIs('designtypeshow') ||request()->routeIs('designtypecreate') ||request()->routeIs('designtype.edit') ||request()->routeIs('qsizeshow') ||request()->routeIs('qsizecreate') ||request()->routeIs('qsize.edit') ||request()->routeIs('wsizeshow') ||request()->routeIs('wsizecreate') ||request()->routeIs('wsize.edit') ||request()->routeIs('ssizeshow') ||request()->routeIs('ssizecreate') ||request()->routeIs('ssize.edit') ||request()->routeIs('stockshow') ||request()->routeIs('stockcreate') ||request()->routeIs('stock.edit') ? 'show': '' }}"
                        id="setupMenu" data-parent="#sidebarAccordion">
                        <ul class="nav flex-column ml-3">
                            <li
                                class="nav-item {{ request()->routeIs('slidershow') || request()->routeIs('slidercreate') || request()->routeIs('slider.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('slidershow') }}">Slider</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('homeshow') || request()->routeIs('homecreate') || request()->routeIs('home.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('homeshow') }}">Home</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('finishtypeshow') || request()->routeIs('finishtypecreate') || request()->routeIs('finishtype.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('finishtypeshow') }}">Finish Type</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('designtypeshow') || request()->routeIs('designtypecreate') || request()->routeIs('designtype.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('designtypeshow') }}">Design Type</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('qsizeshow') || request()->routeIs('qsizecreate') || request()->routeIs('qsize.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('qsizeshow') }}">Q-size</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('wsizeshow') || request()->routeIs('wsizecreate') || request()->routeIs('wsize.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('wsizeshow') }}">W-size</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('ssizeshow') || request()->routeIs('ssizecreate') || request()->routeIs('ssize.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('ssizeshow') }}">SPC-size</a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('stockshow') || request()->routeIs('stockcreate') || request()->routeIs('stock.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('stockshow') }}">Stock</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('blog') || request()->routeIs('blog.create') || request()->routeIs('blog.edit') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('newarrivalsshow') || request()->routeIs('newarrivals.edit') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('newarrivalsshow') }}">New Arrivals</a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <!-- 👇 Hide button on large screens -->

                <button class="btn btn-dark d-lg-none" id="sidebarToggle"><i class="bi bi-list"></i></button>
                <div class="ms-auto">
                    Argil
                    <a href="{{ Route('logout') }}" class="btn btn-outline-dark ms-2">Logout</a>
                </div>
            </div>
        </nav>

        <div style="margin-top: 70px;">
            @yield('content')
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#sidebarToggle').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#overlay').toggleClass('active');
            });

            $('#overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $(this).removeClass('active');
            });
        });
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
        //  <script src="{{ asset('assetbackend/js/jquery-3.5.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('assetbackend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/script.js') }}"></script>


    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    </script>

</body>

</html>
