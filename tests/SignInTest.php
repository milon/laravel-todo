<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class SignInTest extends TestCase
{
    //use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testViewSignInForm()
    {
        $this->visit('/')
            ->click('Sign In')
            ->seePageIs('/login')
            ->see('Sign In');
    }

    public function testSignInFunctionality()
    {
        $user = factory(User::class)->create();

        $this->visit('/login')
            ->type($user->email, 'email')
            ->type('password', 'password')
            ->press('Sign In')
            ->seePageIs('/todo')
            ->see('Logged in successfully');
    }

    public function testSignOut()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/todo')
            ->click('Sign Out')
            ->seePageIs('/')
            ->see('Logged out successfully');
    }

}
