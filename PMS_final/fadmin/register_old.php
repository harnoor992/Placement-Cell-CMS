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

 <script src="noor/jquery-1.10.2.js"></script>
  <script src="noor/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: "-20", maxDate: "+0M +1D" });
  });
  </script>
  
    </head>
    <body class="lockscreen">
        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            <form action="result.php" method="get">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="nam" class="form-control" placeholder="First name"  id="nam" onblur="namblur(nam.value,1);" onfocus="namfocus(1);" />
                    </div><div id="ERR_NAM" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Please fill first name. eg:- john</i></u> </div>
                    <div class="form-group">
                        <input type="text" name="eml" class="form-control" placeholder="Email ID" id="eml" onblur="emlblur(eml.value);" onfocus="emlfocus();"/>
						<div id="ERR_EMAIL" style="padding: 2px; width: 400px; display: none; color: red;">Incorrect Email address</div>
                    </div>
                    <div class="form-group">
  <input type="text" name="mobile" class="form-control" placeholder="Mobile" id="mobile" onblur="mobileblur(mobile.value)" onfocus="mobilefocus()"/>
                    </div>
					<div id="ERR_MOBILE" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Mobile Validation. eg:- 9673654514  </i></u> </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="pass" onblur="passblur(pass.value)" onfocus="passfocus()"/>
						<div id="ERR_PASS" style="padding: 2px; width: 400px; display: none; color: red;">Password must include 8 to 15 characters with atleast 1 letter, 1 numeric digit and 1 special character</div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password" id="pass2"  onblur="rpassblur(pass.value,pass2.value)" onfocus="rpassfocus()"/>
                    </div>
					<div id="ERR_RPASS" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Retype Password Validation. eg:- Sirgie  </i></u> </div>
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
                                            <input type="text" id="datepicker" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                        </div>
                                    </div>
					
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block" onclick="submeclick()">Sign me up</button>
<script language="JavaScript">
function submeclick()
{
if()
{
return false;
}
else 
{

}


}


</script>
                    <a href="index.php" class="text-center">I already have a membership</a>
                </div>
            </form>

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