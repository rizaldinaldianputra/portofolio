<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientReviewResource\Pages;
use App\Models\ClientReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClientReviewResource extends Resource
{
    protected static ?string $model = ClientReview::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';
    protected static ?string $navigationGroup = 'Portfolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'name')
                    ->label('Client')
                    ->required(),

                Forms\Components\TextInput::make('reviewer_name')
                    ->label('Nama Reviewer')
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->label('Jabatan / Posisi')
                    ->nullable(),

                Forms\Components\Textarea::make('review')
                    ->label('Isi Review')
                    ->required(),

                Forms\Components\Select::make('rating')
                    ->label('Rating')
                    ->options([
                        1 => '1',
                        2 => '2',
                        3 => '3',
                        4 => '4',
                        5 => '5',
                    ])
                    ->default(5)
                    ->required(),

                // Field baru: Avatar
                Forms\Components\FileUpload::make('avatar')
                    ->label('Avatar')
                    ->image() // Hanya gambar
                    ->disk('public') // simpan di storage/app/public
                    ->directory('client-avatars')
                    ->imagePreviewHeight('100')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.name')->label('Client'),
                Tables\Columns\TextColumn::make('reviewer_name')->label('Reviewer'),
                Tables\Columns\TextColumn::make('position')->label('Posisi'),
                Tables\Columns\TextColumn::make('rating')->label('Rating'),
                // Tampilkan Avatar di tabel
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientReviews::route('/'),
            'create' => Pages\CreateClientReview::route('/create'),
            'edit' => Pages\EditClientReview::route('/{record}/edit'),
        ];
    }
}
