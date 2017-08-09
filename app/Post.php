<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts'; // si quieres cambiar el nombre de posts
    // Primary Key
    public $primaryKey = 'id'; // si quieres cambiar el default ID
    // Timestamps
    public $timestamps = true; // en false no habria datos de tiempo

}
