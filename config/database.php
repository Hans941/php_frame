<?php


return [
  'default' => 'mysql_one',


  //phpmyadmin url: http://134.175.80.215:888/phpmyadmin_065286b2cc1e735e/index.php
  'connections' => [
      'mysql_one' => [
          'driver' => 'mysql',
          'host' => '134.175.80.215',
          'username' => 'php_frame',
          'dbname' => 'php_frame',
          'password' => '12345678',
          'prefix' => '',
          'options' => [

          ]
      ],

      'mysql_two' => [
          'driver' => 'mysql',
          'host' => '134.175.80.215',
          'username' => 'php_frame',
          'dbname' => 'php_frame',
          'password' => '12345678',
          'prefix' => '',
          'options' => [

          ]
      ],
      'local' => [
          'driver' => 'mysql',
          'host' => '127.0.0.1',
          'username' => 'root',
          'dbname' => 'php_frame',
          'password' => '12345678',
          'prefix' => '',
          'options' => [

          ]
      ]


  ],

];