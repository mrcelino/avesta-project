<?php

namespace App\Filament\Resources\KaryawanResource\Pages;

use App\Filament\Resources\KaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\User; // Pastikan untuk mengimpor model User
use Illuminate\Support\Facades\Hash; // Untuk hashing password

class CreateKaryawan extends CreateRecord
{
    protected static ?string $title = 'Tambah Karyawan';
    protected static string $resource = KaryawanResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Set password default
        $data['password'] = Hash::make('password'); // Menggunakan password default
        $data['role'] = 'karyawan'; // Set role default

        return $data;
    }
    
}