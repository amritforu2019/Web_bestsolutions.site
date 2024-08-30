<?php
require_once("../con_base/functions.inc.php");
validate_admin();
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
                                            <div class="correct" align="center"><h3>Excel Data Find Result <?php /*if (isset($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3></div>
                                            <hr>
                                            <table>
                                                <tr>
                                                    <td width="90px" style="text-align: center;"><label  style="font-size: 25px;"> Start : </label></td>
                                                    <td width="90px"><input style="width: 85px;" name="start" type="number" value="<?php if (isset($_POST['finder'])) echo  $_POST['start']; if (isset($_GET['start'])) echo  $_GET['start']; ?>" required></td>
                                                    <td width="90px" style="text-align: center;"><label  style="font-size: 25px;"> End : </label></td>
                                                    <td width="90px"><input style="width: 85px;" name="end" type="number" value="<?php if (isset($_POST['finder'])) echo  $_POST['end']; ?>" required></td>
                                                    <td width="90px" style="text-align: center;"><label  style="font-size: 25px;">Find : </label></td>
                                                    <td width="90px"><input style="width: 85px;" name="find" type="number" value="<?php if (isset($_POST['finder'])) echo  $_POST['find']; ?>" required></td>

                                                    <td width="90px"><input type="submit" name="finder" value="Find answer"></td>
                                                </tr>
                                            </table>
                                            <hr>

                                            <table style="width:260px !important;" style="border-color: #9c0d0d">

                                                <tr>
                                                    <td class="td-top">#</td>
                                                    <td class="td-top">Number</td>
                                                    <td class="td-top">Answer</td>
                                                </tr>
                                            <?php
        if (isset($_POST['finder']))
        {
         $start = $_POST['start'];
         $end = $_POST['end'];
         $find = $_POST['find'];
        $answer = $find;
        $qn_array=str_split( $answer);
        //echo count($qn_array);
        $coun=0;
        $qry = mysqli_query($DB_LINK, "select * from calc_data   where number>=$start and number<=$end ") or die(mysqli_error());
        $master_answer="";
        while ($row = mysqli_fetch_array($qry))
         {
           //echo " - ".  $answer = $row['answer'];
            $answer = $row['answer'];
            $compile_answer = str_split($answer);
            $match = 0;
            $skip = array();
            for ($x = 0; $x < count($compile_answer); $x++)
            {
               // echo " qn  " . $x. " : { ". $compile_answer[$x]. " } ";
                for ($y = 0; $y < count($qn_array); $y++)
                {
                    if (!in_array($compile_answer[$x], $skip))
                    {
                        if ($compile_answer[$x] == $qn_array[$y])
                        {
                            $match++;
                            array_push($skip, $qn_array[$y]);
                           // echo '* Match ( ' . $match . ' )*';
                        }
                    }
                }
            }


             if ($match == count($qn_array)) {
                $coun++;
                 ?>

                <tr>
                    <td><?php echo $coun; ?></td>
                    <td class="td-pad"><?php echo $row['number']; ?></td>
                    <td class="td-pad-2"><?php if ($row['compile_answer'] != 'E') {
                            if ($row['answer_p1'] != '') {
                                ?> <?php echo $row['answer_p1']; ?> <?php
                            }
                            if ($row['answer_p2'] != '') {
                                echo '-';
                                ?> <?php echo $row['answer_p2']; ?> <?php
                            }
                            if ($row['answer_p3'] != '') {
                                echo '-';
                                ?> <?php echo $row['answer_p3']; ?> <?php
                            }

                        } else echo $row['answer']; ?></td>
                    <?php
                        echo "</tr>";
                        ?>


                 <?php

            }
        }


  ?>  </table>
                                                 <?php } ?>
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