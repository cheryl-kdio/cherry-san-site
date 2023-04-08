<?php
$to      = 'cheryl.s.kouadio@gmail.com';
               $message = $this->input->post('message');
               $from_email="=?UTF-8?B?".base64_encode( $this->input->post('email'))."?=";
               $from_user = "=?UTF-8?B?".base64_encode( $this->input->post('name'))."?=";
                $subject = "=?UTF-8?B?".base64_encode($this->input->post('subject'))."?=";
    
                $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" .
                 "Content-type: text/html; charset=UTF-8" . "\r\n";
    
               if(mail($to, $subject, $message, $headers))
                {
                    echo 'Votre message a bien été envoyé ';
                }
                else // Non envoyé
                {
                    echo "Votre message n'a pas pu être envoyé";
               }
               redirect('contact/?m=added');
?>