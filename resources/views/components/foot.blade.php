<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <span class="lnr lnr-chevron-up"></span>
    </span>
</div>
<script type="text/javascript" src="./../../js/app.js"></script>    
<script src="{{ URL::asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/revo-custom.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/slick/slick.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/slick-custom.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/parallax100/parallax100.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countdowntime/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countdowntime/moment-timezone.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countdowntime/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/waypoint/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/countterup/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/noui/nouislider.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/slide100/slide100.js') }}"></script>
<script src="{{ URL::asset('assets/js/slide100-custom.js') }}"></script>
<script src="{{ URL::asset('assets/js/vue.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhyyun8uHcvl8uZAxyRyNXpB62SqaIlvg"></script>
<script src="{{ URL::asset('assets/js/map-custom.js') }}"></script>
<script src="https://unpkg.com/vuex"></script>
<script src="{{ URL::asset('assets/js/contact.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

var addressfacture;
var addresslivraison;
$('#formcreatefact').hide();
$('#formcreatelivr').hide();
$('#formeditfact').hide();
$('#formeditlivr').hide();

$('.inactivdispo').hide();
$('#buttondispo').on('click', function(){
    console.log('click');
    $(this).hide();
    $('#buttonindispo').show();
    $('#dispo').val('no');
});
$('#buttonindispo').on('click', function(){
    console.log('click');
    $(this).hide();
    $('#buttondispo').show();
    $('#dispo').val('yes');
});

$('#viewcreatefact').on('click', function(){
    $('#formcreatefact').show();
    $('#formcreatelivr').hide();
    $('#formeditfact').hide();
    $('#formeditlivr').hide();
});
$('#vieweditfact').on('click', function(){
    $('#formeditfact').show();
    $('#formcreatefact').hide();
    $('#formcreatelivr').hide();
    $('#formeditlivr').hide();
});
$('#viewcreatelivr').on('click', function(){
    $('#formcreatelivr').show();
    $('#formcreatefact').hide();
    $('#formeditfact').hide();
    $('#formeditlivr').hide();
});
$('#vieweditlivr').on('click', function(){
    $('#formeditlivr').show();
    $('#formcreatefact').hide();
    $('#formcreatelivr').hide();
    $('#formeditfact').hide();
});    

$('#radio2').on('click', function(){
    $('#radio2').attr( "checked", true );
    $('#radio1').attr( "checked", false );
    $('#addresslivr').removeClass('dis-none');
    $('#livraison').val('yes');
});
$('#radio1').on('click', function(){
    $('#radio1').attr( "checked", true );
    $('#radio2').attr( "checked", false );
    $('#addresslivr').addClass('dis-none');
    $('#livraison').val('no');
});
</script>


