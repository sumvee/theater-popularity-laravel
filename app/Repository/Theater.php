<?php

namespace App\Repository;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Theater
{

    /**
     * Get the theater with the highest ticket count on a specific date.
     *
     * @param string $date
     * @return Collection
     */
    public function getTheaterWithHighestTicketCount(string $date): Collection
    {
        return DB::table('theaters as t')
            ->join('show_times as s', 't.id', '=', 's.theater_id')
            ->join('tickets as tc', 's.id', '=', 'tc.show_time_id')
            ->select('t.id', 't.name', DB::raw('COUNT(tc.id) AS ticket_count'))
            ->whereDate('s.showtime', $date)
            ->groupBy('t.id', 't.name')
            ->orderByDesc('ticket_count')
            ->limit(1)
            ->get();
    }

    /**
     * Get all available dates.
     *
     * @return Collection
     */
    public function getAvailableDates(): Collection
    {
        return DB::table('show_times as s')
            ->join('tickets as tc', 's.id', '=', 'tc.show_time_id')
            ->select(DB::raw('DATE(s.showtime) AS date'))
            ->groupBy('date')
            ->get();
    }
}
