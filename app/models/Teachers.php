<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Teachers extends  Eloquent
 {


   protected $fillable = ['t_id' , 't_name' , 't_address','t_dept'];
   public $timestamp = [];
 }
 ?>
