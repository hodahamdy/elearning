<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrySection extends Model
{
    use HasFactory;
protected $table = 'entry_section';
 protected $fillable = [
    'title','pragraph','img'
 ];
}
