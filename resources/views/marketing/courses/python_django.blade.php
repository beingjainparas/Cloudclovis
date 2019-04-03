@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses-details">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Web Development with Python and Django</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#lessons">Lessons</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">

                        <section id="description">
                            <div class="box_highlight">
                                <ul class="additional_info">
                                    <li><i class="pe-7s-timer"></i>Course Duration<strong>30 Hours</strong></li>
                                    <li><i class="pe-7s-date"></i>Course Start<strong>Contact Us</strong></li>
                                </ul>
                            </div>
                            <h2>Description</h2>
                            <p>In this course, you will learn the fundamental concepts of Python programming language, along with using the Django web framework to build a basic web application from scratch.</p>
                            <p>Dive into what it takes to design, architect and build a web application from scratch using the fundamental concepts of Python backed with the power of the Django web framework.</p>
</h5>
                            <ul class="list_ok">
                                <li>
                                    <h6>Fundamentals of Python</h6>
                                </li>
                                  <li>
                                    <h6>Django installation and configuration</h6>
                                </li>
                                  <li>
                                    <h6>Database models</h6>
                                </li>
                                  <li>
                                    <h6>Templates</h6>
                                </li>
                                 <li>
                                    <h6>Web application development from scratch</h6>
                                </li>
                            </ul>
                            <hr>
                            <!-- /row -->
                        </section>
                        <!-- /section -->

                        <section id="lessons">
                            <div class="intro_title">
                                <h2>Lessons</h2>
                                <ul>
                                    <li>21 lessons</li>
                                    <li>30 Hours</li>
                                </ul>
                            </div>
                            <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introduction</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Python and its applications</a></li>
                                                    <li><a href="#0" class="txt_doc">Installation and configuration</a></li>
                                                    <li><a href="#0" class="txt_doc">Working with IDLE (Integrated Development & Learning Environment)</a></li>
                                                    <li><a href="#0" class="txt_doc">“Hello World” program</a></li>
                                                    <li><a href="#0" class="txt_doc">Data types</a></li>
                                                    <li><a href="#0" class="txt_doc">Variables</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="indicator ti-plus"></i>String manipulation
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">String concatenation</a></li>
                                                    <li><a href="#0" class="txt_doc">Indexing</a></li>
                                                    <li><a href="#0" class="txt_doc">Slicing of strings</a></li>
                                                    <li><a href="#0" class="txt_doc">Typecasting and its applications</a></li>
                                                    <li><a href="#0" class="txt_doc">Escape character</a></li>
                                                    <li><a href="#0" class="txt_doc">User inputs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="indicator ti-plus"></i>Data structures
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                   <li><a href="#0" class="txt_doc">Lists</a></li>
                                                    <li><a href="#0" class="txt_doc">Tuples</a></li>
                                                    <li><a href="#0" class="txt_doc">Differences between lists and tuples</a></li>
                                                    <li><a href="#0" class="txt_doc">Dictionaries</a></li>
                                                    <li><a href="#0" class="txt_doc">Sets</a></li>
                                                    <li><a href="#0" class="txt_doc">Practical applications of data structures</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFourth">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                                <i class="indicator ti-plus"></i>Control loops
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">If-else loop</a></li>
                                                    <li><a href="#0" class="txt_doc">For loop</a></li>
                                                    <li><a href="#0" class="txt_doc">While loop</a></li>
                                                    <li><a href="#0" class="txt_doc">Problems based on loops</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                  <div class="card">
                                    <div class="card-header" role="tab" id="headingFifth">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                                <i class="indicator ti-plus"></i>Functions
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFifth" class="collapse" role="tabpanel" aria-labelledby="headingFifth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Inbuilt functions in Python</a></li>
                                                     <li><a href="#0" class="txt_doc">Function definition</a></li>
                                                     <li><a href="#0" class="txt_doc">Function calling</a></li>
                                                     <li><a href="#0" class="txt_doc">Problems based on functions</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingSixth">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                                <i class="indicator ti-plus"></i>Object Oriented Programming
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSixth" class="collapse" role="tabpanel" aria-labelledby="headingSixth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Introduction to object oriented programming design paradigm
</a></li>
                                                     <li><a href="#0" class="txt_doc">Classes & objects</a></li>
                                                     <li><a href="#0" class="txt_doc">Constructor function</a></li>
                                                     <li><a href="#0" class="txt_doc">Class variables</a></li>
                                                     <li><a href="#0" class="txt_doc">Class methods</a></li>
                                                     <li><a href="#0" class="txt_doc">Static methods</a></li>
                                                     <li><a href="#0" class="txt_doc">Practical implementation of object oriented programming</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingSeventh">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSeventh" aria-expanded="false" aria-controls="collapseSeventh">
                                                <i class="indicator ti-plus"></i>Modules and packages
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeventh" class="collapse" role="tabpanel" aria-labelledby="headingSeventh" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Creation of Python modules</a></li>
                                                     <li><a href="#0" class="txt_doc">Packages</a></li>
                                                     <li><a href="#0" class="txt_doc">Installation and usage of pip (package manager)</a></li>
                                                     <li><a href="#0" class="txt_doc">Importing modules</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingEigth">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
                                                <i class="indicator ti-plus"></i>Exception handling
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEigth" class="collapse" role="tabpanel" aria-labelledby="headingEigth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Introduction to exceptions</a></li>
                                                     <li><a href="#0" class="txt_doc">Try and except block</a></li>
                                                     <li><a href="#0" class="txt_doc">'Finally' keyword</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingNine">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                <i class="indicator ti-plus"></i>Global, local variables and PEP-8
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Global and local variables</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                <i class="indicator ti-plus"></i>Python Enhancement Proposal (PEP-8)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Python Enhancement Proposal (PEP-8)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingEleven">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                <i class="indicator ti-plus"></i>Introduction to web applications
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Working of the Internet</a></li>
                                                    <li><a href="#0" class="txt_doc">Client-server architecture</a></li>
                                                    <li><a href="#0" class="txt_doc">Full stack architecture of web applications
