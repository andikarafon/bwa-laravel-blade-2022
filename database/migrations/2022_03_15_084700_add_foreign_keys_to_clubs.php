<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->foreign('stadiums_id', 'stadiums_id_fk1')->references('id')->on('stadiums')->onUpdate('CASCADE')->onDelete('RESTRICT');
            //onUpdate('CASCADE') artinya Tabel dapat dirubah ketika TABLE di update
            //OnDelete('RESTRICT') artinya Tabel/Record tidak dapat dihapus
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropForeign('stadiums_id_fk1');
        });
    }
}
