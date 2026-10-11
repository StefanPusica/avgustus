<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    public function test_admin_panel_page_renders_hero(): void
    {
        $response = $this->get(route('admin-panel'));

        $response->assertOk();
        $response->assertSee('ADMIN PANEL ZA VAŠ APARTMAN');
        $response->assertSee('Započni besplatno');
    }
}
