<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPopularTheater;
use App\Repository\Theater as TheaterRepository;
use Inertia\Inertia;

class Theater extends Controller
{
    public function index()
    {
        return Inertia::render('Theater/Index');
    }

    public function popular(SearchPopularTheater $request, TheaterRepository $theaterRepository)
    {
        $date = $request->input('date');
        $popularTheater = $theaterRepository->getTheaterWithHighestTicketCount($date)->first();
        $availableDates = $popularTheater ? [] : $theaterRepository->getAvailableDates();
        return Inertia::render('Theater/Index', [
            'popularTheater' => $popularTheater,
            'availableDates' => $availableDates,
        ]);
    }
}
