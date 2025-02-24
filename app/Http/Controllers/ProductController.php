<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=[
            ['title'=>'Interstellar',
            'year'=> 2014,
            'genre'=>'Sci-Fi'
            ],
            ['title'=>'The Dark Knight',
            'year'=>2008,
            'genre'=>'Action'
            ],
            ['title'=>'Parasite',
            'year'=>2019,
            'genre'=>'Thriller'
            ],
            [
            'title'=>'Titanic',
            'year'=>1997,
            'genre'=>'Romance'
            ]
        ];
        return view ('products',['products'=>$products]);
    }
}
