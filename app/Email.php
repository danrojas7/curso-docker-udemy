<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

use Illuminate\Database\Eloquent\Model;

class Emaill extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'email'
    ];
}
?>