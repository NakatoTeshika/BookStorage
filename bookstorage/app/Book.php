<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';
    protected $fillable = ['Name','Price','Year_of_publishing','Number_of_copies', 'Number_of_pages','Description', 'Genre_ID', 'Binding_ID', 'Chiper_Public_house'];
    // protected $fillable = ['Genre_ID'];
    // protected $fillable = ['Binding_ID'];
    // protected $fillable = ['Chiper_Public_house'];
}
