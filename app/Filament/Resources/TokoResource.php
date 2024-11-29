<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TokoResource\Pages;
use App\Filament\Resources\TokoResource\RelationManagers;
use App\Models\Warung;
use Filament\Forms;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoResource extends Resource
{
    protected static ?string $model = Warung::class;
    protected static ?string $title = 'Toko';
    protected ?string $heading = 'Toko';
    protected static ?string $navigationLabel = 'Toko';
    protected static ?string $navigationIcon = 'heroicon-s-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Layout Grid dengan 2 kolom
                Forms\Components\Grid::make()
                    ->schema([
                        // Section pertama di kolom kiri
                        Section::make('')
                            ->schema([
                                TextInput::make('nama_warung')
                                    ->label('Nama')
                                    ->required(),
                                TextInput::make('alamat_warung')
                                    ->label('Alamat')
                                    ->required(),
                                TextInput::make('nomor_hp')
                                    ->label('Nomor HP')
                                    ->required()
                                    ->numeric() 
                                    ->tel()      
                                    ->minLength(10) 
                                    ->maxLength(15) 
                                    ->placeholder('Contoh: 08123456789'),
                                Forms\Components\TextInput::make('deskripsi')
                                    ->label('Deskripsi')
                                    ->required(),
                                Forms\Components\TextInput::make('kecamatan')
                                    ->label('Kecamatan')
                                    ->required(),
                                Forms\Components\TextInput::make('kelurahan')
                                    ->label('Kelurahan')
                                    ->required(),
                                Forms\Components\TextInput::make('kota')
                                    ->label('Kota')
                                    ->required(),
                                Forms\Components\TextInput::make('kode_pos')
                                    ->label('Kode Pos')
                                    ->numeric()
                                    ->required(),
                                FileUpload::make('foto_warung')
                                    ->label('Foto Warung')
                                    ->columnSpanFull()
                                    ->image()
                                    ->maxSize(2048)
                                    ->directory('uploads/fotos')
                                    ->required(),
                            ])
                            ->columns(1) // Kolom untuk section pertama
                            ->columnSpan(6), // Span kolom kiri (lebih besar)
                        
                        // Section kedua di kolom kanan
                        Section::make('Data Bank')
                            ->schema([
                                Repeater::make('banks')
                                    ->label('Bank dan Nomor Rekening')
                                    ->schema([
                                        Select::make('bank')
                                            ->label('Pilih Bank')
                                            ->options([
                                                'Mandiri' => 'Bank Mandiri',
                                                'BCA' => 'Bank BCA',
                                                'BRI' => 'Bank BRI',
                                                'BNI' => 'Bank BNI',
                                                'BSI' => 'Bank BSI',
                                                'Danamon' => 'Bank Danamon',
                                            ])
                                            ->required(),
                                        TextInput::make('norek')
                                            ->label('Nomor Rekening')
                                            ->required()
                                            ->numeric()
                                            ->minLength(10)
                                            ->maxLength(16),
                                    ]),
                            ])
                            ->columns(1) // Kolom untuk section kedua
                            ->columnSpan(6), // Span kolom kanan (lebih kecil)
                    ])
                    ->columns(12) // Mengatur grid menjadi 12 kolom
                    ->columnSpan(12), // Span keseluruhan layout
            ]);
    }
    
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto_warung')
                    ->size(100)
                    ->circular()
                    ->label('Foto')
                    ->url(fn ($record) => Storage::url($record->foto_warung)),
                Tables\Columns\TextColumn::make('nama_warung')->label('Nama'),
                Tables\Columns\TextColumn::make('alamat_warung'),
                Tables\Columns\TextColumn::make('kota')->label('Kabupaten/Kota'),
                Tables\Columns\TextColumn::make('kecamatan'),
                Tables\Columns\TextColumn::make('kelurahan'),
                Tables\Columns\TextColumn::make('kode_pos')
            ])
            ->filters([ 
                // Tambahkan filter jika diperlukan
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTokos::route('/'),
            'create' => Pages\CreateToko::route('/create'),
            'edit' => Pages\EditToko::route('/{record}/edit'),
        ];
    }
}