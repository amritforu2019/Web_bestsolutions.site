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
        }
        .td-pad
        {
            padding: 3px !important;
            background-color: #eded17;
            color: #0a53be;
            text-align:center;
        }
        .td-pad-2
        {
            padding: 3px !important;
            background-color:#0a53be ;
            color: #eded17;
            text-align:center;
        }
    </style>
    <?php require_once("top.php"); ?>

</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2"><?php //require_once("adheader.php"); ?></td>
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
                                                    List - Result - <?php if (isset($_GET['answer'])) {
                                                        echo dec($_GET['answer']);
                                                    } ?></h3></div>




        <?php
        $answer = dec($_GET['answer']);


            ?>

                <table style="width:160px !important;"    style="border-color: #9c0d0d">

                    <tr>
                        <td class="td-top">#</td>
                        <td class="td-top">Number</td>
                        <td  class="td-top">Answer</td>
                    </tr>
                    <?php
                    $qry = mysqli_query($DB_LINK, "select * from calc_data where answer_p1='$answer' or
                            answer_p2='$answer' or
                            answer_p3='$answer'  order by id asc  ") or die(mysqli_error());
                    $coun=0;
                    while ($row = mysqli_fetch_array($qry))
                    {
                        extract($row);
                        $coun++;
                        ?> <tr>
                        <td    ><?php echo $coun; ?></td>
                        <td class="td-pad"  ><?php echo $row['number']; ?></td>
                        <td class="td-pad-2"  ><?php if ($row['compile_answer'] != 'E')
                            {
                                if($row['answer_p1']!='')
                                {
                                ?><a style="color:#eded17; text-decoration: none; " class="various3" href="ex-all-filter.php?answer=<?php echo enc($row['answer_p1']);?>"><?php echo $row['answer_p1'];?></a><?php
                                }
                                if($row['answer_p2']!='')
                                { echo '-';
                                ?><a style="color:#eded17; text-decoration: none; " class="various3" href="ex-all-filter.php?answer=<?php echo enc($row['answer_p2']);?>"><?php echo $row['answer_p2'];?></a><?php
                                }
                                if($row['answer_p3']!='')
                                { echo '-';
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
        <td colspan="2"><?php // require_once("adfooter.php"); ?></td>




    </tr>
</table>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>


<script type="text/javascript" src="fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $('.various3').fancybox({
            'width'				: '90%',
            'height'			: '90%',
            'autoScale'			: false,
            'transitionIn'	: 'elastic',
            'transitionOut'	: 'circular',
            'type'				: 'iframe'
        });

    });
</script>
</html>
