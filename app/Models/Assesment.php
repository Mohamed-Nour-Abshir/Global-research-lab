<?php

namespace App\Models;

use App\Mail\AssesmentMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Assesment extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'phone', 'study_level', 'country'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "mdnourabshir@gmail.com";
            Mail::to($adminEmail)->send(new AssesmentMail($item));
        });
    }
}
