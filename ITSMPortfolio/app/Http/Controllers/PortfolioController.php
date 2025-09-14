<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Data postingan kita (biasanya ini dari database)
        $posts = [
            [
                'date' => 'Sep 9, 2025',
                'title' => 'Week 3: The ITIL 4 Service Value System (SVS)',
                'url' => '5026231165_Week3.pdf'
            ],
            [
                'date' => 'Sep 2, 2025',
                'title' => 'Week 2: ITIL4 - The Four Dimensions and Guiding Principle',
                'url' => '5026231165_Week2.pdf'
            ],
            [
                'date' => 'Aug 26, 2025',
                'title' => 'Week 1: Introduction to IT Service Management',
                'url' => '5026231165_Week1.pdf'
            ]
        ];

        // Mengirim data 'posts' ke view 'welcome'
        return view('welcome', ['posts' => $posts]);
    }
}
