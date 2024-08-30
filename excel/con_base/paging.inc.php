<?php




if($reccnt > $pagesize){



	



$num_pages = $reccnt / $pagesize;







$PHP_SELF = $_SERVER['PHP_SELF'];
$qry_str="";


//$qry_str = $_SERVER['argv'][0];







$m = $_GET;



//unset($m['start']);







 $qry_str =  ($m);







//echo "$qry_str : $p<br>";







//$j=abs($num_pages/10)-1;



$j = $start / $pagesize - 5;



//echo("<br>$j");



if ($j < 0) {
	$j = 0;
}



$k = $j + 10;



if ($k > $num_pages) {
	$k = $num_pages;
}



$j = intval($j);



?>



<?//="reccnt=$reccnt, start=$start, pagesize=$pagesize, num_pages=$num_pages : j=$j : k=$k"
?>


<link href="../images/admin_style.css" rel="stylesheet" type="text/css"/>


<table border="0" align="center" cellpadding="0" cellspacing="0" class="boldlisting">


	<tr>


		<td align="left" class="links"><a href="<?= $PHP_SELF ?>?<?= $qry_str ?>&start=0" class="boldlisting"> First</a>&nbsp;
		</td>


		<td align="center" height="20"><a
					href="<?= $PHP_SELF ?>?<?= $qry_str ?>&start=<?= $start - $pagesize ?>&pagecounter=<?= $pagesize ?>"
					class="boldlisting">


				<?php
				if ($start != 0)



				{
				?>


				&laquo; Previous</a>


			<?php
			}
			?>    </td>


		<td align="right"> &nbsp;


			<?php
			for ($i = $j; $i < $k; $i++)	{
				if ($i == $j) echo "Page:";
				if (($pagesize * ($i)) != $start)	{
					?>


					<a href="<?= $PHP_SELF ?>?<?= $qry_str ?>&start=<?= $pagesize * ($i) ?>&pagecounter=<?= $pagesize ?> "
								style="text-decoration:none;">


						<?= $i + 1 ?>


					</a>  |


				<?php }	else {
					?>


					<b>


						<?= $i + 1 ?>


					</b>|


					<?php
				}
			} ?> </td>


		<td align="center" height="20"> <span>



      <?php
						if ($start + $pagesize < $reccnt) {
							?>


							&nbsp; <a href="<?= $PHP_SELF ?>?<?= $qry_str ?>&start=<?= $start + $pagesize ?>&pagecounter=<?= $pagesize ?> "
																	class="boldlisting"> Next



      &raquo;</a>&nbsp;


							<?php
						}
						?>



      </span>&nbsp;
		</td>


		<td align="center" height="20"><?
			$mod = $reccnt % $pagesize;
			if ($mod == 0) {
				$mod = $pagesize;
			} ?>


			<a href="<?= $PHP_SELF ?>?<?= $qry_str ?>&start=<?= $reccnt - $mod ?>&pagecounter=<?= $pagesize ?>"
						class="boldlisting">Last</a></td>


	</tr>


</table>


<p>


	<?php }
	?>


</p>



