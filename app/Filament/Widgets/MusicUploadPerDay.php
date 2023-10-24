<?php

namespace App\Filament\Widgets;

use App\Models\Music;
use Filament\Widgets\ChartWidget;

class MusicUploadPerDay extends ChartWidget
{
    protected static ?string $heading = 'Total Music Uploads per Day';

    protected function getData(): array
    {
        $data = Music::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $labels = [];
        $counts = [];

        foreach ($data as $item) {
            $labels[] = date("Y-m-d", strtotime($item->date));
            $counts[] = $item->count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Music Upload',
                    'data' => $counts,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line'; // You may use a line chart for daily data
    }
}
