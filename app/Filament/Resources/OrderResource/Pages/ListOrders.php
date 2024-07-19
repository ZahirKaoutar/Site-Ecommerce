<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;




use Filament\Resources\Pages\ListRecords\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function  getHeaderWidgets(): array{
        return[
            OrderStats::class
        ];



    }


    protected function  getFooterWidgets(): array{
        return[
            OrderStats::class
        ];



    }

    public function getTabs(): array
{
    return [
        'All' => Tab::make(),
        'new' => Tab::make()
            ->modifyQueryUsing(fn (EloquentBuilder $query) => $query->where('status', 'new')),
            'processing' => Tab::make()
            ->modifyQueryUsing(fn (EloquentBuilder $query) => $query->where('status', 'processing')),
            'shipped' => Tab::make()
            ->modifyQueryUsing(fn (EloquentBuilder $query) => $query->where('status', 'shipped')),
            'delivred' => Tab::make()
            ->modifyQueryUsing(fn (EloquentBuilder $query) => $query->where('status', 'delivred')),
            'cancelled' => Tab::make()
            ->modifyQueryUsing(fn (EloquentBuilder $query) => $query->where('status', 'cancelled')),
    ];
}
}

