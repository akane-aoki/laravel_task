<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
  public function index()
  {
    dd('test');
    
    // エロクアント
    $values = Test::all();

    $count = Test::count();

    $first = Test::findOrFail(1);

    $whereBBB = Test::where('Text', '=', 'bbb');

    // クエリビルダ
    $queryBuilder = DB::table('tests')->where('Text', '=', 'bbb')
    ->select('id', 'text')
    ->get();

    dd($values, $count, $first, $whereBBB, $queryBuilder);

    return view('tests.test', compact('values'));
  }
}