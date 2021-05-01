<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $package = new Package();
            $package->name = 'Package - '.$i;
            $package->branch = $faker->numberBetween(1,10);
            $package->admin = $faker->numberBetween(1,10);
            $package->manager = $faker->numberBetween(1,10);
            $package->customer = $faker->numberBetween(50,500);
            $package->invoice = $faker->numberBetween(50,500);
            $package->sms = $faker->numberBetween(50,500);
            $package->save();
        }
    }
}