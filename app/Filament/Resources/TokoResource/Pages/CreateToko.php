<?php

namespace App\Filament\Resources\TokoResource\Pages;

use App\Filament\Resources\TokoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateToko extends CreateRecord
{
    protected static ?string $title = 'Tambah Toko';
    protected static string $resource = TokoResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}