<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Product;
use App\Models\Ticket;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $article_count = Article::count();
        $product_count = Product::count();
        $ticket_count = Ticket::count();

        return [
            Stat::make('Article', $article_count),
            Stat::make('Product', $product_count),
            Stat::make('Ticket', $ticket_count),
        ];
    }
}
