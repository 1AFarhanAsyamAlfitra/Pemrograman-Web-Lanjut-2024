<?php

namespace App\Http\Controllers;

use App\Charts\userchart;
use Illuminate\Http\Request;

class WelcomeController extends Controller {
    public function index(userchart $chart) {
        $breadcrumb = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'chart' => $chart->build()]);
    }
}