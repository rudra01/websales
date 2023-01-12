<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websales</title>
    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Daterangepicker CSS -->
    <link href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link href="{{asset('dist/js/morris/font-awesome.min.css  ')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dist/js/morris/line-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dist/js/morris/morris.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dist/js/morris/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Dropify CSS -->
    <link href="{{asset('vendors/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- select2 CSS -->
    <link href="{{asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{asset('vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>


     <!-- Wrapper -->
     <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple" data-hover="active">
        <!-- Top Navbar -->
        @include('includes.topNavbar')
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        @include('includes.verticalNav')
        <!-- /Vertical Nav -->

        <!-- Main Content -->
                {{ $slot }}
        <!-- /Main Content -->
     </div>
    <!-- /Wrapper -->

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('vendors/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Data Table JS -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Daterangepicker JS -->
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('dist/js/daterangepicker-data.js') }}"></script>

    <!-- Amcharts Maps JS -->
    <script src="{{ asset('vendors/%40amcharts/amcharts4/core.js') }}"></script>
    <script src="{{ asset('vendors/%40amcharts/amcharts4/maps.js') }}"></script>
    <script src="{{ asset('vendors/%40amcharts/amcharts4-geodata/worldLow.js') }}"></script>
    <script src="{{ asset('vendors/%40amcharts/amcharts4-geodata/worldHigh.js') }}"></script>
    <script src="{{ asset('vendors/%40amcharts/amcharts4/themes/animated.js') }}"></script>

    <!-- Apex JS -->
    <script src="{{ asset('vendors/apexcharts/dist/apexcharts.min.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('dist/js/select2-data.js') }}"></script>

    <!-- Dropify JS -->
    <script src="{{ asset('vendors/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('dist/js/dropify-data.js') }}"></script>

    <!-- Init JS -->
    <script src="{{ asset('dist/js/init.js') }}"></script>
	<script src="{{ asset('dist/js/contact-data.js') }}"></script>

    <script src="{{ asset('dist/js/chips-init.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard-data.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="{{ asset('dist/js//morris/morris.min.js') }}"></script>
    <script src="{{ asset('dist/js/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dist/js/chart.js') }}"></script>
    <script src="{{ asset('dist/js/app.js') }}"></script>

    <script>
        $(document).ready( function () {
    $('table.display').DataTable( {
    searching: false
});

});

</script>


<script>
// Sales Profile



$(document).ready(function(){

// product
    $('#createproductform').on('submit', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();
        $.ajax({
                url:"{{ route('createproducts') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                error: function(xhr, status, error) {
                alert(xhr.responseText);
                },
                success:function(data)
                {
                    $('#createproductform')[0].reset();
                    console.log(data);
                    window.location.href = 'http://websales01.test/products';
                }
            });


        });


// sale
        $('#createsalesform').on('submit', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();
        $pass = $('#pswd').val();
        $com_pass = $('#conf_pswd').val();
        if($pass !== $com_pass){
            $('.passwordmust').removeClass('ept');
        }else{
            $('.passwordmust').addClass('ept');
            $.ajax({
                    url:"{{ route('createsales') }}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    error: function(xhr, status, error) {
                    alert(xhr.responseText);
                    },
                    success:function(data)
                    {
                        $('#createsalesform')[0].reset();
                        console.log(data);
                        window.location.href = 'http://websales01.test/salesmanagers';
                    }
                });
            }});


// Wearhouse Creation




$('#createwearhouseform').on('submit', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();
        $pass = $('#pswdwearhouse').val();
        $com_pass = $('#conf_pswdwearhouse').val();
        if($pass !== $com_pass){
            $('.passwordmust').removeClass('ept');
        }else{
            $('.passwordmust').addClass('ept');
        $.ajax({
         url:"{{ route('createwearhouse') }}",
         method:"POST",
         data:new FormData(this),
         dataType:'JSON',
         contentType: false,
         cache: false,
         processData: false,
         error: function(xhr, status, error) {
  alert(xhr.responseText);
},
success:function(data)
{
$('#createwearhouseform')[0].reset();
console.log(data);
window.location.href = 'http://websales01.test/wearhouse';
}});
}});

// Vendor Creation

$('#createvendorform').on('submit', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();
        $pass = $('#pswdvendor').val();
        $com_pass = $('#conf_pswdvendor').val();
        if($pass !== $com_pass){
            $('.passwordmust').removeClass('ept');
        }else{
            $('.passwordmust').addClass('ept');
        $.ajax({
         url:"{{ route('createvendor') }}",
         method:"POST",
         data:new FormData(this),
         dataType:'JSON',
         contentType: false,
         cache: false,
         processData: false,
         error: function(xhr, status, error) {
  alert(xhr.responseText);
},
success:function(data)
{
$('#createvendorform')[0].reset();
console.log(data);
window.location.href = 'http://websales01.test/vendor';
}});
}});



// Order internal calculation

$('#tax').on('change', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();

        $val = $('#tax').val();
        console.log($val);
        });



    $('#product').on('change', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();

        var prodata = $('#product').val();
        console.log(prodata);
        $.ajax({
         url:"{{ route('proorder') }}",
         method:"POST",
         data:{ prodata: 1 , data: "test" , test: "test" },
         dataType:'JSON',
         contentType: false,
         cache: false,
         processData: false,
         error: function(xhr, status, error) {
        alert(xhr.responseText);
        },
        success:function(data)
        {
        // $('#createorderform')[0].reset();
        console.log(data);
        // window.location.href = 'http://websales01.test/vendor';
        }});
        });


// Create Order

$('#createorderform').on('submit', function(event){
        $.ajaxSetup({
          headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
        });
        event.preventDefault();
        $.ajax({
         url:"{{ route('storeorder') }}",
         method:"POST",
         data:new FormData(this),
         dataType:'JSON',
         contentType: false,
         cache: false,
         processData: false,
         error: function(xhr, status, error) {
        alert(xhr.responseText);
        },
        success:function(data)
        {
        $('#createorderform')[0].reset();
        console.log(data);
        // window.location.href = 'http://websales01.test/vendor';
        }});
        });




// refresh
$(".Refresh").click(function () {
        location.reload(true);
});

});
</script>


</body>
</html>
