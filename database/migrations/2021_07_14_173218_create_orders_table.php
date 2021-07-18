<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->dateTime('time_borrow')->default(now());
            $table->dateTime('time_promise_pay')->nullable();
            $table->dateTime('time_pay')->nullable();
            $table->integer('status')->default(1);
            $table->string('address');
            $table->foreignId('created_by')->constrained('admins');
            $table->foreignId('updated_by')->constrained('admins');
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
        Schema::dropIfExists('orders');
    }
}
