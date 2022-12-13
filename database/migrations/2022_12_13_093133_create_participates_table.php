<?php

use App\Models\Participate;
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
        Schema::create('participates', function (Blueprint $table) {
            $table->primary(['event_id', 'user_id']);
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->boolean('present')->default(0);
            $table->timestamps();
        });

        Participate::create(['event_id'=> 1, 'user_id' => 2]);
        Participate::create(['event_id'=> 1, 'user_id' => 3]);
        Participate::create(['event_id'=> 1, 'user_id' => 4]);
        Participate::create(['event_id'=> 1, 'user_id' => 5]);
        Participate::create(['event_id'=> 1, 'user_id' => 6]);
        Participate::create(['event_id'=> 3, 'user_id' => 1]);
        Participate::create(['event_id'=> 3, 'user_id' => 2]);
        Participate::create(['event_id'=> 3, 'user_id' => 3]);
        Participate::create(['event_id'=> 3, 'user_id' => 6]);
        Participate::create(['event_id'=> 2, 'user_id' => 2]);
        Participate::create(['event_id'=> 2, 'user_id' => 3]);
        Participate::create(['event_id'=> 2, 'user_id' => 4]);
        Participate::create(['event_id'=> 2, 'user_id' => 6]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participates');
    }
};
