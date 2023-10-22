<?php

namespace App\Filament\Widgets;

use App\Models\Music;
use App\Models\RequestMusic;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use GuzzleHttp\Psr7\Request;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $chartData = Music::selectRaw('DAY(created_at) as day, COUNT(*) as count')->groupBy('day')->pluck('count')->toArray();
        $chartDataReq = RequestMusic::selectRaw('DAY(created_at) as day, COUNT(*) as count')->groupBy('day')->pluck('count')->toArray();

        return [
            Stat::make("Total Musics", Music::count())
                ->icon(url('images/logo.png'))
                ->description('Total Music')
                ->color('primary')
                ->chart($chartData)
                ->url("admin/music"),
            Stat::make("Request Musics", RequestMusic::count())
                ->icon('heroicon-o-folder-open')
                ->description('Request Musics')
                ->color('primary')
                ->chart($chartDataReq)
                ->url("admin/request-musics"),
        ];
    }
}
