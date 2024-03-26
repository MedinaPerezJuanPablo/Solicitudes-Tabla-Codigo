<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requests>
 */
class RequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return[
            'id_student'=> random_int(1,20),
            'status'=>random_int(1,20),
            'creation_date'=>date_set(),
            'id_process'=> random_int(1,20),
        ];
    }
}
