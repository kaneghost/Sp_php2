<?php

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 08.07.2015
 * Time: 15:43
 */
class db
{
   public function __construct(){
        mysql_connect('localhost','root','mysql');
        mysql_select_db('test');
    }
   public function query($sql,$class = 'stdClass'){
       $res = mysql_query($sql);
               if (false === $res) {
                       return false;
       }
       $ret = [];
        while ($row = mysql_fetch_object($res, $class)) {
                       $ret[] = $row;
                   }
        return $ret;
   }

}