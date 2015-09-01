<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller;

class AboutController extends Controller{

    public function about(){
        $first = 'Haonan';
        $last = 'Xu';
        $people = [
//            'Yiou Gao','Dad','Mum'
        ];
        return view('pages.about', compact('first','last','people'));
    }
}
