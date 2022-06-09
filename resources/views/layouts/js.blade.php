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
        $("#menuNKTA_MOBILE .menuTopPage .barsPart .aTagBars").click(function () {
            $("#menuNKTA_MOBILE .blockCateMobile").fadeIn(600)
        }), $("#menuNKTA_MOBILE .blockCateMobile .hideBlock .xItem").click(function () {
            $("#menuNKTA_MOBILE .blockCateMobile").fadeOut(600)
        }), setInterval(function () {
            var t = $("#menuNKTA_MOBILE .menuTopPage").outerHeight();
            $("#menuNKTA_MOBILE .blockUnderMenuTopPage").css("height", t)
        }, 100), $("#homeMixHotel").parent().find("#menuNKTA_MOBILE .blockUnderMenuTopPage").removeClass("blockUnderMenuTopPage"), $("#menuNKTA_MOBILE .blockCateMobile .wrapCateParts .catePart.dropMore .faFix.fa-angle-right").click(function () {
            $("#menuNKTA_MOBILE .blockCateMobile .wrapCateParts .catePart.dropMore").removeClass("active"), $(this).parent().addClass("active")
        }), $("#menuNKTA_MOBILE .blockCateMobile .wrapCateParts .catePart.dropMore .faFix.fa-angle-down").click(function () {
            $("#menuNKTA_MOBILE .blockCateMobile .wrapCateParts .catePart.dropMore").removeClass("active")
        }), t(), $(window).resize(function () {
            t()
        });
    });
    $('#copy-to-clipboard-button').on('click', function(e) {
        e.preventDefault();

        /* Get the text field */
        var copyText = document.getElementById("copy-to-clipboard-input");

        /* Prevent iOS keyboard from opening */
        copyText.readOnly = true;

        /* Change the input's type to text so its text becomes selectable */
        copyText.type = 'text';

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Replace the tooltip's text */
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Đã Copy";

        /* Change the input's type back to hidden */
        copyText.type = 'hidden';
    });

    $('#copy-to-clipboard-button').on('mouseout', function(e) {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy link";
    });
</script>
@stack('scripts')
