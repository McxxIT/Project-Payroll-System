<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'userID', 
        'firstname',
        'type', 
        'lastname', 
        'email', 
        'username', 
        'password',
        'address', 
        'contact', 
        'birthdate', 
        'gender', 
        'status', 
        'nationality',
        'department_id',
        'position_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Define the relationship with Position
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    // Define the relationship with Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
}
