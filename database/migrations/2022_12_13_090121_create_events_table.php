<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('name');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit');
            $table->date('date');
            $table->string('location');
            $table->integer('status')->default(0);//0 - aktív /1 - eltörölt /2 - lejárt 
            $table->timestamps();
        });

        Event::create(['name'=> 'Téli divatbemutató', 'agency_id' => 4, 'limit'=> 200, 'date' => '2022-12-15', 'location' => 'Bálna']);
        Event::create(['name'=> 'Alestorm koncert', 'agency_id' => 1, 'limit'=> 500, 'date' => '2023-01-08', 'location' => 'Barba Negra Red Stage']);
        Event::create(['name'=> 'Kutatók éjszakája', 'agency_id' => 2, 'limit'=> 150, 'date' => '2023-01-03', 'location' => 'Gábor Dénes Főiskola']);
        Event::create(['name'=> 'Marketingtanácsadás', 'agency_id' => 6, 'limit'=> 100, 'date' => '2022-12-19', 'location' => 'Westend']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
