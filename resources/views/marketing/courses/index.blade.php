@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Technical Training courses</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/1') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/DS.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Data Science</small>
                            <h3>DATA SCIENCE USING R & PYTHON</h3>
                            <p>Data Science is a rewarding career that allows you to solve some of the world's most interesting problems. <br/>This course is designed for both complete beginners with no programming experience or experienced developers looking to make the jump to Data Science!</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/1') }}">Enroll now</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/2') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/AWS.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Cloud Computing</small>
                            <h3>AWS SOLUTIONS ARCHITECT CERTIFICATION TRAINING</h3>
                            <p>AWS Architect Certification Training is curated by industry professionals as per the industry requirements & demands. <br/>The training covers comprehensive knowledge on Cloud Computing and its various services helping you to pass the AWS Certified Solutions Architect (CSA) – Associate Exam.</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/2') }}">Enroll now</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/3') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/P.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Programming</small>
                            <h3>PYTHON PROGRAMMING LANGUAGE</h3>
                            <p>Python’s simple easy-to-use syntax, makes it the perfect language for someone trying to learn computer programming for the first time. <br/>Python finds applications in the domains of web application development, machine learning, data science, mobile development, statistics, etc.</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/3') }}">Enroll now</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/4') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/PD.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Web Development</small>
                            <h3>WEB DEVELOPMENT WITH PYTHON AND DJANGO</h3>
                            <p>Learn the fundamental concepts of Python programming language, along with using the Django web framework to build a basic web application from scratch.</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/4') }}">Enroll now</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/5') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/Selenium.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Testing</small>
                            <h3>Automation Testing using Selenium</h3>
                            <p>Selenium is a open-source web based automation tool ,used for automating web-based applications. <br/>You will learn to become an experienced automation tester by building a test framework with Selenium WebDriver using Java language.</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/5') }}">Enroll now</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid wow">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <a href="{{ url('/courses/course_details/6') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Courses/PL.jpg') }}" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Preview course</span></div>
                        </figure>
                        <div class="wrapper">
                            <small>Category: Web Development</small>
                            <h3>Fullstack Development with Laravel and AWS</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 30 Hours</li>
                            <li><a href="{{ url('/courses/course_details/6') }}">Enroll now</a></li>
                        </ul>
                    </div>
                    <!- - /box_grid - ->
                </div> -->
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection
