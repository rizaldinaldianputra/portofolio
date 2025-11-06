<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;


class PieChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Pie Chart';

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Apple', 'Samsung', 'Xiaomi'],
            'datasets' => [
                [
                    'label' => 'Smartphones',
                    'data' => [40, 30, 30],
                    'backgroundColor' => ['#f87171', '#60a5fa', '#facc15'],
                ],
            ],
        ];
    }
}
