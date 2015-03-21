<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Placement Cell | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="noor/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="noor/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<script src="register.js"></script>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Reset</div>
            <form action="../../index.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="eml" class="form-control" placeholder="Email ID" id="eml" onblur="emlblur(eml.value);" onfocus="emlfocus();"/>
                    </div><div id="ERR_EMAIL" style="padding: 2px; width: 400px; display: none; color: red;">Incorrect Email address</div>
                  
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Confirm Reset</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>

        <script src="noor/jquery.min.js"></script>
        <script src="noor/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>