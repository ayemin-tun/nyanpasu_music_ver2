<?php

namespace App\Filament\Widgets;

use App\Models\Music;
use Filament\Widgets\ChartWidget;

class MusicUploadPerMonth extends ChartWidget
{
    protected static ?string $heading = 'Total Music upload per Month';

    protected function getData(): array
    {
        $data = Music::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $labels = [];
        $counts = [];
        foreach ($data as $item) {
            $labels[] = date('M', mktime(0, 0, 0, $item->month, 1));
            $counts[] = $item->count();
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
        return 'bar';
    }
}
