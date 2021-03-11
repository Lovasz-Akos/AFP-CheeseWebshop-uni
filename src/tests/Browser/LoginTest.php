<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->runDatabaseMigrations();
        Artisan::call('db:seed');
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });

        $this->browse(function ($browser) {
            $email = User::first()->email;

            /** @var Browser $browser */
            $browser->visit('/login')
                ->type('email', $email)
                ->type('password', 'password')
                ->press('Login')
                ->pause(2000)
                ->assertPathIs('/home')->screenshot('home');
        });
    }
}
