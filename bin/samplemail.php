<?php
include "class.phpmailer.php";
include "class.smtp.php";


function generaterandomstring($length){
  $string="";
  $arr=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
          'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
            '0','1','2','3','4','5','6','7','8','9'];

  for($i=0;$i<$length;$i++){
    $temp=rand(0,61);
    $string=$string.$arr[$temp];
  }

  return $string;
}

function sendmailto($sendtomailaddress,$sendtomailsubject,$typeofmail,$accountusername,$accountpass,$accountfname,$accountlname,$branch){

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();
  // $mail->SMTPDebug = 2;                                  // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'sandeepbj12345@gmail.com';                 // SMTP username
  $mail->Password =  'SandY3701';                          // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom('admin@placementdrive.cc', 'Admin');
  $mail->addAddress($sendtomailaddress);     // Add a recipient
  // $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo('admin@placementdrive.cc', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $sendtomailsubject;
  $bodymessage="";
  if($typeofmail==1){
    $bodymessage="We have received your request for accout creation with following info.<br>Username:- $accountusername<br>Password: $accountpass";
    $bodymessage=$bodymessage."<br>Enter the following code to complete sign up process.<br>";
    $xyz=generaterandomstring(20);
    $bodymessage=$bodymessage."".$xyz;

    include "dbconn.php";

    $qry="insert into TempAccount values('$accountusername','$accountfname','$accountlname','$sendtomailaddress','$branch','$accountpass','$xyz')";
    // echo "console.log(".$qry.");";
    $conn->query($qry);
}
    elseif ($typeofmail==2) {
      # code...
      include "dbconn.php";
      $qry="select * from TempAccount where email='$sendtomailaddress'";
      $rs=$conn->query($qry);
      $r=$rs->fetch_assoc();

      $bodymessage="We have received your request your accout creation with following info.<br>Username:-". $r["userid"]."<br>Password: ".$r["pass"];
      $bodymessage=$bodymessage."<br>Enter the following code to complete sign up process.<br>";
      $bodymessage=$bodymessage."".$r["code"];
    }
    elseif ($typeofmail==3) {
      $bodymessage="Here is your login details:<br>Username: $accountusername<br>Password: $accountpass";
      }


  $mail->Body  = $bodymessage;
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
      return 0;
  } else {
      return 1;
  }

}

 ?>
