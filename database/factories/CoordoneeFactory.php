<?php

    namespace Database\Factories;

    use App\Models\Coordonee;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class CoordoneeFactory extends Factory {
        protected $model = Coordonee::class;

        public function definition(): array {
            return [
                'adresse' => $this->faker->address(),
                'ville' => $this->faker->city(),
                'code_zip' => $this->faker->postcode(),
                'pays' => $this->faker->country(),
                'num_tel' => $this->faker->phoneNumber(),
                'date_naissance' => $this->faker->dateTime(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'user_id' => User::factory(),
            ];
        }
    }
