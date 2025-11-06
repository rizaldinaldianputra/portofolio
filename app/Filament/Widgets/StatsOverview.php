<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Project;
use App\Models\ClientReview;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Clients', Client::count())
                ->description('Total clients')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-lg',
                ]),

            Stat::make('Projects', Project::count())
                ->description('Total projects')
                ->color('success')
                ->extraAttributes([
                    'class' => 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-lg',
                ]),

            Stat::make('Reviews', ClientReview::count())
                ->description('Total reviews')
                ->color('warning')
                ->extraAttributes([
                    'class' => 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-lg',
                ]),
        ];
    }
}
