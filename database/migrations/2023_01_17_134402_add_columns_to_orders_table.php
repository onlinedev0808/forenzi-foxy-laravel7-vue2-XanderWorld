<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->float('subtotal')->after('total');
            $table->float('shipping_cost')->after('subtotal');
            $table->float('conai')->after('shipping_cost');
            $table->float('iva')->after('conai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('subtotal');
            $table->dropColumn('shipping_cost');
            $table->dropColumn('conai');
            $table->dropColumn('iva');
        });
    }
}
