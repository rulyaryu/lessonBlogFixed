<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function actionIndex(Request $request)
    {
//        $c = Category::where('id', '<=', 12)
//            ->where('id', '>=', 5)
//            ->get(['id', 'title']);
        // $c = Category::whereBetween('id', [5, 12])
            // ->orderBy('title')
            // ->get(['id', 'title']);

//        $n = News::with(['author'])->first(); //жадная загрузка данных
        // $n = News::first(); // $n->author ленивая загрузка данных
        // $a = Author::first();
//        dd($n->toArray());
        return view('test');
//    	return response()->json(['test' => 'data']);
    }
}
