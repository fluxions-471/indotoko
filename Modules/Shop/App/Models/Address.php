<?php

namespace Modules\Shop\App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\AddressFactory;

class Address extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_addresses';

    protected $fillable = [];
    
    protected static function newFactory(): AddressFactory
    {
        return AddressFactory::new();
    }
}
