<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Passwork;
use App\Models\Passgroup;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(3)->create()->each(function (User $user) {

            $user->passgroups()->saveMany(Passgroup::factory(1)->make());

            Passwork::factory(3)->create(['user_id' => $user->id, 'passgroup_id' => $user->id]);

            Passwork::factory(3)->create(['user_id' => $user->id]);
        });
    }
}
