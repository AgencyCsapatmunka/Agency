<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('password');
            $table->string('permission')->default(1);
            $table->boolean('vip')->default(0);
            $table->timestamps();
        });
        User::create(['name' => 'Greta Fekete' , 'email'=> 'G.Fekete@mail.com', 'password' => Hash::make('Aa123451@'),'vip'=>0]);
        User::create(['name' => 'Janos Pap' , 'email'=> 'J.Pap@mail.com', 'password' => Hash::make('Aa123452@'),'vip'=>0]);
        User::create(['name' => 'AdAm Fekete' , 'email'=> 'A.Fekete@mail.com', 'password' => Hash::make('Aa123453@'),'vip'=>0]);
        User::create(['name' => 'Botond Szekely' , 'email'=> 'Botond.Sz@mail.com', 'password' => Hash::make('Aa123454@'),'vip'=>1]);
        User::create(['name' => 'Bendeguz Kerekes' , 'email'=> 'K.Bendeguz@mail.com', 'password' => Hash::make('Aa123455@'),'vip'=>0]);
        User::create(['name' => 'Imre Hegedus' , 'email'=> 'I.Hegedus@mail.com', 'password' => Hash::make('Aa123456@'),'vip'=>1]);
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
