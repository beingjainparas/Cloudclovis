@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses-details">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Python Programming Language</h1>
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
                            <p>Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language.</p>
                            <p>It has simple easy-to-use syntax, making it the perfect language for someone trying to learn computer programming for the first time. Python finds applications in the domains of web application development, machine learning, data science, mobile development, statistics, etc. Due to its expressive syntax and easy-to-use interface, it has grown in popularity in recent years.</p>
                            <h5>What will you learn</h5>
                            <ul class="list_ok">
                                <li>
                                    <h6>Installation & configuration</h6>
                                </li>
                                  <li>
                                    <h6>Variables, Data types</h6>
                                </li>
                                  <li>
                                    <h6>String manipulation</h6>
                                </li>
                                  <li>
                                    <h6>Data structures & Control Loops</h6>
                                </li>
                                 <li>
                                    <h6>Functions</h6>
                                </li>
                                 <li>
                                    <h6>Modules and packages</h6>
                                </li>
                                <li>
                                    <h6>Exception handling</h6>
                                </li>
                                <li>
                                    <h6>Object Oriented Programming</h6>
                                </li>
                                <li>
                                    <h6>Python Enhancement Proposal (PEP-8)</h6>
                                </li>
                                <li>
                                    <h6>Working with APIs</h6>
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
                                    <li>12 lessons</li>
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
                                    <div class="card-header" role="tab" id="headingNine1">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseNine1" aria-expanded="false" aria-controls="collapseNine1">
                                                <i class="indicator ti-plus"></i>Python Enhancement Proposal (PEP-8)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNine1" class="collapse" role="tabpanel" aria-labelledby="headingNine1" data-parent="#accordion_lessons">
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
                                    <div class="card-header" role="tab" id="headingTen">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                <i class="indicator ti-plus"></i>Application Programming Interface (API) - [PROJECT]
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to APIs</a></li>
                                                    <li><a href="#0" class="txt_doc">Client-server architecture</a></li>
                                                    <li><a href="#0" class="txt_doc">Endpoints</a></li>
                                                    <li><a href="#0" class="txt_doc">GET vs POST requests</a></li>
                                                    <li><a href="#0" class="txt_doc">Working with APIs using Python</a></li>
                                                    <li><a href="#0" class="txt_doc">Mini project based on Google Maps API</a></li>
                                                    <li><a href="#0" class="txt_doc">API-based assignment
</a></li>
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
                                                <i class="indicator ti-plus"></i>Scope and applications of Python in the software industry
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Scope and applications of Python in the software industry</a></li>
                                                </ul>
                                            </div>
                                        </div>
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
                                            Palak – May 01, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Teachers here believe in practical knowledge than being pedantic. One of the best learning experiences. Taking back loads of good memories and ample amount of knowledge.
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
                                            Varun – April 19, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                It was great. It was really helpful as we were taught from the very basics. Being first year students we didn't know a lot of python. But this has helped us a lot. Thank You!
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
                                <img src="{{ asset('img/Cloudclovis/Marketing/Courses/P.jpg') }}" alt="" class="img-fluid">
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