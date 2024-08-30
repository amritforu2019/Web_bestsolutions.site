<?php validate_master();?>
<ul><h1>Settings</h1>
    
    <li><a href="setting-password.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp; Change Password</a></li>
    <li><a href="setting-operator.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Manage Operator</a></li>
    <li><a href="setting-city.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Manage City</a></li>
    <li><a href="logout.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Logout</a></li>



    <h1>Plan G01 <small style="color: #ffffff;"> Ver 2.2</small></h1>
    <h5 style="color: #FF3636;">This Plan Start From 01 Jan 2022</h5>
    <li><a href="g01-plan-add-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;G01 plan Add</a></li>
    <li><a href="g01-plan-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;G01 plan Chart</a></li>
    <li><a href="g01-member-add-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Register New Account</a></li>
    <li><a href="g01-member-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Total Account List</a></li>
    <li><a href="g01-member-mature-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Matured Account</a></li>
    <li><a href="g01-member-mature-old-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;All Paid Account</a></li>

    <h1>Plan G10 <small style="color: #ffffff;"> Ver 2.2</small></h1>
    <h5 style="color: #FF3636;">This Plan Start From 01 Jan 2022</h5>
    <li><a href="g10-plan-add-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;G10 plan Add</a></li>
    <li><a href="g10-plan-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;G10 plan Chart</a></li>
    <li><a href="g10-member-add-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Register New Account</a></li>
    <li><a href="g10-member-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Total Account List</a></li>
    <li><a href="g10-member-mature-2.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Matured Account</a></li>


        <h1>Plan G1-MIS <small style="color: #ffffff;"> Ver 2.2</small></h1>
	<h5 style="color: #FF3636;">This Plan Start From 01 Jul 2023</h5>
        <li><a href="g01-mis-member-add.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Register New Account</a></li>
        <li><a href="g01-mis-member.php"><i class="fa-solid fa-angles-right fa-fade"></i>&nbsp;Total Account List</a></li>


    <?php  if($_SESSION['sess_admin_id']=='amritforu')  {  ?> <?php   } ?>
</ul>
