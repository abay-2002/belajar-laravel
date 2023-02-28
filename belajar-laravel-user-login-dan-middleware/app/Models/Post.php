<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $user) => 
            $query->whereHas('user', fn() => 
                $query->where('username', $user)
            )
        );
    }

    // relate dengan model category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // Customizing The Key
    // Sometimes you may wish to resolve Eloquent models using a column other than id. To do so, you may specify the column in the route parameter definition:
    // If you would like model binding to always use a database column other than id when retrieving a given model class, you may override the getRouteKeyName method on the Eloquent model:
    public function getRouteKeyName(){
        return 'slug';
    }
}
