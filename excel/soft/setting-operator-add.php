<?php
require_once("../con_base/functions.inc.php");
validate_admin();



if(isset($_POST['go']))
{
$tmppassword=($_POST['pass']);

    $sqlw=mysqli_query($DB_LINK,"select * from tbl_branch  where br_code='".$_POST['br_code']."'") or die(mysql_error());
    $cat=mysqli_fetch_array($sqlw);




mysqli_query($DB_LINK,"insert into tbl_operator  set  
name='".$_POST['name']."',
password='".$_POST['password']."',  
user_id='".$_POST['user_id']."', 
status=1,
br_code='".$_POST['br_code']."',
br_name='".$cat['title']."'  ")or die(mysqli_error());
    $_SESSION['sess_msg']='Member Added successfully....';
    header("Location:setting-operator.php");
    exit;
}


if(isset($_GET['ban']))
{
    mysqli_query($DB_LINK,"update tbl_operator set status=0 where id='".$_GET['ban']."' ")or die(mysql_error());
    $_SESSION['sess_msg']='Member Deactivated successfully....';
    header("Location:setting-operator.php"); exit;
}
if(isset($_GET['unban']))
{
    mysqli_query($DB_LINK,"update tbl_operator set status=1 where id='".$_GET['unban']."' ")or die(mysql_error());
    $_SESSION['sess_msg']='Member Activated successfully....';
    header("Location:setting-operator.php"); exit;
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
                <form name="frm_main" id="frm_main" method="post" action="" enctype="multipart/form-data">
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#274663" class="table table-hover table-bordered">

                    <tr>

                        <td height="29" align="center" bgcolor="#FFFFCC" style="font-size:25px;">Operator Add</td>

                    </tr>

                    <tr>

                        <td bgcolor="#FFFFFF" valign="top">
                            <table width="100%" border="1" bordercolor="#CCCCCC" cellspacing="0" cellpadding="5"  class="table table-hover table-bordered"  >
                                <tr>
                                    <td ><div align="left">User Id</div></td>
                                    <td ><div align="center">:</div></td><!--onKeyUp="onchangeajax2(this.value)"-->
                                    <td ><input type="text" value="<?php if(isset($_GET['edit'] )) echo  stripslashes($row['user_id']);?>" name="user_id"  required /></td>
                                </tr>
                                <tr>
                                    <td><div align="left">Password</div></td>
                                    <td><div align="center">:</div></td>
                                    <td><input type="text" value="<?php if(isset($_GET['edit'] )) echo  stripslashes($row['password']); ?>" name="password"  required /></td>
                                </tr>
                                <tr>
                                    <td ><div align="left"> Name </div></td>
                                    <td ><div align="center">:</div></td>
                                    <td > <span id="statediv2"> <input type="text" value="<?php if(isset($_GET['edit'] )) echo  stripslashes($row['name']); ?>" required name="name" /></span></td>
                                </tr>
                                <tr>
                                    <td  ><div align="left">Branch</div></td>
                                    <td  ><div align="center">:</div></td>
                                    <td  >   <select   name="br_code"   required > <option value="">Select Branch</option>
                                            <?php $sqlw=  mysqli_query($DB_LINK,"select * from tbl_branch  order by title") or die(mysqli_error()); while($cat=mysqli_fetch_array($sqlw)) { ?> <option <?php if(isset($_GET['edit'] )) { if($cat['br_code']==$row['br_code']) echo 'selected'; }?> value="<?php echo $cat['br_code'];?>"><?php echo ucwords(strtolower($cat['title']));?></option> <?php } ?> </select></td>
                                </tr>
                                <tr>
 <td colspan="3"> <input name="go" type="submit"   id="go" value=" Add member" /> </td>
                                </tr>
                            </table>

                        </td>

                    </tr>



                </table>
                </form>

            </div>

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
 