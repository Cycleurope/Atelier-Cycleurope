<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private $product_id;

    public function construct($product_id)
    {
        $this->product_id = $product_id;
        dd($this->product_id);
    }
    
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mmitds')->nullable();
            $table->string('mmitno')->nullable();
            $table->string('index')->nullable();
            // $table->bigInteger('brand_id')->unsigned();
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
