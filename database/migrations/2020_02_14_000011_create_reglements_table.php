<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReglementsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reglements';

    /**
     * Run the migrations.
     * @table reglements
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
            $table->dateTime('date');
            $table->double('montant');
            $table->string('mode_reglement');
            $table->unsignedBigInteger('ventes_id');
            $table->unsignedBigInteger('clients_id');
            $table->unsignedBigInteger('locations_id');

            $table->index(["ventes_id"], 'fk_reglements_ventes1_idx');

            $table->index(["locations_id"], 'fk_reglements_locations1_idx');

            $table->index(["clients_id"], 'fk_reglements_clients1_idx');

            $table->unique(["uuid"], 'uuid_UNIQUE');

            $table->unique(["numero"], 'numero_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('ventes_id', 'fk_reglements_ventes1_idx')
                ->references('id')->on('ventes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('clients_id', 'fk_reglements_clients1_idx')
                ->references('id')->on('clients')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('locations_id', 'fk_reglements_locations1_idx')
                ->references('id')->on('locations')
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
