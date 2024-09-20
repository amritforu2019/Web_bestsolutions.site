<?php
global $DB_LINK;
require_once("../con_base/functions.inc.php");
validate_admin();
/*if (isset($_POST['finder'])) {

    $find = $_POST['ans'];
    if (mysqli_query($DB_LINK, "insert into calc_ans set ans ='$find' "))
    {
        */?><!--
        <script>
            alert('Data save successfully');
            location.href="ex-answer.php";
        </script>
        <?php
/*        exit;
    }
    */?>
    <script>
        alert('Sorry !!! Data already in list');
        location.href="ex-answer.php";
    </script>
    --><?php
/*    exit;
}*/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?php echo $ADMIN_HTML_TITLE; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link href="css/admin_style.css" rel="stylesheet" type="text/css"/>


    <?php require_once("top.php"); ?>

</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2"><?php require_once("adheader.php"); ?></td>
    </tr>
    <tr>
     <td width="250px" valign="top" class="left"><?php include("adleft.php");?></td>

     <td    align="center" valign="top" class="bgs">
            <div id="mid">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#274663">
                    <tr>
                        <td colspan="2" bgcolor="#FFFFFF">
                            <form name="form1" method="post" action=" ">
                                <table   border="0" align="center" cellpadding="0" cellspacing="1"
                                       bgcolor="#f0becf">
                                    <tr>
                                        <td height="252" bgcolor="#FFFFFF" >
                                            <div class="correct" align="center"><h3>Collection 20-09-2024 <?php /*if (isset
 ($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3></div>
                                        <!--    <hr>
                                            <table>
                                                <tr>
                                                     <td   style="text-align: center;"><label  style="font-size: 25px;">Enter Answer : </label></td>
                                                    <td width="190px"><input style="width: 170px;" name="ans" type="number" value="<?php /*if (isset($_POST['finder'])) echo  $_POST['ans']; */?>" required></td>

                                                    <td width="190px"><input type="submit" name="finder" value="Save answer"></td>
                                                </tr>
                                            </table>-->
                                         <table style="font-size: 25px;">
                                          <tr>
                                           <td><label  >Filter : </label></td>
                                           <td><input style="width: 85px;"  type="number" id="txt_filter"> </td>
                                           <td><input type="button" name="finder" onclick="highlightDivByText(txt_filter.value)" value="Click">  </td>
                                           <td><input type="button" name="reset" onclick="resetStyle()"
                                                   value="reset filter"></td>
                                          </tr>
                                         </table>




                                            <hr>

<table>

 <tr>
                                     <td style="border: 2px dashed #9c0d0d; padding: 5px; font-size: 30px; text-align:
                                     center">
	  
	    <table width="100%">
		    <tr>
			    <th>Question</th>
			    <th>Answer</th>
			    <th>Results</th>
		    </tr>
		    
    <?php
    $qry=mysqli_query($DB_LINK,"select * from tbl_new_sequence order by question asc");
    while ($row = mysqli_fetch_array($qry)) {
    ?>
	    <tr>
		    <td>
			     <div class="grid-container-collection">
     <div class="grid-item">
      <div  class=" random-bg-gold " >
       <?php echo $row['question']; ?>
      </div>
     </div>
				     <div>
			    </td>
		    <td>
			     <div class="grid-container-collection">
     <div class="grid-item">
      <div  class=" random-bg-gold " ><?php echo $row['compile_answer']; ?></div>
     </div>
			     </div>
			    </td>
		    <td>
			    <?php
				    $array_a1 = array();
				    $digits = str_split($row['answer']);
				    // Number of available digits
				    $n = count($digits);
				    // Number of digits to choose (3-digit number)
				    $k = 3;
				    //echo "All possible 3-digit numbers without repetition:\n";
				    generatePermutations($digits, $k);
				    
				   //print_r($array_a1);
				    
				    //$commonElements = array_intersect($array_a1, $code_ary);
				    $array_unique=array_values(array_unique($array_a1));
				    ///print_r($array_unique);
				    ///
				    /// ?>
			    <div class="grid-container-small">
        <?php
				    foreach ($array_unique as $array_unique_data) {
								?>
					    <div class="grid-item-small">
      <div  class=" bg-small " ><?php echo $array_unique_data; ?></div>
     </div>
					    <?php
				    }
			    ?> </div>
		    </td>
	    </tr>

    <?php }?>
   	    </table>
		   
                                     </td>
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
<script type="text/javascript">
 function highlightDivByText(text) {
  // Get all divs with class 'box'
  const divs = document.querySelectorAll('.bg-small');

  // Loop through each div
  divs.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div

    div.classList.remove('bg-small');
    div.classList.add('highlight-small');
    div.style.display = "block";
   }
   else
    div.style.display = "none";
  });
 }
 function resetStyle() {
  // Get all divs with class 'box'
  const divs = document.querySelectorAll('.highlight-small');

  // Loop through each div
  divs.forEach(div => {
   // Check if the div's inner HTML matches the text

   // Add 'highlight' class to matching div
   div.classList.remove('highlight-small');
   div.classList.add('bg-small');
   div.style.display = "none";
 


  });
 }
</script>