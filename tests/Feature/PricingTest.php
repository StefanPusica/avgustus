<?php

namespace Tests\Feature;

use Tests\TestCase;

class PricingTest extends TestCase
{
    public function test_pricing_page_renders_plans_and_comparison(): void
    {
        $response = $this->get(route('pricing'));

        $response->assertOk();
        $response->assertSee('Odaberite plan koji odgovara');
        $response->assertSeeInOrder(['Osnovni', 'Standard', 'Enterprise']);
        $response->assertSee('Najpopularniji');
        $response->assertSee('Šta dobijate uz');
    }
}
