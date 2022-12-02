<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
public function showOne($e) {$pages=[
1=>'страница1',
2=>'страница2',
3=>'страница3',
4=>'страница4',
5=>'страница5',
];
if ($e>0 and $e<6)
 return $pages[$e];
else return 'леня красава';
}
public function showAll() {return 'fsdfsdfsdfs42342342423';}
public function showParam($param) {return $param;}
}
