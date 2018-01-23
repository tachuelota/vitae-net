<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPageTest extends TestCase
{
    use RefreshDatabase;

    public function testHasPatient()
    {
        $user = factory(\App\User::class)->states('admin')->create();
        $patient = factory(\App\Patient::class)->create();
        $response = $this->actingAs($user)->get('/patients/' . $patient->medical_record_number);
        //$response->assertSee('<h3>' . $patient->first_name . ' ' . $patient->last_name . '</h3>');
        //$response->assertSee('<h5><b><u>First Name:</u></b></h5>');
        //$response->assertSee('<p>' . $patient->first_name . '</p>');
        //$response->assertSee('<h5><b><u>Last Name:</u></b></h5>');
        //$response->assertSee('<p>' . htmlspecialchars($patient->last_name, ENT_QUOTES | ENT_HTML401) . '</p>');
        //$response->assertSee('<h5><b><u>Date Of Birth:</u></b></h5>');
        //$response->assertSee('<p>' . $patient->date_of_birth . '</p>');
        //$response->assertSee('<h5><b><u>Sex:</u></b></h5>');
        //$response->assertSee('<p>' . ($patient->sex ? 'Male' : 'Female') . '</p>');
        //$response->assertSee('<h5><b><u>Physician</u></b></h5>');
        //$response->assertSee('<p>' . htmlspecialchars($patient->physician, ENT_QUOTES | ENT_HTML401) . '</p>');
        //$response->assertSee('<h5><b><u>Room:</u></b></h5>');
        //$response->assertSee('<p>' . $patient->room . '</p>');
        $response->assertSee(htmlspecialchars($patient->first_name . ' ' . $patient->last_name, ENT_QUOTES | ENT_HTML401));
        $response->assertSee('Date Of Birth:');
        $response->assertSee($patient->date_of_birth);
        $response->assertSee('Sex:');
        $response->assertSee($patient->sex ? '1' : '0');
        $response->assertSee('Physician');
        $response->assertSee(htmlspecialchars($patient->physician, ENT_QUOTES | ENT_HTML401));
    }
}
