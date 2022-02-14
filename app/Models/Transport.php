<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Transport
 *
 * @property int $id
 * @property int $mark_model_id
 * @property string $car_date
 * @property string|null $dimensions
 * @property string|null $number
 * @property string|null $registration
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TransportFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCarDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereMarkModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'mark_model_id',
        'car_date',
        'dimensions',
        'number',
        'registration',
        'image',
        'created_at',
        'updated_at',
    ];
}
