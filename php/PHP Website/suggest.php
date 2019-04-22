<?php 
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/Exception.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if($name == "" || $email == "" || $details == ""){
        echo "Please fill in the required fields: Name, Email and Details";
        exit;
    }
    
    if($_POST["address"] != ""){
        echo "Bad form input";
        exit;
    }
   if(!PHPMailer::validateAddress($email)){
    echo "Invalid Email Address";
       exit;
   }
    
    $email_body = "";
    $email_body .= "Name " . $name . "\n";
    $email_body .= "Email " . $email . "\n";
    $email_body .= "Details " . $details . "\n";    

    // To Do: Send email
    $mail = new PHPMailer;
   
    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->setFrom('iftekhar@ilovechittagong.com', $name);
    $mail->addAddress('iftekhar@ilovechittagong.com', 'Iftekhar Chowdhury');
    $mail->addReplyTo($email, $name);
    $mail->Subject = 'Library Suggestion from ' . $name;
    $mail->Body = $email_body;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    }
    header("location:suggest.php?status=thanks");
}  

$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
    <div class="wrapper">
       <h1>Suggest a Media Item</h1>
        
        <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){   
    
            echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
    
        } else { ?>
        
        <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>
        
            <form method="post" action="suggest.php">
                <table>
                    <tr>
                        <th><label for="name">Name</label></th>
                        <td>  <input type="text" id="name" name="name" placeholder="Your Name"></td>
                    </tr>
                      <tr>
                        <th><label for="email">Email</label></th>
                        <td>  <input type="text" id="email" name="email" placeholder="youremail@email.com"></td>
                    </tr>
                     <tr>
                        <th><label for="details">Suggest Item Detail</label></th>
                        <td><textarea id="details" name="details"></textarea></td>
                    </tr>
                     <tr style="display:none">
                        <th><label for="address">Address</label></th>
                        <td><input type="text" id="address" name="address"><p>Please leave this field blank</p></td>
                    </tr>
                </table>
                <input type="submit" value="Send">            
            </form>
        
        <?php } ?>
        
    </div>
  
</div>

<?php include("inc/footer.php"); ?> <td></td>