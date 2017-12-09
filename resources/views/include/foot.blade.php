
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>




<script type="text/javascript" src={{ url("assets/js/jquery-2.2.1.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/jquery-migrate-1.2.1.min.js")}}></script>
<script type="text/javascript" src={{ url("http://maps.google.com/maps/api/js?sensor=false&libraries=places")}}></script>
<script type="text/javascript" src={{ url("assets/js/infobox.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/markerclusterer_packed.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/richmarker-compiled.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/markerwithlabel_packed.js")}}></script>
<script type="text/javascript" src={{ url("assets/bootstrap/js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/jquery.validate.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/bootstrap-datepicker.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/icheck.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/owl.carousel.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/masonry.pkgd.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/jQuery.MultiFile.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/maps.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/custom.js")}}></script>

<!--[if lte IE 9]>
<script src={{ url("assets/js/ie.js")}}></script>
<![endif]-->

<script src={{url("assets/js/prism.js")}}></script>
<script src={{url("assets/js/jquery.mCustomScrollbar.min.js")}}></script>
<script src={{url("assets/js/jquery.newsTicker.js")}}></script>

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



    var nt_title = $('#nt-title').newsTicker({
        row_height: 40,
        max_rows: 1,
        duration: 3000,
        pauseOnHover: 0
    });



</script>







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


        $("#show2").click(function(){
            $("#0").hide();
            $("#1").hide();

        });
        $("#show2").click(function(){
            $("#2").show();
        });

    });
</script>



<script>

    var _latitude = 31.483434 ;
    var _longitude = 74.393061;
    var element = "map-item";
    var useAjax = true;
    bigMap(_latitude,_longitude, element, useAjax);
</script>



<script>
    document.getElementById('object-type').onchange = function () {
        document.getElementById("Property-type").disabled = this.value == '01';
    }

    document.getElementById('Property-type').onchange = function () {
        $("#main-info").removeClass("hidden");
        var e = document.getElementById("Property-type");
        var value = e.options[e.selectedIndex].value;
        var str1="#";
        var text = e.options[e.selectedIndex].text;

        var text=str1.concat(value);
        $(text).removeClass("hidden");


        if(value=='Houses') {
            $('#view').load('/Housesview/');
        }
        else if(value=='Flates'){
            $('#view').load('/Flatesview/');
        }
        else if(value=='Upper-Portions'){
            $('#view').load('/Upper-Portionsview/');

        } else if(value=='Lower-Portions'){
            $('#view').load('/Lower-Portionsview/');

        } else if(value=='Farms-House'){
            $('#view').load('/Farms-Houseview/');

        } else if(value=='Residential-Plots'){
            $('#view').load('/Residential-Plotsview/');

        } else if(value=='Commercial-Plots'){
            $('#view').load('/Commercial-Plotsview/');

        } else if(value=='Agricultural-Land'){
            $('#view').load('/Agricultural-Landview/');

        } else if(value=='Industrial-Land'){
            $('#view').load('/Industrial-Landview/');
        }
        else if(value=='Offices'){
            $('#view').load('/Officesview/');

        } else if(value=='Shops'){
            $('#view').load('/Shopsview/');

        } else if(value=='Warehouses'){
            $('#view').load('/Warehousesview/');

        } else if(value=='Factories'){
            $('#view').load('/Factoriesview/');

        } else if(value=='Buildings'){
            $('#view').load('/Buildingsview/');

        } else if(value=='Other'){
            $('#view').load('/Otherview/');
        }
        else {

            $('#view').html('');


        }

    }
</script>




</body>
</html>
