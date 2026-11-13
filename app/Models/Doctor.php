<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'Doctors';

    /**
     * The primary key (change it if yours isn't "id").
     */
    protected $primaryKey = 'Id';

    /**
     * Set to false if your table has no created_at / updated_at columns.
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Name',
        'Degree',
        'BMDC number',
        'Chamber',
        'Signature',
    ];
}