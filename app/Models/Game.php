<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'games';
    protected $guarded = [];

    public function developer(){
        return $this->belongsTo(Developer::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
    public function user(){
        return $this->belongsTo(User::class);        
    }
}
