<?php
namespace App\Repositories;
use Illuminate\Support\Facades\Facade;
class test extends Facade{

 protected static function getFacadeAccessor(){
  return 'add';
 }
}

?>