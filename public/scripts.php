
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>



<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>

<script type="text/javascript" src="assets/js/maps.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script src="assets/js/prism.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="assets/js/jquery.newsTicker.js"></script>
    <script>



    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });



        </script>

<!--[if lte IE 9]>
<script src="assets/js/ie.js"></script>
<![endif]-->



<script>
$(document).ready(function(){
    $("#show").click(function(){
        $("#1").hide();
        $("#2").hide();

    });
    $("#show").click(function(){
        $("#0").show();
    });


     $("#show1").click(function(){
        $("#0").hide();
        $("#2").hide();

    });
    $("#show1").click(function(){
        $("#1").show();
    });




});
</script>
<script>



            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });



        </script>


<script>
    var _latitude = 48.47292127;
    var _longitude = 4.28672791;
    var element = "map-item";
    var useAjax = true;
    bigMap(_latitude,_longitude, element, useAjax);
</script>
</body>
