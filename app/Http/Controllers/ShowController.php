<?php
namespace App\Http\Controllers;

include __DIR__.'/Controller.php';

class ShowController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}