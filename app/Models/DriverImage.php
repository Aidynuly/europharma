<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DriverImage
 *
 * @property int $id
 * @property int $transport_id
 * @property string|null $type
 * @property string|null $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DriverImage extends Model
{
    use HasFactory;
}
