<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        return 'Hello';
    }
    public function showid($id)
    {
        return "Hello {$id}";
    }
}
