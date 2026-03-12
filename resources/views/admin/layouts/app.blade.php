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
                    <div class="collapse {{ request()->routeIs('slidershow') || request()->routeIs('slidercreate') || request()->routeIs('slider.edit') || request()->routeIs('homeshow') || request()->routeIs('homecreate') || request()->routeIs('home.edit') || request()->routeIs('finishtypeshow') || request()->routeIs('finishtypecreate') || request()->routeIs('finishtype.edit') || request()->routeIs('designtypeshow') || request()->routeIs('designtypecreate') || request()->routeIs('designtype.edit') || request()->routeIs('qsizeshow') || request()->routeIs('qsizecreate') || request()->routeIs('qsize.edit') || request()->routeIs('wsizeshow') || request()->routeIs('wsizecreate') || request()->routeIs('wsize.edit') || request()->routeIs('ssizeshow') || request()->routeIs('ssizecreate') || request()->routeIs('ssize.edit') || request()->routeIs('stockshow') || request()->routeIs('stockcreate') || request()->routeIs('stock.edit') ? 'show' : '' }}"
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
                    class="nav-item {{ request()->routeIs('export') || request()->routeIs('export.create') || request()->routeIs('export.edit') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('export') }}">Export</a>
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

    <style>
        /* Minimal styling */
        #editor {
            min-height: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            overflow-y: auto;
        }

        #source {
            display: none;
            min-height: 300px;
        }
    </style>
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


    <script>
        const toolbarConfig = [{
                type: "select",
                options: [{
                        value: "P",
                        text: "Paragraph"
                    },
                    {
                        value: "H1",
                        text: "H1"
                    },
                    {
                        value: "H2",
                        text: "H2"
                    },
                    {
                        value: "H3",
                        text: "H3"
                    },
                    {
                        value: "H4",
                        text: "H4"
                    },
                    {
                        value: "H5",
                        text: "H5"
                    },
                    {
                        value: "H6",
                        text: "H6"
                    },
                ],
                onChangeCmd: "formatBlock",
                className: "form-select form-select-sm w-auto",
            },

            {
                type: "select",
                options: [{
                        value: "3",
                        text: "Default"
                    },
                    {
                        value: "1",
                        text: "Small"
                    },
                    {
                        value: "5",
                        text: "Large"
                    },
                    {
                        value: "7",
                        text: "Extra Large"
                    },
                ],
                onChangeCmd: "fontSize",
                className: "form-select form-select-sm w-auto",
            },

            {
                type: "select",
                options: [{
                        value: "Arial",
                        text: "Arial"
                    },
                    {
                        value: "Courier New",
                        text: "Courier New"
                    },
                    {
                        value: "Georgia",
                        text: "Georgia"
                    },
                    {
                        value: "Times New Roman",
                        text: "Times New Roman"
                    },
                    {
                        value: "Verdana",
                        text: "Verdana"
                    },
                ],
                onChangeCmd: "fontName",
                className: "form-select form-select-sm w-auto",
            },

            {
                type: "button",
                cmd: "bold",
                text: "B",
                className: "btn btn-outline-primary btn-sm",
                html: "<b>B</b>"
            },
            {
                type: "button",
                cmd: "italic",
                text: "I",
                className: "btn btn-outline-primary btn-sm",
                html: "<i>I</i>"
            },
            {
                type: "button",
                cmd: "underline",
                text: "U",
                className: "btn btn-outline-primary btn-sm",
                html: "<u>U</u>"
            },
            {
                type: "button",
                cmd: "strikeThrough",
                text: "S",
                className: "btn btn-outline-primary btn-sm",
                html: "<s>S</s>"
            },

            {
                type: "button",
                cmd: "justifyLeft",
                text: "Left",
                className: "btn btn-outline-secondary btn-sm"
            },
            {
                type: "button",
                cmd: "justifyCenter",
                text: "Center",
                className: "btn btn-outline-secondary btn-sm"
            },
            {
                type: "button",
                cmd: "justifyRight",
                text: "Right",
                className: "btn btn-outline-secondary btn-sm"
            },
            {
                type: "button",
                cmd: "justifyFull",
                text: "Justify",
                className: "btn btn-outline-secondary btn-sm"
            },

            {
                type: "button",
                cmd: "insertUnorderedList",
                text: "• List",
                className: "btn btn-outline-dark btn-sm"
            },
            {
                type: "button",
                cmd: "insertOrderedList",
                text: "1. List",
                className: "btn btn-outline-dark btn-sm"
            },

            {
                type: "button",
                cmd: "indent",
                text: "Indent",
                className: "btn btn-outline-dark btn-sm"
            },
            {
                type: "button",
                cmd: "outdent",
                text: "Outdent",
                className: "btn btn-outline-dark btn-sm"
            },

            {
                type: "color",
                cmd: "foreColor",
                title: "Text Color"
            },
            {
                type: "color",
                cmd: "hiliteColor",
                title: "Highlight"
            },

            {
                type: "button",
                cmd: "insertImage",
                text: "Image",
                className: "btn btn-outline-success btn-sm",
                onclick: "insertImage",
            },
            {
                type: "button",
                cmd: "insertLink",
                text: "Link",
                className: "btn btn-outline-success btn-sm",
                onclick: "insertLink",
            },
            {
                type: "button",
                cmd: "insertTable",
                text: "Table",
                className: "btn btn-outline-info btn-sm",
                onclick: "insertTable",
            },

            {
                type: "button",
                cmd: "insertHorizontalRule",
                text: "HR",
                className: "btn btn-outline-secondary btn-sm"
            },
            {
                type: "button",
                cmd: "removeFormat",
                text: "Clear",
                className: "btn btn-outline-danger btn-sm"
            },
            {
                type: "button",
                cmd: "toggleSource",
                text: "View Source",
                className: "btn btn-outline-secondary btn-sm",
                onclick: "toggleSource",
            },
        ];

        const toolbarContainer = document.getElementById("toolbar");
        const editor = document.getElementById("editor");
        const source = document.getElementById("source");
        let isSource = false;

        function format(command, value = null) {
            document.execCommand(command, false, value);
            editor.focus();
        }

        function insertImage() {
            const url = prompt("Enter image URL");
            if (url) format("insertImage", url);
        }

        function insertLink() {
            const url = prompt("Enter link URL");
            if (url) format("createLink", url);
        }

        function insertTable() {
            const rows = parseInt(prompt("Rows?", 2));
            const cols = parseInt(prompt("Columns?", 2));
            if (rows > 0 && cols > 0) {
                let table = "<table border='1' style='width: 100%; border-collapse: collapse'>";
                for (let i = 0; i < rows; i++) {
                    table += "<tr>";
                    for (let j = 0; j < cols; j++) {
                        table += "<td>&nbsp;</td>";
                    }
                    table += "</tr>";
                }
                table += "</table>";
                document.execCommand("insertHTML", false, table);
            }
        }

        function toggleSource() {
            if (isSource) {
                editor.innerHTML = source.value;
                source.style.display = "none";
                editor.style.display = "block";
            } else {
                source.value = editor.innerHTML;
                source.style.display = "block";
                editor.style.display = "none";
            }
            isSource = !isSource;
        }

        function createToolbar() {
            toolbarConfig.forEach((item) => {
                let element;
                if (item.type === "select") {
                    element = document.createElement("select");
                    element.className = item.className || "form-select form-select-sm w-auto";
                    item.options.forEach((opt) => {
                        const option = document.createElement("option");
                        option.value = opt.value;
                        option.textContent = opt.text;
                        element.appendChild(option);
                    });
                    element.addEventListener("change", () => format(item.onChangeCmd, element.value));
                } else if (item.type === "button") {
                    element = document.createElement("button");
                    element.type = "button";
                    element.className = item.className || "btn btn-outline-primary btn-sm";
                    element.title = item.title || item.text || "";
                    element.innerHTML = item.html || item.text;
                    if (item.onclick && typeof window[item.onclick] === "function") {
                        element.addEventListener("click", window[item.onclick]);
                    } else {
                        element.addEventListener("click", () => format(item.cmd));
                    }
                } else if (item.type === "color") {
                    element = document.createElement("input");
                    element.type = "color";
                    element.className = "form-control form-control-color";
                    element.title = item.title || "";
                    element.addEventListener("change", (e) => format(item.cmd, e.target.value));
                }
                if (element) {
                    toolbarContainer.appendChild(element);
                }
            });
        }

        // Initialize toolbar on page load
        createToolbar();
    </script>

</body>

</html>
