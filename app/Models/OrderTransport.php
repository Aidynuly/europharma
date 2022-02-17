<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderTransport
 *
 * @property int $id
 * @property int $order_id
 * @property int $transport_id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderTransport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OrderTransport extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'transport_id',
        'type',
        'created_at',
        'updated_at',
    ];
}
