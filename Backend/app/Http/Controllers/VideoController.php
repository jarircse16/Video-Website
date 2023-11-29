<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class VideoController extends Controller
{
    public function index()
    {
        // You can fetch videos from a database or use an array for simplicity.
        $videos = [
            'https://www.youtube.com/embed/9mXNBSY4G40?rel=0?version=3&autoplay=1&controls=0&&showinfo=0&loop=1',
            'https://www.youtube.com/embed/P4w3J1Xrx98?rel=0?version=3&autoplay=1&controls=0&&showinfo=0&loop=1',
            'https://www.youtube.com/embed/m9TAaOWtPDQ?rel=0?version=3&autoplay=1&controls=0&&showinfo=0&loop=1',
            // Add more video links as needed
        ];

        $currentPage = request()->get('page', 1);
        $videosPerPage = 1;

        // Use the LengthAwarePaginator class
        $totalVideos = count($videos);
        $videos = array_slice($videos, ($currentPage - 1) * $videosPerPage, $videosPerPage);

        $paginator = new LengthAwarePaginator($videos, $totalVideos, $videosPerPage, $currentPage, [
            'path' => request()->url(), // Ensure the correct base URL is used
        ]);

        return view('videos.index', ['videos' => $paginator]);
    }
}
