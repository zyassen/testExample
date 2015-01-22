<?php
/**
 * Created by Zanoric
 * Date: 1/20/2015
 * Time: 1:31 PM
 */

namespace Services\Validators;


class Validator {

    protected $attributes;
    public $errors;


    public function __construct($attributes = null)
    {
        $this->attributes = $attributes ?: \Input::all();
    }

    public function passes()
    {
        $validation = \Validator::make($this->attributes, static::$rules);

        if($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;

    }

} 