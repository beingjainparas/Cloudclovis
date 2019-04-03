@extends('layouts.marketing_layout')

@section('content')

    <main>
        <section id="hero_in" class="contacts">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Contact CloudClovis</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="contact_info">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <i class="pe-7s-map-marker"></i>
                        <h4>Address</h4>
                        <span>Thakur College Of Engineering And Technology.</span>
                        <span>A-Block, Thakur Educational Campus,</span>
                        <span>Shyamnarayan Thakur Marg, Thakur Village,</span>
                        <span>Kandivali(E). Mumbai - 400101.</span>
                    </li>
                    <li>
                        <i class="pe-7s-mail-open-file"></i>
                        <h4>Email address</h4>
                        <span>cloudclovis.info@gmail.com</span>

                    </li>
                    <li>
                        <i class="pe-7s-phone"></i>
                        <h4>Contact info</h4>
                        <span>+91 98 6778 7663</span>
                    </li>
                </ul>
            </div>
        </div>
        <!--/contact_info-->

        <div class="bg_color_1">
            <div class="container margin_120_95">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="map_contact">
                        </div>
                        <!-- /map -->
                    </div>
                    <div class="col-lg-6">
                        <h4>Send a message</h4>
                        <div id="message-contact"></div>
                        <form id="contact-form" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="name_contact" name="name_contact">
                                        <label class="input_label">
                                            <span class="input__label-content">Your Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="email_contact" name="email_contact">
                                        <label class="input_label">
                                            <span class="input__label-content">Your email</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-md-6">
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
                                    <textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
                                    <label class="input_label">
                                        <span class="input__label-content">Your message</span>
                                    </label>
                            </span>
                            <!-- <span class="input">
                                    <input class="input_field" type="text" id="verify_contact" name="verify_contact">
                                    <label class="input_label">
                                    <span class="input__label-content">Are you human? 3 + 1 =</span>
                                    </label>
                            </span> -->
                            <p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
                        </form>
                    </div>
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjYpTtsmDsJvOeMOL7jDVfKu0JkR16ysg" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/mapmarker.jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/mapmarker_func.jquery.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#submit-contact').click(function(e){
                e.preventDefault();

                $("#message-contact").slideUp(750,function() {
                    $('#message-contact').hide();
                    $('#submit-contact')
                        .after('<i class="icon-spin4 animate-spin loader"></i>')
                        .attr('disabled','disabled');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('/contacts/post') }}",
                        method: 'post',
                        data: {
                            fname: $('#name_contact').val(),
                            lname: $('#lastname_contact').val(),
                            email: $('#email_contact').val(),
                            phone: $('#phone_contact').val(),
                            message: $('#message_contact').val()
                        },
                        success: function(result){
                            $('#message-contact').html("");
                            if($.isEmptyObject(result.errors)){
                                $('#message-contact').append('<p>'+result.success+'</p>');
                            }else{
                                $.each(result.errors, function(key, value){
                                    $('#message-contact').append('<p>'+value+'</p>');
                                });
                            }
                            $('#message-contact').slideDown('slow');
                            $('#contact-form .loader').fadeOut('slow',function(){$(this).remove()});
                            $('#submit-contact').removeAttr('disabled');
                        }
                    });
                });
            });
        });
    </script>

@endsection
