<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'main_image',

        /**
         * Crud:
         * 1-Creator_id
         * 2-Editor_id
         */
        'creator_id',
        'editor_id'
    ];

    protected $appends = [
        'read_duration',
    ];

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PostCategories::class,'post_categories');
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->HasMany(PostComment::class);
    }

    public function readDurationAttribute(){
        return Str::readDuration($this->content). ' min read';
    }

    //*****************************************************CRUD*******************************************************
    /**
     * @return BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    /**
     * @return BelongsTo
     */
    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'editor_id');
    }
}
