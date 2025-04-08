    @extends('layouts.app')
    @section('content')
        <!-- page title -->
        <section class="page-title"
            style="background-image: url('https://www.kajariaceramics.com/concept-picture/high002650.jpg');">
            <div class="container">
                <div class="content-box">
                    <div class="title">
                        <h1>Documentary Film</h1>
                    </div>
                    <div class="bread-crumb">
                        <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Documentary
                            Film</span>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        {{-- <div class="container-fluid heading-title">
            <h2 class="container">Home/Documentry Film</h2>
        </div> --}}

        <div class="container documntry-film">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/OeIRz9IBs24?si=3w7Lh8lDrE_AJfsU"
                class="youtubevideo" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="container documntry-film">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/7I37wLtJEGU?si=1D1OP2YscNpbszMk"
                title="YouTube video player" frameborder="0" class="youtubevideo"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="container documntry-film documntry-film1">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/N6ogrJn0e5E?si=8Gb-RT2eO1RZcw9z"
                title="YouTube video player" frameborder="0" class="youtubevideo"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    @endsection
