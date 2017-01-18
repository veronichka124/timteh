<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    //
    public function add()
    {
        return view('add');
    }
    public function add_item()
    {
        return view('admin/categories/create');
    }
}
