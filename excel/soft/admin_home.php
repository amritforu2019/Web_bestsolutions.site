<?php require_once "../con_base/functions.inc.php";   
validate_admin(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title><?php echo $ADMIN_HTML_TITLE;?></title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link href="css/admin_style.css" rel="stylesheet" type="text/css">
<style type="text/css">
    .bgs {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }


</style>
</head>

<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td colspan="3"><?php require_once("adheader.php");?></td>

  </tr>

  <tr>

    <td width="250px" valign="top" class="left"><?php include("adleft.php");?></td>

    <td    align="center" valign="top" class="bgs">

    <div id="mid" >

        <p>&nbsp;</p>

        <p>&nbsp;</p>

       
        <h1 style="font-size:35px; color: #ffffff;"  >Welcome to Administrator Panel of <? echo $SITE_NAME;?> <br>

          Use Left navigation to perform the desired action.. </h1>







        <p>

          <!--  <br>
            SMS (TRANSACTIONAL) Balance : <?php
/*            $data=get_sms_balance();
            $arr = json_decode($data, true);
            echo $arr["available_balance"]["transactional_balance"];
            */?>  Validity : 01-12-2020

            <br> <br>
            SMS (PROMOTIONAL) DevCity Balance : <?php
/*            $data=get_sms_balance_p();
            $arr = json_decode($data, true);
            echo $arr["available_balance"]["promotional_balance"];
            */?>  Validity : 01-08-2020-->
        </p>

      </div>

      

      </td>


  </tr>

  <tr>

    <td colspan="3"><?php require_once("adfooter.php");?></td>

  </tr>


</table>

</body>

</html>

