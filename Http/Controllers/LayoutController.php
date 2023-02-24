<?php

namespace App\Modules\Layout\Http\Controllers;

use App\Http\Controllers\Controller;


class LayoutController extends Controller
{
    public function testAuth()
    {
        return view('layout::test-auth');
    }

    public function testAdmin()
    {
        return view('layout::test-admin');
    }
}
