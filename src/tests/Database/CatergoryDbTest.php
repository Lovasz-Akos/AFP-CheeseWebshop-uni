<?php

namespace Tests\Database;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class CategoryDbTest extends TestCase
{
    public function testCategoryDatabaseConnection(): void
    {
        try{
            $result = Category::all();
            self::assertNotNull($result);
        }catch (\Exception $exception){
            self::fail($exception->getMessage());
        }
    }

    public function testCategoryStructure(): void
    {
        $subject = Category::random();

        self::assertNotNull($subject->brand);
        
    }

    public function testCategoryModelConnections(): void
    {
        $subject = Category::random();

        self::assertNotNull($subject->category);

        self::assertInstanceOf(BelongsTo::class, $subject->category());
    }
}
