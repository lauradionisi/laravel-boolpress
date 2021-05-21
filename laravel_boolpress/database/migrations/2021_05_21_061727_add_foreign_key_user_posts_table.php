<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUserPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table)
        {
            // crea la colonna che sarà la foreign key         
            $table->unsignedBigInteger('user_id');

            // definisce la foreign key e la correlazione tra le due entità   
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeing('posts_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
