<?php

include 'Mark/Database.php';
include 'Mark/Form.php';
include 'Mark/Form/Validator.php';
include 'Mark/Form/Input.php';

use Mark\Database;
use Mark\Form;
use Mark\Form\Input;


Form::open(['action' => 'www.google.com', 'method' => 'post', 'class' => 'form']);
Input::render([
    'class' => 'form-control',
    'name' => 'email',
    'type' => 'email',
]);
Input::render([
    'class' => 'form-control',
    'name' => 'username',
    'type' => 'text',
]);
Input::render([
    'class' => 'form-control',
    'name' => 'password',
    'type' => 'password',
]);
Form::close();


