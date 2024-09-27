<?php
	global $DB_LINK;
	require_once("../con_base/functions.inc.php");
	validate_admin();


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?php echo $ADMIN_HTML_TITLE; ?></title>
    <meta http-equiv="Content-Type"
          content="text/html; charset=iso-8859-1"/>
    <link href="css/admin_style.css"
          rel="stylesheet"
          type="text/css"/>
	
 
	<?php require_once("top.php"); ?>

</head>
<body>
<table width="100%"
       border="0"
       align="center"
       cellpadding="0"
       cellspacing="0">
    <tr>
        <td colspan="2"><?php require_once("adheader.php"); ?></td>
    </tr>
    <tr>
     <td width="250px"
         valign="top"
         class="left"><?php include("adleft.php"); ?></td>

     <td align="center"
         valign="top"
         class="bgs">
            <div id="mid">
                <table width="100%"
                       border="0"
                       cellpadding="0"
                       cellspacing="1"
                       bgcolor="#274663">
                    <tr>
                        <td colspan="2"
                            bgcolor="#FFFFFF">
                            <form name="form1"
                                  method="post"
                                  action=" ">
                                <table border="0"
                                       align="center"
                                       cellpadding="0"
                                       cellspacing="1"
                                       bgcolor="#f0becf">
                                    <tr>
                                        <td height="252"
                                            bgcolor="#FFFFFF">
                                            <div class="correct"
                                                 align="center"><h3>Collection Red / Green 220 / Gold 23-09-2024 <?php /*if (isset
 ($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3></div>
                                      <table width="100%">
            <tr>
             <td style="text-align: center;"><label style="font-size: 25px;"> Enter Question To Find Related possible numbers : </label></td>
             <td><input style="width: 85px;"
                        name="start"
                        type="number"
                        value="<?php if (isset($_POST['finder'])) {
	                        echo $_POST['start'];
                        }
	                        
	                        if (isset($_GET['start'])) {
		                        echo $_GET['start'];
	                        }
                        ?>"
                        required></td>
	            <!--<td width="90px" style="text-align: center;"><label
		             style="font-size: 25px;"> End : </label></td>
             <td width="90px"><input style="width: 85px;" name="end"
                                     type="number" value="<?php /*if (isset($_POST['finder'])) {
		             echo $_POST['end'];
	             }
	             */ ?>" required></td>
	             <td width="90px" style="text-align: center;"><label
															style="font-size: 25px;">Find : </label></td>-->
	            <!-- <td width="90px"><input style="width: 85px;" name="find"
                                     type="number" value="<?php /*/*if (isset($_POST['finder'])) {
               echo $_POST['find'];
              }
              */ ?>" required></td>-->
             <td width="90px"><input type="submit"
                                     name="finder"
                                     value="Find answer"></td>
            </tr>
           </table>
           <hr>
                                         <table style="font-size: 25px;"
                                                width="100%">
                                          <tr>
                                           <td><label>Filter : </label></td>
                                           <td><input style="width: 85px;"
                                                      type="number"
                                                      id="txt_filter"> </td>
                                           <td><input type="button"
                                                      name="finder"
                                                      onclick="highlight(txt_filter.value)"
                                                      value="Filter">  </td>
                                           <td><input type="button"
                                                      name="reset"
                                                      onclick="resetDiv()"
                                                      value="Reset"></td>
                                          </tr>
                                         </table>
	                                        
	                                        <script type="text/javascript">
 function highlight(text) {
  
  // Get all divs with class 'box'
  /* const divs = document.querySelectorAll('.bg-small');
			
			// Loop through each div
			divs.forEach(div => {
				// Check if the div's inner HTML matches the text
				if (div.innerHTML.includes(text)) {
					// Add 'highlight' class to matching div
					
					div.classList.remove('bg-small');
					div.classList.add('highlight-small');
					div.style.display = "block";
				} else
					div.style.display = "none";
			});*/
  
  
  
  const divs1 = document.querySelectorAll('.random-bg');
  // Loop through each div
  divs1.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div
    div.classList.remove('random-bg');
    div.classList.add('highlight');
   }
   });
  
  
  
  const divs2 = document.querySelectorAll('.random-bg-gold');
  // Loop through each div
  divs2.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div
    div.classList.remove('random-bg-gold');
    div.classList.add('highlight-gold');
   }
   });
  
  
  
  const divs3 = document.querySelectorAll('.random-bg-red');
  // Loop through each div
  divs3.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div
    div.classList.remove('random-bg-red');
    div.classList.add('highlight-red');
   }
   });
  
  const divs4 = document.querySelectorAll('.random-bg-base');
  // Loop through each div
  divs4.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div
    div.classList.remove('random-bg-base');
    div.classList.add('highlight-base');
   }
   });
  
 }
 
 function resetDiv() {
  // Get all divs with class 'box'
/*  const divs = document.querySelectorAll('.highlight-small');
  
  // Loop through each div
  divs.forEach(div => {
   // Check if the div's inner HTML matches the text
   
   // Add 'highlight' class to matching div
   div.classList.remove('highlight-small');
   div.classList.add('bg-small');
   div.style.display = "none";
  
  });*/
  
  
  const divs1 = document.querySelectorAll('.highlight');
  // Loop through each div
  divs1.forEach(div => {
   div.classList.remove('highlight');
   div.classList.add('random-bg');
  });
  
  const divs2 = document.querySelectorAll('.highlight-gold');
  // Loop through each div
  divs2.forEach(div => {
   div.classList.remove('highlight-gold');
   div.classList.add('random-bg-gold');
  });
  
  const divs3 = document.querySelectorAll('.highlight-red');
  // Loop through each div
  divs3.forEach(div => {
   div.classList.remove('highlight-red');
   div.classList.add('random-bg-red');
  });
  
  
  const divs4 = document.querySelectorAll('.highlight-base');
  // Loop through each div
  divs4.forEach(div => {
   div.classList.remove('highlight-base');
   div.classList.add('random-bg-base');
  });
 }
 
 function toggleDiv(checkboxId, divId, labelId) {
  var x = document.getElementById(divId);
  var checkbox = document.getElementById(checkboxId);
  var label = document.getElementById(labelId);
  
  if (checkbox.checked) {
   x.style.display = "block";
   label.textContent = "Hide";
  } else {
   x.style.display = "none";
   label.textContent = "Show";
  }
 }
