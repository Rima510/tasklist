<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    //ملاحظه داخل المايقريشن بنحط الاعمدهو البيانات
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //الداتا نوع البيانات في اعمده الجدول
            $table->string('name') ;
            $table->integer('user_id') ;
            $table->text('description') ;

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
        Schema::dropIfExists('products');
    }
};
