<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_of_project')
                    ->required()
                    ->label('Name of Project')
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->label('Description'),
                Forms\Components\Textarea::make('technologies_used')
                    ->label('Technologies Used')
                    ->nullable(),
                Forms\Components\TextInput::make('start_date')
                   ->label('Start Date')
                   ->nullable(),
                Forms\Components\TextInput::make('end_date')
                    ->label('End Date')
                    ->nullable(),
                Forms\Components\TextInput::make('project_url')
                    ->label('Project URL')
                    ->nullable(),
                Forms\Components\TextInput::make('github_url')
                    ->label('Github URL')
                    ->nullable(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('projects/images')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_of_project')->label('Name of Project'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('technologies_used')->label('Technologies Used'),
                Tables\Columns\TextColumn::make('start_date')->label('Start Date'),
                Tables\Columns\TextColumn::make('end_date')->label('End Date'),
                Tables\Columns\TextColumn::make('project_url')->label('Project URL'),
                Tables\Columns\TextColumn::make('github_url')->label('Github URL'),
                Tables\Columns\TextColumn::make('image')->label('Image')->disk('public'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
