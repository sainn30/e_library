<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Manajemen;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $books = Manajemen::with('detailmanajemen')->get();
        return view('dashboard', compact('books'));
    }
}
