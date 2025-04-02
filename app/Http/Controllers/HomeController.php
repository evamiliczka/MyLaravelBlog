<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
       /* 'categories' is the future vaiable name, $categories is the data here;*/
        return view('home',['mycategories' => $categories]);
    }
}
