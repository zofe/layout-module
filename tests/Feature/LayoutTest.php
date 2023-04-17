<?php

namespace App\Modules\Layout\tests\Feature;

use App\Models\User;
use App\Modules\Auth\Database\Seeders\DatabaseSeederTests;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Modules\Auth\tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;

class LayoutTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::factory()->create([
            'email' => 'admin@tickets.local',
            'password' => Hash::make('12345678'),
        ]);

    }

    public function test_can_see_frontend_layout()
    {
        $this->get(route('layout.test.frontend'))
            ->assertSuccessful()
            ->assertSee('test frontend');
    }

    public function test_can_see_admin_layout()
    {
        $this->actingAs($this->admin)->get(route('layout.test.admin'))
            ->assertSuccessful()
            ->assertSee('test admin');
    }

//    public function test_can_see_blade_frontend_layout()
//    {
//        $this->actingAs($this->admin)->blade('layout::test-frontend')
//            ->assertSee('test frontend');
//    }
//
//    public function test_can_see_blade_admin_layout()
//    {
//        $this->actingAs($this->admin)
//            ->blade('layout::test-admin')
//            ->assertSee('test admin');
//    }



}
