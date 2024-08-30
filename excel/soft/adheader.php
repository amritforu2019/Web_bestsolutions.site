
<!--<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">-->
<!--<link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
-->
<!--<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">-->
<!--<link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">-->
<!--<link href="https://fonts.googleapis.com/css2?family=Gupter:wght@700&display=swap" rel="stylesheet">
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td width="5%" align="center" valign="top"


            style="border-bottom:solid 5px #da251a;  background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);  font-size: 30px; text-transform:uppercase;">
            <a href="admin_home.php">
                <img src="images/logo2.png" hspace="10"   vspace="10" align="absmiddle" height="130" />
            </a></td>

        

      </tr>

      <tr>

        <td   colspan="2" align="right" style="padding-right:20px; color:#000; font-weight:bold;">
            <a href="admin_home.php" style="color:#000;">
                Today Date <?=date('Y-m-d H:i:s A');?>
                <strong>| </strong> <i class="fa-solid fa-house-chimney fa-beat-fade"></i> &nbsp;Home</a>
            <?php if(isset($_SESSION['sess_admin_id'])) { ?>
                <strong>| </strong><a href="logout.php" style="color:#000;"><i class="fa-solid fa-right-from-bracket fa-fade"></i> Logout </a>
            <?php } ?>
        </td>

      </tr>

      <tr>

        <td height="5" colspan="2" align="right" bgcolor="#000067" style="padding-right:20px;"></td>

      </tr>

    </table></td>

  </tr> 

</table>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<script src="https://kit.fontawesome.com/dd6ea8e544.js" crossorigin="anonymous"></script>