<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    
    // protected $fillable = ['title', 'read_in_minutes', 'category', 'description', 'body'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the author of the blog
     *
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function blogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function scopeFilterBlog(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('title', 'like', "%{$search}%")
        );

        $query->when(
            $filters['blogCategory'] ?? false,
            fn ($query, $blogCategory) =>
            $query->whereHas('blogCategory', fn($query) => $query->where('slug', $blogCategory))
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}
