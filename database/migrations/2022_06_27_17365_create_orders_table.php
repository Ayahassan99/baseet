<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float("number_of_hours")->nullable();
            $table->float("price")->nullable();
            $table->string("type");
            $table->string("status")->default("pending");
            $table->foreignId("userid")->constrained('users')->onDeleteCascade();
            $table->foreignId("workerid")->constrained('workers')->onDeleteCascade();
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
        //
    }
}
