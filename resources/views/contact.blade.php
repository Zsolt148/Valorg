@extends('layouts.app')
@section('title', 'Kapcsolat')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #f0f0f7), url('images/wallpaper-min.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -700px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-black">
            <div class="badge badge-pill border border-dark">Kapcsolat</div>
            <p data-class-xl="h1" data-class-lg="h1" data-class-md="h1" data-class-sm="h2" data-class-xs="h2" class="font-weight-bold">Lépj velünk kapcsolatba</p>
        </div>

    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">
            <div class="card mx-auto mw-md border-0 shadow rounded-xl card-seo-about">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="heading-block border-bottom-0 mb-0">
                                <h3 class="nott ls0 mb-3">Hívj minket a +36-76/484-610-es telefonszámon</h3>
                            </div>
                            <div class="text-larger mb-3">
                                <a href="https://goo.gl/maps/KETMYZY3GCQMiqSa6" target="_blank">6000 Kecskemét, Erkel utca 1.</a>
                            </div>
                            <div class="text-larger">
                                Munkatársaink: <br>

                                Pál Andrea  +36703895527<br>
                                Válik Dominika +36707763552<br>
                                Kondász Sára +3676484610 <br><br>
                                E-mail: <a href="mailto:valorg2019@gmail.com">valorg2019@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mx-auto mw-md border-0 shadow rounded-xl mb-5">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="heading-block border-bottom-0 mb-0">
                                <h3 class="nott ls0 mb-5">Írj nekünk üzenetet</h3>
                                <div class="style-msg successmsg" style="display: none" id="success">
                                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong id="successMsg"></strong></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                </div>
                                <form class="row mb-0" method="post" id="contact-form">
                                    @csrf
                                    <div class="col-12 form-group mb-3">
                                        <label for="template-contactform-name">Név:*</label>
                                        <input type="text" id="name" name="name" class="form-control input-sm required" value="">
                                        <span class="text-sm text-danger" style="display: none" id="nameError">A név mező kötelező</span>
                                    </div>
                                    <div class="col-12 form-group mb-3">
                                        <label for="template-contactform-email">Email cím:*</label>
                                        <input type="email" id="email" name="email" class="form-control input-sm required" value="">
                                        <span class="text-sm text-danger" style="display: none" id="emailError">Az email megadása kötelező és valós emailnek kell lennie</span>
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label for="template-contactform-website">Üzenet:*</label>
                                        <textarea name="body" id="body" class="form-control input-sm required"></textarea>
                                        <span class="text-sm text-danger" style="display: none" id="bodyError">A szöveg mező kötelező</span>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="button button-reveal button-rounded button-large text-right nott ls0 m-0" type="submit" id="submit" name="submit" value="submit" data-ajax-url="{{ Route('send.email') }}"><i class="icon-line-send"></i><span>Üzenet küldése</span></button>
                                    </div>
                                    <div id="rating-notification-message" data-notify-position="top-right"
                                         data-notify-type="success" data-notify-msg="Message"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
<!-- Main Particles Js
============================================= -->
<script src="js/particles/particles.min.js"></script>
<script src="js/particles/particles-line.js"></script><!-- Particles Line -->
<script type="text/javascript">

    $(document).ready(function () {

        $("#submit").click(function (e) {
            e.preventDefault();
            var url = document.getElementById('submit').getAttribute("data-ajax-url");
            $.ajax({
                url: url,
                type: "post",
                data: $('form#contact-form').serialize(),
                success: function (resp) {
                    $('#successMsg').html('Sikeresen elküldve. Köszönjük üzenetét!');
                    $('#success').removeAttr('style');
                    $('#name').val('');
                    $('#email').val('');
                    $('#body').val('');
                },
                error: function(resp) {
                    console.log(resp.responseJSON.errors);
                    (resp.responseJSON.errors.name) ? $('#nameError').show() : $('#nameError').hide();
                    (resp.responseJSON.errors.email) ? $('#emailError').show() : $('#emailError').hide();
                    (resp.responseJSON.errors.body) ? $('#bodyError').show() : $('#bodyError').hide();
                }
            }).done(function (resp) {
                $('#nameError').hide()
                $('#emailError').hide()
                $('#bodyError').hide()
            });

        });

    });

</script>

@endsection
