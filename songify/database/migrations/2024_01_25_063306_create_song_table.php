<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id('songid');
<<<<<<< HEAD
            $table->text('songimage',100);
            $table->text('songname',70);
=======
            $table->string('songname', 70);
>>>>>>> 92400b0f8ebfda68f94b825cc564f7c1004af75f
            $table->text('songpath');
            $table->string('duration', 8);
            $table->date('releasedate');
            // $table->id('artistid')->unsigned();;
            //$table->id('categoryid')->unsigned();;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song');
    }
};
