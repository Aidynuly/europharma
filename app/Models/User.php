<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $city_id
 * @property string $phone
 * @property string|null $password
 * @property string|null $name
 * @property string|null $surname
 * @property string $role
 * @property string $type
 * @property string|null $date
 * @property string|null $iin
 * @property string|null $avatar
 * @property string|null $device_token
 * @property string|null $promocode
 * @property int $actived
 * @property string|null $phone_verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePromocode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    const TYPE_HIRED = 'hired';
    const TYPE_COMPANY = 'company';
    const ROLE_ADMIN = 'admin';
    const ROLE_MODERATOR = 'moderator';
    const ROLE_USER = 'user';

    protected $fillable = [
        'city_id',
        'phone',
        'email',
        'password',
        'name',
        'surname',
        'role',
        'type',
        'date',
        'avatar',
        'access_token',
        'iin',
        'promocode',
        'actived',
        'created_at',
        'updated_at',
        'phone_verified'
    ];

    protected function isHired(): bool
    {
        return $this->type === self::TYPE_HIRED;
    }

    protected function isCompany(): bool
    {
        return $this->type === self::TYPE_COMPANY;
    }

    protected function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    protected function isUser(): bool
    {
        return $this->role === self::ROLE_USER;
    }

    protected function isModerator(): bool
    {
        return $this->role === self::ROLE_MODERATOR;
    }
}
