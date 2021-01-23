<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Payment Kledo</title>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice-list.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

    <style type="text/css">
                
            .left{
            float: left;
            display: block;
          }
          .right{
            float: right;
            display: block;
          }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern bordered-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="bordered-layout">


    <!-- BEGIN: Content-->
    <div class="app-content content ">
    
        <div class="content-wrapper">
        
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                	<!-- begin tabel -->
                    <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <h1>Payment Kledo</h1>

                            </div>
                            <div class="card-body">
                            <div class="table-responsive"><br>

                            <a href="{{ route('createpayment') }}"><button class="btn btn-primary">Tambah Payment</button></a>
                            <form method="post" action="{{url('deletepayment')}}">
                                {{ csrf_field() }}
                                 <br>
                                 <input class="btn btn-success" type="submit" name="submit" value="Hapus Payment"/>
                                 <br><br>
                                <table class="table-bordered table-striped" width="50%">
                                        <thead>
                                            <tr>
                                              <th class="text-center">No.</th>
                                                <th class="text-center">Payment Name</th>
                                                <th class="text-center"> <input type="checkbox" id="checkAll"> CekList</th>
                                                </tr>
                                        </thead>
                                        
                                        <tbody>
                                              <?php
                                             $i=1;
                                           foreach ($list as $key => $value) {
                                           $name = $list[$key]->payment_name;
                                            ?>
                                            <tr>
                                            <td class="text-center">{{$i}}</td>
                                        <td class="text-center">{{$name}}</td>
                                        <td class="text-center"><input name='id[]' type="checkbox" id="checkItem" 
                                         value="<?php echo $list[$key]->id; ?>">
                                        </tr>
                                        <?php $i++; }?>
                                    </tbody>
                                </table>
                                <br>
                         </form>
                 </div><br>                     
                </div>
            </div>
        </div>
        </div>
        </section>
              <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
  
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="app-assets/js/scripts/pages/app-invoice-list.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        </script>
        <script language="javascript">
            $("#checkAll").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        </script>

</body>
<!-- END: Body-->

</html>