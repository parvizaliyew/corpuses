
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">Avi</span>Asiya</h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div style="margin: auto" class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Sayt Xəritəsi </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="{{ route('index') }}"><i class="fa fa-angle-right mr-2"></i>Əsas Səhifə</a>
                            <a class="text-white mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right mr-2"></i>Haqqımızda</a>
                            <a class="text-white mb-2" href="{{ route('korpus') }}"><i class="fa fa-angle-right mr-2"></i>Korpuslar</a>
                            <a class="text-white" href="{{ route('contact') }}"><i class="fa fa-angle-right mr-2"></i>Əlaqə</a>
                        </div>
                    </div>
                  
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Sosial Hesablar</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>{{ $setting->adress }}</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>{{ $setting->number }}</p>
                        <p><i class="fa fa-envelope mr-2"></i>{{ $setting->email }}</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="{{ $setting->tw }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="{{ $setting->fb }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="{{ $setting->ln }}"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="{{ $setting->ins }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Müəllif Hüquqları qorunur</a>. by ParvizCode
                </p>
            </div>
            
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('front/') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('front/') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('front/') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('front/') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('front/') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front/') }}/js/main.js"></script>
</body>

</html>