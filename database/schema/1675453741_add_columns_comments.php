<?php

use Core\Database\Migration;
use Core\Database\Schema;
use Core\Database\Table;

return new class implements Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Table $table) {
            $table->addColumn(function (Table $table) {
                $table->string('uuid')->nullable()->unique();
            });
        });
    }

    /**
     * Kembalikan seperti semula.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Table $table) {
            $table->dropColumn('uuid');
        });
    }
};
