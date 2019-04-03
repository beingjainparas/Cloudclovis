@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="courses-details">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>AWS Solutions Architect Certification Training</h1>
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
                            <p>CloudClovis' AWS Solutions Architect training will provide you with the right knowledge of AWS for clearing the AWS certification exam. You will learn to design, plan and scale AWS infrastructure using the best practices. Additionally, you will acquire real time hands-on experience in working with various components of AWS cloud. </p>
                            <h5>What will you learn</h5>
                            <ul class="list_ok">
                                <li>
                                    <h6>AWS Global Infrastructure</h6>
                                </li>
                                <li>
                                    <h6>Deep Dive into critical AWS services</h6>
                                </li>

                                  <li>
                                    <h6>Identity & Lifecycle Management</h6>
                                </li>
                                  <li>
                                    <h6>AWS Storage options</h6>
                                </li>
								 <li>
                                    <h6>AWS Managed Services</h6>
                                </li>
                                  <li>
                                    <h6>AWS Network Architecture</h6>
                                </li>
                                 <li>
                                    <h6>Best Practices on Architecting with AWS</h6>
                                </li>
                                 <li>
                                    <h6>Hands on training for achieving the AWS Solutions Architect Certification</h6>
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
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introduction</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Overview of Amazon Web Services</a></li>
                                                    <li><a href="#0" class="txt_doc">What is a Solution Architect?</a></li>
                                                    <li><a href="#0" class="txt_doc">Overview of various Services</a></li>
                                                    <li><a href="#0" class="txt_doc">Shared Responsibility Model</a></li>
													<li><a href="#0" class="txt_doc">Global vs Regional Infrastructure</a></li>
													<li><a href="#0" class="txt_doc">Fault Tolerant vs High Availability</a></li>
													<li><a href="#0" class="txt_doc">TCO Calculator</a></li>
													<li><a href="#0" class="txt_doc">Documentation / Compliance Programs</a></li>
													<li><a href="#0" class="txt_doc">Support Plans and Pricing</a></li>


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
                                                <i class="indicator ti-plus"></i>Identity & Access Management (IAM)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
													<li><a href="#0" class="txt_doc">Introduction</a></li>
                                                    <li><a href="#0" class="txt_doc">Account Settings</a></li>
													<li><a href="#0" class="txt_doc">IAM Users / Groups / Policies / Roles</a></li>
													<li><a href="#0" class="txt_doc">IAM Security Token Service</a></li>
													<li><a href="#0" class="txt_doc">Creating a Billing Alarm</a></li>
													<li><a href="#0" class="txt_doc">Root Account Details</a></li>
													<li><a href="#0" class="txt_doc">Summary</a></li>
													<li><a href="#0" class="txt_doc">Quiz</a></li>
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
                                                <i class="indicator ti-plus"></i>Simple Storage Service (S3)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
													<li><a href="#0" class="txt_doc">Introduction</a></li>
													<li><a href="#0" class="txt_doc">Storage Classes</a></li>
													<li><a href="#0" class="txt_doc">Pricing</a></li>
													<li><a href="#0" class="txt_doc">Creating an S3 bucket</a></li>
													<li><a href="#0" class="txt_doc">S3 permissions using ACLs, IAM & Bucket Policies</a></li>
													<li><a href="#0" class="txt_doc">Versioning in S3</a></li>
													<li><a href="#0" class="txt_doc">Cross Region Replication</a></li>
													<li><a href="#0" class="txt_doc">Lifecycle Management Rules</a></li>
													<li><a href="#0" class="txt_doc">Security in S3</a></li>
													<li><a href="#0" class="txt_doc">Snowball & Snowmobile</a></li>
													<li><a href="#0" class="txt_doc">Transfer Acceleration</a></li>
													<li><a href="#0" class="txt_doc">Summary</a></li>
													<li><a href="#0" class="txt_doc">Quiz</a></li>
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
                                                <i class="indicator ti-plus"></i>Networking
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">Introduction</a></li>
                                                    <li><a href="#0" class="txt_doc">Virtual Private Cloud (VPC)</a></li>
													<li><a href="#0" class="txt_doc">Pricing</a></li>
													<li><a href="#0" class="txt_doc">Subnetting</a></li>
													<li><a href="#0" class="txt_doc">Network Routing</a></li>
													<li><a href="#0" class="txt_doc">NAT vs Bastions</a></li>
													<li><a href="#0" class="txt_doc">VPC Endpoints</a></li>
													<li><a href="#0" class="txt_doc">VPC Flow Logs</a></li>
													<li><a href="#0" class="txt_doc">Security Groups & Network ACLs</a></li>
													<li><a href="#0" class="txt_doc">VPC Peering</a></li>
													<li><a href="#0" class="txt_doc">AWS Direct Connect</a></li>
													<li><a href="#0" class="txt_doc">Summary</a></li>
													<li><a href="#0" class="txt_doc">Quiz</a></li>


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
                                                <i class="indicator ti-plus"></i>Elastic Compute Cloud (EC2) - I
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFifth" class="collapse" role="tabpanel" aria-labelledby="headingFifth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Introduction</a></li>
													  <li><a href="#0" class="txt_doc">Pricing model</a></li>
													  <li><a href="#0" class="txt_doc">Purchasing Options</a></li>
													  <li><a href="#0" class="txt_doc">SSH Keys & Putty</a></li>
													  <li><a href="#0" class="txt_doc">EC2 Instance Types</a></li>
													  <li><a href="#0" class="txt_doc">EC2 Userdata & Metadata</a></li>
													  <li><a href="#0" class="txt_doc">Public, Private & Elastic IP addresses</a></li>
													  <li><a href="#0" class="txt_doc">Storage Options: Instance Store vs Elastic Block Store (EBS)</a></li>
													  <li><a href="#0" class="txt_doc">CloudWatch</a></li>
													  <li><a href="#0" class="txt_doc">Elastic File System</a></li>
													  <li><a href="#0" class="txt_doc">Security in EC2</a></li>
													  <li><a href="#0" class="txt_doc">EBS Snapshot</a></li>
													  <li><a href="#0" class="txt_doc">Amazon Machine Image</a></li>
													  <li><a href="#0" class="txt_doc">Summary</a></li>
													  <li><a href="#0" class="txt_doc">Quiz</a></li>

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
                                                <i class="indicator ti-plus"></i>Elastic Compute Cloud (EC2) - II
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSixth" class="collapse" role="tabpanel" aria-labelledby="headingSixth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
													  <li><a href="#0" class="txt_doc">Elastic Load Balancing (ELB)</a></li>
													  <li><a href="#0" class="txt_doc">Autoscaling</a></li>
													  <li><a href="#0" class="txt_doc">EC2 Placement Groups</a></li>
													  <li><a href="#0" class="txt_doc">Summary</a></li>

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
                                                <i class="indicator ti-plus"></i>Database Services
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeventh" class="collapse" role="tabpanel" aria-labelledby="headingSeventh" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Introduction</a></li>
													  <li><a href="#0" class="txt_doc">Types of Relational Database Services (RDS)</a></li>
													  <li><a href="#0" class="txt_doc">Amazon Redshift</a></li>
													  <li><a href="#0" class="txt_doc">Amazon Dynamo DB</a></li>
													  <li><a href="#0" class="txt_doc">Pricing</a></li>
													  <li><a href="#0" class="txt_doc">Aurora</a></li>
													  <li><a href="#0" class="txt_doc">High Availability & Disaster Recovery</a></li>
													  <li><a href="#0" class="txt_doc">Elastic Cache</a></li>
													  <li><a href="#0" class="txt_doc">Summary</a></li>
													  <li><a href="#0" class="txt_doc">Quiz</a></li>

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
                                                <i class="indicator ti-plus"></i>Managed Application Services
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEigth" class="collapse" role="tabpanel" aria-labelledby="headingEigth" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Simple Queue Service (SQS)</a></li>
													  <li><a href="#0" class="txt_doc">Simple Email Service (SES)</a></li>
													  <li><a href="#0" class="txt_doc">Amazon Workmail</a></li>
													  <li><a href="#0" class="txt_doc">Simple Notification Service (SNS)</a></li>
													  <li><a href="#0" class="txt_doc">Route53 essentials</a></li>
													  <li><a href="#0" class="txt_doc">Storage Gateway essentials</a></li>
													  <li><a href="#0" class="txt_doc">CloudFront essentials</a></li>
													  <li><a href="#0" class="txt_doc">Cloudtrail</a></li>
													  <li><a href="#0" class="txt_doc">Cloudformation</a></li>
													  <li><a href="#0" class="txt_doc">AWS Lambda</a></li>
													  <li><a href="#0" class="txt_doc">Consolidated Billing</a></li>
													  <li><a href="#0" class="txt_doc">Summary</a></li>
													  <li><a href="#0" class="txt_doc">Quiz</a></li>

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
                                                <i class="indicator ti-plus"></i>Capstone Project
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                      <li><a href="#0" class="txt_doc">Architecting a highly available and fault tolerant Wordpress application.</a></li>
                                                     <li><a href="#0" class="txt_doc">Hosting a static website using Amazon S3</a></li>
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
                                                <i class="indicator ti-plus"></i>Exam Readiness
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion_lessons">
                                        <div class="card-body">
                                            <div class="list_lessons">
                                                <ul>
                                                    <li><a href="#0" class="txt_doc">AWS Whitepapers</a></li>
													<li><a href="#0" class="txt_doc">Mega Quiz</a></li>
													<li><a href="#0" class="txt_doc">Exam Preparation Strategy</a></li>
													<li><a href="#0" class="txt_doc">Open Forum Discussion</a></li>

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
                                            Ahsan – May 01, 2018:
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
                                            Sara – April 19, 2018:
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
                                <img src="{{ asset('img/Cloudclovis/Marketing/Courses/AWS.jpg') }}" alt="" class="img-fluid">
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