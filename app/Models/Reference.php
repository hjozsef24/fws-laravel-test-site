<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Reference extends Model
{
	 protected $fillable = [
		'title',
		'image',
	];

    protected static function booted(): void
    {
        static::deleting(function (Reference $reference) {
            Storage::disk('public')->delete($reference->image);
        });
    }
}
