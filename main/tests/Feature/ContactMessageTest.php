<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_stores_message(): void
    {
        $response = $this->post(route('contact_store'), [
            'name' => 'John Carter',
            'email' => 'john@example.com',
            'phone' => '+62-811-9007-1725',
            'company' => 'Eclectic',
            'message' => 'Hello there',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('status');

        $this->assertDatabaseHas('contact_messages', [
            'email' => 'john@example.com',
            'company' => 'Eclectic',
        ]);
    }
}
