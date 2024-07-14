<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class admin extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function creat()
    {
        return view('admin.creat');
    }

    public function store()
    {
        $recipes = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'recipe' => 'string',
            'protein' => 'string',
            'fats' => 'string',
            'carbohydrates' => 'string'
        ]);

        Recipe

    }
}
