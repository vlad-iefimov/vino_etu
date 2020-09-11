<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBouteillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bouteilles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("code_saq");
            $table->string("pays");
            $table->text("description");
            $table->float("prix_saq");
            $table->string("url_saq");
            $table->string("url_image");
            $table->string("format");
            $table->foreignId("type_id")->references('id')->on('types');
            $table->timestamps();
        });

        // Génère des données de test
        factory(App\Bouteille::class, 20)->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bouteilles');
    }
}
