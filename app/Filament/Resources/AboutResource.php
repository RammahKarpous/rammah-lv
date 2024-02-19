<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pages';

    protected static ?string $navigationLabel = 'About';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                /**
                 * Header section
                 */
                Section::make('About Content')
                    ->collapsible()
                    ->collapsed()
                    ->columns(1)
                    ->schema([
                        TextInput::make('page_title')
                            ->required()
                            ->maxLength(255),
                        Repeater::make('technologies')
                            ->required()
                            ->simple(
                                TextInput::make('technology'),
                            ),
                        MarkdownEditor::make('body')
                            ->label('About Content')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                /**
                 * Companies section
                 */
                Section::make('Companies')
                    ->collapsible()
                    ->collapsed()
                    ->columns(1)
                    ->schema([
                        TextInput::make('companies_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('companies_subtext')
                            ->label('Subtext')
                            ->required()
                            ->maxLength(255),
                    ]),

                /**
                 * Designs section
                 */
                Section::make('Designs')
                    ->collapsible()
                    ->collapsed()
                    ->columns(1)
                    ->schema([
                        TextInput::make('designs_title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('designs_subtext')
                            ->cols(3)
                            ->rows(4)
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('images')
                            ->required()
                            ->image()
                            ->multiple(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('companies_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('companies_subtext')
                    ->searchable(),
                Tables\Columns\TextColumn::make('designs_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('designs_subtext')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
