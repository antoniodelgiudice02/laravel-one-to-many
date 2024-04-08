<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'type_id'];

    public function getContent($n_char){
        return (strlen($this->content) > $n_char) ? substr($this->content, 0, $n_char) . '...' : $this->content;
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
