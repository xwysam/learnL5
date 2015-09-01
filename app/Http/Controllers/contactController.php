<?php
/**
 * Created by PhpStorm.
 * User: haonanxu
 * Date: 15-08-20
 * Time: 18:53
 */
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;

class contactController extends Controller{

    public function contact(){

        return view('pages.contact');
    }
}