<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'task_name',
        'description',
        'status',
        'date',
        'due_time',
    ];

    // Cast date and due_time properly
    protected $casts = [
        'date' => 'datetime:Y-m-d',
        'due_time' => 'datetime:H:i', // ensures you can use ->format('H:i') safely
    ];

    /**
     * Relationship: Task belongs to a staff (User)
     */
    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    /**
     * Accessor for formatted date (optional)
     */
    public function getFormattedDateAttribute()
    {
        return $this->date ? $this->date->format('d-m-Y') : 'N/A';
    }

    /**
     * Accessor for formatted due_time (optional)
     */
    public function getFormattedDueTimeAttribute()
    {
        return $this->due_time ? $this->due_time->format('H:i') : 'N/A';
    }
}
