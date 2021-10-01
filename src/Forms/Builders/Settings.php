<?php

namespace LaravelEnso\Typesense\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\Typesense\Models\Settings as Model;

class Settings
{
    protected const TemplatePath = __DIR__.'/../Templates/settings.json';

    public function edit(Model $settings)
    {
        return (new Form(static::TemplatePath))->edit($settings);
    }
}
