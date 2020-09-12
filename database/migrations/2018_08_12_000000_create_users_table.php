<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
//            $table->string('prenom');
            $table->string('email')->unique();
            $table->foreignId("adresse_id")->nullable()->references("id")->on("adresses");
            $table->bigInteger("cellier_id")->nullable();
            $table->timestamp('email_verified_at')->nullable();
//            $table->string('type');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Génère des données de test
        factory(App\User::class, 2)->create();

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
}
