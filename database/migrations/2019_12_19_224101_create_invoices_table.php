<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('payment_mode_id');
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('cascade');
            $table->foreign('payment_mode_id')
                  ->references('id')
                  ->on('payment_modes')
                  ->onDelete('cascade');
        
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
        Schema::dropIfExists('invoices');
    }
}
