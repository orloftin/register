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
                <h1>Contact</h1>
                <a href="<? echo base_url(); ?>#menu-toggle" class="btn btn-secondary" id="menu-toggle">Show Menu</a>
 
    <!-- /#wrapper -->
    

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <br/>
                <h3><strong>Data Register</strong></h3>
                     <br/>

                <table class="myTable table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>lastname</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>create_at</th>
                            <th>Tool</th>
                        </tr>
                    </thead>      

                    <tbody>
                        <?php if ( $dataList ): ?>
                        <?php foreach ($dataList as $value): ?>
                        <tr>
                            <td width="200"><?php echo $value->name ?></td>
                            <td width="200"><?php echo $value->lastname ?></td>
                            <td ><?php echo $value->phone ?></td>
                            <td ><?php echo $value->email ?></td>
                            <td ><?php echo $value->create_at ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
                <br/>

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
            $('.myTable').DataTable();
  
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