</a></li>
                                                    <li><a href="#0" class="txt_doc">Introduction to frameworks</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwelve">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                <i class="indicator ti-plus"></i>Introduction to Django web framework
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to Django web framework</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThirteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                <i class="indicator ti-plus"></i>Django settings and initial configuration
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThirteen" class="collapse" role="tabpanel" aria-labelledby="headingThirteen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Setting up local web server</a></li>
                                                    <li><a href="#0" class="txt_doc">Applying initial database migration</a></li>
                                                    <li><a href="#0" class="txt_doc">Changes in settings.py file
</a></li>
                                                    <li><a href="#0" class="txt_doc">Django project’s directory walkthrough</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFourteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                <i class="indicator ti-plus"></i>Django project vs Django application
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFifteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                <i class="indicator ti-plus"></i>Django modules
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingSixteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                <i class="indicator ti-plus"></i>Django views and URL handlers
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingSeventeen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                <i class="indicator ti-plus"></i>Django’s administrative interface
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeventeen" class="collapse" role="tabpanel" aria-labelledby="headingSeventeen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Creating superuser</a></li>
                                                    <li><a href="#0" class="txt_doc">Admin interface session management</a></li>
                                                    <li><a href="#0" class="txt_doc">Modifying the admin interface</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingEighteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                                <i class="indicator ti-plus"></i>Database models
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEighteen" class="collapse" role="tabpanel" aria-labelledby="headingEighteen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to sqlite3</a></li>
                                                    <li><a href="#0" class="txt_doc">Database schema</a></li>
                                                    <li><a href="#0" class="txt_doc">Django’s ORM model
</a></li>
                                                    <li><a href="#0" class="txt_doc">CRUD operations (Create,Read,Update,Delete)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingNineteen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                <i class="indicator ti-plus"></i>Template management
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNineteen" class="collapse" role="tabpanel" aria-labelledby="headingNineteen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to templates</a></li>
                                                    <li><a href="#0" class="txt_doc">Connecting backend with frontend</a></li>
                                                    <li><a href="#0" class="txt_doc">Working with templating engine
