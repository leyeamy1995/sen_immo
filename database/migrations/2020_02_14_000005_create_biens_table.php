<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'biens';

    /**
     * Run the migrations.
     * @table biens
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
            $table->double('prix');
            $table->string('adresse');
            $table->string('etat_bien');
            $table->string('description');
            $table->string('superficie');
            $table->string('type_biens', 45);
            $table->string('categorie', 45);
            $table->string('image_url');
            $table->string('image_name');
            $table->string('image_driver', 45);
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->unsignedBigInteger('gestionnaires_id');

            $table->index(["gestionnaires_id"], 'fk_biens_gestionnaires1_idx');

            $table->unique(["uuid"], 'uuid_UNIQUE');

            $table->unique(["numero"], 'numero_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('gestionnaires_id', 'fk_biens_gestionnaires1_idx')
                ->references('id')->on('gestionnaires')
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
