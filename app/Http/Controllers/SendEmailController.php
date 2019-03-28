<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function sendemail(Request $request){

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $phone = @trim(stripslashes($_POST['phone']));
    $company = @trim(stripslashes($_POST['company']));
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 



/*Data capturing*/

echo "SENT";

    $email_from = $email;
    $email_to = 'jimegot@yahoo.com.ph';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');


    }
}
