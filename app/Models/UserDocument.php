<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserDocument
 *
 * @property int $id
 * @property int $user_id
 * @property string $doc_number
 * @property string $deadline
 * @property string $image_1
 * @property string $image_2
 * @property string $person_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereDocNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument wherePersonImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereUserId($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\UserDocumentFactory factory(...$parameters)
 */
class UserDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'doc_number', 'deadline', 'image_1', 'image_2', 'person_image',
        'created_at', 'updated_at',
    ];
}
