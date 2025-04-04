<?php

namespace ProcessMaker\Package\Translations\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ProcessMaker\Package\Translations\Enums\StatusEnum;
use ProcessMaker\Package\Translations\Models\Translatable;

class TranslatableModelFactory extends Factory
{
    /**
     * Get the name of the model that is generated by the factory.
     *
     * @return string
     */
    public function modelName()
    {
        return Translatable::class;
    }

    /**
     * {@inheritdoc}
     */
    public function definition()
    {
        return [
            'language_code' => 'fa',
        ];
    }
}
