<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaxToOrganizers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisers', function($table) {
            $table->string('tax_name')->default(15);
            $table->float('tax_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organisers', function($table) {
            $table->dropColumn('taxname');
            $table->dropColumn('taxvalue');
        });
    }
}
