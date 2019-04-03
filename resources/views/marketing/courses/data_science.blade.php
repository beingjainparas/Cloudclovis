@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses-details">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Data Science using R & Python</h1>
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
                            <p> Data Scientist has been ranked the number one job on Glassdoor and the average salary of a data scientist is over $120,000
							    in the United States according to Indeed!<br>Data Science is a rewarding career that allows you to solve some of the world's most interesting problems!<br>
                                This course is designed for both complete beginners with no programming experience or experienced developers looking to make the jump to Data Science!<br>
							    It provides a broad introduction to machine learning, data mining, and statistical pattern recognition using R & Python.<br>
								By the end of this course you'll learn about not only the theoretical underpinnings of learning, but also gain the practical know-how needed to quickly and powerfully apply these techniques to new problems.
							</p>
                            <h5>What will you learn</h5>
                            <ul class="list_ok">
                                <li>
                                    <h6>R Programming</h6>
                                </li>
                                  <li>
                                    <h6>Python Programming</h6>
                                </li>
                                  <li>
                                    <h6>Data Wrangling Techniques</h6>
                                </li>
                                  <li>
                                    <h6>Exploratory Data Analysis</h6>
                                </li>
                                 <li>
                                    <h6>Data Visualization Basics</h6>
                                </li>
                                 <li>
                                    <h6>Machine Learning Algorithms</h6>
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
                                    <li>09 lessons</li>
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
                                                    <li><a href="#0" class="txt_doc">What is Data Science</a></li>
                                                    <li><a href="#0" class="txt_doc">Need of Data Science</a></li>
													<li><a href="#0" class="txt_doc">Why R and Python</a></li>
                                                    <li><a href="#0" class="txt_doc">Real life use cases</a></li>
                                                    <li><a href="#0" class="txt_doc">Skills required for Data Scientist</a></li>
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
                                                <i class="indicator ti-plus"></i>R Programming - Basics
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to R</a></li>
                                                    <li><a href="#0" class="txt_doc">Installation of R and RStudio</a></li>
                                                    <li><a href="#0" class="txt_doc">Data Structures</a></li>
                                                    <li><a href="#0" class="txt_doc">Flow Controls</a></li>
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
                                                <i class="indicator ti-plus"></i>R Programming - Packages
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                   <li><a href="#0" class="txt_doc">Dplyr</a></li>
                                                    <li><a href="#0" class="txt_doc">Data Table</a></li>
                                                    <li><a href="#0" class="txt_doc">TidyR</a></li>
                                                    <li><a href="#0" class="txt_doc">GGplot2</a></li>
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
                                                <i class="indicator ti-plus"></i>Python Programming
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction to Python</a></li>
                                                    <li><a href="#0" class="txt_doc">Installation of Anaconda</a></li>
                                                    <li><a href="#0" class="txt_doc">Data Structures</a></li>
                                                    <li><a href="#0" class="txt_doc">Flow Controls</a></li>
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
                                                <i class="indicator ti-plus"></i>Python Programming - Packages
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFifth" class="collapse" role="tabpanel" aria-labelledby="headingFifth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                     <li><a href="#0" class="txt_doc">Numpy</a></li>
                                                     <li><a href="#0" class="txt_doc">Pandas</a></li>
													 <li><a href="#0" class="txt_doc">Matplotlib</a></li>
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
                                                <i class="indicator ti-plus"></i>Supervised Machine Learning Techniques
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSixth" class="collapse" role="tabpanel" aria-labelledby="headingSixth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                     <li><a href="#0" class="txt_doc">Regression - Linear & Logistic</a></li>
                                                     <li><a href="#0" class="txt_doc">Decision Trees - CART & Random Forest</a></li>
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
                                                <i class="indicator ti-plus"></i>Un-Supervised Machine Learning Technique
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeventh" class="collapse" role="tabpanel" aria-labelledby="headingSeventh" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Clustering - Kmeans</a></li>
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
                                                <i class="indicator ti-plus"></i>Additional Machine Learning Technique
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEigth" class="collapse" role="tabpanel" aria-labelledby="headingEigth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                     <li><a href="#0" class="txt_doc">Basics of Time Series</a></li>
													 <li><a href="#0" class="txt_doc">Basics of Text Mining</a></li>
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
                                                <i class="indicator ti-plus"></i>Project
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                     <li><a href="#0" class="txt_doc">Case Study 1</a></li>
                                                     <li><a href="#0" class="txt_doc">Case Study 2</a></li>
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
                                            Bhavya – May 01, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                The instructor was able to break down the concepts to real-world applications which made the course very engaging.
												I find the course very valuable for budding data scientists.
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
                                            Akshay – April 19, 2018:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Thank you! That was one of the best courses so far.
												I can recommend it for everyone who wants to begin with data science.
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
                                <img src="{{ asset('img/Cloudclovis/Marketing/Courses/DS.jpg') }}" alt="" class="img-fluid">
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