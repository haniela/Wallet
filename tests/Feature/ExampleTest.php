<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire\Livewire;
use App\Wallet;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

    /** @test */
    function contacts_table_is_searchable()
    {
        factory(Wallet::class)->create(['tags' => 'Personal']);
        factory(Wallet::class)->create(['tags' => 'Sante']);

        Livewire::test('contacts-table')
            ->assertSee('Personal')
            ->assertSee('Sante')
            ->set('search', 'Personal')
            ->assertSee('Personal')
            ->assertDontSee('Sante');
    }
}
