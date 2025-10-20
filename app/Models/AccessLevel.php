<?php

namespace App\Models;

use App\Models\FunctionModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccessLevel extends Model
{
    /** @use HasFactory<\Database\Factories\AccessLevelFactory> */
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'access_levels';

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
        'name',
        'description',
    ];

    /**
     * Relationship: AccessLevel ↔ FunctionModel (Many-to-Many)
     */
    public function functions()
    {
        return $this->belongsToMany(FunctionModel::class, 'access_functions', 'access_level_id', 'function_id');
    }

    /**
     * Relationship: AccessLevel → Users (One-to-Many)
     */
    public function users()
    {
        return $this->hasMany(User::class, 'access_id');
    }
}
