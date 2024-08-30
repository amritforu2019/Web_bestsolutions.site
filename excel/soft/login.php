<?php require_once "../con_base/functions.inc.php";
    $log_type="Admin";
    $otp=trim(clean($_POST['otp']));
    $tmpuserid=trim(clean($_POST['loginid']));
    $tmppassword=trim((clean($_POST['password'])));
    $sql = " select * from admin_login where user='$tmpuserid' ";
    $result = mysqli_query( $DB_LINK, $sql );
    $GetRows = mysqli_num_rows( $result );
    if ( $GetRows > 0 )
    {
        $line = mysqli_fetch_array( $result );
        if ( $line[ 'pass' ] == $tmppassword )
        {
           // if(get_validate_otp($line[ 'id' ],$otp)==1)
            {
                $userid = strtolower($tmpuserid);
                $sess_admin_id = strtolower($tmpuserid);
                $_SESSION['sess_admin_id'] = $sess_admin_id;
                $_SESSION['sess_master_id'] = $sess_admin_id;
                $_SESSION['sess_base_id'] = $line['id'];
                $_SESSION['sess_user_name'] = $line['id'];
                $_SESSION['sess_section'] = -1; // allow all pages to access
                ip_store($log_type, $line['id']);
                $_SESSION['info_msg'] = "Login Successfully";
                $_SESSION['msg'] = array('success', 'Login Successfully');
                header("location:admin_home.php");
                exit();
            }
            /*else
            {
                $_SESSION[ 'warn_msg' ] = "Sorry !!! Invalid OTP retry again...";
                $_SESSION['msg']=array('error', 'Sorry !!! Invalid OTP retry again...');
                header( "location:index.php" );
                exit();
            }*/
        }
     else 
        {
        $_SESSION[ 'warn_msg' ] = "Please Enter Valid Password";
        $_SESSION['msg']=array('error', 'Please Enter Valid Password');
        header( "location:index.php" );
        exit();
        }
   } 
  else 
  {
    $_SESSION[ 'warn_msg' ] = "Please Enter Valid Username";
    $_SESSION['msg']=array('error', 'Please Enter Valid Username');
    header( "location:index.php" );
    exit();
  }

  ?>