<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class AddressDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1;
        $firstHomeAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId,
            'type'=>'home',
            'street_address'=>Str::random(15),
            'city'=>Str::random(10),
            'state'=>Str::random(10),
            'post_code'=> rand(1111, 9999).' '.Str(2),
            'country'=> Str::random(5),
        ]);
        $firstBillingAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId,
            'type'=>'biling',
            'street_address'=>$firstHomeAddress->street_address,
            'city'=>$firstHomeAddress->city,
            'state'=>$firstHomeAddress->state,
            'post_code'=> $firstHomeAddress->post_code,
            'country'=> $firstHomeAddress->country,
        ]);

        $userId2 = 2;
        $secondHomeAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId2,
            'type'=>'home',
            'street_address'=>Str::random(15),
            'city'=>Str::random(10),
            'state'=>Str::random(10),
            'post_code'=> rand(1111, 9999).' '.Str(2),
            'country'=> Str::random(5),
        ]);
        $secondBillingAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId2,
            'type'=>'biling',
            'street_address'=>$secondHomeAddress->street_address,
            'city'=>$secondHomeAddress->city,
            'state'=>$secondHomeAddress->state,
            'post_code'=> $secondHomeAddress->post_code,
            'country'=> $secondHomeAddress->country,
        ]);

        $userId3 = 3;
        $thirdHomeAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId3,
            'type'=>'home',
            'street_address'=>Str::random(15),
            'city'=>Str::random(10),
            'state'=>Str::random(10),
            'post_code'=> rand(1111, 9999).' '.Str(2),
            'country'=> Str::random(5),
        ]);
        $thirdBillingAddress = \App\Models\AddressDetails::factory()->create([
            'user_id'=>$userId3,
            'type'=>'biling',
            'street_address'=>$thirdHomeAddress->street_address,
            'city'=>$thirdHomeAddress->city,
            'state'=>$thirdHomeAddress->state,
            'post_code'=> $thirdHomeAddress->post_code,
            'country'=> $thirdHomeAddress->country,
        ]);
    }
}
