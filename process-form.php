if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $message = $_REQUEST['message'];
      $subject = $_REQUEST['subject'];
        
      // Set your email address where you want to receive emails. 
      $to = 'vgajjar1010@gmail.com';
        
      $headers = "From: ".$name." <".$email."> \r\n";
        
      $send_email = mail($to,$subject,$message,$headers);
        
      echo ($send_email) ? 'success' : 'error';
        
  }