<?php

namespace Tests\Feature;

use Tests\TestCase;

class RequestDemoTest extends TestCase
{
    public function test_request_demo_page_renders_form_and_steps(): void
    {
        $response = $this->get(route('request-demo'));

        $response->assertOk();
        $response->assertSee('Zatražite');
        $response->assertSee('Zakaži demo');
        $response->assertSee('Šta vas očekuje na');
    }

    public function test_valid_request_redirects_with_status(): void
    {
        $response = $this->post(route('request-demo.store'), [
            'name' => 'Petar Petrović',
            'email' => 'petar@primer.rs',
            'phone' => '641234567',
            'property' => 'Apartmani Sunce',
            'units' => '2-5',
            'products' => ['tv', 'admin'],
        ]);

        $response->assertRedirect(route('request-demo'));
        $response->assertSessionHas('status');
    }

    public function test_required_fields_are_validated(): void
    {
        $response = $this->post(route('request-demo.store'), ['units' => '100', 'products' => ['nepostojeci']]);

        $response->assertSessionHasErrors(['name', 'email', 'phone', 'property', 'units', 'products.0']);
        $response->assertSessionDoesntHaveErrors('message');
    }
}
