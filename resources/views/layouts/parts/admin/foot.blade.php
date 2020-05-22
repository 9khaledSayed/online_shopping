        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery.min.js')}}" type="text/javascript"></script>
@if(App::getLocale()=='ar')
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/bootstrap/dist/js/bootstrap-rtl.min.js')}}"  type="text/javascript"></script>
@else
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/bootstrap/js/bootstrap.min.js')}}"  type="text/javascript"></script>
@endif
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery.nanoscroller.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<!-- Flot -->
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/pace.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/waves.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/morris_chart/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/morris_chart/morris.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/custom.js')}}"  type="text/javascript"></script>
<!-- ChartJS-->
<script src="{{asset('admin_assets/light_blue/' . App::getLocale() . '/js/chartjs/Chart.min.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/data-tables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/data-tables/dataTables.tableTools.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/data-tables/dataTables.bootstrap.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/data-tables/dataTables.responsive.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/waves.min.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/data-tables/tables-data.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--page js-->  
<script>

    $("#sparkline8").sparkline([5, 6, 7, 2, 0, 4, 2, 4, 5, 7, 2, 4, 12, 14, 4, 2, 14, 12, 7], {
        type: 'bar',
        barWidth: 4,
        height: '40px',
        barColor: '#01a8fe',
        negBarColor: '#c6c6c6'});
    $(".sparkline8").sparkline([4, 2], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });
    $(".sparkline9").sparkline([3, 2], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });
    $(".sparkline10").sparkline([4, 1], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });
    $(".sparkline11").sparkline([1, 3], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });
    $(".sparkline12").sparkline([3, 5], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });
    $(".sparkline13").sparkline([6, 2], {
        type: 'pie',
        sliceColors: ['#01a8fe', '#ddd']
    });

    
</script>