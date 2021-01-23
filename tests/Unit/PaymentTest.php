<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = factory(\App\Payment::class, 1)->make([
            'payment_name' => 'Test',
        ]);
        return $this->assertDatabaseHas('payment', [
            'payment_name' => 'Test',
        ]);
    }
}
