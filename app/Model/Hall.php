<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    protected $table = 'halls';
    protected $fillable = [
        'name',
        'number',
        'capacity',
        'branch_id',
        'is_active',
    ];
    protected $casts = [
        'number' => 'integer'
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function table(): HasMany
    {
        return $this->hasMany(Table::class, 'hall_id', 'id');
    }
}
