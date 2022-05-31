<script src="{{asset('front-end/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front-end/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-end/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('front-end/vendor/OwlCarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-end/js/script.js')}}"></script>
<script>
    $(document).ready(function(){
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
</script>
@stack('scripts')
