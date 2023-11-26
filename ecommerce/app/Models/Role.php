<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','lable','permission'];

    public function users(){
        return $this->belongsToMany(User::class);
    }    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    // public function permission(){
    //     return $this->belongsToMany(permission::class);
    // }
}
