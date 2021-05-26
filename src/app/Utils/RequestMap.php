<?php


namespace App\Utils;


use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RequestMap
{
    public static function nameToID(FormRequest $request, string $model, string $byColumn = 'name'): array
    {
        $snake = Str::of($model)->afterLast('\\')->snake();
        $validated = $request->validated();
        if (!$request->has("{$snake}_id")) {
            $validated["{$snake}_id"] = $model::where($byColumn, 'LIKE', $request->get($snake))?->first()?->id;
            unset($validated[$model]);
        }
        return $validated;
    }
}