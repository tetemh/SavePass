<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function genPass (Request $request) {
        return call_api(['gen' => genToken($request->input('length'))]);
    }
}
