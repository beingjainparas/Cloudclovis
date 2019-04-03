@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Who are we?</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_120_95">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Our Origins and Story</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{ asset('img/Cloudclovis/Marketing/Extra/About_us_small.jpg') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-5">
                        <p class="justify-text">CloudClovis is an edtech venture focused on providing new-age education services and training on emerging industry trends.</p>
                        <p class="justify-text">Started by five engineering professionals in 2014, CloudClovis has cumulatively trained over 1300+ students, freshers and professionals in an array of emerging technology trends. We are process-driven and give paramount importance to immersive and engaging teaching models, thereby providing rigorous industry relevant programs designed and delivered in collaboration with world-class faculties and professionals.</p>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </div>
        <!--/bg_color_1-->

    </main>
    <!--/main-->

@endsection
