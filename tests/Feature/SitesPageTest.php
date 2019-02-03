<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SitesPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_only_allows_logged_in_users() {
        $this->get(route('sites'))
            ->assertRedirect(route('login'));

        $this->actingAs(factory(User::class)->create())
            ->get(route('sites'))
            ->assertOk();
    }
}