</script>




                                            <hr>
	                                        
	                                        <?php
		                                        
		                                        if (isset($_POST['finder'])) {
			                                        
			                                        $start = $_POST['start'];
			                                        $number_start = $start * 555;
			                                        $split_answer = splitter_data($number_start);
			                                        $split_answer_master = splitter_data($number_start);
			                                        
			                                        $array_a1 = array();
			                                        $digits = str_split($number_start);
			                                        
			                                        $n = count($digits);
			                                        //$k = 3;
			                                        //echo "All possible 3-digit numbers without repetition:\n";
			                                        generatePermutations($digits, 3);
			                                        //print_r($array_a1);
			                                        $array_unique_original = array_values(array_unique($array_a1));
			                                        
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
			                                        $array_unique_4 = array_values(array_unique($array_a1));
			                                        ?>

			                                        

			                                        <table width="100%">
																																											<tr>
																																												
																																												<td style="border: 2px dashed #9c0d0d; padding: 5px; font-size: 30px; text-align:
																																												center">
																																												Red
 <input type="checkbox" id="visibilityRed" onclick="toggleDiv('visibilityRed', 'myDivRed', 'checkboxLabelRed')" />
<label id="checkboxLabelRed" for="visibilityRed">Show  </label>
																																													<div id="myDivRed" style="display: none;">
																																													
																																													<table width="100%">
																																												<tr>
																																												
																																												<th>Question</th>
																																												<th>Answer</th>
																																												<th>Results</th>
																																												
																																												</tr>
																																												
																																												<tr>
																																												<td>Question : <?= $start; ?></td>
																																												<td>Answer : <?= $split_answer_master; ?></td>
																																												</tr>
																																														<?php
																																															/////////////////////////////////////////////
																																															$q = 0;
																																															foreach ($array_unique_4 as $array_unique_data_4) {
																																																$q++;
																																																
																																																$sql = "Select * From tbl_new_sequence_red where question=$array_unique_data_4 order by question asc";
																																																$qry = mysqli_query($DB_LINK, $sql);
																																																if (mysqli_num_rows($qry) > 0) {
																																																	$data = mysqli_fetch_assoc($qry);
																																																	
																																																	$number = $data['question'] * 555;
																																																	// Convert the string to an array of digits
																																																	
																																																	$split_answer = splitter_data($number);
																																																	?>
																																																	<tr>
																																												<!--  <td><?php /*echo $q;*/
																																												?></td>-->
																																												<td>
																																												<div class="grid-container-collection">
																																												<div class="grid-item">
																																												<div class="random-bg-red"><?php echo $data['question']; ?></div>
																																												</div>
																																												<div>
																																												</td>
																																												<td>
																																												<div class="grid-container-collection">
																																												<div class="grid-item">
																																												<div class="random-bg-red"><?php echo $split_answer; ?></div>
																																												</div>
																																												</div>
																																												</td>
																																												<td>
																																												<?php
																																													// $array_a2 = array();
																																													//$digits = str_split($number);
																																													// Number of available digits
																																													//$n = count($digits);
																																													// Number of digits to choose (3-digit number)
																																													//$k = 3;
																																													//echo "All possible 3-digit numbers without repetition:\n";
																																													// generatePermutations2($digits, $k);
																																													
																																													//print_r($array_a1);
																																													
																																													//$commonElements = array_intersect($array_a1, $code_ary);
																																													// $array_unique=array_values(array_unique($array_a2));
																																													/* ///print_r($array_unique);
																																													///
																																													/// */
																																												?>
																																													<!--<div class="grid-container-small">
																																												<?php
																																														/* 			    foreach ($array_unique as $array_unique_data) {
																																														*/
																																													?>
																																												<div class="grid-item-small">
																																												<div  class=" bg-small " ><?php /* echo $array_unique_data;   */
																																													?></div>
																																												</div>
																																												<?php
																																														/*   }
																																														*/
																																													?> </div>-->
																																												<div class="grid-item-small">
																																												<div class="random-bg-red"><?php
																																													$firstOne = explode('-', $split_answer);
																																													// echo $firstOne[0];
																																													
																																													$digits = str_split($firstOne[0]);
																																													
																																													// Sum the digits
																																													$sum = array_sum($digits);
																																													
																																													if ($sum >= 10) {
																																														$digits2 = str_split($sum);
																																														echo $digits2['1'];
																																													} else echo $sum;
																																												?></div>
																																												
																																												</div>
																																												</td>
																																												</tr>
																																																	
																																																	<?php /**/
																																																}
																																															}
																																														
																																														?>
																																												
																																												</table>
																																														</div>
																																												</td>
																																												<td style="border: 2px dashed #65f512; padding: 5px; font-size: 30px; text-align:
																																												center">
																																													Green
																																													<input type="checkbox" id="visibilityGreen" onclick="toggleDiv('visibilityGreen', 'myDivGreen', 'checkboxLabelGreen')" />
<label id="checkboxLabelGreen" for="visibilityGreen">Show  </label>
																																													<div id="myDivGreen" style="display: none;">
																																													<table width="100%" id="myTable">
																																												<tr id="not-hide">
																																												<th>Question</th>
																																												<th>Answer</th>
																																												<th>Results</th>
																																												</tr>
																																												
																																												<tr id="not-hide-1">
																																												<td>Question : <?= $start; ?></td>
																																												<td>Answer : <?= $split_answer_master; ?></td>
																																												</tr>
																																														
																																														<tr id="not-hide-2">
																																															<td colspan="3">
																																															      <table style="font-size: 25px;"
																																															             width="100%">
                                          <tr>
                                           <td><label>Filter : </label></td>
                                           <td><input style="width: 85px;"
                                                      type="number"
                                                      id="txt_filter_green"> </td>
                                           <td><input type="button"
                                                      name="finder_green"
                                                      onclick="highlight_green(txt_filter_green.value)"
                                                      value="Filter">  </td>
                                           <td><input type="button"
                                                      name="reset_green"
                                                      onclick="resetDivGreen()"
                                                      value="Reset"></td>
	                                          
                                          </tr>
                                         </table>
																																													
																																															</td>
																																														</tr>
																																														<?php
																																															/////////////////////////////////////////////
																																															$q = 0;
																																															/* sort($array_unique_4);
																																															foreach ($array_unique_4 as $array_unique_data_4) {*/
																																															
																																																
																																																$sql = "Select * From calc_ans_full   order by code asc";
																																																$qry = mysqli_query($DB_LINK, $sql);
																																																if (mysqli_num_rows($qry) > 0) {	$q++;
																																																foreach($qry as	$data ){
																																																	
																																																	$number = $data['code'] * 555;
																																																	// Convert the string to an array of digits
																																																	
																																																	$split_answer = splitter_data($number);
																																																	$firstOne = explode('-', $split_answer);
																																																	
																																																	?>
																																																	<tr id="td-<?=$firstOne['1'];?>">
																																												<!--  <td><?php /*echo $q;*/
																																													
																																														?></td>-->
																																												<td >
																																												<div class="grid-container-collection">
																																												<div class="grid-item">
																																												<div class="random-bg"><?php echo $data['code']; ?></div>
																																												</div>
																																												<div>
																																												</td>
																																												<td>
																																												<div class="grid-container-two">
																																													<?php
																																														//$firstOne = explode('-', $split_answer);
																																														foreach($firstOne as $key => $value) {
																																															//echo "Element at index {$key} is {$value}\n";
																																														//}
																																													?>
																																												<div class="grid-item">
																																												<div class="random-bg"><?php echo $value; ?></div>
																																												</div>
																																												
																																													<?php } ?></div>
																																												</td>
																																												<td>
																																												<?php
																																													// $array_a2 = array();
																																													//$digits = str_split($number);
																																													// Number of available digits
																																													//$n = count($digits);
																																													// Number of digits to choose (3-digit number)
																																													//$k = 3;
																																													//echo "All possible 3-digit numbers without repetition:\n";
																																													// generatePermutations2($digits, $k);
																																													
																																													//print_r($array_a1);
																																													
																																													//$commonElements = array_intersect($array_a1, $code_ary);
																																													// $array_unique=array_values(array_unique($array_a2));
																																													/* ///print_r($array_unique);
																																													///
																																													/// */
																																												?>
																																													<!--<div class="grid-container-small">
																																												<?php
																																														/* 			    foreach ($array_unique as $array_unique_data) {
																																														*/
																																													?>
																																												<div class="grid-item-small">
																																												<div  class=" bg-small " ><?php /* echo $array_unique_data;   */
																																													?></div>
																																												</div>
																																												<?php
																																														/*   }
																																														*/
																																													?> </div>-->
																																												<div class="grid-container-collection">
																																												<div class="grid-item">
																																									 
																																												<div class="random-bg"  style="font-size: 30px"><?php
																																													$firstOne = explode('-', $split_answer);
																																													// echo $firstOne[0];
																																													
																																													$digits = str_split($firstOne[0]);
																																													
																																													// Sum the digits
																																													$sum = array_sum($digits);
																																													
																																													if ($sum >= 10) {
																																														$digits2 = str_split($sum);
																																														echo $digits2['1'];
																																													} else echo $sum;
																																												?></div>
																																												
																																												</div>
																																												</div>
																																												</td>
																																												</tr>
																																																	
																																																	<?php /**/
																																																 }
																																															}
																																														
																																														?>
																																												
																																												</table>
																																													</div>
																																												</td>
																																												<td style="border: 2px dashed #ff9100; padding: 5px; font-size: 30px; text-align:
																																												center">
																																													Gold
																																													<input type="checkbox" id="visibilityGold" onclick="toggleDiv('visibilityGold', 'myDivGold', 'checkboxLabelGold')" />
<label id="checkboxLabelGold" for="visibilityGold">Show  </label>
																																													<div id="myDivGold" style="display: none;">
																																													<table width="100%">
																																										 
																																												
																																												<tr>
																																												<td>Question : <?= $start; ?> Answer : <?= $split_answer_master; ?></td>
																																												</tr>
																																														<?php
																																															/////////////////////////////////////////////
																																															$q = 0;
																																															foreach ($array_unique_4 as $array_unique_data_4) {
																																																$q++;
																																																
																																															   $sql = "Select * From tbl_gold_no where g_no='$array_unique_data_4' order by g_no asc";
																																																$qry = mysqli_query($DB_LINK, $sql);
																																																if (mysqli_num_rows($qry) > 0) {
																																																	$data = mysqli_fetch_assoc($qry);
																																																	
																																																	$number = $data['g_no'] * 555;
																																																	// Convert the string to an array of digits
																																																	
																																																	$split_answer = splitter_data($number);
																																																	?>
																																																	<tr>
																																												<!--  <td><?php /*echo $q;*/
																																												?></td>-->
																																												<td>
																																												<div class="grid-container-collection">
																																												<div class="grid-item">
																																												<div class="random-bg-gold">
																																												<?php echo $data['g_no']; ?>
																																												</div>
																																												</div>
																																												<div>
																																												</td>
																																										 
																																												</tr>
																																																	
																																																	<?php /**/
																																																}
																																															}
																																														
																																														?>
																																												
																																												</table>
																																													</div>
																																												</td>
																																											</tr>
																																										</table>

			                                        <table >
				                                        	<tr>
																																												<td>Question : <?= $start; ?></td>
																																												<td>Answer : <?= $split_answer_master; ?></td>
																																												</tr>
				                                        <tr>
					                                        <td colspan="2">
						                                        <div style="display: flex; flex-wrap: wrap;  ">
						                                        <?php
							                                        foreach ($array_unique_4 as $array_unique_data_4) {
								                                        ?>

								                                        <div class="random-bg-base" style="min-width: 50px; padding: 5px; margin: 2px; border: 1px solid black; text-align: center;">
							                                        <?=$array_unique_data_4;?>
						                                        </div>
							                                        <?php } ?>
						                                        </div>
					                                        </td>
				                                        </tr>
			                                        </table>
		                                        
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
			<script>
																																																	function highlight_green(val)
                                                 {
                                                  var table = document.getElementById("myTable");

// Identify which row we would like to show
                                                  var idToShow = "td-"+val;

// Iterate through each row in the table
                                                  for (var i = 0, row; row = table.rows[i]; i++) {
                                                   // Compare the id of the current row with the id we want to show
                                                   if (row.id == idToShow) {
                                                    // If the ids match, make sure the row is visible
                                                   
                                                    row.style.display = "";
                                                   
                                                   
                                                   } else {
                                                    // If the ids do not match, hide the row
                                                    if(row.id!='not-hide' && row.id!='not-hide-1' && row.id!='not-hide-2') {
                                                     row.style.display = "none";
                                                    }
                                                   }
                                                  }
                                                 }
                                                 
                                                 function resetDivGreen()
                                                 {
                                                  var table = document.getElementById("myTable");
                                                  
                                                  for (var i = 0, row; row = table.rows[i]; i++) {
                                                   // Compare the id of the current row with the id we want to show
                                                   
                                                   // If the ids match, make sure the row is visible
                                                   row.style.display = "";
                                                   
                                                   
                                                  }
                                                 }
																																																</script>
</body>
<!--</html>-->
<!--	<td style="border: 2px dashed #000000; padding: 5px; font-size: 30px; text-align:-->
<!--																																												center">-->
<!--																																													All-->
<!--																																													-->
<!--																																													-->
<!--																																													<table width="100%">-->
<!--																																												<tr>-->
<!--																																												-->
<!--																																												<th>Question</th>-->
<!--																																												<th>Answer</th>-->
<!--																																												<th>Results</th>-->
<!--																																												-->
<!--																																												</tr>-->
<!--																																												-->
<!--																																												<tr>-->
<!--																																												<td>Question : --><?php //= $start; ?><!--</td>-->
<!--																																												<td>Answer : --><?php //= $split_answer_master; ?><!--</td>-->
<!--																																												</tr>-->
<!--																																														--><?php
//																																															/////////////////////////////////////////////
//																																															$q = 0;
//																																															foreach ($array_unique_original as $array_unique_data_4) {
//																																																$q++;
//
//
//
//																																																$number = $array_unique_data_4 * 555;
//																																																// Convert the string to an array of digits
//
//																																																$split_answer = splitter_data($number);
//																																																?>
<!--																																																<tr>-->
<!--																																												<!--  <td>--><?php ///*echo $q;*/
//																																												?><!--</td>-->-->
<!--																																												<td>-->
<!--																																												<div class="grid-container-collection">-->
<!--																																												<div class="grid-item">-->
<!--																																												<div class="random-bg-base">--><?php //echo $array_unique_data_4; ?><!--</div>-->
<!--																																												</div>-->
<!--																																												<div>-->
<!--																																												</td>-->
<!--																																												<td>-->
<!--																																												<div class="grid-container-collection">-->
<!--																																												<div class="grid-item">-->
<!--																																												<div class="random-bg-base">--><?php //echo $split_answer; ?><!--</div>-->
<!--																																												</div>-->
<!--																																												</div>-->
<!--																																												</td>-->
<!--																																												<td>-->
<!--																																												--><?php
//																																													// $array_a2 = array();
//																																													//$digits = str_split($number);
//																																													// Number of available digits
//																																													//$n = count($digits);
//																																													// Number of digits to choose (3-digit number)
//																																													//$k = 3;
//																																													//echo "All possible 3-digit numbers without repetition:\n";
//																																													// generatePermutations2($digits, $k);
//
//																																													//print_r($array_a1);
//
//																																													//$commonElements = array_intersect($array_a1, $code_ary);
//																																													// $array_unique=array_values(array_unique($array_a2));
//																																													/* ///print_r($array_unique);
//																																													///
//																																													/// */
//																																												?>
<!--																																													<!--<div class="grid-container-small">-->
<!--																																												--><?php
//																																														/* 			    foreach ($array_unique as $array_unique_data) {
//																																														*/
//																																													?>
<!--																																												<div class="grid-item-small">-->
<!--																																												<div  class=" bg-small " >--><?php ///* echo $array_unique_data;   */
//																																													?><!--</div>-->
<!--																																												</div>-->
<!--																																												--><?php
//																																														/*   }
//																																														*/
//																																													?><!-- </div>-->-->
<!--																																												<div class="grid-item-small">-->
<!--																																												<div class="random-bg-base">--><?php
//																																														$firstOne = explode('-', $split_answer);
//																																														// echo $firstOne[0];
//
//																																														$digits = str_split($firstOne[0]);
//
//																																														// Sum the digits
//																																														$sum = array_sum($digits);
//
//																																														if ($sum >= 10) {
//																																															$digits2 = str_split($sum);
//																																															echo $digits2['0'];
//																																														} else echo $sum;
//																																													?><!--</div>-->
<!--																																												-->
<!--																																												</div>-->
<!--																																												</td>-->
<!--																																												</tr>-->
<!--																																																-->
<!--																																																--><?php ///**/
//																																															}
//
//
//																																														?>
<!--																																												-->
<!--																																												</table>-->
<!--																																												</td>-->