<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\PersonalAccessToken;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest1()
    {
        $user = User::query()->create([
            'username' => 'foo',
            'name' => 'Test',
            'email' => 'foo@example.com',
            'password' => bcrypt('a')
        ]);



        PersonalAccessToken::query()->create();

        self::assertSame('foo', $user->username);
    }
}
