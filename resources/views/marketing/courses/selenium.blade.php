@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses-details">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Automation Testing Using Selenium</h1>
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
                            <p>This  course will be covering from all best practices used with Selenium WebDriver.  Interact with all the different elements in a webpage.Covering  all ways of interacting with web pages using Selenium with examples of live websites .Also includes a wide range of topics from TestNG Framework, Automation Framework Design ,Logging with Log4j, Maven Build Management, Continuous Integration with Jenkins.</p>
                            <h5>What will you learn</h5>
                            <ul class="list_ok">
                                <li>
                                    <h6>Get complete knowledge of Selenium WebDriver</h6>
                                </li>
                                  <li>
                                    <h6>Writing Automation test scripts.</h6>
                                </li>
                                  <li>
                                    <h6>You will be able to automate web applications </h6>
                                </li>
                                  <li>
                                    <h6>Designing Automation Test Framework</h6>
                                </li>
                                 <li>
                                    <h6>End to End Automation Testing</h6>
                                </li>
                                 <li>
                                    <h6>Report Generation</h6>
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
                                    <li>10 lessons</li>
                                    <li>30 Hours</li>
                                </ul>
                            </div>
                            <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introdocution</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Testing</a></li>
                                                    <li><a href="#0" class="txt_doc">Manual Testing</a></li>
                                                    <li><a href="#0" class="txt_doc">Automation Testing</a></li>
                                                    <li><a href="#0" class="txt_doc">Selenium WebDriver</a></li>
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
                                                <i class="indicator ti-plus"></i>Installation and  its Configurations
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Download Eclipse</a></li>
                                                    <li><a href="#0" class="txt_doc">Java installation</a></li>
                                                    <li><a href="#0" class="txt_doc">Eclipse installation & configuration</a></li>
                                                    <li><a href="#0" class="txt_doc">Download and configure selenium</a></li>
                                                    <li><a href="#0" class="txt_doc">Selenium configuration on all browsers</a></li>
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
                                                <i class="indicator ti-plus"></i>Locators & Tools
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                   <li><a href="#0" class="txt_doc">Locators Importance</a></li>
                                                    <li><a href="#0" class="txt_doc">Identify locators (id , name ,link text)</a></li>
                                                    <li><a href="#0" class="txt_doc">Identify locators using xpath and css</a></li>
                                                    <li><a href="#0" class="txt_doc">Download and configure selenium</a></li>
                                                    <li><a href="#0" class="txt_doc">Creation of  customized xpath and css</a></li>
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
                                                <i class="indicator ti-plus"></i>Other Techniques
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Dropdowns , RadioButton &  Checkboxes</a></li>
                                                    <li><a href="#0" class="txt_doc">Alerts &   Ajax Calls</a></li>
                                                    <li><a href="#0" class="txt_doc">Identify locators using xpath and css</a></li>
                                                    <li><a href="#0" class="txt_doc">Child Windows & Multiple Windows</a></li>
                                                    <li><a href="#0" class="txt_doc">IFrames</a></li>
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
                                                <i class="indicator ti-plus"></i>TestNG Framework
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFifth" class="collapse" role="tabpanel" aria-labelledby="headingFifth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">TestNg Introduction</a></li>
                                                     <li><a href="#0" class="txt_doc">TestNG Installation</a></li>
                                                     <li><a href="#0" class="txt_doc"> Annotations used in TestNG</a></li>
                                                     <li><a href="#0" class="txt_doc">Running test cases in TestNG</a></li>
                                                     <li><a href="#0" class="txt_doc">Using TestNG.xml in our tests</a></li>
                                                     <li><a href="#0" class="txt_doc">Running Tests in parallel  and generating Reports</a></li>
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
                                                <i class="indicator ti-plus"></i>Data Driven Framework
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSixth" class="collapse" role="tabpanel" aria-labelledby="headingSixth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">What is Apache POI</a></li>
                                                     <li><a href="#0" class="txt_doc">Alerts &   Ajax Calls</a></li>
                                                     <li><a href="#0" class="txt_doc">Excel API Methods</a></li>
                                                     <li><a href="#0" class="txt_doc">Retrieving data from excel</a></li>
                                                     <li><a href="#0" class="txt_doc">Updating data back to excel</a></li>
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
                                                <i class="indicator ti-plus"></i>Maven
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeventh" class="collapse" role="tabpanel" aria-labelledby="headingSeventh" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Maven Introduction</a></li>
                                                     <li><a href="#0" class="txt_doc">Setting up Maven</a></li>
                                                     <li><a href="#0" class="txt_doc">Understanding POM.xml file</a></li>
                                                     <li><a href="#0" class="txt_doc">Integration of Testing with Maven</a></li>
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
                                                <i class="indicator ti-plus"></i>Jenkins
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEigth" class="collapse" role="tabpanel" aria-labelledby="headingEigth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Jenkins Introduction</a></li>
                                                     <li><a href="#0" class="txt_doc">Install and configure Jenkins</a></li>
                                                     <li><a href="#0" class="txt_doc"> TestNG Reports for Jenkins jobs</a></li>
                                                     <li><a href="#0" class="txt_doc">Child Windows & Multiple Windows</a></li>
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
                                                <i class="indicator ti-plus"></i>Log4j
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">log4j  Introduction</a></li>
                                                     <li><a href="#0" class="txt_doc">Importing log4j into eclipse</a></li>
                                                     <li><a href="#0" class="txt_doc">Understanding  the xml file</a></li>
                                                     <li><a href="#0" class="txt_doc">Test Case with log4j</a></li>
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
                                                <i class="indicator ti-plus"></i>End to End Testing - Building framework from scratch
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">End to End Testing - Project</a></li>
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
                                            Kripa – May 01, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Didn’t have to struggle learning. Everything was explained properly. Thank you!
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
                                            Nitesh – April 19, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                The best part about being here is that you get personalized one-to-one teaching and guidance.
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
                                <img src="{{ asset('img/Cloudclovis/Marketing/Courses/Selenium.jpg') }}" alt="" class="img-fluid">
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