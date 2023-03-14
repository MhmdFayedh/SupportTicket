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
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
            ->constrained('labels')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('label_id')
            ->constrained('labels')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            // $table->string('file');
            $table->enum('prority', ['low' , 'mediume', 'high']);     
            $table->enum('status', ['opened', 'closed']); 
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
        Schema::dropIfExists('tickets');
    }
};


// 2023_03_11_103438_ [for categories]
// 2023_03_13_142851_ [For Labels]
// 2023_03_13_142938 [For Tickets]