<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title',
        'description',
        'prority',
        'status'
    ];
    use HasFactory;
    
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
    
    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
