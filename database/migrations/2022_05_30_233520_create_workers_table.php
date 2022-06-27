<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');     
            $table->enum('city', ['cairo','alex','portsaid','behaira','sharkia','gharbia','mounfia']);
            $table->string('region');
            $table->enum('gender', ['male','female']);   
            $table->enum('service',['select','sbaka','negara','nasha','tabreed ','kheta','nazafa','kahrba','hada',' balat ','tamreed','chelidern','food','other']);       
            $table->string('hour'); 
            $table->string('photo') ->nullable(); 
            $table->string('about');   
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
