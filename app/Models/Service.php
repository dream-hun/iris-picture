<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'price', 'featured_image'];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function formattedPrice(): string
    {
        return Money::CAD($this->price)->format();
    }
}
