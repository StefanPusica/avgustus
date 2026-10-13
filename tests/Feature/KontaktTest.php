<?php

namespace Tests\Feature;

use Tests\TestCase;

class KontaktTest extends TestCase
{
    public function test_kontakt_page_renders_form_and_faq(): void
    {
        $response = $this->get(route('kontakt'));

        $response->assertOk();
        $response->assertSee('Kontaktirajte');
        $response->assertSee('Pošalji poruku');
        $response->assertSee('Brzi odgovori na');
    }

    public function test_valid_message_redirects_with_status(): void
    {
        $response = $this->post(route('kontakt.store'), [
            'name' => 'Petar Petrović',
            'email' => 'petar@primer.rs',
            'phone' => '641234567',
            'topic' => 'demo',
            'message' => 'Zanima me demo aplikacije.',
        ]);

        $response->assertRedirect(route('kontakt'));
        $response->assertSessionHas('status');
    }

    public function test_required_fields_are_validated(): void
    {
        $response = $this->post(route('kontakt.store'), ['topic' => 'nepostojeca']);

        $response->assertSessionHasErrors(['name', 'email', 'topic', 'message']);
        $response->assertSessionDoesntHaveErrors('phone');
    }
}
