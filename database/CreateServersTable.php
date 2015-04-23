<?php
use Illuminate\Database\Capsule\Manager as Capsule;
class CreateServersTable {
    protected $capsule;
    public function __construct(Capsule $capsule){
        $this->capsule = $capsule;
    }
    public function up() {
        $this->capsule->schema('servers', function($table){
           $table->increments('id');
            $table->string('name');
            $table->string('ip');

        });
    }

}