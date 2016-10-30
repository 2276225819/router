<?php
return new Router(array('GET' => array(':' => array('id' => array(':' => array(), 'LEAF' => array(0 => function(){  echo 'number';  }, 1 => array(0 => 'warp')))), 'test0' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test1' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test2' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test3' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test4' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test5' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test6' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test7' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test8' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'test9' => array(':' => array(), 'LEAF' => array(0 => function()use($i){
        echo $i.' ';
    }, 1 => array())), 'register' => array(':' => array(), 'LEAF' => array(0 => function(\Router $app,\A $a, $b ){  
        echo "\n";
        echo '['.$a.$a.$b.$b. ']';  
        $mr = $app->make('A');
        $mr = $app->make('A');
        $ms = $app->make('b');
        $ms = $app->make('b');  
    }, 1 => array())), 'config' => array(':' => array(), 'LEAF' => array(0 => function($router){  
        $router->show($router->db); 
    }, 1 => array())), 'middleware' => array(':' => array(), 'LEAF' => array(0 => function($router){  
        echo 'center '; 
    }, 1 => array(0 => 'warp', 1 => 'auth'))), 'group' => array(':' => array(), 'auth' => array(':' => array(), 'LEAF' => array(0 => function(){
        echo 'content ';
    }, 1 => array(0 => 'warp', 1 => function($router){
        return $router->error(400); 
    })))))), array('register:A' => function(){echo 'register:a ';return new A; }, 'singleton:b' => function(){echo 'singleton:b ';return new B; }, 'config:db' => array('n' => 'root', 'p' => 'root'), 'config:show' => function($v){ 
        echo "::"; print_r($v);
    }, 'pattern:id' => '/\\d/', 'error:404' => function(){  echo '404 '; return false; }, 'error:400' => function(){  echo '400 '; return false; }, 'error:500' => function($e){  echo '500 '.$e; return false; }, 'hook:warp' => function($router,$next){
        echo 'before '; $next(); echo 'after';
    }, 'hook:auth' => function($router){
        echo 'auth '; 
    }), array(0 => function($next){
    static $i;
    echo "\n--middleware:".intval(@$i++)."  ";
    return $next();
}));