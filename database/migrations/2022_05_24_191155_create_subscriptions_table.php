<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('card_id');
            $table->foreignId('user_id');

            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('notification_subscription', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->foreignId('notification_id');
          $table->foreignId('subscription_id');

          $table->foreign('notification_id')->references('id')->on('notifications');
          $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notification_subscription', function (Blueprint $table) {
            $table->dropForeign('subscription_id');
            $table->dropForeign('notification_id');

        });

        Schema::dropIfExists('notification_subscription');
        Schema::dropIfExists('subscriptions');
    }
};
