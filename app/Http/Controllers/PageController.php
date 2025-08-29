<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\News;

class PageController extends Controller
{
    public function home() {
        $latestNews = News::latest()->take(3)->get();
        return view('pages.home', compact('latestNews'));
    }

    public function about() {
        return view('pages.about');
    }

    public function activities() {
        $activities = Activity::all();
        return view('pages.activities', compact('activities'));
    }

    public function news() {
        $news = News::latest()->get();
        return view('pages.news', compact('news'));
    }

    public function contact() {
        return view('pages.contact');
    }
}
