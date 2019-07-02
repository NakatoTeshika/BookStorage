<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
class Author extends Model
{
    protected $table = 'author';
    protected $fillable = ['Name','Surname','Patronymic'];
    public function book()
    {
    	return $this.belongsToMany('App\Book');
    }
}
