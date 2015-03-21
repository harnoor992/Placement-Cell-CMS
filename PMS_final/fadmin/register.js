//Email valid 
function emlfocus()
{
    document.getElementById("ERR_EMAIL").style.display="inline";
    document.getElementById("ERR_EMAIL").innerHTML="Please fill Email Address. eg:- john@gmail.com ";
}function emlfocus2()
{
    document.getElementById("ERR_EMAIL").style.display="inline";
    document.getElementById("ERR_EMAIL").innerHTML="eg:-john@gmail.com";
}

function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode;
if(charCode != 46 && charCode >31 && (charCode< 48 || charCode > 57))
{
alert("Enter number only");
return false;
}

}


function emlblur(strem)
{
   var em= /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(em.test(strem))
    {
    //document.getElementById("ERR_EMAIL").style.display="none";
    document.getElementById("ERR_EMAIL").innerHTML="OK";
    }
    else
    {
        document.getElementById("ERR_EMAIL").innerHTML="Incorrect Email address";
      }
}function emlblur2(strem)
{
   var em= /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(em.test(strem))
    {
    //document.getElementById("ERR_EMAIL").style.display="none";
    document.getElementById("ERR_EMAIL").innerHTML="OK";
    }
    else
    {
        document.getElementById("ERR_EMAIL").innerHTML="Invalid";
      }
}
//Name valid
function namfocus(oxy)
{
    if(oxy=="1"){
    document.getElementById("ERR_NAM").style.display="inline";
    document.getElementById("ERR_NAM").innerHTML="Please Enter your first name eg:- John";
}
else if(oxy=="2")
{
        document.getElementById("ERR_LNAM").style.display="inline";
    document.getElementById("ERR_LNAM").innerHTML="Please fill Last Name. eg:- Sirgie";
    
}
 else if(oxy=="3")
 {
    document.getElementById("ERR_NAM").style.display="inline";
    document.getElementById("ERR_NAM").innerHTML="eg:- John Hawkins";
}


}
function namblur(strna,oct)
{
    
    if(oct==1){
                 var nam= /^[a-zA-Z]{2,65}$/;
                 if(nam.test(strna.trim()))
                          {
                              //document.getElementById("ERR_EMAIL").style.display="none";
                                 document.getElementById("ERR_NAM").innerHTML="OK";
                                                 }
                 else
                        {
        document.getElementById("ERR_NAM").innerHTML="Incorrect";
                                             }                                                                                         
                                                    
                                                        }
      else if(oct==2)
      {
         var nam= /^[a-zA-Z]{2,65}$/;
                 if(nam.test(strna.trim()))
                          {
                              //document.getElementById("ERR_EMAIL").style.display="none";
                                 document.getElementById("ERR_LNAM").innerHTML="OK";
                                                 }
                 else
                        {
        document.getElementById("ERR_LNAM").innerHTML="Incorrect";
                                             }                   
        
      }
        else if(oct==3)
      {
         var nam= /^[a-zA-Z ]{2,65}$/;
                 if(nam.test(strna.trim()))
                          {
                              document.getElementById("ERR_NAM").innerHTML="OK";
                                                 }
                 else
                        {
        document.getElementById("ERR_NAM").innerHTML="Invalid";
                                             }                   
        
      }
      
}

function passfocus()
{
        document.getElementById("ERR_PASS").style.display="inline";
    document.getElementById("ERR_PASS").innerHTML="Password must include 8 characters with 1 alphabet,1 number and 1 special character";
    
    
}

function passblur(strp)
{
    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  
if(strp.match(paswd))   
{   
document.getElementById("ERR_PASS").innerHTML="OK";
}  
else  
{   
document.getElementById("ERR_PASS").innerHTML="Password must include 8 to 15 characters with atleast 1 letter, 1 numeric digit and 1 special character"; 
}  
    
}
function rpassfocus()
{
    
           document.getElementById("ERR_RPASS").style.display="inline";
    document.getElementById("ERR_RPASS").innerHTML="Please re-type your password";   
}
function rpassblur(strp,strp2)
{
    if(strp==strp2)
    {
            document.getElementById("ERR_RPASS").innerHTML="OK";  
        
    }
    else{
        
           document.getElementById("ERR_RPASS").innerHTML="Please type same password as before";  
        
    }
}

