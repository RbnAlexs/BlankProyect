<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposTablePasteles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
     {
         Schema::table('pasteles', function (Blueprint $table) {
             $table->String('nombre');
             $table->enum('sabor',['chocolate', 'vainilla', 'cheesecake']);
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasteles', function(Blueprint $table){
          $table->dropColumn(['nombre', 'sabor']);
        });
        
        //
    }
}
