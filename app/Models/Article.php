<?php

namespace App\Models;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use  Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'header_image',
        'body',
        'keywords',
        'category_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function getForm()
    {
        return [
            FileUpload::make('header_image')
                ->directory('articles')
                ->imageEditor()
                ->imagePreviewHeight(250)
                ->required(),
            Select::make('status')
                ->default('draft')
                ->required()
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                ]),
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

                    Textarea::make('keywords')
                        ->cols(3)
                        ->rows(3)
                        ->required()
                        ->maxLength(255),
                    Select::make('category_id')
                        ->searchable()
                        ->label('Category')
                        ->required()
                        ->options(Category::all()->pluck('category', 'id'))
                ]),
            Section::make('Blog content')
                ->schema([
                MarkdownEditor::make('body')
                    ->label('')
                    ->required(),
            ])
        ];
    }
}
