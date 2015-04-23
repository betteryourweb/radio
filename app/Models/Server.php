<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Server extends Eloquent {
    protected $fillable = ['name','ip', 'fdqn','internal_ip'];

}