<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Device;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index',[
            'devices' => Device::count(),
            'rents' => Rent::count()
        ]);
    }
}
