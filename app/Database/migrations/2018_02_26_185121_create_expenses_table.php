<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('airline_id')->nullable();

            $table->string('name');
            $table->unsignedInteger('amount');
            $table->unsignedTinyInteger('type');
            $table->boolean('charge_to_user')->nullable()->default(false);
            $table->boolean('multiplier')->nullable()->default(0);
            $table->boolean('active')->nullable()->default(true);

            # ref fields are expenses tied to some model object
            # EG, the airports has an internal expense for gate costs
            $table->string('ref_class')->nullable();
            $table->string('ref_class_id', 36)->nullable();

            $table->timestamps();

            $table->index(['ref_class', 'ref_class_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
