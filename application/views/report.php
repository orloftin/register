<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/regis/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <!-- Custom styles for this template -->
    <link href="<? echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">


</head>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a><strong>
                        Admin Contoller
                    </strong></a>
                </li>
               <li>
                    <a href="<? echo base_url('admin/board');?>">Contact</a>
                </li>
                <li>
                    <a href="<? echo base_url('Admin/company');?>">Company</a>
                </li>
                <li>
                    <a href="<? echo base_url('admin/report');?>">Report</a>
                </li>
                <li>
                    <br/>
                </li>
                <li>
                    <a href="<? echo base_url('Admin/logout');?>">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Report</h1>
                <a href="<? echo base_url(); ?>#menu-toggle" class="btn btn-secondary" id="menu-toggle">Show Menu</a>
 
    <!-- /#wrapper -->
    

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <br/>
                <h3><strong>สรุปยอดรวม</strong></h3>
                <br/>


  <a href="<? echo base_url(); ?>Excelexport" class="btn btn-primary"> EXPORT FILE </a>

<br/>
                <div> Total Contact :: <? ?> </div>


                <hr>
                <div id="donut-example" ></div>

                <hr><br/>
                <div id="graph" ></div>


            </div>  
            
        </div>

    </div>

               </div>
        </div>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <!-- Bootstrap core JavaScript -->
    <script src="<? echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/regis/assets/js/jquery-1.8.2.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){

            $.post('/regis/admin/dount', {param1: 'value1'}, function(dataInfo, textStatus, xhr) {
                var dataInfo = JSON.parse(dataInfo);
                console.log(dataInfo)
                Morris.Donut({
                  element: 'donut-example',
                  data: dataInfo
                });
            });


            $.post('/regis/admin/bar', {param1: 'value1'}, function(dataSet, textStatus, xhr) {

                var dataSet = JSON.parse(dataSet);

                Morris.Bar({
                  element: 'graph',
                  data: dataSet,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Y'],
                  stacked: true
                });
            });


        });
    </script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
