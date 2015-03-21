<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>Placement Cell-Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="noor/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="noor/font-awesome.min.css" rel="stylesheet" type="text/css" />
      
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

<script src="register.js"></script>
    </head>
    <body class="lockscreen">
        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            
                <div class="body bg-gray">
                    <div class="form-group">
                       <?php 
					   $x= $_GET['nam'];
					   echo "$x";
					   ?>
					   
					   
                    </div><div id="ERR_NAM" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Please fill first name. eg:- john</i></u> </div>
                    <div class="form-group">
                       <?php 
					   $x= $_GET['eml'];
					   echo "$x";
					   ?>
						<div id="ERR_EMAIL" style="padding: 2px; width: 400px; display: none; color: red;">Incorrect Email address</div>
                    </div>
                    <div class="form-group">
                       <?php 
					   $x= $_GET['mobile'];
					   echo "$x";
					   ?>
                    </div>
					<div id="ERR_MOBILE" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Mobile Validation. eg:- 9673654514  </i></u> </div>
                    
                   
					<div class="form-group">
                                        <label>I am: &nbsp;&nbsp;</label>
                                       
                                           
                                            <input type="radio" name="gender" checked="true">Male &nbsp;&nbsp;&nbsp;<input type="radio" name="gender"> Female
                                     
                                    </div>
					
					<div class="form-group">
                                        <label>Birthday:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                        </div>
                                    </div>
					
                </div>
                <div class="footer">                    

              <a href="main/dashboard.php">      <button type="submit" class="btn bg-olive btn-block">Thank You</button></a>

                    <a href="index.php" class="text-center">I already have a membership</a>
                </div>
            

            <div class="margin text-center">
                <span>Register using social networks</span>
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