<?php

namespace Tests\Feature\Http\Controllers\Debayashi;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RankingControllerTest extends TestCase
{
    /**
     * routing test.
     *
     * @return void
     */
    public function testRouting()
    {
        $response = $this->get(route('debayashi.ranking'));

        $response->assertStatus(200);
    }
}
