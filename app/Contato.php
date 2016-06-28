<?php
/**
 * Created by PhpStorm.
 * User: thomaz
 * Date: 28/06/16
 * Time: 01:30
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = "contatos";
    public $timestamps = false;

    protected $fillable = ['name', 'phone', 'gender',
        'email', 'state', 'city'];
}