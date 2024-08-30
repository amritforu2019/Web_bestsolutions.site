<?php
require_once "../con_base/functions.inc.php";
validate_admin();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <title><?php echo $ADMIN_HTML_TITLE; ?></title>
 <?php require_once "top.php"; ?>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
 <link href="css/admin_style.css" rel="stylesheet" type="text/css"/>



</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="2"><?php require_once "adheader.php"; ?></td>
 </tr>
 <tr>
  <td>
   <div id="mid">
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#274663">
     <tr>
      <td colspan="2" bgcolor="#FFFFFF">
       <form name="form1" method="post" action=" ">
        <table border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#f0becf">
         <tr>
          <td   bgcolor="#FFFFFF">
           <div class="correct" align="center">
            <h3>Excel Data Find Result <?php /*if (isset($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3>
           </div>
           <hr>
           <table>
            <tr>
             <td width="90px" style="text-align: center;"><label
               style="font-size: 25px;"> Start : </label></td>
             <td width="90px"><input style="width: 85px;" name="start"
                                     type="number" value="<?php if (isset($_POST['finder'])) {
               echo $_POST['start'];
              }

              if (isset($_GET['start'])) {
               echo $_GET['start'];
              }
              ?>" required></td>
             <td width="90px" style="text-align: center;"><label
               style="font-size: 25px;"> End : </label></td>
             <td width="90px"><input style="width: 85px;" name="end"
                                     type="number" value="<?php if (isset($_POST['finder'])) {
               echo $_POST['end'];
              }
              ?>" required></td>
             <!--<td width="90px" style="text-align: center;"><label
               style="font-size: 25px;">Find : </label></td>-->
            <!-- <td width="90px"><input style="width: 85px;" name="find"
                                     type="number" value="<?php /*if (isset($_POST['finder'])) {
               echo $_POST['find'];
              }
              */?>" required></td>-->
             <td width="90px"><input type="submit" name="finder"
                                     value="Find answer"></td>
            </tr>
           </table>
           <hr>
           <table
            style="     font-size:25px; "  >
            <tr>
             <td class="td-top">#</td>
             <td class="td-top">Number</td>
             <td class="td-top" width="250px;">Result</td>
             <td class="td-top">Generated Code &nbsp;&nbsp;
              <label  >Filter : </label>
              <input style="width: 85px;"  type="number" id="txt_filter">
              <input type="button" name="finder" onclick="highlightDivByText(txt_filter.value)"
                     value="Click">
              <input type="button" name="reset" onclick="resetStyle()"
                     value="reset filter">
             </td>
            </tr>
            <?php

            function splitter_data($val)
            {
             //echo $val.'<br>';
             if (strlen($val) < 10) {

              if (strlen($val) > 6) {
               $ary = str_split($val, 3);
               $ary1 = str_split($val, 3);
               $ary1_sub = str_split($ary1[1], 1);
               $ary2 = str_split($val, 4);
               return $ary[0] . '-' . $ary1_sub[0] . '-' . $ary2[1];
              }

              if (strlen($val) <= 6 && strlen($val) > 3) {
               $ary = str_split($val, 3);
               return $ary[0] . '-' . $ary[1];
              }
              if (strlen($val) <= 3) {
               return $val;
              }
             } else {
              return '0';
             }
            }

            global $array_a1;

            function generatePermutations($array, $length, $prefix = "")
            {
             global $array_a1;

             if ($length == 0) {
              //echo $prefix . "\n";
              $array_a1[] = $prefix;

              return;
             }
             for ($i = 0; $i < count($array); $i++) {
              $newArray = $array;
              array_splice($newArray, $i, 1);
              generatePermutations($newArray, $length - 1, $prefix . $array[$i]);
             }
            }

            // Function to generate combinations with repetition

            function generateCombinationsWithRepetition($array, $length, $prefix = "")
            {
             global $array_a1;
             if ($length == 0) {
              //echo $prefix . "\n";
              $array_a1[] = $prefix;
              return;
             }
             for ($i = 0; $i < count($array); $i++) {
              generateCombinationsWithRepetition($array, $length - 1, $prefix . $array[$i]);
             }
            }
             global $code_ary;
            if (isset($_POST['finder'])) {

             $qry_code=mysqli_query($DB_LINK,"select   code from calc_ans");
             foreach($qry_code as $data_code){
              $code_ary[]=$data_code['code'];
             }
            // $data_code=mysqli_fetch_array($qry_code);
             //print_r($code_ary);

             $start = $_POST['start'];
             $end = $_POST['end'];
            // $find = $_POST['find'];
             $answer = $find;
             $qn_array = str_split($answer);
             //echo count($qn_array);

             $j = 0;
             for ($i = $start; $i <= $end; $i++) {
              $j++;
              $array_a1 = array();

              // Example 6-digit number (e.g., 123456)
              //$number = "3532020";
              $number = $i * 555;
              // Convert the string to an array of digits
              $digits = str_split($number);
              // Number of available digits
              $n = count($digits);
              // Number of digits to choose (3-digit number)
              $k = 3;
              //echo "All possible 3-digit numbers without repetition:\n";
              generatePermutations($digits, $k);

              //echo "\nAll possible 3-digit numbers with repetition:\n";
             // generateCombinationsWithRepetition($digits, $k);

              // echo count($array_a1);
               // print_r($array_a1);
              // Function to generate permutations without repetition
              ?>
              <tr>
               <td><?php echo $j; ?></td>
               <td class="td-pad"><?php echo $i; ?></td>
               <td class="td-pad-2"><?php echo splitter_data($i * 555); ?></td>
               <td><?php
             /* $key = array_search($find, $array_a1);
              if ($key !== false) {

              }*/

                $commonElements = array_intersect($array_a1, $code_ary);
                $array_unique=array_unique($commonElements);
                //print_r($array_unique);

                ?>

               <div class="grid-container">
                <?php
                foreach ($array_unique as $array_unique_data) {
                 ?>
                <div class="grid-item">
                 <div  class=" random-bg " >
                 <?php echo $array_unique_data;?>
                 </div>
                </div>
                 <?php
                }
                ?>

               </div> </td>
              </tr>
              <?php
              $key = array_search($find, $array_a1);
              if ($key !== false) {


//echo $find . " Ans is at index: " . $key;
              } else {
               ?>

               <?php
              }
             }

             ?>
             <?php
            } ?>
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
  <td colspan="2"><?php require_once "adfooter.php"; ?></td>
 </tr>
</table>

<script type="text/javascript">
 function highlightDivByText(text) {
  // Get all divs with class 'box'
  const divs = document.querySelectorAll('.random-bg');

  // Loop through each div
  divs.forEach(div => {
   // Check if the div's inner HTML matches the text
   if (div.innerHTML.includes(text)) {
    // Add 'highlight' class to matching div

    div.classList.remove('random-bg');
    div.classList.add('highlight');
   }
  });
 }
 function resetStyle() {
  // Get all divs with class 'box'
  const divs = document.querySelectorAll('.highlight');

  // Loop through each div
  divs.forEach(div => {
   // Check if the div's inner HTML matches the text
    // Add 'highlight' class to matching div
    div.classList.remove('highlight');
    div.classList.add('random-bg');
  });


 }
</script>
</body>
</html>