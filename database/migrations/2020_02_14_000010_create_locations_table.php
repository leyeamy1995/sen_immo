<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'locations';

    /**
     * Run the migrations.
     * @table locations
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
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->unsignedBigInteger('clients_id');
            $table->unsignedBigInteger('biens_id');

            $table->index(["biens_id"], 'fk_locations_biens1_idx');

            $table->index(["clients_id"], 'fk_locations_clients1_idx');

            $table->unique(["uuid"], 'uuid_UNIQUE');

            $table->unique(["numero"], 'numero_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('biens_id', 'fk_locations_biens1_idx')
                ->references('id')->on('biens')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('clients_id', 'fk_locations_clients1_idx')
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
