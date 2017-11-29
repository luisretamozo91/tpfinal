<?php

use App\Menu;
use Illuminate\Database\Seeder;

class SeederTablaMenu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1 = factory(Menu::class)->create([
            'label' => 'Asistencia',
            'url' => 'asistencia',
            'padre' => 0,
        ]);

        $m2 = factory(Menu::class)->create([
            'label' => 'Alumnos',
            'url' => 'alumnos',
            'padre' => 0,
        ]);

        $m3 = factory(Menu::class)->create([
            'label' => 'Profesores',
            'url' => 'profesores',
            'padre' => 0,
        ]);

        $m4 = factory(Menu::class)->create([
            'label' => 'Grados',
            'url' => 'alta_alumno',
            'padre' => $m2->id,
        ]);

        $m5 = factory(Menu::class)->create([
            'label' => 'Ayuda',
            'url' => 'ayuda',
            'padre' => 0,
        ]);
        
        factory(Menu::class)->create([
            'label' => 'Ver',
            'url' => 'vista',
            'padre' => $m1->id,
        ]);

        factory(Menu::class)->create([
            'label' => 'Tomar Asistencia',
            'url' => 'tomarAsistencia',
            'padre' => $m1->id,
        ]);
    }
}
