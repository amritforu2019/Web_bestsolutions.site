<?php
require_once("../con_base/functions.inc.php");
validate_admin();


if(isset($_POST['go']))
{
    $opass=trim($_POST['opass']);
    $cpass=trim($_POST['cpass']);
    $pass=trim($_POST['pass']);
    if((empty($cpass))||(empty($pass)))
    {
        $_SESSION['sess_msg']='Password/ConfirmPassword Can not be blank';
        header("Location:setting-password.php");
        exit;
    }

    if($cpass!=$pass)
    {
    $_SESSION['sess_msg']='Confirm Password is not matching ';
    header("Location:setting-password.php");
    exit;
    }

    $sql = " select * from admin_login where id='".$_SESSION['sess_base_id']."'";
    $result = mysqli_query( $DB_LINK, $sql );
    $line = mysqli_fetch_array( $result );
    if ( $line[ 'pass' ] == enc_normal($opass)) {

        $qry = "update admin_login  
        set pass='" .  ($pass) . "' 
        where pass='" .  ($opass) . "' 
        and id='" . $_SESSION['sess_base_id'] . "'";


        if (mysqli_query($DB_LINK, $qry)) {
            $_SESSION['sess_msg'] = 'Password Update Successfully';
            header("Location:setting-password.php");
            exit;
        } else {
            $_SESSION['sess_msg'] = 'Something Not Good Retry !!!!';
            header("Location:setting-password.php");
            exit;
        }
    }
    else {
        $_SESSION['sess_msg'] = 'Something Not Good Retry !!!!';
        header("Location:setting-password.php");
        exit;
    }
}




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

    <title><?php echo $ADMIN_HTML_TITLE;?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link href="css/admin_style.css" rel="stylesheet" type="text/css">



</head>

<body>

<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>

        <td colspan="2"><?php require_once("adheader.php");?></td>

    </tr>

    <tr>



        <td width="750" colspan="2" align="center" valign="top">

            <div id="mid">

                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#274663" class="table table-hover table-bordered">

                <tr>

                        <td height="29" align="center" bgcolor="#FFFFCC" style="font-size:25px;">Change Password </td>

                    </tr>

                    <tr>

                        <td bgcolor="#ffffff"  >

                <form name="form1" method="post"  autocomplete="off">

                    <table width="90%" border="0" align="center" cellpadding="2" cellspacing="5" class="table table-hover table-bordered">

                        <tr>

                            <td colspan="2"   align="center"><?php if(isset($_SESSION['sess_msg']))
                                {
                                    echo $_SESSION['sess_msg'];
                                 $_SESSION['sess_msg']=''; }?>

                               </td>

                        </tr>

                        <tr>

                            <td  >Old Password :</td>

                            <td width="71%">
                           <input name="opass" type="text"  id="opass3"
                                  value=" " ></td>

                        </tr>

                        <tr>

                            <td >New Password :</td>

                            <td><input name="pass" type="text"  id="pass"  ></td>

                        </tr>

                        <tr>

                            <td >Confirm Password :</td>

                            <td><input name="cpass" type="password"  id="cpass"  ></td>

                        </tr>

                        <tr>

                            <td   colspan="2">

                                    <input name="go" type="submit" class="button" id="go" value="Update Password">

                                </td>

                        </tr>

                    </table>

                </form>


                        </td>
                    </tr>
                </table>

        </td>

    </tr>

    <tr>

        <td colspan="2"><?php require_once("adfooter.php");?></td>

    </tr>

</table>



</body>

</html>

<?php ob_end_flush();

?>
 