<?php

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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id("supplier_id");
            $table->string("supplier_name");
            $table->string("supplier_company")->nullable();
            $table->string("supplier_mobail");
            $table->string("supplier_address");
            $table->integer("supplier_deu")->nullable();
            $table->string("supplier_status");
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
        Schema::dropIfExists('suppliers');
    }
};
