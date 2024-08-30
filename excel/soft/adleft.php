<?php validate_master();?>
<ul><h1>Settings</h1>
    
    <li><a href="setting-password.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp; Change Password</a></li>
    <li><a href="setting-operator.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Manage Operator</a></li>
     <li><a href="logout.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Logout</a></li>

    <h1>Excel Sheet</h1>
    <li><a href="ex-all.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;All Excel Sheet</a></li>
    <li><a href="ex-finder-backup.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Find Answer</a></li>
    <!--<li><a href="ex-answer.php"><i class="fa-solid fa-angles-right fa-fade"></i>All Answer List</a></li>
-->


    <?php  if($_SESSION['sess_admin_id']=='amritforu')  {  ?><?php   } ?>
</ul>
