<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'tbl_appointments'; // Assuming the table is named 'appointments'

    protected $fillable = [
        'userId',
        'serviceId',
        'bookDate',
        'bookTime',
        'status',
        'paymentMethod',
        'payAmount',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'serviceId');
    }
}
