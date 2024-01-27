<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class SQWORDController extends Controller
{
    public function mostrar()
    {
        return view('SQWORD');
    }

}
