<?php


namespace Tests\Database;


use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class CategoryDbTest extends TestCase
{
    public function testCategoryDatabaseConnection(): void{
        try{
            $result = Category::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail($e->getMessage());
        }
    }

    public function testCategoryStructure(): void{
        $subject = Category::random();

        self::assertNotNull($subject->id);

        self::assertNotNull($subject->name);

        self::assertNotNull($subject->created_at);
        self::assertNotNull($subject->updated_at);
    }

    public function testCategoryModelConnections(): void{
        $subject = Category::random();

        self::assertNotNull($subject->products);
        self::assertInstanceOf(HasMany::class, $subject->products());
    }
}