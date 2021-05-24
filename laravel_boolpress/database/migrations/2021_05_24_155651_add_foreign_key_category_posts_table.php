<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyCategoryPostsTable extends Migration
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
            $table->unsignedBigInteger('category_id')->nullable();

            // definisce la foreign key e la correlazione tra le due entità   
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
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
        
        $table->dropForeing('posts_category_id_foreign');
        $table->dropColumn('category_id');
        });
    }
}
