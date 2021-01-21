<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ref_category';

    protected $fillable = [
        'category',
        'created_by',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function sub_category(){
        return $this->hasOne('App\Models\SubCategory', 'category_id', 'id');
    }

    public function sub_categories(){
        return $this->hasMany('App\Models\SubCategory', 'category_id', 'id');
    }


}
