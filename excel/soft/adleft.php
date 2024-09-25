<?php validate_master();?>
<ul><h1>Settings</h1>
    
    <li><a href="setting-password.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp; Change Password</a></li>
    <li><a href="setting-operator.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Manage Operator</a></li>
     <li><a href="logout.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Logout</a></li>
    <h1>Excel Sheet</h1>
    <li><a target="_blank" href="ex-all.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;All Excel Sheet</a></li>
    <li><a target="_blank" href="ex-finder-backup.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Find Answer</a></li>
    <li><a target="_blank" href="ex-finder.php"><i class="fa-solid fa-angles-right fa-fade"></i> Find Answer (OLD)</a></li>
    <li><a target="_blank" href="ex-answer.php"><i class="fa-solid fa-angles-right fa-fade"></i>All Codes</a></li>
    <li><a target="_blank" href="ex-answer-gold.php"><i class="fa-solid fa-angles-right fa-fade"></i>All Gold</a></li>
    <li><a target="_blank" href="ex-answer-red.php"><i class="fa-solid fa-angles-right fa-fade"></i>All Red</a></li>
    <li><a target="_blank" href="collection_2009.php"><i class="fa-solid fa-angles-right fa-fade"></i>Collection(20-09-24)</a></li>
    <li><a target="_blank" href="collection_red_2309.php"><i class="fa-solid fa-angles-right fa-fade"></i>Collection Red(23-09-24)</a></li>
    <?php  if($_SESSION['sess_admin_id']=='amritforu')  {  ?><?php   } ?>
</ul>
