<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index()
    {
        session_destroy();
        return redirect(route('basket.index'));
    }

    public function sesion()
    {
        dd($_SESSION);
    }
}
