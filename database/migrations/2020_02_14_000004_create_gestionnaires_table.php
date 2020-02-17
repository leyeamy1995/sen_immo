<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionnairesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'gestionnaires';

    /**
     * Run the migrations.
     * @table gestionnaires
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('matricule');
            $table->unsignedBigInteger('users_id');

            $table->index(["users_id"], 'fk_gestionnaires_users1_idx');

            $table->unique(["uuid"], 'uuid_UNIQUE');

            $table->unique(["matricule"], 'matricule_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_gestionnaires_users1_idx')
                ->references('id')->on('users')
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
