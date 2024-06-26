<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suggestion;
use App\Models\Activity;
use App\Models\DataPenduduk;
use App\Models\Umkm;

class dashboardController extends Controller
{
    public function indexRT()
    {
        $user = auth()->user();
        $izinUsaha = Umkm::all();
        $suggestions = suggestion::all();
        $activities = Activity::all();
        // $datapenduduk = DataPenduduk::all();
        $breadcrumb = (object)[
            'title' => 'Daftar dashboard',
            'subtitle' => '',
        ];
        return view('dashboardRT', compact('izinUsaha', 'suggestions', 'activities', 'breadcrumb'));
    }
    public function indexRW()
    {
        $user = auth()->user();
        $izinUsaha = Umkm::all();
        $suggestions = suggestion::all();
        $activities = Activity::all();
        // $datapenduduk = DataPenduduk::all();
        $breadcrumb = (object)[
            'title' => 'Daftar dashboard',
            'subtitle' => '',
        ];
        return view('dashboardRW', compact('izinUsaha', 'suggestions', 'activities', 'breadcrumb'));
    }
    public function indexPD()
    {
        $user = auth()->user();
        $izinUsaha = Umkm::all();
        $suggestions = suggestion::all();
        $activities = Activity::all();
        // $datapenduduk = DataPenduduk::all();
        $breadcrumb = (object)[
            'title' => 'Daftar dashboard',
            'subtitle' => '',
        ];
        return view('dashboardPD', compact('izinUsaha', 'suggestions', 'activities', 'breadcrumb'));
    }
}
