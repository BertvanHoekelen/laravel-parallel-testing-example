<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest2 extends TestCase
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

        self::assertSame('foo', $user->username);
    }
    public function testBasicTest2()
    {
        $user = User::query()->create([
            'username' => 'foo',
            'name' => 'Test',
            'email' => 'foo@example.com',
            'password' => bcrypt('a')
        ]);

        self::assertSame('foo', $user->username);
    }
    public function testBasicTest3()
    {
        $user = User::query()->create([
            'username' => 'foo',
            'name' => 'Test',
            'email' => 'foo@example.com',
            'password' => bcrypt('a')
        ]);

        self::assertSame('foo', $user->username);
    }
}
