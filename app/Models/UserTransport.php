<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserTransport
 *
 * @property int $id
 * @property int $mark_model_id
 * @property int $user_id
 * @property string $car_date
 * @property string|null $dimensions
 * @property string|null $number
 * @property string|null $registration
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereCarDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereMarkModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTransport whereUserId($value)
 * @mixin \Eloquent
 */
class UserTransport extends Model
{
    use HasFactory;
}
