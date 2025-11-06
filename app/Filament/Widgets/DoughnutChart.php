<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;


class DoughnutChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Doughnut Chart';

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Red', 'Blue', 'Yellow'],
            'datasets' => [
                [
                    'label' => 'Votes',
                    'data' => [10, 20, 30],
                    'backgroundColor' => ['#ef4444', '#3b82f6', '#facc15'],
                ],
            ],
        ];
    }
}
