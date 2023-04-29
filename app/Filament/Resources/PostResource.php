<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

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
                    ->description('Meta content and slug')
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
                    ->collapsible()
                    ->description('Status and sort order')
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name', function (Builder $query) {
                                return $query->select('categories.id', 'category_translations.name')
                                    ->leftJoin('category_translations', function ($join) {
                                        $join->on('categories.id', '=', 'category_translations.category_id')
                                            ->where('category_translations.locale', '=', 'lv');
                                    });
                            })
                            ->required(),
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->preserveFilenames()
                            ->acceptedFileTypes(['image/jpeg', 'image/png']),
                        Forms\Components\Toggle::make('status')
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
                Tables\Columns\TextColumn::make('category.name:lv')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name', function (Builder $query) {
                        return $query->select('categories.id', 'category_translations.name')
                            ->leftJoin('category_translations', function ($join) {
                                $join->on('categories.id', '=', 'category_translations.category_id')
                                    ->where('category_translations.locale', '=', 'lv');
                            });
                    }),
                Tables\Filters\SelectFilter::make('user')
                    ->relationship('user', 'name'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
