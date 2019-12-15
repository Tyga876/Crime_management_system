<?php
require 'vendor/autoload.php';


class SendEmail{

    public static function SendMail($to,$subject,$content){
        $key = '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';

        $email = new  \SendGrid\Mail\Mail();
        $email->setFrom("taylor_t3@yahoo.com", "Tyrone Taylor");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $content);

        $sendgrid = new \SendGrid($key);

        try{
            $response = $sendgrid->send($email);
            return $response;


        }catch(Exception $e){

            echo 'Email exeption Caught :'. $e->getMessage() ."\n";
            return false;
        }
    }
}





?>