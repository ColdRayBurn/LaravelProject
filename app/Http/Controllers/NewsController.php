<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Показать список всех пользователей приложения.
     */
    public function index(): View
    {
        $news = DB::table('news')->get();

        return view('new.index', ['news' => $news]);
    }
}