<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComicsController extends Controller
{
    public function index(){
        $comics = DB::table('comics')->all();
        $data = [
            "comic"=> new Comic(),
            "comics"=> $comics,
        ];
        return view('comics.index', $data);
    }
}
