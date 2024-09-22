<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderOverview;
use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array {
        return [
            OrderOverview::class,
        ];
    }

    public function getTabs(): array{
        return [
            // null => Tab::make('All'),
            // 'new' => Tab::make('new')->query(fn ($query) => $query->where('status', 'new')),
            // 'processing' => Tab::make('processing')->query(fn ($query) => $query->where('status', 'processing')),
            // 'shipped' => Tab::make('shipped')->query(fn ($query) => $query->where('status', 'shipped')),
            // 'delivered' => Tab::make('delivered')->query(fn ($query) => $query->where('status', 'delivered')),
            // 'cancelled' => Tab::make('cancelled')->query(fn ($query) => $query->where('status', 'cancelled')),
        ];
    }
}
