<?php
// app/Models/Respon.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    use HasFactory;

    protected $table = 'respon';

    protected $fillable = [
        'ticket_id', 'user_id', 'response', 'created_at',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

