<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessFunction extends Model
{
    /** @use HasFactory<\Database\Factories\AccessFunctionFactory> */
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'access_functions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'access_id',
        'function_id',
    ];

    /**
     * Relationship: AccessFunction → AccessLevel (Many-to-One)
     */
    public function accessLevel()
    {
        return $this->belongsTo(AccessLevel::class, 'access_id');
    }

    /**
     * Relationship: AccessFunction → FunctionModel (Many-to-One)
     */
    public function function()
    {
        return $this->belongsTo(FunctionModel::class, 'function_id');
    }
}
