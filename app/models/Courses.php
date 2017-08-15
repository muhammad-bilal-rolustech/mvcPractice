<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Courses extends  Eloquent
 {


   protected $fillable = ['c_id' , 'c_name' , 'c_dept'];
   public $timestamp = [];
 }
 ?>
