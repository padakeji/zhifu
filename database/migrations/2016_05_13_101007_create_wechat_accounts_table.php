<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id')->unsigned()->unique();;
            $table->string('name');
            $table->string('number');
            $table->string('original_id');
            $table->string('app_id');
            $table->string('app_secret');
            $table->string('token');
            $table->string('aes_key');
            $table->string('mch_id');
            $table->string('mch_key');
            $table->timestamps();

            $table->foreign('merchant_id')->references('id')->on('merchants')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wechat_accounts');
    }
}
