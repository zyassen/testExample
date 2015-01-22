<?php
/**
 * Created by Zanoric
 * Date: 1/19/2015
 * Time: 12:27 PM
 */

namespace Mailers;


class UserMailer extends Mailer {

    public function welcome()
    {
        $this->subject = "Welcome to my website";
        $this->view = "emails.user.welcome";
        //$this->data = ['username'=>$this->to];

        $this->options = function($message)
        {
            $message->attach(public_path(). '/images/1.jpg');
            $message->cc('zana78_kurd@hotmail.com');
            $message->bcc('shelana.net@gmail.com');
        };

        return $this;

    }
    public function accountCancelation()
    {
        $this->subject = "We are sorry that you cancel your account!";
        $this->view = "emails.user.cancel";

        return $this;
    }

} 