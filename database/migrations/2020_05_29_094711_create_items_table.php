<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('items', function (Blueprint $table) {
			$table->increments('id')->comment('商品ID');
			$table->string('name', 64)->comment('商品名')->nullable();
			$table->string('description', 255)->comment('商品説明')->nullable();
			$table->integer('price')->comment('価格')->nullable();
			$table->integer('stock_val')->comment('在庫数')->nullable();
			$table->timestamp('updated_at')->useCurrent()->nullable();
			$table->timestamp('created_at')->useCurrent()->nullable();
			$table->softDeletes();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::dropIfExists('items');
	}
}
