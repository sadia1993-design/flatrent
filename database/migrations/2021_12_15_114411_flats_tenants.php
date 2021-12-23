<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FlatsTenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats_tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->references('id')->on('flats');
            $table->foreignId('tenant_id')->references('id')->on('tenants');
            $table->decimal('rent_amount', $precision = 8, $scale = 2);
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
