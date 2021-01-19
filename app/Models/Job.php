<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'details', 'price'];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public static function search($search)
    {
        return empty($search) ? static::query() : static::where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('type_id', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('details', 'like', '%' . $search . '%');
    }
}
