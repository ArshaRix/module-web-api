<?php

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory {

    protected $model = \Modules\User\App\Models\User::class;

    public function definition(): array {
        return [
            'first_name' => fake() -> firstName(),
            'last_name' => fake() -> lastName(),
            'email' => fake() -> unique() -> safeEmail(),
            'password' => fake() -> asciify('***-******'),
            'enabled' => fake() -> boolean(),
            'account_id' => fake() -> randomNumber(5, true),
            'verified' => fake() -> boolean(),
        ];
    }
}

