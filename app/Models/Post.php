<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'author_id',
        'tagss'
    ];

    //Cria dois atributos ao 
    protected $appends = ['author', 'tags'];

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function tagss()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    //
    public function getAuthorAttribute()
    {
        return Author::find($this->attributes['author_id'])->name;
    }
    public function getTagsAttribute()
    {
        $data = [];
        foreach (Post::find($this->attributes['id'])->tagss()->get() as $value) {
            $data [] = $value->tag;
        }
        return  $data;
    }
}
