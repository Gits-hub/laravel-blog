<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function(Blueprint $table){
            $table-> id('up_id');
            $table -> string('names');
            $table -> string('status');
            $table -> string('nationality');
            $table -> string('height');
            $table -> string('weight');
            $table -> string('age');
            $table -> string('disability');
            $table -> timestamp('updated_at')->useCurrent();
            $table -> timestamp('created_at')->default(DB :: raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
};
