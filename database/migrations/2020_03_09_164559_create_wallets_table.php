<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('tags');
            $table->string('type');
            $table->double('amount');
            $table->string('file')->nullable();
            $table->date('date');
            /* $table->string('banque');
            $table->string('company'); */
            $table->bigInteger('banque_id')->unsigned();
            $table->foreign('banque_id')
                    ->references('id')
                    ->on('banques')
                    ->onDelete('cascade');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')
                    ->references('id')
                    ->on('companies')
                    ->onDelete('cascade');
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
        Schema::table('wallets', function(Blueprint $table) {
            $table->dropForeign('wallets_banque_id_foreign','wallets_company_id_foreign');
        });
        Schema::dropIfExists('wallets');
    }
}
