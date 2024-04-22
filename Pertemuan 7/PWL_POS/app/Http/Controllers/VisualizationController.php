<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VisualizationController extends Controller
{
    public function showRegistrationChart()
    {
        $registrations = User::selectRaw('COUNT(*) as count, MONTH(created_at) as month')
                             ->whereYear('created_at', date('Y'))
                             ->groupBy('month')
                             ->get();

        $months = [];
        $data = [];

        foreach ($registrations as $registration) {
            $months[] = \DateTime::createFromFormat('!m', $registration->month)->format('F');
            $data[] = $registration->count;
        }

        return view('registration-chart', compact('months', 'data'));
    }
}
