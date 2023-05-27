<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    public function previous(): ?Topic
    {
        return $this->where('id', $this->id - 1)->first();
    }

    public function next(): ?Topic
    {
        return $this->where('id', $this->id + 1)->first();
    }
}
