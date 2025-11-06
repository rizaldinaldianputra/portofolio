<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BarChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Bar Chart';

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => [10, 20, 30, 15],
                    'backgroundColor' => '#3b82f6',
                ],
            ],
        ];
    }
}
