<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dummy;

class DummyController extends Controller
{
    public function getdata()
    {
        return ["name"=>"UMER"];
    }

    public function listdata()
    {
        return Dummy::all();
    }
}
