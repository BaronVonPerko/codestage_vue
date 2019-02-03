<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingsPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_only_allows_logged_in_users_to_access_the_settings_page() {
        $this->get(route('settings'))
            ->assertRedirect(route('login'));

        $this->actingAs(factory(User::class)->create())
            ->get(route('settings'))
            ->assertOk();
    }
}
