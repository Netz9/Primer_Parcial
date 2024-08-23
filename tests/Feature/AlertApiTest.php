<?php

namespace Tests\Feature;

use App\Models\Alert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlertTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_alert()
    {
        $alert = Alert::create([
            'name' => 'Test Alert',
            'description' => 'This is a test alert.',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'completion_percentage' => 50,
        ]);

        $this->assertDatabaseHas('alerts', [
            'name' => 'Test Alert',
            'description' => 'This is a test alert.',
        ]);
    }

    /** @test */
    public function it_updates_an_alert()
    {
        $alert = Alert::create([
            'name' => 'Old Alert',
            'description' => 'This is an old alert.',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'completion_percentage' => 30,
        ]);

        $alert->update([
            'name' => 'Updated Alert',
            'completion_percentage' => 60,
        ]);

        $this->assertDatabaseHas('alerts', [
            'name' => 'Updated Alert',
            'completion_percentage' => 60,
        ]);
    }

    /** @test */
    public function it_deletes_an_alert()
    {
        $alert = Alert::create([
            'name' => 'Alert to Delete',
            'description' => 'This alert will be deleted.',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'completion_percentage' => 40,
        ]);

        $alert->delete();

        $this->assertDatabaseMissing('alerts', [
            'name' => 'Alert to Delete',
        ]);
    }
}
