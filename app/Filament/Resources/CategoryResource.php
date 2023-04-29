<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $locales = config('translatable.locales');

        $tabsContent = [];
        $tabsSeo = [];

        foreach ($locales as $locale) {
            $tabsContent[] = Forms\Components\Tabs\Tab::make(strtoupper($locale))
                ->schema([
                    Forms\Components\TextInput::make($locale . '.name')
                        ->maxLength(255)
                        ->required()
                        ->hint('Max length 155 words')
                        ->label('Name'),
                    TinyEditor::make($locale . '.content')
                        ->label('Content'),
                ]);

            $tabsSeo[] = Forms\Components\Tabs\Tab::make(strtoupper($locale))
                ->schema([
                    Forms\Components\TextInput::make($locale . '.meta_title')
                        ->maxLength(60)
                        ->hint('Max length 60 words')
                        ->label('Meta Title'),
                    Forms\Components\Textarea::make($locale . '.meta_description')
                        ->maxLength(155)
                        ->hint('Max length 155 words')
                        ->label('Meta Description'),
                    Forms\Components\TextInput::make($locale . '.slug')
                        ->label('URL (Slug)'),
                ]);
        }

        return $form
            ->schema([
                Forms\Components\Section::make('SEO')
                    ->collapsed()
                    ->description('Meta content, heading and slug')
                    ->schema([
                        Forms\Components\Tabs::make('Translations')
                            ->tabs($tabsSeo),
                    ]),
                Forms\Components\Section::make('Content')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Tabs::make('Translations')->tabs($tabsContent),
                    ]),
                Forms\Components\Section::make('Settings')
                    ->collapsed()
                    ->description('Status and sort order')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->default(1),
                        Forms\Components\Toggle::make('status')
                            ->default(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name:en')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereTranslationLike('name', "%{$search}%", 'en');
                    })
                    ->toggleable()
                    ->label('Name (EN)'),
                Tables\Columns\TextColumn::make('name:lv')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereTranslationLike('name', "%{$search}%", 'lv');
                    })
                    ->toggleable()
                    ->label('Name (LV)'),
                Tables\Columns\TextColumn::make('sort_order'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
