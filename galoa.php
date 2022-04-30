<?php
# imdb_birthdates.php

require 'vendor/autoload.php';

$client = new \Goutte\Client();

$client
    ->request('GET', 'link a ser usado')
    ->filter('h4.fullname.my-xs')
    ->each(function ($node) use ($client) {
        $name = $node->text();

        $birthday = $client
        ->click($node->link())
        ->filter('div.institution.my-sm')->first();
       

        
        echo "{$name} was born in {$birthday} \n";
    });