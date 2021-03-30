<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->data = [
            'layouts'=> 'vertical',
            'sublayouts'=> '',
            'darktheme'=> 'false',
            'rtltheme'=> 'false',
            'bodyclass'=> '',
            'menuclass'=> '',
            'headerclass'=> ''
        ];
    }
    
}
