<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\EventReg;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\eventRegController
 */
class eventRegControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $eventRegs = eventReg::factory()->count(3)->create();

        $response = $this->get(route('event-reg.index'));

        $response->assertOk();
        $response->assertViewIs('eventReg.index');
        $response->assertViewHas('eventRegs');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\eventRegController::class,
            'store',
            \App\Http\Requests\eventRegStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('event-reg.store'));

        $response->assertRedirect(route('eventReg.index'));
        $response->assertSessionHas('eventReg.id', $eventReg->id);

        $this->assertDatabaseHas(eventRegs, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $eventReg = eventReg::factory()->create();

        $response = $this->get(route('event-reg.show', $eventReg));

        $response->assertOk();
        $response->assertViewIs('eventReg.show');
        $response->assertViewHas('eventReg');
    }
}
