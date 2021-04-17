<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'founded', 'description'];

    //Blacklist
    protected $hidden = ['updated_at'];

    //Whitelist
    protected $visible = ['name', 'founded', 'description'];

    //One to Many Relationship - one car has many models
    public function carModels(){
        return $this->hasMany(CarModel::class);
    }

    //DEFINE HAS MANY RELATIONSHIP
    public function engines(){
        return $this->hasManyThrough(
                Engine::class,
                CarModel::class,
                'car_id', //Foreign key on CarModel table
                'model_id' //Foreign key on Engine table
        );
    }
}
