<?php
/**
 * Created by PhpStorm.
 * User: m.borodulin
 * Date: 11.10.2018
 * Time: 14:03
 */

namespace App\Http\Controllers;


use Backpack\NewsCRUD\app\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', ['articles' => Article::simplePaginate(10)]);
    }

    public function show($id)
    {
        return view ('post', ['article' => Article::find($id)]);
    }
}