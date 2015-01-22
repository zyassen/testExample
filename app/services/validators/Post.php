<?php
/**
 * Created by Zanoric
 * Date: 1/20/2015
 * Time: 1:35 PM
 */

namespace Services\Validators;


class Post extends Validator{

    public static $rules = [
        "title" => "required",
        "body" => "required"
    ];


} 