<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<? echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br/>
                <h3>ADMIN LOGIN</h3>

        <form method="post" accept-charset="utf-8" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User</label>
                        <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div>
                    <button type="submit" class="btn btn-default">Submit</button>
                          </div> 
                </form>
            </div>  
            <div class="col-md-3"></div>
        </div>

    </div>



    <script src="<? echo base_url();?>assets/js/jquery.1.8.2.min.js"></script>
</body>
</html>