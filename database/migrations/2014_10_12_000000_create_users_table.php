<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('vip')->default(0);
            $table->timestamps();
        });
        User::create(['name' => 'Greta Fekete' , 'email'=> 'G.Fekete@mail.com','vip'=>0]);
        User::create(['name' => 'Janos Pap' , 'email'=> 'J.Pap@mail.com','vip'=>0]);
        User::create(['name' => 'AdAm Fekete' , 'email'=> 'A.Fekete@mail.com','vip'=>0]);
        User::create(['name' => 'Botond Szekely' , 'email'=> 'Botond.Sz@mail.com','vip'=>1]);
        User::create(['name' => 'Bendeguz Kerekes' , 'email'=> 'K.Bendeguz@mail.com','vip'=>0]);
        User::create(['name' => 'Imre Hegedus' , 'email'=> 'I.Hegedus@mail.com','vip'=>1]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
