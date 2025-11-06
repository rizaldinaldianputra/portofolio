<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BubleWidget extends ChartWidget
{
    protected static ?string $heading = 'Bubble Chart';

    protected function getType(): string
    {
        return 'bubble';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'data' => [
                        ['x' => 1, 'y' => 10, 'r' => 5],
                        ['x' => 2, 'y' => 15, 'r' => 10],
                        ['x' => 3, 'y' => 7, 'r' => 8],
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.5)',
                ],
            ],
        ];
    }
}
