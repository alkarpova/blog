<?php

/*
 * https://github.com/Astrotomic/laravel-translatable/issues/306
 *
 */

namespace App\Filament\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

trait Translatable
{
    protected function fillForm(): void
    {
        $this->callHook('beforeFill');

        $data = $this->getRecord()->attributesToArray();

        foreach (static::getRecord()->getTranslationsArray() as $key => $value) {
            $data[$key] = $value;
        }

        $data = $this->mutateFormDataBeforeFill($data);

        $this->form->fill($data);

        $this->callHook('afterFill');
    }

    protected function getTableQuery(): Builder
    {
        return static::getResource()::getEloquentQuery()->with('translations');
    }

    public function getRelationship(): Relation | Builder
    {
        return $this->getOwnerRecord()->{static::getRelationshipName()}()->with(['translations']);
    }
}
