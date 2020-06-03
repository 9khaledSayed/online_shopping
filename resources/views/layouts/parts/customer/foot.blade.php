<!-- JS Global -->
<script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/plugins/superfish/js/superfish.min.js')}}"></script>
<script src="{{ asset('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('assets/plugins/owl-carousel2/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.sticky.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.easing.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.smoothscroll.min.js')}}"></script>

<!-- JS Page Level -->
<script src="{{ asset('assets/js/theme.js')}}"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset('assets/plugins/jquery.cookie.js')}}"></script>
<!-- <script src="assets/js/theme-config.js"></script> -->
<!--<![endif]-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });


    $(document).ready(function () {

        $(document).on('submit', 'form[data-id]', function (e) {

            e.preventDefault();

            var product_id = $(this).attr('data-id');
            var product_price = $(this).attr('data-price');
            var Formtype = $(this).attr('name');
            var myCartNo = document.getElementById('mycart_number');
            var myCart_total_price = document.getElementById('total_price');
            var URL;

            if ( Formtype == 'cart')
            {

                URL = "/myCart";
                myCartNo.innerHTML           = parseInt(myCartNo.innerHTML) + 1;
                myCart_total_price.innerHTML = parseInt(myCart_total_price.innerHTML) + parseInt(product_price) + " EGP";
            }else { URL = "/wishlist"; }


            $.ajax({
                type:"POST",
                url:URL,
                data:{
                    "_token": "{{ csrf_token() }}",
                    product_id:product_id,
                },
                success: function(response)
                {
                    swal("Done !", "Added To Your " + Formtype + " Successfully !", "success");
                },
                error: function(error)
                {
                    console.log(error);
                    swal("Error ", "Please try Again Later !", "error");
                }

            });
        });


        $(document).on('submit', 'form[data-deleted_id]', function (e) {

            e.preventDefault();

            var id = $(this).attr('data-deleted_id');
            var product_price = $(this).attr('data-price');
            var Formtype = $(this).attr('name');
            var myCartNo = document.getElementById('mycart_number');
            var myCart_total_price = document.getElementById('total_price');
            var row = document.getElementById(id);
            var URL;

            if ( Formtype == 'delete_cart')
            {
                URL = "/myCart/";
                myCartNo.innerHTML           = parseInt(myCartNo.innerHTML) - 1;
                myCart_total_price.innerHTML = parseInt(myCart_total_price.innerHTML) - parseInt(product_price) + " EGP";

            }else { URL = "/wishlist/"; }

            $.ajax({
                type:"DELETE",
                url:URL + id,
                data:{
                    "_token": "{{ csrf_token() }}",
                    id:id,
                },
                success: function(response)
                {
                    swal("Deleted !", "", "success");
                    row.style.display = 'none';
                },
                error: function(error)
                {
                    console.log(error);
                    swal("Error ", "Please try Again Later !", "error");
                }

            });

        });

    });
</script>
