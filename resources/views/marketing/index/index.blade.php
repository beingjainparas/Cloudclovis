@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section class="header-video">
            <div id="hero_video">
                <div>
                    <h3><strong>CloudClovis</strong><br>New Age Education</h3>
                    <p>Get a headstart on new age technologies and learn from industry-level professionals and domain experts.</p>
                </div>
                <a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
            </div>
            <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
        </section>
        <!-- /header-video -->

        <div class="features clearfix">
            <div class="container">
                <ul>
                    <li><i class="pe-7s-study"></i>
                        <h4>Industry-oriented courses</h4><span>Get skilled in latest technology trends</span>
                    </li>
                    <li><i class="pe-7s-cup"></i>
                        <h4>Expert trainers</h4><span>Learn from experienced professionals</span>
                    </li>
                    <li><i class="pe-7s-target"></i>
                        <h4>Live projects</h4><span>Hands-on project implementation</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /features -->

        <div class="container-fluid margin_120_0" id="first_section">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Featured Courses</h2>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/1') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/DS.jpg') }}" class="img-fluid" alt=""></a>

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
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/2') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/AWS.jpg') }}" class="img-fluid" alt=""></a>

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
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/3') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/P.jpg') }}" class="img-fluid" alt=""></a>

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
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/4') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/PD.jpg') }}" class="img-fluid" alt=""></a>

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
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/5') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/Selenium.jpg') }}" class="img-fluid" alt=""></a>

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
                <!-- /item -->
                <!-- <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="{{ url('/courses/course_details/6') }}">
                                <div class="preview"><span>Preview course</span></div><img src="{{ asset('img/Cloudclovis/Marketing/Courses/PL.jpg') }}" class="img-fluid" alt=""></a>

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
                </div> -->
                <!-- /item -->
            </div>
            <!-- /carousel -->
            <div class="container">
                <p class="btn_home_align"><a href="{{ url('/courses') }}" class="btn_1 rounded">View all courses</a></p>
            </div>
            <!-- /container -->
            <hr>
        </div>
        <!-- /container -->

        <div class="container margin_120_95">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Why choose CloudClovis?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-diamond"></i>
                        <h3>Qualified Trainers</h3>
                        <p>Learn from industry experts and professionals with years of training experience</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-display2"></i>
                        <h3>Equipped Classrooms</h3>
                        <p>Campus-integrated classrooms equipped with high-speed internet connectivity</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-science"></i>
                        <h3>Certification</h3>
                        <p>Get accredited and certified in relevant courses and programs to get an edge over your peers</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-rocket"></i>
                        <h3>Credible Track Record</h3>
                        <p>1300+ students, freshers and professionals trained under our portfolio</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-target"></i>
                        <h3>Hands-on Approach</h3>
                        <p>Get your hands dirty and learn by solving challenging and practical problems</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-graph1"></i>
                        <h3>Lifetime Mentorship</h3>
                        <p>Enroll once and become part of the CloudClovis family for a lifetime</p>
                    </a>
                </div>
            </div>
            <!--/row-->
        </div>
        <!-- /container -->

    </main>
    <!-- /main -->

@endsection

@section('secific_js')

    <script type="text/javascript" src="{{ asset('js/marketing/video_header.js') }}"></script>
    <script>
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: true
        });
    </script>

@endsection
