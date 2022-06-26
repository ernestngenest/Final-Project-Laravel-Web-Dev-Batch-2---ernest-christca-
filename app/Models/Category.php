<?php

namespace App\Models;

use App\Models\Material;
use App\Models\HomeDesign;
use App\Models\InteriorDesign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
    public function home_designs()
    {
        return $this->hasMany(HomeDesign::class);
    }
    public function interior_designs()
    {
        return $this->hasMany(InteriorDesign::class);
    }
    // public function architecture()
    // {
    //     return $this->hasMany(Architecture::class);
    // }
    // public function design()
    // {
    //     return $this->hasMany(Design::class);
    // }
}
