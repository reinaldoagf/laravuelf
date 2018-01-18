<?php

namespace App\Logic;

class RandomUser 
{
    public static function getRandomUser($users)
    {
    	$tamaño=count($users);
    	$random=rand(0,$tamaño-1);
    	$cont=0;
    	foreach ($users as $user) {
    		# code...
    		if ($cont==$random) {
    			return $user;
    		}
    		$cont++;
    	}
    }
}
