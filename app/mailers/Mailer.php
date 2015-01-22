<?php
/**
 * Created by Zanoric
 * Date: 1/19/2015
 * Time: 11:52 AM
 */

namespace Mailers;

class InvalidContactInfoException extends \Exception{}

abstract class Mailer {

    protected $to;
    protected $email;
    protected $subject;
    protected $view;
    protected $data;
    protected $options;

    public function __construct($user)
    {
        if(! is_object($user))
        {
            throw new InvalidContactInfoException("please pass a user object!");
        }

        $this->data = $user->toArray();

        $this->to = $user->username;
        $this->email = $user->email;

    }

    public function deliver()
    {
        \Mail::send($this->view, $this->data, function($messange){

            $messange->to($this->email, $this->to)->subject($this->subject);


            if(is_callable($this->options))
            {
                call_user_func($this->options, $messange);

            }
        });
    }

} 