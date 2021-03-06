<?php

namespace Tests\Unit;
use App\Models\Reply;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function it_has_an_owner()
    {
        $reply = Reply::factory()->create();

        $this->assertInstanceOf('App\User', $reply->owner);
    }
}