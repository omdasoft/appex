<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    protected $fillable = ['hall','wing','wing_type','area','ammount','company','work_nature','logo','address','name','phone','email','status'];

//    public function getStatusAttribute($val){
//        return $val == 0 ? 'غير مفعل': 'مفعل';
//    }

    public function scopeActive($query){
        return $query->where('status',1);
    }

    public function scopeInactive($query){
        return $query->where('status',0);
    }

    public function getWingTypeAttribute($val){
        return $val == 1 ? 'مشيد':'غير مشيد';
    }

    public function wing(){
        return $this->belongsTo(Wing::class,'wing');
    }

    public function hall(){
        return $this->belongsTo(Hall::class,'hall');
    }

    use HasFactory;
}
