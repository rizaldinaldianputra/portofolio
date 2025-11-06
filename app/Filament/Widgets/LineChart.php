<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;



class LineChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Line Chart';

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr'],
            'datasets' => [
                [
                    'label' => 'Revenue',
                    'data' => [15, 25, 35, 20],
                    'borderColor' => '#10b981',
                    'backgroundColor' => 'rgba(16,185,129,0.2)',
                ],
            ],
        ];
    }
}
