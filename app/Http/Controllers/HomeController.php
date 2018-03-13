<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('pdf/PDF', $data);

        return $pdf->stream();
        return $pdf->download('hdtuto.pdf');

    }

    public function getUserAPI($value='')
    {
      // return new UserCollection(User::all());
      // return new UserResource(User::all());
      // return UserResource::collection(User::all());
      $data = $this->API()->all();
      return $data;
    }

    public function API($value='')
    {
      $data = new UserResource(User::select('id')->get());
      return $data;
    }
}
