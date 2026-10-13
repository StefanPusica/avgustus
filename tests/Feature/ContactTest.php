<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTest extends TestCase
{
    public function test_contact_page_renders_form_and_faq(): void
    {
        $response = $this->get(route('contact'));

        $response->assertOk();
        $response->assertSee('Kontaktirajte');
        $response->assertSee('Pošalji poruku');
        $response->assertSee('Brzi odgovori na');
    }

    public function test_valid_message_redirects_with_status(): void
    {
        $response = $this->post(route('contact.store'), [
            'name' => 'Petar Petrović',
            'email' => 'petar@primer.rs',
            'phone' => '641234567',
            'topic' => 'demo',
            'message' => 'Zanima me demo aplikacije.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('status');
    }

    public function test_required_fields_are_validated(): void
    {
        $response = $this->post(route('contact.store'), ['topic' => 'nepostojeca']);

        $response->assertSessionHasErrors(['name', 'email', 'topic', 'message']);
        $response->assertSessionDoesntHaveErrors('phone');
    }
}
