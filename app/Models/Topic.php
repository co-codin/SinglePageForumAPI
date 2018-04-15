<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];

    public function scopeLatestFirst($query)
    {
      return $query->orderBy('created_at', 'desc');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function section()
    {
      return $this->belongsTo(Section::class);
    }
}
