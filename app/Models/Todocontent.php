<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todocontent extends Model
{
    use HasFactory;

    protected $fillable = ['content',];

    public static $rules = array(
        'content' => 'required',
    );
    public function index()
    {
        $items = todocontents::all();
        return view('index', ['items' => $items]);
    }
}
