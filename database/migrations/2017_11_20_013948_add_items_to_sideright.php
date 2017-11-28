<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItemsToSideright extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('siderights', function (Blueprint $table) {
            $table->text('content_text');
            $table->string('content_main', 90);
            $table->string('author', 50);
            $table->string('filter', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('siderights', function (Blueprint $table) {
            $table->dropColumn('content_text');
            $table->dropColumn('content_main', 90);
            $table->dropColumn('author', 50);
            $table->dropColumn('filter', 50);
        });
    }
}
