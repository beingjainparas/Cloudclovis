@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="cart_section">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Community Form</h1>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box_cart">
                        <div class="form_title">
                            <h3><strong>1</strong>Your Details</h3>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" name ="name" id="name" type="text">
                                        <label class="input_label">
                                            <span class="input__label-content">Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" name ="email" id="email" type="email">
                                        <label class="input_label">
                                            <span class="input__label-content">Email</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" name ="phone" id="phone" type="text">
                                        <label class="input_label">
                                            <span class="input__label-content">Mobile Number</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--End step -->

                        <div class="form_title">
                            <h3><strong>2</strong>Academic Details</h3>
                            <!-- <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p> -->
                        </div>
                        <div class="step">
                            <span class="input">
                                <input class="input_field" name ="branch" id="branch" type="text">
                                <label class="input_label">
                                  <span class="input__label-content">Enter your Branch</span>
                                </label>
                            </span>
                            <div class="row">
                                <div class="col-md-6 add_top_30">
                                    <label>Academic Year</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="acad_year" id="acad_year">
                                                <option value="First Year" selected="">First Year</option>
                                                <option value="Second Year">Second Year</option>
                                                <option value="Third Year">Third Year</option>
                                                <option value="Fourth Year">Fourth Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 add_top_30">
                                    <label>Are you planing for Higher Studies?</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="higher_studies" id="higher_studies">
                                                <option value="Yes" selected="">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 add_top_30">
                                    <label>Are you planning on working right after graduation?</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="work_after_grad" id="work_after_grad">
                                                <option value="Yes" selected="">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 add_top_30">
                                    <div class="form-group">
                                        <label>If not, what are you planning to do instead? Eg: Looking for internship as pursuing Higher Studies.</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="input">
                                                    <input class="input_field" name="no_work_then_what" id="no_work_then_what" type="text">
                                                    <label class="input_label">
                                                      <span class="input__label-content">Describe in Details</span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End row -->
                        </div>
                        <hr>
                        <!--End step -->
                        <div class="form_title">
                            <h3><strong>3</strong>Career Planning</h3>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-md-12 add_top_30">
                                    <label>Which domain are you interested in?</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="intrested_domain" id="intrested_domain">
                                                <option value="Data Science" selected="">Data Science</option>
                                                <option value="Machine Learning">Machine Learning</option>
                                                <option value="Cloud Computing">Cloud Computing</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Artifical Inteligence">Artifical Inteligence</option>
                                                <option value="Data Analyst">Data Analyst</option>
                                                <option value="DevOps Engineering">DevOps Engineering</option>
                                                <option value="Testing Automation">Testing Automation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 add_top_30">
                                    <label>How much would you rate your skills in your domain of interest?</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="rate_skills" id="rate_skills">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 add_top_30">
                                    <label>Would you like to avail free career guidance services from CloudClovis' Student Development Program in the future and become a part of our community?</label>
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="required" name="carreer_guidance" id="carreer_guidance">
                                                <option value="Yes" selected="">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="input">
                                        <input class="input_field" name="message" id="message" type="message">
                                        <label class="input_label">
                                            <span class="input__label-content">Any Feedback or Any Queries?</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <!--End row -->
                        </div>
                        <!--End step -->
                        </div>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail">
                            <div class="add_bottom_30" id="message-community"></div>
                            <a id="submit-community" class="btn_1 full-width">Submit</a>
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

            $('#submit-community').click(function(e){
                e.preventDefault();

                $("#message-community").slideUp(750,function() {
                    $('#message-community').hide();
                    $('#submit-community')
                        .after('<i class="icon-spin4 animate-spin loader"></i>')
                        .attr('disabled','disabled');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('/community/post') }}",
                        method: 'post',
                        data: {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            phone: $('#phone').val(),
                            branch: $('#branch').val(),
                            acad_year: $('#acad_year').val(),
                            higher_studies: $('#higher_studies').val(),
                            work_after_grad: $('#work_after_grad').val(),
                            no_work_then_what: $('#no_work_then_what').val(),
                            intrested_domain: $('#intrested_domain').val(),
                            rate_skills: $('#rate_skills').val(),
                            carreer_guidance: $('#carreer_guidance').val(),
                            message: $('#message').val()
                        },
                        success: function(result){
                            $('#message-community').html("");
                            if($.isEmptyObject(result.errors)){
                                $('#message-community').append('<p>'+result.success+'</p>');
                            }else{
                                $.each(result.errors, function(key, value){
                                    $('#message-community').append('<p>'+value+'</p>');
                                });
                            }
                            $('#message-community').slideDown('slow');
                            $('#sidebar .loader').fadeOut('slow',function(){$(this).remove()});
                            $('#submit-community').removeAttr('disabled');
                        }
                    });
                });
            });
        });
    </script>

@endsection
