<?php
require_once("../con_base/functions.inc.php");
 validate_admin();
 ?>




<?php
 $val=$_REQUEST['pid2'];




?>

<select name="city"  >
                   
                      <?php 
					  
$sql="SELECT city FROM  states_cities where state_id='$val' order by city asc";
$result =mysqli_query($DB_LINK,$sql);
while ($data=mysqli_fetch_assoc($result))
{
?>
<option value="<?php echo $data['city'] ?>" > <?php echo $data['city'] ?></option>

<?php }  ?>


                    </select>
