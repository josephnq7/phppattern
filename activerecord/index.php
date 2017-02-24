<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';
include_once 'user.php';

//$user = Users::find(9);

$parameters = [
                'id' => null ,
                'user_name' => 'abc',
                'email' => 'test',
                'password' => 'abc',
                'name' => 'hiep',
                'created' => null,
                'updated' => null
              ];

Users::create($parameters);

echo '<pre>';
print_r($user);