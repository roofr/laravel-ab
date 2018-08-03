<?php

namespace ComoCode\LaravelAb\App;

use Illuminate\Database\Eloquent\Model;

class Experiments extends Model
{
    protected $table = 'ab_experiments';
    protected $fillable = ['experiment', 'goal'];

    public function events()
    {
        return $this->hasMany('ComoCode\LaravelAb\App\Events');
    }

    public function goals(){
        return $this->hasMany('ComoCode\LaravelAb\App\Goal', 'goal', 'goal');
    }
}
