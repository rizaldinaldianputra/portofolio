<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class PolarAreaChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Polar Area Chart';

    protected function getType(): string
    {
        return 'polarArea';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Red', 'Green', 'Blue'],
            'datasets' => [
                [
                    'label' => 'Votes',
                    'data' => [11, 16, 7],
                    'backgroundColor' => ['#ef4444', '#10b981', '#3b82f6'],
                ],
            ],
        ];
    }
}
