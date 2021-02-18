<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatuController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return $status;
    }
}
