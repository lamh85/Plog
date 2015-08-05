<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MiscController extends Controller
{

    /**
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function home()
    {
        // Returns the 'home' file in the misc folder
        return view('misc.home');
    }

    /**
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function about()
    {
        // Returns the 'about' file in the misc folder
        return view('misc.about');
    }

}
