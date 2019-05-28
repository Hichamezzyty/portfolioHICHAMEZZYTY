<?php
    // message vars
    $msg = '';
    $msgClass = '';

    //check for submit
    if(filter_has_var(INPUT_POST, 'submit')){

        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        //check required filds
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            //passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'plese use à valide email';
                $msgClass = 'alert-danger';
            } else {
                //passsed
                $toEmail = 'ezzytyhicham@gmail.com';
                $subject = 'Contact request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Subject</h4><p>'.$subject.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . " \r\n";

                        //additional header
                        $headers .= "from: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                           //email send
                            $msg = 'email send';
                            $msgClass = 'alert-success';

                        } else {
                            $msg = 'not send';
                            $msgClass = 'alert-danger';


                        }


            }

        } else {
            //not passed
             $msg = 'plese fil all the field';
            $msgClass = 'alert-danger';

        }

        echo $msg;

    }




?>
