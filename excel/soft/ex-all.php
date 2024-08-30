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
        .td-top
        {
            padding: 5px !important;
            background-color: #ededed;
            color: #000000;
            text-align:center;
            font-size:18px;
        }
        .td-pad
        {
            padding: 3px !important;
            background-color: #eded17;
            color: #0a53be;
            text-align:center;
            font-size:18px;
        }
        .td-pad-2
        {
            padding: 2px !important;
            background-color:#0a53be ;
            color: #eded17;
            text-align:center;
            font-size:22px;
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
        <?php /*?><?php */ ?>
        <td align="center">
            <div id="mid">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#274663">

                    <tr>
                        <td colspan="2" bgcolor="#FFFFFF">


                            <form name="form1" method="post" action=" ">


                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1"
                                       bgcolor="#f0becf">


                                    <tr>


                                        <td height="252" bgcolor="#FFFFFF">

                                            <div class="correct" align="center"><h3>Excel Data
                                                    List <?php if (isset($_SESSION['sess_msg'])) {
                                                        echo $_SESSION['sess_msg'];
                                                        unset($_SESSION['sess_msg']);
                                                    } ?></h3></div>



        <table
               style="border-color: #9c0d0d">
            <tr>
        <?php

        $qry_count = mysqli_query($DB_LINK, "select * from calc_data   ") or die(mysqli_error());
        $final=mysqli_num_rows($qry_count)/10;

        $start=0;
        $end=10;
        for($i=1;$i<=$final;$i++)
            {
                if($i>1) {
                   $start = $start + 10;
                      }
            ?>
            <td align="center">
                <table style="width:210px !important;"    style="border-color: #9c0d0d">
                    <tr>
                        <td class="td-top">Num</td>
                        <td  class="td-top">Answer</td>
                    </tr>
                    <tr>
                    <?php
                    $qry = mysqli_query($DB_LINK, "select * from calc_data  order by id asc limit $start, $end") or die(mysqli_error());

                    while ($row = mysqli_fetch_array($qry))
                    {
                        extract($row);
                        ?>
                        <td class="td-pad"  ><a style="color:#0a53be;  text-decoration: none; " class="various3"   href="ex-finder.php?start=<?php echo  ($row['number']);?>">
                            <?php echo $row['number']; ?>
                            </a></td>
                        <td class="td-pad-2"  ><?php if ($row['compile_answer'] != 'E')
                            {
                                if($row['answer_p1']!='')
                                {
                                ?><a style="color:#eded17; text-decoration: none; " class="various3" href="ex-all-filter.php?answer=<?php echo enc($row['answer_p1']);?>"><?php echo $row['answer_p1'];?></a><?php
                                }
                                if($row['answer_p2']!='')
                                { echo ' - ';
                                ?><a style="color:#eded17; text-decoration: none; " class="various3" href="ex-all-filter.php?answer=<?php echo enc($row['answer_p2']);?>"><?php echo $row['answer_p2'];?></a><?php
                                }
                                if($row['answer_p3']!='')
                                { echo ' - ';
                                ?><a style="color:#eded17; text-decoration: none; " class="various3"   href="ex-all-filter.php?answer=<?php echo enc($row['answer_p3']);?>"><?php echo $row['answer_p3'];?></a><?php
                                }

                            }

                        else echo $row['answer']; ?></td>
                        <?php
                        echo "</tr>";
                    }

                         ?>
                </table>
            </td>
            <?php
                if($i%100==0)
                {
                    ?>
            </tr>
            <tr>
                <td colspan="100" style="background:#9b9aba;">&nbsp;</td>
            </tr>
            <tr>
                    <?php
                }
            }
            ?>
            </tr>
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
