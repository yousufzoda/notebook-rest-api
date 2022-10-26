<?php

namespace Tests\Feature;

use App\Models\Notebook;
use Tests\TestCase;

class NotebookApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */



    public function test_get_one_notebook_by_id()
    {

        $notebook = Notebook::inRandomOrder()->first();
        $response = $this->withHeaders([
            'Accept' => 'application/json'
        ])->json('GET','api/v1/notebook/',[
            'car_id' => $notebook->id,
        ]);
        $response
            ->assertOk()
            ->assertJsonStructure(['data']);
    }
}
