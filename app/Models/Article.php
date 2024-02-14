<?php

namespace App\Models;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use  Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'keywords',
        'category_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public static function getForm()
    {
        return [
            Section::make('Meta')
                ->collapsible()
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, $state, Set $set) {
                            if ($operation !== 'create') {
                                return;
                            }

                            $set('slug', Str::slug($state));
                        })
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->hint('Slug will be generated automatically')
                        ->readonly()
                        ->required()
                        ->maxLength(300),
                    Textarea::make('description')
                        ->autosize()
                        ->cols(3)
                        ->rows(5)
                        ->columnSpanFull()
                        ->required()
                        ->maxLength(255),
                ]),
            Section::make([
                RichEditor::make('body')
                    ->required(),
                TextInput::make('keywords')
                    ->required()
                    ->maxLength(255),
                Select::make('category_id')
                    ->options(Category::all()->pluck('category', 'id'))
            ])
        ];
    }
}
