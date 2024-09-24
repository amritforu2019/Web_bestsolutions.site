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
                                            <div class="correct" align="center"><h3>Collection Red 23-09-2024 <?php /*if (isset
 ($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3></div>
                                      <table width="100%">
            <tr>
             <td width="90px" style="text-align: center;"><label
		             style="font-size: 25px;"> Enter Question To Find Related possible numbers : </label></td>
             <td width="90px"><input style="width: 85px;" name="start"
                                     type="number" value="<?php  if (isset($_POST['finder'])) {
		             echo $_POST['start'];
	             }
		             
		             if (isset($_GET['start'])) {
			             echo $_GET['start'];
		             }
	              ?>" required></td>
             <!--<td width="90px" style="text-align: center;"><label
		             style="font-size: 25px;"> End : </label></td>
             <td width="90px"><input style="width: 85px;" name="end"
                                     type="number" value="<?php /*if (isset($_POST['finder'])) {
		             echo $_POST['end'];
	             }
	             */?>" required></td>
	             <td width="90px" style="text-align: center;"><label
															style="font-size: 25px;">Find : </label></td>-->
	            <!-- <td width="90px"><input style="width: 85px;" name="find"
                                     type="number" value="<?php /*/*if (isset($_POST['finder'])) {
               echo $_POST['find'];
              }
              */ ?>" required></td>-->
             <td width="90px"><input type="submit" name="finder"
                                     value="Find answer"></td>
            </tr>
           </table>
           <hr>
                                         <table style="font-size: 25px;">
                                          <tr>
                                           <td><label  >Filter : </label></td>
                                           <td><input style="width: 85px;"  type="number" id="txt_filter"> </td>
                                           <td><input type="button" name="finder" onclick="highlightDivByText(txt_filter.value)" value="Filter">  </td>
                                           <td><input type="button" name="reset" onclick="resetStyle()"
                                                   value="Reset"></td>
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
	     if (isset($_POST['finder'])) {
							
							$start=$_POST['start'];
		     $number_start = $start * 555;
		     $split_answer=splitter_data($number_start);
		     
		     $array_a1 = array();
		     $digits = str_split($number_start);
		     
		     $n = count($digits);
		     //$k = 3;
		     //echo "All possible 3-digit numbers without repetition:\n";
		      generatePermutations($digits, 3);
		     //print_r($array_a1);
		     
		     //$commonElements = array_intersect($array_a1, $code_ary);
		      //$array_unique=array_values(array_unique($array_a1));
							
	      //print_r($array_unique);
		     
		     generatePermutations($digits, 4);
		     //$array_unique_4=array_values(array_unique($array_a1));
		     //print_r($array_unique_4);
		     
		     foreach ($array_a1 as &$num) {
			     $num = ltrim($num, '0');  // Remove leading zeros
		     }
		     
		     //$array_unique_5=array_merge($array_unique, $array_unique_4);
		     //print_r(array_values(array_unique($array_a1)));
		     		     $array_unique_4=array_values(array_unique($array_a1));
   /* foreach ($array_unique_4 as $array_unique_data_4)
    {
     //echo ' - '.$array_unique_data_4;
    }*/
							
							?>
		     <tr>
			     <td>Question : <?=$start;?></td>
			     <td>Answer : <?=$split_answer;?></td>
		     </tr>
		     <?php
							/////////////////////////////////////////////
		      $q=0;
			     foreach ($array_unique_4 as $array_unique_data_4)
								{
									$q++;
	   
				    $sql="Select * From tbl_new_sequence_red where question=$array_unique_data_4 order by question asc";
								$qry=mysqli_query($DB_LINK,$sql);
								if(mysqli_num_rows($qry)>0)
									{
										$data=mysqli_fetch_assoc($qry);
						
		    $number = $data['question'] * 555;
		    // Convert the string to an array of digits
		   
		    $split_answer=splitter_data($number);
     ?>
	    <tr>
		  <!--  <td><?php /*echo $q;*/?></td>-->
		    <td>
			     <div class="grid-container-collection">
     <div class="grid-item">
      <div  class=" random-bg-gold " >
       <?php echo $data['question'];?>
      </div>
     </div>
				     <div>
			    </td>
		    <td>
			     <div class="grid-container-collection">
     <div class="grid-item">
      <div  class=" random-bg-gold " ><?php  echo $split_answer;  ?></div>
     </div>
			     </div>
			    </td>
		    <td>
			    <?php
				    $array_a2 = array();
				    $digits = str_split($number);
				    // Number of available digits
				    $n = count($digits);
				    // Number of digits to choose (3-digit number)
				    $k = 3;
				    //echo "All possible 3-digit numbers without repetition:\n";
				    generatePermutations2($digits, $k);

				   //print_r($array_a1);
				    
				    //$commonElements = array_intersect($array_a1, $code_ary);
				    $array_unique=array_values(array_unique($array_a2));
				   /* ///print_r($array_unique);
				    ///
				    /// */?>
			     <div class="grid-container-small">
        <?php
 			    foreach ($array_unique as $array_unique_data) {
							  ?>
					    <div class="grid-item-small">
      <div  class=" bg-small " ><?php  echo $array_unique_data;   ?></div>
     </div>
					     <?php
   }
			     ?> </div>
		    </td>
	    </tr>

    <?php /**/
	     }
			     }
	     }
					?>
		 
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