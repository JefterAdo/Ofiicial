<?php

namespace App\Filament\Resources\FooterElementResource\Pages;

use App\Filament\Resources\FooterElementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFooterElements extends ListRecords
{
    protected static string $resource = FooterElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
