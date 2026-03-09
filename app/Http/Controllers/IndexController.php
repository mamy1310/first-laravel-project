<?php
namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome', ["name" => "Mamitiana"]);
    }

    public function show($id): string{
        return "Article portant l'identifiant $id.";
    }
}