<?php
require_once("../con_base/functions.inc.php");
validate_admin();


/*if(isset($_GET['dele']))
{
    mysqli_query($DB_LINK,"delete from  tbl_operator  where id='".$_GET['dele']."' ")or die(mysql_error());
    $_SESSION['sess_msg']='Member Deleted successfully....';
    header("Location:setting-operator.php");
    exit;
}*/


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

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>

        <td colspan="2"><?php require_once("adheader.php");?></td>

    </tr>

    <tr>

     <td width="250px" valign="top" class="left"><?php include("adleft.php");?></td>

     <td    align="center" valign="top" class="bgs">
            <div id="mid">

                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#274663" class="table table-hover table-bordered">

                    <tr>

                        <td height="29" align="center" bgcolor="#FFFFCC" style="font-size:25px;">Operator List</td>

                    </tr>

                    <tr>

                        <td bgcolor="#FFFFFF" valign="top" align="center">
                            <a href="setting-operator-add.php" class="aclass">Add New Operator</a>

                                        <table width="100%" border="0"  cellpadding="2" cellspacing="1" class="table table-hover table-bordered">
                                            <tr   >
                                            <th align="left"    >SNo.</th>
                                            <th align="left"    >Member Name</th>
                                            <th align="left"     >User ID.</th>
                                            <th  align="left"   > Password</th>
                                            <th align="left"    >Branch</th>
                                            <th align="left"    >Status </th>
                                            </tr>
                                            <?php

                                            $qry=mysqli_query($DB_LINK,"select * from tbl_operator  order by id desc ")or die(mysqli_error());
                                            $i=1;
                                            $k=$i;
                                            while($row=mysqli_fetch_array($qry)){
                                                extract($row);
                                                ?>
                                                <tr   >
                                                    <td   ><?php  echo $i;?></td>
                                                    <td  > <?php echo $row['name']; ?> </td>
                                                    <td  ><?php echo $row['user_id']; ?> </td>
                                                    <td  ><?php echo $row['password']; ?>  </td>


                                                    <td  ><?php echo $row['br_code']; ?> / <?php echo $row['br_name']; ?></td>
                                                    <td    ><!--<a href="setting-operator-add.php?edit=--><?//=$id;?><!--"><img src="images/but_edit_small.gif" alt="Edit Details" width="22" height="22" border="0" /></a>-->

                                                        <?php if($row['status']==0){?>



                                                            <a href="setting-operator.php?unban=<?=$id; ?>" title="Unban Email" ><img src="images/but_unban_small.gif" alt="Unban Member" width="22" height="22" border="0" /></a>



                                                        <?php } else { ?>



                                                            <a href="setting-operator.php?ban=<?=$id; ?>" title="Ban Email"><img src="images/but_ban_small.gif" alt="Ban Member" width="22" height="22" border="0" /></a>



                                                        <?php } ?>
                                                        <a href="setting-operator.php?dele=<?  echo  $id?>" onClick="return del();" title="Delete Member"><img src="images//but_delete_small.gif" alt="Delete Category" width="22" height="22" border="0" /></a>                     </td>
                                                </tr>
                                                <?php
                                                $i++; $k++;
                                            }


                                            ?>
                                        </table>


                        </td>

                    </tr>



                </table>

            </div>

        </td>

    </tr>

    <tr>

        <td colspan="2"><?php require_once("adfooter.php");?></td>

    </tr>

</table>



</body>

</html>


 