function userfocus()
{
    
           document.getElementById("ERR_USER").style.display="inline";
    document.getElementById("ERR_USER").innerHTML="Username must include 1 alphabet 1 numeric character";   
    
    
}

function userblur(strp,ve)
{
    if(ve==0)
    {
      var paswd=  /^[A-z0-9]{8,15}$/;  
if(strp.match(paswd))   
{   
document.getElementById("ERR_USER").innerHTML="OK";
}  
else  
{   
document.getElementById("ERR_USER").innerHTML="Incorrect.Username must include 1 alphabet 1 numeric character and should be atleast 8 character long"; 
}  
    
    }
    else if(ve==1)
    {
        
        var paswd=  /^[A-z0-9]{8,15}$/;  
        var pas2 =  /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
if(strp.match(paswd))   
{   
  document.getElementById("ERR_USER").style.display="inline";
document.getElementById("ERR_USER").innerHTML="";
}
else if(strp.match(pas2))
{
    
    document.getElementById("ERR_USER").style.display="inline";
document.getElementById("ERR_USER").innerHTML="";//ok  
}  
else  
{   
      document.getElementById("ERR_USER").style.display="inline";
document.getElementById("ERR_USER").innerHTML="Invalid Username or Email!"; 

}  
        
    }
    
}










function mobilefocus()
{
    
       document.getElementById("ERR_MOBILE").style.display="inline";
    document.getElementById("ERR_MOBILE").innerHTML="Please enter your 10 digit mobile No. eg:-9673654514";   
    
}


function mobileblur(strn)
{
    
     var paswd=  /^[0-9]{10}$/;  
       if(strn.match(paswd))   
    {   
        document.getElementById("ERR_MOBILE").innerHTML="OK";
                }  
    else
    {
          document.getElementById("ERR_MOBILE").innerHTML="Wrong Input Mobile Number";
        
    }
    
}

function caldz()
{
    
    var x= document.getElementById("datezz");
    var y= document.getElementById("monthzz");
    var z= document.getElementById("yearzz");
    for(var i=1;i<32;i++)
    {
    var option = document.createElement("option");
    option.text = i;
    option.value=i;
    x.add(option);
    }
     for(i=1;i<13;i++)
    {
    var option = document.createElement("option");
    option.text = i;
    option.value=i;
    y.add(option); 
    }
     for(i=1980;i<2014;i++)
    {
      var option = document.createElement("option");
    option.text = i;
    option.value=i;
    z.add(option);
    }
    
}

function chkdate()
{
   var x=document.getElementById("datezz").value;
    var y=document.getElementById("monthzz").value;
    var z=document.getElementById("yearzz").value;
    
    
    var dd=new Date(y +" " + x + ", " + z);
    var m = dd.getMonth(); 
    if(y != m+1)
    {
       document.getElementById("ERR_dat").style.display="inline";
           document.getElementById("ERR_dat").innerHTML="Invalid Date Selected.Auto-Corrected!";
           
     document.getElementById("datezz").options[dd.getDate()].selected=true;
     document.getElementById("monthzz").options[dd.getMonth()].selected=true;
     
    }
    else
    {
        
       document.getElementById("ERR_dat").style.display="inline";
           document.getElementById("ERR_dat").innerHTML="OK";
         
        
    }
    
    
    
}

function fkcap(ala,ali)
{
    if(("HR"+ali)==ala)
    {
          document.getElementById("ERR_USER").style.display="none";
           document.getElementById("ERR_USER").innerHTML="";  
        
    }
    else
    {
      
       document.getElementById("ERR_USER").style.display="inline";
           document.getElementById("ERR_USER").innerHTML="Wrong Captcha!";  
        
    }
    
    
}