<?php

namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
use App\Filament\Resources\KaryawanResource\Pages;
use App\Filament\Resources\KaryawanResource\RelationManagers;
use App\Models\Karyawan;
use Filament\Forms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid; // Pastikan untuk mengimpor Grid
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KaryawanResource extends Resource
{
    protected static ?string $model = Karyawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2) 
                ->schema([
                    FileUpload::make('foto')
                        ->label('Foto Profil')
                        ->image() 
                        ->maxSize(2048) 
                        ->directory('uploads/fotos') 
                        ->required(), 
                    
                    Grid::make(1) 
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama')
                                ->required(),

                            TextInput::make('nomor_hp')
                                ->label('Nomor HP')
                                ->required()
                                ->numeric() 
                                ->tel()      
                                ->minLength(10) 
                                ->maxLength(15) 
                                ->placeholder('Contoh: 08123456789'),

                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->placeholder('Contoh: budiono@example.com')
                                ->required(),

                            TextInput::make('password')
                                ->label('Password')
                                ->password()
                                ->required(),

                            TextInput::make('password_confirmation')
                                ->label('Konfirmasi Kata Sandi')
                                ->password()
                                ->required()
                                ->same('password') 
                                ->dehydrated(false), 
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                ->width(100)
                ->height(200)
                ->label('Foto')
                ->url(fn ($record) => Storage::url($record->foto)), // menggunakan Storage::url
                TextColumn::make('nama'),
                TextColumn::make('nomor_hp'),
                TextColumn::make('email'),
                TextColumn::make('password'),
            ])
            ->filters([
                // Filter tabel bisa ditambahkan di sini
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Hubungan model bisa ditambahkan di sini
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryawans::route('/'),
            'create' => Pages\CreateKaryawan::route('/create'),
            'edit' => Pages\EditKaryawan::route('/{record}/edit'),
        ];
    }
}