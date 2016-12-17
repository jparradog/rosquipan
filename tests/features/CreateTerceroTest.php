<?php

class CreateTerceroTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_un_usuario_crear_un_tercero()
    {

        // Having (datos y usuario) - teniendo
        $user = $this->defaultUser();

        // When - cuando
        $this->actingAs($user)
            ->visit(route('tercero.create'))
            ->type('John', 'primerNombre')
            ->type('Alberto', 'segundoNombre')
            ->type('Parrado', 'primerApellido')
            ->type('Gordillo', 'segundoApellido')
            ->type('1121844372', 'numeroDocumento')
            // ->check('siCredito')
            ->type('2000000', 'valorMaxCredito')
            // ->check('activo')
            ->press('Guardar');

        // Then - entonces
        $this->seeInDatabase('terceros',[
            'primerNombre' => 'John',
            'segundoNombre' => 'Alberto',
            'primerApellido' => 'Parrado',
            'segundoApellido' => 'Gordillo',
            'numeroDocumento' => '1121844372',
            // 'siCredito' => true,
            'valorMaxCredito' => '2000000',
            // 'activo' => true,
        ]);

        // Test a user is redirected to the tercero details after creating it.
        $this->see('John');
    }
}