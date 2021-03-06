<?php 
    $name=$_POST['nama'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    if ($email=="") {
        echo "<script>alert('Email must be filled');
        window.location.href='franchise.html#franchise';</script>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "<script>alert('Wrong Email format or Email doesn't exist);
        window.location.href='franchise.html#franchise';</script>";
    }
    else if ($name=="") {
        echo "<script>alert('Name must be filled');
        window.location.href='franchise.html#franchise';</script>";
    }
    else if (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
        echo "<script>alert('Name Can be only contain letters');
        window.location.href='franchise.html#franchise';</script>";
    }
    else if ($phone=="") {
        echo "<script>alert('Name must be filled');
        window.location.href='franchise.html#franchise';</script>";
    }
    else if(!preg_match("/^[0-9]*$/",$phone)){
        echo "<script>alert('Name Can be only contain numbers');
        window.location.href='franchise.html#franchise';</script>";
    }
    else{
            $to = "info@thinkthai.com"; // this is your Email address
            $from = $email; // this is the sender's Email address
            $subject = "Contact Us Submission";
            $message ='<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    <meta charset="UTF-8">
    <table style="border-collapse:collapse;" height="100%"
      bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"
      width="100%">
      <tbody>
        <tr>
          <td align="center" valign="top">
            <center style="width: 100%;">
              <!-- Visually Hidden Preheader Text : BEGIN -->
              <div style="display: none; font-size: 1px; line-height:
                1px; max-height: 0px; max-width: 0px; opacity: 0;
                overflow: hidden; mso-hide:all; font-family:
                sans-serif;"> Someone want to do business with you. Get ahold of him/her.</div>
              <!-- Visually Hidden Preheader Text : END -->
              <div style="max-width: 600px;">
                <!--[if (gte mso 9)|(IE)]>
            <table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
            <tr>
            <td>
            <![endif]-->
                <!-- Email Header : BEGIN -->
                <table style="max-width: 600px;" align="center"
                  border="0" cellpadding="0" cellspacing="0"
                  width="100%">
                  <tbody>
                    <tr>
                      <td style="padding-left: 0px; padding-top: 30px;
                        padding-bottom: 0px; padding-right: 30px;
                        text-align: center" bgcolor="#ffffff"> <img src="" height="80px"alt="Think Thai">
                        </td>
                    </tr>
                  </tbody>
                  </table>
                <hr>
                  <div style="max-width:600px" align="center">
                      <p style="margin:0;font-size:30px;font-family:arial">Think Thai Franchise Form</p>
                      <hr>
                      <br>
                      <p style="margin:0;text-align:left;font-size: 20px;font-weight:bold;">Mr/Mrs.'.$name.' has contacted you about Think Thai franchise.</p>
                      <br>
                      <p style="margin:0;text-align:left;font-size:16px;font-weight:400">Below is his/her contact information, don&#39;t forget to contact him/her immediately.</p>
                      <br>
                      <hr style="border: 2px solid lightgrey; margin: 0px 50px 0px 50px;">
                      <br>
                      <div style="max-width:500px;margin-bottom: 40px;" align="center">
                          <p style="margin:0;font-size:
                                    20px;font-family:arial;font-weight: bold;text-align: left;color:#4f4f4f"><u>Contact Info</u></p>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 150px;color:#4f4f4f">Name</p>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 350px;color:#4f4f4f">: '.$name.'</p>
                          <hr>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 150px;color:#4f4f4f">E-mail</p>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 350px;color:#4f4f4f">: '.$email.'</p>
                          <hr>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 150px;color:#4f4f4f">Phone Number</p>
                          <p style="margin:0;padding-top: 10px;font-size:
                                    16px;font-family:arial;font-weight:500;text-align: left;float: left;width: 350px;color:#4f4f4f">: '.$phone.'</p>
                      </div>
                      <br>
                      <hr style="border: 2px solid lightgrey; margin: 0px 50px 0px 50px;">
                      <br>
                      <p style="margin:0;text-align:left;">Thank you,</p>
                      <p style="margin:0;text-align:left;">'.$name.'</p>
                  </div>
                  <hr>
                </div>
              </center>
            </td>
          </tr>
        </tbody>
      </table>
<style>
html, body {
	margin: 0 !important;
	padding: 0 !important;
	height: 100% !important;
	width: 100% !important;
}
/* What it does: Stops email clients resizing small text. */
* {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
/* What it does: Forces Outlook.com to display emails full width. */
.ExternalClass {
	width: 100%;
}
/* What is does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
	margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table, td {
	mso-table-lspace: 0pt !important;
	mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
	border-spacing: 0 !important;
	border-collapse: collapse !important;
	table-layout: fixed !important;
	margin: 0 auto !important;
}
table table table {
	table-layout: auto;
}
/* What it does: Uses a better rendering method when resizing images in IE. */
img {
	-ms-interpolation-mode: bicubic;
}
/* What it does: Overrides styles added when Yahoo"s auto-senses a link. */
.yshortcuts a {
	border-bottom: none !important;
}
/* What it does: Another work-around for iOS meddling in triggered links. */
a[x-apple-data-detectors] {
	color: inherit !important;
}
a {
	text-decoration: none !important;
}
</style>
    <link
href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700"
      rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Arimo:400,600,700"
      rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet" type="text/css">
  </body>
</html>';
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
        
        echo "<script>alert('Message sended, please check your email occasionally for an email from us. Thank you.');
        window.location.href='franchise.html';</script>";
    }
?>