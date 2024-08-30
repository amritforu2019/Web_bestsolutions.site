<?php require_once "../con_base/functions.inc.php"; 
//if(isset($_SESSION['sess_admin_id']))
//header("Location:admin_home.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $ADMIN_HTML_TITLE;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">



</head>
<body onLoad="document.form2.loginid.focus();">
<div id="wrap">
	<div id="top"></div>
	<div id="mid">
		<div id="content-wrap" align="center"> 

<form name="form2" method="post" action="login.php"> 
<input name="back" type="hidden" id="back" value="<?php echo $_REQUEST['back']?>"> 
    <table class="login" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
		<?php if(isset($_SESSION['info_msg']))
        { ?>
                <tr>
                    <td colspan="2" class="green"><?php echo $_SESSION['info_msg']; unset($_SESSION['info_msg']); ?></td>
                </tr>
        <?php   }

        if(isset($_SESSION['warn_msg'])) {?>
		<tr>
            <td colspan="2" class="red"><?php echo $_SESSION['warn_msg']; unset($_SESSION['warn_msg']); ?></td>
        </tr> 
		<?php } ?>
		<tr>
            <td align="center" colspan="2"><h2>Administrator Login</h2></td>
            
        </tr>
        <tr>
            <td>User ID</td>
            <td> 
			<input id="loginid" name="loginid" required   tabindex="1" type="text"></td>
        </tr>
        <tr  >
            <td>Password</td>
            <td><input id="passis" name="password" required   tabindex="2" type="password"></td>
        </tr>
        <tr>

            <td align="center" ><input value="Login" class="input-button" tabindex="3" type="submit"
                                       name="Submit2"></td>


        </tr>
          <!--<tr>
      <td   valign="top">Generate OTP </td>
      <td> <a href="javascript:void(0)" onclick="genotp(loginid.value,passis.value)">Click</a>
      </td>
          </tr>
        <tr>
            <td id="upd_member" colspan="2" align="center">

            </td>
        </tr>-->

        <!--<tr>
            <td colspan="2"><a href="https://www.geolifecare.com">Go to Home Page</a></td>
        </tr>-->
    </tbody></table> 
</form> 
</div>
</div>
<div id="bot">
</div>
<div style="line-height:15px;">Copyright 2019 - <? echo $current_year+1;?><strong> <br>
<?php echo $SITE_NAME; ?></strong> All Rights Reserved</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script type='text/javascript'>
function genotp(logid,logpass){
    if(logid=="")
    {
        document.getElementById("loginid").focus();
        return;
    }
    else if(logpass=="")
    {
        document.getElementById("password").focus();
        return;
    }
    else
    {
        $.ajax( {
            type: "POST",
            url: "get_loginotp.php",
            beforeSend: function ( xhr ) {
                $( "#upd_member" ).html( "Processing...." );
            },
            data: {'logid':logid,'logpass':logpass},
            success: function ( data ) {
                $( "#upd_member" ).html( data );
            }
        } );
    }

}
</script>
</body>
</html>
