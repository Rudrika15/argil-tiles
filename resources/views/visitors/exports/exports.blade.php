@extends('layouts.app')

@section('seosection')
    <title>Exports | Argil Tiles – Quartz Stone Manufacturers in Morbi, India</title>
@endsection


@section('content')
    <!-- HERO -->
    <section class="text-white position-relative d-flex align-items-center justify-content-center overflow-hidden"
        style="min-height: 90vh; 
           border-bottom: 8px solid #ccb19b !important; 
           background: linear-gradient(rgba(77, 76, 76, 0.7), rgba(0, 0, 0, 0.85)), 
                       url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?q=80&w=2000&auto=format&fit=crop'); 
           background-size: cover; 
           background-position: center; 
           background-attachment: fixed;">

        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <p class="text-uppercase fw-bold mb-4" style="color:#ccb19b; letter-spacing:6px; font-size: 0.85rem;">
                        Argil Group <span class="mx-2 opacity-50">|</span> Global Export Division
                    </p>

                    <h1 class="display-4 fw-bold text-uppercase mb-4" style="line-height: 1.1; letter-spacing: -1px;">
                        Premium <span style="color:#ccb19b">SPC & Quartz</span> <br>
                        Global Wholesale Supply
                    </h1>

                    <p class="lead fw-light opacity-75 mb-5 mx-auto"
                        style="max-width: 750px; font-size: 1.35rem; line-height: 1.6;">
                        Supplying high-performance architectural surfaces to global distributors
                        and developers with reliable factory-to-port logistics.
                    </p>

                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#enquiry" class="btn text-white fw-bold px-4 py-3 rounded-0" style="background:#ccb19b">
                            Request Quotation
                        </a>
                        <a href="{{ route('catalogue') }}" target="_blank"
                            class="btn btn-outline-light px-4 py-3 rounded-0">
                            Download Catalog
                        </a>
                    </div>

                    <div class="mt-5 pt-2 d-flex justify-content-center gap-5 opacity-50 text-uppercase small"
                        style="letter-spacing: 2px;">
                        <span><i class="bi bi-award me-2"></i>ISO Certified</span>
                        <span><i class="bi bi-ship/truck me-2"></i>Direct Logistics</span>
                        <span><i class="bi bi-globe me-2"></i>5+ Countries</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- INTERNATIONAL SUPPLY -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color:black;">
                INTERNATIONAL SUPPLY REGIONS
            </h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='exports/uae';">

                        <img src="export-imgs/uae.png" class="img-fluid w-50 mx-auto d-block" alt="UAE">

                        <div class="card-body pb-5">
                            <h5 class="fw-bold">UAE</h5>
                            <p class="text-muted mb-0">
                                SPC flooring and quartz surfaces supplied for hospitality, residential towers and
                                commercial interiors.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='exports/usa'">

                        <img src="export-imgs/usa.png" class="img-fluid w-50 mx-auto d-block" alt="USA">

                        <div class="card-body mt-2 pb-5">
                            <h5 class="fw-bold">United States</h5>
                            <p class="text-muted mb-0">
                                Bulk supply for renovation projects, apartments and retail interior developments.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='exports/canada';">

                        <img src="export-imgs/canada.png" class="img-fluid w-50 mx-auto d-block" alt="Canada">

                        <div class="card-body pb-5">
                            <h5 class="fw-bold">Canada</h5>
                            <p class="text-muted mb-0">
                                Durable flooring and engineered quartz materials supplied for residential construction.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='exports/uk';">

                        <img src="export-imgs/uk.png" class="img-fluid w-50 mx-auto d-block" alt="UK">

                        <div class="card-body pb-5">
                            <h5 class="fw-bold">United Kingdom</h5>
                            <p class="text-muted mb-0">
                                Luxury vinyl flooring and quartz slabs for offices, housing and renovation projects.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='/exports/australia';">

                        <img src="export-imgs/austraila.png" class="img-fluid w-50 mx-auto d-block" alt="Australia">

                        <div class="card-body pb-5">
                            <h5 class="fw-bold">Australia</h5>
                            <p class="text-muted mb-0">
                                Moisture-resistant SPC flooring for residential interiors and commercial developments.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-3 border-top border-3 position-relative overflow-hidden"
                        style="border-color: #ccb19b !important; cursor: pointer; transition: all 0.3s ease-in-out;"
                        onmouseenter="this.querySelector('.long-arrow').style.opacity='1'; this.querySelector('.long-arrow').style.transform='translateX(0)'; this.style.transform='translateY(-5px)';"
                        onmouseleave="this.querySelector('.long-arrow').style.opacity='0'; this.querySelector('.long-arrow').style.transform='translateX(-20px)';"
                        onclick="window.location.href='/exports/russia';">

                        <img src="export-imgs/russia.png" class="img-fluid w-50 mx-auto d-block" alt="Russia">

                        <div class="card-body mt-4 pb-5">
                            <h5 class="fw-bold">Russia</h5>
                            <p class="text-muted mb-0">
                                SPC flooring and quartz surfaces supplied for apartment projects and interiors.
                            </p>
                        </div>

                        <div class="long-arrow position-absolute bottom-0 start-0 p-3 w-100 d-flex align-items-center justify-content-between"
                            style="opacity: 0; color: #ccb19b; transition: all 0.4s ease-in-out; transform: translateX(-20px);">
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">More Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PRODUCT RANGE -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-lg-7">
                    <h6 class="text-uppercase fw-bold ls-2" style="color: #ccb19b; letter-spacing: 2px;">Manufacturing
                        Excellence</h6>
                    <h2 class="display-5 fw-bold text-dark">Export Specifications</h2>
                </div>
                <div class="col-lg-5 text-lg-end pb-2">
                    <p class="text-muted mb-0 border-start border-md-0 ps-3 ps-md-0"
                        style="border-color: #ccb19b !important;">
                        Argil Tiles operates under ISO 9001:2015 standards, ensuring batch-to-batch color consistency
                        for
                        international projects.
                    </p>
                </div>
            </div>

            <div class="row g-0 shadow-lg rounded overflow-hidden border">
                <div class="col-lg-6 border-end">
                    <div class="p-0 position-relative">
                        <div style="height:100px;"></div>
                        <img src="export-imgs/spc1.jpg" class="img-fluid w-50 mx-auto d-block" alt="Argil SPC Flooring">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark text-white px-3 py-2 fw-normal"
                                style="border-left: 3px solid #ccb19b;">SPC-RIGID SERIES</span>
                        </div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 p-3 rounded bg-light" style="color: #ccb19b;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h1a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5 0h4V4H6v3zm4 4H6V8h4v3z" />
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h4 class="fw-bold mb-0">Wooden-Core SPC</h4>
                                <small class="text-muted text-uppercase fw-bold">High-Density Limestone
                                    Composite</small>
                            </div>
                        </div>

                        <p class="text-secondary mb-4">Engineered for high-traffic environments. Our SPC utilizes a
                            2000kg/m³ density core, providing superior acoustic insulation.</p>

                        <table class="table table-sm table-borderless small text-uppercase mb-4">
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Wear Layer</td>
                                <td class="py-2 fw-bold text-end">0.50mm (Commercial)</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Core Thickness</td>
                                <td class="py-2 fw-bold text-end">4.0mm / 5.0mm / 6.0mm</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-muted">System</td>
                                <td class="py-2 fw-bold text-end">Uniclic / Valinge 2G</td>
                            </tr>
                        </table>

                        <a href="/spcproducts" class="btn w-100 rounded-0 fw-bold py-2 text-white"
                            style="background-color: #ccb19b;">Explore Products</a>
                    </div>
                </div>

                <div class="col-lg-6 bg-light">
                    <div class="p-0 position-relative">
                        <div style="height:100px;"></div>
                        <img src="export-imgs/quartz1.jpg" class="img-fluid w-50 mx-auto d-block"
                            alt="Argil Quartz Surface">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark text-white px-3 py-2 fw-normal"
                                style="border-left: 3px solid #ccb19b;">QUARTZ-SURFACE</span>
                        </div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 p-3 rounded bg-white" style="color: #ccb19b;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h4 class="fw-bold mb-0">Architectural Quartz</h4>
                                <small class="text-muted text-uppercase fw-bold">93% Natural Quartz Crystal</small>
                            </div>
                        </div>

                        <p class="text-secondary mb-4">Engineered under vacuum-press technology. Non-porous surfaces
                            with
                            Mohs hardness rating of 7.</p>

                        <table class="table table-sm table-borderless small text-uppercase mb-4">
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Slab Size</td>
                                <td class="py-2 fw-bold text-end">3200 x 1600mm (Jumbo)</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Finish</td>
                                <td class="py-2 fw-bold text-end">Polished / Honed</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-muted">Resistance</td>
                                <td class="py-2 fw-bold text-end">Stain & Chemical Proof</td>
                            </tr>
                        </table>

                        <a href="/quartzsurface" class="btn w-100 rounded-0 fw-bold py-2 text-white shadow-sm"
                            style="background-color: #ccb19b;">Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ENQUIRY -->

    <section id="enquiry" class="py-2 text-white"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.pexels.com/photos/323705/pexels-photo-323705.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center; background-attachment: fixed;">

        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <div class="text-center mb-3">
                        <p class="text-uppercase fw-bold mb-2 tracking-widest"
                            style="color:#ccb19b; letter-spacing: 2px;">
                            Global Logistics & Pricing</p>
                        <h2 class="display-6 fw-bold text-uppercase mb-3">Request Export Quote</h2>
                        <hr class="mx-auto opacity-100" style="width: 60px; height: 3px; background-color: #ccb19b;">
                    </div>

                    <div class="p-4 p-md-5 bg-dark bg-opacity-50 border-top border-4 shadow-lg"
                        style="border-color: #ccb19b !important;">

                        <form id="contact-form" class="row g-4" method="post"
                            action="{{ request()->root() }}/exports/mail">
                            @csrf
                            <input type="hidden" name="export_country" value="Global">

                            <div class="col-md-6">
                                <input type="text" name="form_name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="form_email" class="form-control" placeholder="Email"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" id="form_phone" name="form_phone" class="form-control"
                                    placeholder="Contact No" required>
                            </div>

                            <div class="col-md-6">
                                <select name="category" class="form-select" required>
                                    <option selected disabled>Select Product Category</option>
                                    <option value="SPC Flooring">SPC Flooring</option>
                                    <option value="Quartz Surfaces">Quartz Surfaces</option>
                                    <option value="Both Categories">Both Categories</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <textarea name="form_message" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-dark w-100">
                                    Submit
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p class="small mb-0 opacity-75">
                                <i class="bi bi-shield-check me-1" style="color: #ccb19b;"></i>
                                Verified Direct Factory Quotes • Responds within 24h
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-uppercase fw-bold ls-2" style="color: #ccb19b; letter-spacing: 2px;">Support Center</h6>
                <h2 class="display-6 fw-bold text-dark">Frequently Asked Questions</h2>
                <div class="mx-auto mt-3" style="width: 50px; height: 3px; background-color: #ccb19b !important;"></div>
            </div>

            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="accordion accordion-flush shadow-sm border" id="faqProject">

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f1"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    What products are available for project supply?
                                </button>
                            </h2>
                            <div id="f1" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Argil Group specializes in **SPC flooring, Quartz surfaces, porcelain, vitrified,
                                    wall,
                                    and floor tiles** tailored for global residential and commercial projects.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f2"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    What is the minimum order quantity (MOQ) for export?
                                </button>
                            </h2>
                            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Typically, the MOQ is **one 20-foot container**. However, mixed designs or sizes can
                                    be
                                    arranged depending on availability and specific project requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f3"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    How are tiles packaged for international shipping?
                                </button>
                            </h2>
                            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    We use **strong corrugated boxes** with protective separators, stacked on
                                    **fumigated
                                    wooden pallets** (ISPM-15 certified) to ensure safety during long-distance sea
                                    freight.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f4"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    What documents are provided with export shipments?
                                </button>
                            </h2>
                            <div id="f4" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    We provide a complete set of documents: **Commercial Invoice, Packing List, Bill of
                                    Lading, Certificate of Origin,** and technical test reports for smooth customs
                                    clearance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f5"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    How long does international shipping take?
                                </button>
                            </h2>
                            <div id="f5" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Production takes 2–4 weeks. Sea freight delivery typically ranges from **15–40
                                    days**
                                    depending on the destination port and shipping line.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f6"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    Are your tiles certified for international quality?
                                </button>
                            </h2>
                            <div id="f6" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Yes. Our products comply with **ISO and global standards**. We test for water
                                    absorption, breaking strength, and slip resistance to ensure maximum durability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f7"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    Do you provide samples before bulk orders?
                                </button>
                            </h2>
                            <div id="f7" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Yes. We provide **samples for quality and design verification**. Contact our export
                                    team
                                    to arrange a sample kit before confirming your bulk shipment.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f8"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    Can I request custom designs or private labeling?
                                </button>
                            </h2>
                            <div id="f8" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    Yes. We offer **OEM and private labeling services**, including customized packaging,
                                    branding, and specific design requirements for global wholesalers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark py-4 shadow-none bg-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f9"
                                    style="border-left: 4px solid #ccb19b; transition: 0.3s;">
                                    Why choose tiles exported from India by Argil Group?
                                </button>
                            </h2>
                            <div id="f9" class="accordion-collapse collapse" data-bs-parent="#faqProject">
                                <div class="accordion-body py-4 text-secondary bg-light bg-opacity-25"
                                    style="border-left: 4px solid #ccb19b;">
                                    India is a global leader in ceramics. Argil Group provides **factory-direct
                                    pricing**,
                                    advanced manufacturing technology, and a reliable supply chain for worldwide
                                    delivery.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @verbatim

        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What types of tiles do you export?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We export a wide range of high-quality tiles including Quartz tiles, SPC flooring, porcelain tiles, vitrified tiles, wall tiles, and floor tiles designed for residential, commercial, and large-scale construction projects worldwide."
          }
        },
        {
          "@type": "Question",
          "name": "Which countries do you export tiles to?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We export tiles to several international markets including the United Kingdom, United Arab Emirates, United States, Russia, Australia, and Canada."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum order quantity (MOQ) for export?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typically, the minimum order quantity is one 20-foot container. However, mixed designs or sizes may be arranged depending on availability and project requirements."
          }
        },
        {
          "@type": "Question",
          "name": "How are tiles packaged for international shipping?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tiles are carefully packed in strong corrugated boxes with protective separators, then stacked on fumigated wooden pallets or securely loaded into containers to prevent damage during shipping."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are provided with tile export shipments?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Export shipments generally include a Commercial Invoice, Packing List, Bill of Lading, Certificate of Origin, and Quality/Test Reports to ensure smooth customs clearance."
          }
        },
        {
          "@type": "Question",
          "name": "How long does international shipping take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "On average, sea freight delivery takes 15–40 days from India to most international ports, depending on the destination country."
          }
        },
        {
          "@type": "Question",
          "name": "Are your tiles certified for international quality standards?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our tiles follow strict quality standards and comply with ISO certifications and international testing for water absorption, breaking strength, and slip resistance."
          }
        },
        {
          "@type": "Question",
          "name": "Can I request custom designs or private labeling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. we offer OEM/private labeling services, including customized packaging, branding, and tile designs for international distributors and wholesalers."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide samples before placing a bulk order?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Samples can be provided so buyers can verify design, finish, and quality before confirming bulk export orders."
          }
        },
        {
          "@type": "Question",
          "name": "How can I place an export order?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can place an inquiry by sending your required size, design, and quantity. Our export team will assist you from quotation and catalog selection to shipment scheduling."
          }
        },
        {
          "@type": "Question",
          "name": "What quality checks are done before export?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tiles undergo strict inspections including size and thickness verification, surface finish and color consistency, water absorption tests, and strength checks."
          }
        },
        {
          "@type": "Question",
          "name": "Why choose tiles exported from India by Argil Group?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "India is a top global exporter offering high-quality products at competitive prices. Argil Group combines advanced manufacturing with a strong supply chain for reliable global delivery."
          }
        }
      ]
    }
    </script>
    @endverbatim
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const form = document.getElementById('contact-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                if (!form.checkValidity()) return;

                submitBtn.innerHTML = "Submitting...";
                submitBtn.disabled = true;

                const formData = new FormData(form);
                const csrfToken = form.querySelector('input[name="_token"]')?.value;
                if (csrfToken && !formData.has('_token')) {
                    formData.append('_token', csrfToken);
                }

                // Get phone manually
                const phone = document.getElementById('form_phone').value;
                formData.set('form_phone', phone);

                fetch(form.getAttribute('action'), {
                        method: "POST",
                        credentials: "same-origin",
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(async res => {
                        const contentType = res.headers.get('content-type') || '';
                        const data = contentType.includes('application/json') ? await res.json() :
                            {};
                        if (!res.ok) {
                            throw new Error(data.message || 'Request failed');
                        }
                        return data;
                    })
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: 'Success',
                                text: 'Message sent successfully!',
                                icon: 'success'
                            });
                            form.reset();
                        } else {
                            throw new Error(data.message || 'Mail not sent');
                        }
                    })
                    .catch((error) => {
                        Swal.fire({
                            title: 'Error',
                            text: error.message || 'Something went wrong!',
                            icon: 'error'
                        });
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    });
            });

        });
    </script>
@endsection
