<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $boards = \App\Models\boards::factory(15)->create();

        $users = \App\Models\User::factory(20)->create();

        $users->each(function (\App\Models\User $user) use ($boards) {
            $user->board()->sync($boards->random(rand(3, 5)));

            $columns = \App\Models\columns::factory(1)->create([
                'board_id' => $boards->random()->id,
            ]);

            $cards = \App\Models\cards::factory(1)->create([
                'column_id' => $columns->random()->id,
                'author_id' => $user->id,
                'executor_id' => $user->id,
            ]);

            \App\Models\comments::factory(1)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $subscriptions = \App\Models\subscriptions::factory(3)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $notifications = \App\Models\notifications::factory(2)->create([
                'card_id' => $cards->random()->id
            ]);

            $notifications->each(function (\App\Models\notifications $notification) use ($subscriptions) {
                $notification->subscription()->sync($subscriptions->random(rand(1, 2)));
            });
        });
    }
}
