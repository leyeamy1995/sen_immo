<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerrainsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'terrains';

    /**
     * Run the migrations.
     * @table terrains
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('code');
            $table->unsignedBigInteger('biens_id');

            $table->index(["biens_id"], 'fk_terrains_biens1_idx');

            $table->unique(["code"], 'code_UNIQUE');

            $table->unique(["uuid"], 'uuid_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('biens_id', 'fk_terrains_biens1_idx')
                ->references('id')->on('biens')
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
