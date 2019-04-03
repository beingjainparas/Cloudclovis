@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="portfolio">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Portfolio</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Here some pictures ...</h2>
            </div>
            <div class="grid">
                <ul class="magnific-gallery">
                    <li>
                        <figure>
                            <img src="{{ asset('img/Cloudclovis/Marketing/Portfolio/5.jpg') }}" alt="">
                            <figcaption>
                                <div class="caption-content">
                                    <a href="{{ asset('img/Cloudclovis/Marketing/Portfolio/5.jpg') }}" title="Selenium Workshop" data-effect="mfp-zoom-in">
                                        <i class="pe-7s-albums"></i>
                                        <p>Selenium Workshop</p>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="{{ asset('img/Cloudclovis/Marketing/Portfolio/6.jpg') }}" alt="">
                            <figcaption>
                                <div class="caption-content">
                                    <a href="{{ asset('img/Cloudclovis/Marketing/Portfolio/6.jpg') }}" title="Data Science Workshop" data-effect="mfp-zoom-in">
                                        <i class="pe-7s-albums"></i>
                                        <p>Data Science Workshop</p>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="{{ asset('img/Cloudclovis/Marketing/Portfolio/7.jpg') }}" alt="">
                            <figcaption>
                                <div class="caption-content">
                                    <a href="{{ asset('img/Cloudclovis/Marketing/Portfolio/7.jpg') }}" title="Amazon Web Service Workshop" data-effect="mfp-zoom-in">
                                        <i class="pe-7s-albums"></i>
                                        <p>Amazon Web Service Workshop</p>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="{{ asset('img/Cloudclovis/Marketing/Portfolio/8.jpg') }}" alt="">
                            <figcaption>
                                <div class="caption-content">
                                    <a href="{{ asset('img/Cloudclovis/Marketing/Portfolio/8.jpg') }}" title="Amazon Web Service Workshop" data-effect="mfp-zoom-in">
                                        <i class="pe-7s-albums"></i>
                                        <p>Amazon Web Service Workshop</p>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <!-- /grid gallery -->
        </div>
        <!-- /container -->

    </main>
    <!--/main-->

@endsection