</a></li>
                                                    <li><a href="#0" class="txt_doc">Base templates</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwenty">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                <i class="indicator ti-plus"></i>Session management in Django
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- /card -->

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwentyone">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">
                                                <i class="indicator ti-plus"></i>Building a web application from scratch using Django [PROJECT]
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- /card -->

                            </div>
                            <!-- /accordion -->
                        </section>
                        <!-- /section -->

                        <section id="reviews">
                            <h2>Reviews</h2>

                            <hr>

                            <div class="reviews-container">

                                <div class="review-box clearfix">
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Radhika – May 01, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                The Workshop was quite good...willing to attend more sessions. Thank you sir.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Faisal – April 19, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Well, it was an awesome workshop. Sir was so cool, he made this workshop interesting from the beginning. So, I really enjoyed it. It's fun to learn something with enjoyment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                            </div>
                            <!-- /review-container -->
                        </section>
                        <!-- /section -->
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail">
                            <figure>
                                <img src="{{ asset('img/Cloudclovis/Marketing/Courses/PD.jpg') }}" alt="" class="img-fluid">
                            </figure>
                            <div id="list_feat">
                                <h3>What's includes</h3>
                                <ul>
                                    <li><i class="icon_archive_alt"></i>Lesson archive</li>
                                    <li><i class="icon_document_alt"></i>Course certificate</li>
                                </ul>
                            </div>
                        </div>
                        <div class="box_detail">
                            <h4>Enquire now</h4>
                            <div id="message-enquiry"></div>
                            <form id="enquiry-form" autocomplete="off">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" id="name_contact" name="name_contact">
                                            <label class="input_label">
                                                <span class="input__label-content">Your Name</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
                                            <label class="input_label">
                                                <span class="input__label-content">Last name</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="email" id="email_contact" name="email_contact">
                                            <label class="input_label">
                                                <span class="input__label-content">Your email</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-sm-6">
                                        <span class="input">
                                            <input class="input_field" type="text" id="phone_contact" name="phone_contact">
                                            <label class="input_label">
                                                <span class="input__label-content">Your telephone</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <!-- /row -->
                                <span class="input">
                                        <textarea class="input_field" id="message_contact" name="message_contact" style="height:120px;"></textarea>
                                        <label class="input_label">
                                            <span class="input__label-content">Your message</span>
                                        </label>
                                </span>
                                <hr>
                                <div style="position:relative;"><input type="submit" value="Enquire Now" class="btn_1 full-width" id="submit-enquiry"></div>
                            </form>
                        </div>
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection

@section('secific_js')

    <script type="text/javascript">
        $(document).ready(function(){

            $('#submit-enquiry').click(function(e){
                e.preventDefault();

                $("#message-enquiry").slideUp(750,function() {
                    $('#message-enquiry').hide();
                    $('#submit-enquiry')
                        .after('<i class="icon-spin4 animate-spin loader"></i>')
                        .attr('disabled','disabled');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('/courses/course_details/enquirys/post') }}",
                        method: 'post',
                        data: {
                            fname: $('#name_contact').val(),
                            lname: $('#lastname_contact').val(),
                            email: $('#email_contact').val(),
                            phone: $('#phone_contact').val(),
                            message: $('#message_contact').val()
                        },
                        success: function(result){
                            $('#message-enquiry').html("");
                            if($.isEmptyObject(result.errors)){
                                $('#message-enquiry').append('<p>'+result.success+'</p>');
                            }else{
                                $.each(result.errors, function(key, value){
                                    $('#message-enquiry').append('<p>'+value+'</p>');
                                });
                            }
                            $('#message-enquiry').slideDown('slow');
                            $('#enquiry-form .loader').fadeOut('slow',function(){$(this).remove()});
                            $('#submit-enquiry').removeAttr('disabled');
                        }
                    });
                });
            });
        });
    </script>

@endsection