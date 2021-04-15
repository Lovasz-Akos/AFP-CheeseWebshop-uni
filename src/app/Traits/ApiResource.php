<?php


namespace App\Traits;


use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @method static Model|null first()
 * @method static Model|null find(int|string $id)
 * @method static int count()
 * @method static Builder latest()
 * @method static Builder inRandomOrder()
 * @method static Model create(array $validated)
 * @method static Builder where(string $field, mixed $operatorOrEqualsValue, mixed $value = null)
 * @method static Builder whereNotNull(string $field)
 * @method static Builder whereHas(string $connection, Closure $param)
 */

trait ApiResource
{

    public static function latestOne(): Model
    {
        return self::latest()->first();
    }

    public static function random(): Model
    {
        return self::inRandomOrder()->first();
    }

    public static function sample(int $number): Collection{
        return self::inRandomOrder()->limit($number)->get();
    }
}