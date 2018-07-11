<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    protected $table = 'pasteles';
    
    public function scopeSabor($query, $sabor){
       return $query->where('sabor',$sabor);
   }
}
