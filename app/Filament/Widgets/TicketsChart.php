<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class TicketsChart extends ChartWidget
{
    protected static ?string $heading = 'Ticket Chart';

    public function getColumnSpan(string $breakpoint = null): int|string|array
    {
        return 'full';
    }


    protected function getData(): array
    {
        $tickets = Ticket::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        $labels = $tickets->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('d M Y');
        });

        $data = $tickets->pluck('count');

        return [
            'datasets' => [
                [
                    'label' => 'Tickets',
                    'data' => $data,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
