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
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#f0becf">
         <tr>
          <td   bgcolor="#FFFFFF">
           <div class="correct" align="center">
            <h3>Excel Data Find Result <?php /*if (isset($_GET['answer'])) {
echo dec($_GET['answer']);
} */ ?></h3>
           </div>
           <hr>
           <table width="100%">
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
           <table width="100%"
            style="     font-size:25px; "  >
            <tr>
            <!-- <td class="td-top">#</td>-->
              <td class="td-top">Number</td>
             <td class="td-top" width="200px;">Result</td>
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
               <!--<td><?php /*echo $j; */?></td>-->
               <td class="td-pad" style="font-size: 35px;"><?php  echo $i;  ?></td>
               <td class="td-pad-2" style="font-size: 35px;"><?php echo splitter_data($i * 555); ?></td>
               <td><?php
             /* $key = array_search($find, $array_a1);
              if ($key !== false) {

              }*/

                $commonElements = array_intersect($array_a1, $code_ary);
                $array_unique=array_unique($commonElements);
                //print_r($array_unique);

                ?>

                <table width="100%">
                 <tr>
                  <td width="50%" style="border: 1px solid #9c0d0d;   font-size: 25px; text-align: center">
                   Single
                  </td>
                  <td width="50%" style="border: 1px solid #9c0d0d;   font-size: 25px; text-align: center">
                   Double
                  </td>
                  <td width="50%" style="border: 1px solid #9c0d0d;   font-size: 25px; text-align: center">
                   Gold
                  </td>
                 </tr>
                 <?php
                 for($t=0;$t<=9;$t++)
                 {
                  $flag=0;
                  $flag1=0;
                  ?>
                 <tr>
                  <td style="border: 1px solid #9c0d0d;   font-size: 25px; text-align: center">

                   <div class="grid-container">

                    <?php
                    foreach ($array_unique as $array_unique_data) {
                    ?>
                    <?php if(sumDigits($array_unique_data)==$t) {

                     ////Repeted Logic /////
                     $repeatedDigits = findRepeatedDigits($array_unique_data);
                     if (count($repeatedDigits) <1) {


                      if($flag==0) echo  $t;
                      $flag=1;
                     ?>

                     <div class="grid-item">
                      <div  class=" random-bg " >

                       <?php echo $array_unique_data;?>
                      </div>
                     </div>

                     <?php }  ?>
                     <?php }  ?>
                    <?php }  ?>
                   </div>
                   </td>
                  <td style="border: 1px solid #9c0d0d;   font-size: 25px; text-align: center">
                   <div class="grid-container">
                    <?php
                    foreach ($array_unique as $array_unique_data) {
                     ?>
                     <?php if(sumDigits($array_unique_data)==$t) {


                      ////Repeted Logic /////
                      $repeatedDigits = findRepeatedDigits($array_unique_data);
                      if (count($repeatedDigits) > 0) {

                      if($flag1==0) echo  $t;
                      $flag1=1;
                      ?>
                      <div class="grid-item">
                       <div  class=" random-bg " >

                        <?php echo $array_unique_data;?>
                       </div>
                      </div>

                      <?php }  ?>

                     <?php }  ?>
                    <?php }  ?>
                   </div>
                  </td>
                   </tr>


                   <?php } ?>
                </table>




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