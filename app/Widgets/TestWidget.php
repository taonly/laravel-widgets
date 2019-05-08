<?php

namespace App\Widgets;

use taonly\Widgets\Contract\ContractWidget;

class TestWidget implements ContractWidget{
 
 public function execute(){

    return view('Widgets::test');

 } 
}