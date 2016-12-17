<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'John Parrado',
            'email' => 'parradojohn1421727@gmail.com',
            ]);
        $this->actingAs($user,'api')
            ->visit('api/user')
             ->see('John Parrado')
             ->see('parradojohn1421727@gmail.com');
    }
}
