<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
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
       /* $boards = \App\Models\Board::factory(15)->create();

        $users = \App\Models\User::factory(20)->create();

        $users->each(function (\App\Models\User $user) use ($boards) {
            $user->board()->sync($boards->random(rand(3, 5)));

            $columns = \App\Models\Columns::factory(1)->create([
                'board_id' => $boards->random()->id,
            ]);

            $cards = \App\Models\Cards::factory(1)->create([
                'column_id' => $columns->random()->id,
                'author_id' => $user->id,
                'executor_id' => $user->id,
            ]);

            \App\Models\Comments::factory(1)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $subscriptions = \App\Models\Subscriptions::factory(3)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $notifications = \App\Models\Notifications::factory(2)->create([
                'card_id' => $cards->random()->id
            ]);

            $notifications->each(function (\App\Models\Notifications $notification) use ($subscriptions) {
                $notification->subscription()->sync($subscriptions->random(rand(1, 2)));
            });
        });*/
        $boards = \App\Models\Board::factory(15)->create();

        $users = \App\Models\User::factory(20)->create();

        $users->each(function (\App\Models\User $user) use ($boards) {
            $user->boards()->sync($boards->random(rand(3, 5)));

            $columns = \App\Models\Column::factory(1)->create([
                'board_id' => $boards->random()->id,
            ]);

            $cards = \App\Models\Card::factory(1)->create([
                'column_id' => $columns->random()->id,
                'author_id' => $user->id,
                'executor_id' => $user->id,
            ]);

            \App\Models\Comment::factory(1)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $subscriptions = \App\Models\Subscription::factory(3)->create([
                'user_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $notifications = \App\Models\Notification::factory(2)->create([
                'card_id' => $cards->random()->id
            ]);

            $notifications->each(function (\App\Models\Notification $notification) use ($subscriptions) {
                $notification->subscriptions()->sync($subscriptions->random(rand(1, 2)));
            });
        });
    }
}
