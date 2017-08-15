<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class std extends  Eloquent
 {

   
   protected $fillable = ['id' , 'name' , 'degree' ,'address'];
   public $timestamp = [];
 }
 ?>
