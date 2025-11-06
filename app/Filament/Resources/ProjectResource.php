<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Portfolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Project')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi'),

                Forms\Components\TextInput::make('technologies')
                    ->label('Teknologi')
                    ->placeholder('Contoh: Laravel, Flutter, MySQL'),

                Forms\Components\TextInput::make('link')
                    ->label('Link Project')
                    ->url(),

                Forms\Components\Select::make('platform')
                    ->label('Platform')
                    ->options([
                        'Website' => 'Website',
                        'Mobile'  => 'Mobile',
                        'Backend' => 'Backend',
                        'IOT'     => 'IOT',
                        'Desktop' => 'Desktop',
                    ])
                    ->default('Website')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('storage/projects')
                    ->imagePreviewHeight('150')
                    ->downloadable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug')->label('Slug'),
                Tables\Columns\TextColumn::make('technologies')->label('Teknologi'),
                Tables\Columns\ImageColumn::make('image')->label('Gambar')->square(),
                Tables\Columns\TextColumn::make('platform')->label('Platform'),

                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
