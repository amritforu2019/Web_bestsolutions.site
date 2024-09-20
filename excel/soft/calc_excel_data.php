<?php
global $DB_LINK;
include('../con_base/db.config.inc.php');
/////////////////////////////////Generate Answer////////////////////////////
$last_qry= mysqli_query($DB_LINK, "select * from calc_data order by id desc limit 0,1") or die(mysqli_error());
$last_data=mysqli_fetch_assoc($last_qry);
$last_number=$last_data['number'];
if($last_number<10000) {
    $last_number++;
    for ($i = $last_number; $i <= ($last_number + 500); $i++) {
        $answer = $i * 555;
        $sql = "insert into calc_data(number,answer) values('$i','$answer')";
        mysqli_query($DB_LINK, $sql);
        echo 'Inserted Number: ' . $i . '<br>';
    }
}



///////For Table tbl_new_sequence
	
	$new_sequence_qry= mysqli_query($DB_LINK, "select * from tbl_new_sequence where answer='0' order by id asc limit 0,10") or die(mysqli_error());
	foreach ($new_sequence_qry as $new_sequence_data)
	{
		  $question=$new_sequence_data['question'];
		  $answer = $question * 555;
	echo 	$sql = "update tbl_new_sequence set answer='$answer' where question='$question'";
	echo '<br>';
		mysqli_query($DB_LINK, $sql);
	}

/////////////////////////////////////////////////////////
///Compile Answer///////////////////////
$compile_qry= mysqli_query($DB_LINK, "select * from calc_data where compile_answer='E' order by id asc limit 0,500") or die(mysqli_error());
foreach($compile_qry as $compile_row)
{
    $number=$compile_row['number'];
    $answer=$compile_row['answer'];
    $split_answer=splitter_data($answer);
    $answer_array=explode("-",$split_answer);
    $answer_p1=$answer_array[0];
    $answer_p2=$answer_array[1];
    $answer_p3=$answer_array[2];
    $answer_p4=$answer_array[3];

    $update_qry=mysqli_query($DB_LINK,"Update  calc_data set 
                      compile_answer='$split_answer' ,
                      answer_p1='$answer_p1' ,
                      answer_p2='$answer_p2' ,
                      answer_p3='$answer_p3' ,
                      answer_p4='$answer_p4' 
                  where number='$number' ");
    echo 'Compile Number: '.$split_answer.'<br>';

}


/////////For New Sequesnce
 	$compile_qry= mysqli_query($DB_LINK, "select * from tbl_new_sequence where compile_answer='E' order by id asc limit 0,50") or die(mysqli_error());
	foreach($compile_qry as $compile_row)
	{
		$number=$compile_row['question'];
		$answer=$compile_row['answer'];
		$split_answer=splitter_data($answer);
		$answer_array=explode("-",$split_answer);
		$answer_p1=$answer_array[0];
		$answer_p2=$answer_array[1];
		$answer_p3=$answer_array[2];
		$answer_p4=$answer_array[3];
		
		$update_qry=mysqli_query($DB_LINK,"Update  tbl_new_sequence set
                      compile_answer='$split_answer' ,
                      answer_p1='$answer_p1' ,
                      answer_p2='$answer_p2' ,
                      answer_p3='$answer_p3' ,
                      answer_p4='$answer_p4'
                  where question='$number' ");
		echo 'Compile Number: '.$split_answer.'<br>';
		
	}



/////////////////////////////////Function////////////////////////////////
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
    if (strlen($val) <= 3)
        return $val;
}
    else
    return '0';
}

