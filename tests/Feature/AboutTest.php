<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutTest extends TestCase
{
    public function test_about_page_renders_all_sections(): void
    {
        $response = $this->get(route('about'));

        $response->assertOk();
        $response->assertSeeInOrder([
            'Bolje gostoprimstvo',
            'Vaš brend,',
            'Postanite deo promene.',
            'Unapređenje poslovanja',
            'Tehnička modernizacija',
            'Izgradnja ličnog brenda',
            'Zajedno gradimo',
        ]);
    }
}
