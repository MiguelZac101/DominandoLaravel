<?php
//php artisan make:model Project
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    //protected $table = "my_table";

    //valor a comparar cuando se pasa el project como parametro
    //por defecto compara con el id
    public function getRouteKeyName(){
        return 'url';
    }

}
