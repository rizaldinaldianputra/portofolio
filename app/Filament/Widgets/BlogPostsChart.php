<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Posts Bubble Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog Posts',
                    'data' => [
                        ['x' => 10, 'y' => 20, 'r' => 5],
                        ['x' => 15, 'y' => 10, 'r' => 10],
                        ['x' => 20, 'y' => 25, 'r' => 8],
                        ['x' => 25, 'y' => 5,  'r' => 12],
                    ],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
