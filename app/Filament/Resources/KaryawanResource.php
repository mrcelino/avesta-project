<?php

namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
use App\Filament\Resources\KaryawanResource\Pages;
use App\Filament\Resources\KaryawanResource\RelationManagers;
use App\Models\Karyawan;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use App\Models\User; // Pastikan untuk mengimpor model User
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Filament\Forms\Components\Section;
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
    protected static ?string $model = User::class;
    protected static ?string $title = 'Karyawan';
    protected static ?string $navigationLabel = 'Karyawan';
    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // Grid layout dengan 2 kolom
            Forms\Components\Grid::make()
                ->schema([
                    // Section pertama di kolom kiri
                    Section::make('Data Pengguna')
                        ->schema([
                            TextInput::make('nama_depan')
                                ->label('Nama Depan')
                                ->required(),

                            TextInput::make('nama_belakang')
                                ->label('Nama Belakang')
                                ->required(),
                            
                            TextInput::make('no_telepon')
                                ->label('Nomor HP')
                                ->numeric()
                                ->tel()
                                ->required()
                                ->minLength(10)
                                ->maxLength(15)
                                ->placeholder('Contoh: 08123456789'),
        
                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->required()
                                ->placeholder('Contoh: budiono@example.com'),
                            
                            TextInput::make('role')
                                ->label('Role')
                                ->default('karyawan') // Menetapkan nilai default
                                ->hidden() // Menyembunyikan field dari pengguna
                                ->required(),
                            
                            TextInput::make('password')
                                ->label('Password')
                                ->default('123') // Default password
                                ->hidden() // Disembunyikan
                                ->required()
                                ->dehydrateStateUsing(fn ($state) => Hash::make($state)), // Hash password sebelum menyimpan
                        ])
                        ->columns(1) // Satu kolom untuk setiap field
                        ->columnSpan(6), // Mengambil setengah dari grid utama

                    // Section untuk FileUpload
                    Section::make('Foto Profil')
                    ->schema([
                        FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->image()
                            ->maxSize(2048)
                            ->directory('uploads/fotos')
                            ->required(),
                    ])
                    ->columns(1) // Satu kolom untuk file upload
                    ->columnSpan(6) // Mengambil setengah dari grid utama
                ])
                ->columns(12) // Mengatur grid menjadi 12 kolom
                ->columnSpan(12) // Span keseluruhan layout
        ]);   
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                ->width(50)
                ->height(50)
                ->circular()
                ->label('Foto')
                ->url(fn ($record) => Storage::url($record->foto)), // menggunakan Storage::url
                TextColumn::make('nama_lengkap')
                ->label('Nama Lengkap')
                ->getStateUsing(function ($record) {
                    return "{$record->nama_depan} {$record->nama_belakang}";
                }),            
                TextColumn::make('no_telepon')
                ->label('Nomor HP'),
                TextColumn::make('email'),
                
            ])
            ->filters([
                // Filter tabel bisa ditambahkan di sini
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
                ->modalHeading('Hapus Karyawan?')
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

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Tambahkan filter query untuk hanya menampilkan role karyawan
        return parent::getEloquentQuery()->where('role', 'karyawan');
    }
}