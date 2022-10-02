<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'title', 'location', 'email', 'tags', 'website', 'description'];

    public function scopeFilter($query, array $filters) {
        //null coalescing
        if($filters['tags'] ?? false) {
            $query->where('tags', 'like', '%' .$filters['tags']. '%');
        }

        if ($filters['location'] ?? false) {
            $query->where('location', 'like', '%' .$filters['location']. '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' .$filters['search'] . '%')
                ->orWhere('company', 'like', '%'.$filters['search']. '%')
                ->orWhere('description', 'like', '%'.$filters['search']. '%');
        }
    }
}
