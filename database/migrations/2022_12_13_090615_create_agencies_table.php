<?php

use App\Models\Agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name',40);
            $table->string('country',30);
            $table->string('type',2);
            $table->timestamps();
        });
        Agency::create(['name'=>'Christal Agency','country'=>'Magyarország','type'=>'re']);
        Agency::create(['name'=>'COMP-LET Party Service Kft.','country'=>'Magyarország','type'=>'re']);
        Agency::create(['name'=>'EuropeFace','country'=>'Magyarország','type'=>'mo']);
        Agency::create(['name'=>'Studio 20 Budapest','country'=>'Magyarország','type'=>'mo']);
        Agency::create(['name'=>'MediaSales Kft.','country'=>'Magyarország','type'=>'ma']);
        Agency::create(['name'=>'Sales&More','country'=>'Magyarország','type'=>'ma']);
        Agency::create(['name'=>'Flottadekor - Háttérország Kft.','country'=>'Magyarország','type'=>'rk']);
        Agency::create(['name'=>'Armadillo Kreatív Ügynökség','country'=>'Magyarország','type'=>'rk']);
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
