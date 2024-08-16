<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $toppingchoices = [
            'Onion','Chicken','Ground Beef', 'Green Pepper', 'Mushroom','Sweet Corn', 'Olives'
        ];
        $topping  = [];

        for($i=0; $i < rand(1,4); $i++){
            $topping[] =  Arr::random($toppingchoices);
        }
        $topping = array_unique($topping);
        return [
            'id' => rand(1111,9999),
            'user_id' => rand(1,10),
            'size'=> Arr::random(['Small', 'Medium', 'Large', 'Extra Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $topping,
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready'])
        ];
    }
}
