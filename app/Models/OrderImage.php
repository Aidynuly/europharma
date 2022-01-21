<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderImage
 *
 * @property int $id
 * @property int $order_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OrderImageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OrderImage extends Model
{
    use HasFactory;
}
