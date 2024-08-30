<?php
global $DB_LINK;
require_once("../con_base/functions.inc.php");
validate_admin();
if (isset($_POST['finder'])) {

    $find = $_POST['ans'];
    if (mysqli_query($DB_LINK, "insert into calc_ans set ans ='$find' "))
    {
        ?>
        <script>
            alert('Data save successfully');
            location.href="ex-answer.php";
        </script>
        <?php
        exit;
    }
    ?>
    <script>
        alert('Sorry !!! Data already in list');
        location.href="ex-answer.php";
    </script>
    <?php
    exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?php echo $ADMIN_HTML_TITLE; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link href="css/admin_style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .td-top {
            padding: 5px !important;
            background-color: #ededed;
            color: #000000;
            text-align: center;
        }

        .td-pad {
            padding: 3px !important;
            background-color: #eded17;
            color: #0a53be;
            text-align: center;
        }

        .td-pad-2 {
            padding: 3px !important;
            background-color: #0a53be;
            color: #eded17;
            text-align: center;
        }
    </style>
    <?php require_once("top.php"); ?>

</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2"><?php require_once("adheader.php"); ?></td>
    </tr>
    <tr>
          <td   >
            <div id="mid">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#274663">
                    <tr>
                        <td colspan="2" bgcolor="#FFFFFF">
                            <form name="form1" method="post" action=" ">
                                <table   border="0" align="center" cellpadding="0" cellspacing="1"
                                       bgcolor="#f0becf">
                                    <tr>
                                        <td height="252" bgcolor="#FFFFFF" >
                                            <div class="correct" align="center"><h3>Excel Data Answer List <?php /*if (isset($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3></div>
                                            <hr>
                                            <table>
                                                <tr>
                                                     <td   style="text-align: center;"><label  style="font-size: 25px;">Enter Answer : </label></td>
                                                    <td width="190px"><input style="width: 170px;" name="ans" type="number" value="<?php if (isset($_POST['finder'])) echo  $_POST['ans']; ?>" required></td>

                                                    <td width="190px"><input type="submit" name="finder" value="Save answer"></td>
                                                </tr>
                                            </table>
                                            <hr>

    <table style="width:260px !important;" style="border-color: #9c0d0d">
    <tr>
    <td class="td-top">#</td>
    <td class="td-top">Number</td>
    </tr>
    <?php
    $coun=0;
    $qry=mysqli_query($DB_LINK,"select * from calc_ans order by id desc");
    while ($row = mysqli_fetch_array($qry)) {
    $coun++;
    ?>

    <tr>
    <td><?php echo $coun; ?></td>
    <td class="td-pad"><?php echo $row['ans']; ?></td>
    </tr>
                    <?php } ?>
                                            </table>

                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2"><?php require_once("adfooter.php"); ?></td>
    </tr>
</table>
</body>
</html>