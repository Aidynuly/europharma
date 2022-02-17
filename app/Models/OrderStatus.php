<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderStatus
 *
 * @property int $id
 * @property int $order_id
 * @property int $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereUserId($value)
 * @mixin \Eloquent
 */
class OrderStatus extends Model
{
    use HasFactory;

    const STATUS_SEND = 'send';
    const STATUS_PROCESS = 'in_process';
    const STATUS_ACCEPT = 'accepted';
    const STATUS_DECLINED = 'declined';

    protected $fillable = [
        'order_id',
        'user_id',
        'status',
        'created_at',
        'updated_at',
    ];
}
