<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ventes';

    /**
     * Run the migrations.
     * @table ventes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('numero');
            $table->double('montant');
            $table->double('reliquat');
            $table->dateTime('date');
            $table->unsignedBigInteger('biens_id');
            $table->unsignedBigInteger('clients_id');

            $table->index(["biens_id"], 'fk_ventes_biens1_idx');

            $table->index(["clients_id"], 'fk_ventes_clients1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('biens_id', 'fk_ventes_biens1_idx')
                ->references('id')->on('biens')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('clients_id', 'fk_ventes_clients1_idx')
                ->references('id')->on('clients')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
