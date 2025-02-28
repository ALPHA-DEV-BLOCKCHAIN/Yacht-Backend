<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "description",
        "price",
        "status"
    ];
}
// package=new Package()
// package->open()
// package->close()

// static
// package::
// all()
// where()
// whereHas()
// Not()


// package->name
// package->details

// ->get()
// ->pluck()