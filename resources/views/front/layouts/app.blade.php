<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('') }}assets/front/img/fav-icon.png" type="image/x-icon" />
    <title>APBL | Ma banque en ligne</title>

    <!-- Icon css link -->
    <link href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('assets/front/vendors/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendors/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendors/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendors/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('assets/front/vendors/stroke-icon/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    @yield('stylesheets')
</head>
<body>
    @include('front/layouts/header')
    @yield('content')
    @include('front/layouts/footer')

    <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->
        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Sorry !</h2>
                        <p class="modal-subtitle"> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/front/js/jquery-2.2.4.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('assets/front/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

        <script src="{{ asset('assets/front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/front/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('assets/front/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/front/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/front/js/contact.js') }}"></script>

        <script src="{{ asset('assets/front/js/theme.js') }}"></script>

        @yield('scripts')
    </body>
</html>
