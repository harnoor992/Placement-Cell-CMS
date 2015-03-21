<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>Placement Cell | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="noor/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="noor/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

    </head>
<body class="lockscreen">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="../../index.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="reset.php">I forgot my password</a></p>
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook">f</i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter">t</i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus">g</i></button>

            </div>
        </div>

        <script src="noor/jquery.min.js"></script>
        <script src="noor/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>