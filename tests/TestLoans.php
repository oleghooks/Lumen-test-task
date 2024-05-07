<?php

namespace Tests;


use App\Models\Loan;

class TestLoans extends TestCase
{


    public function testCreate():void
    {
        $response = $this->json('POST', '/api/loans', ['person' => 'Ivan Ivanov', 'total' => '15000']);
        $response->seeJson([
            'status_code' => "200",
        ]);
    }

    public function testEdit():void
    {
        $loan = Loan::where('person', 'Ivan Ivanov')->first();
        $response = $this->json('PUT', '/api/loans/'.$loan->id, ['person' => 'Ivan Ivanov', 'total' => '40000']);
        $response->seeJson([
            'status_code' => "200",
        ]);

    }

    public function testInfo():void
    {

        $loan = Loan::where('person', 'Ivan Ivanov')->first();
        $response = $this->json('GET', '/api/loans/'.$loan->id);
        $response->seeJson([
            'status_code' => "200",
        ]);
    }

    public function testList():void
    {
        $this->json('GET', '/api/loans')
            ->seeJson([
                'status_code' => "200",
            ]);
    }

    public function testDelete():void
    {
        $loan = Loan::where('person', 'Ivan Ivanov')->first();
        var_dump($loan->id);
        $response = $this->json('DELETE', '/api/loans/'.$loan->id);
        $response->seeJson([
            'status_code' => "200",
        ]);
    }
}
