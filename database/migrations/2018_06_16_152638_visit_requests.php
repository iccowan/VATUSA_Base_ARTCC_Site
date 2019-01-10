<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VisitRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_requests', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cid');
            $table->string('name');
            $table->string('email');
            $table->integer('rating');
            $table->string('home');
            $table->text('reason');
            $table->integer('status');
			$table->text('reject_reason')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('visit_requests');
    }
}
