<?php

namespace Tests\Feature;

 use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class ExampleTest extends TestCase
{
    public function test_registrar(){
        Artisan::call('migrate');
        //el formulario carga
        $carga = $this->get(route('caregorias'));
        $carga->assertStatus(200)->assertSee('categorias');

        //agregar incorrecto
        $registroMal= $this->post(route('categoria'),[]);
    }

}
