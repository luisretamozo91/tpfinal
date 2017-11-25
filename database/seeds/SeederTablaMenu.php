<?php

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
            'label' => 'Ayuda',
            'url' => 'ayuda',
            'padre' => 0,
        ]);

        factory(Menu::class)->create([
            'label' => 'Alta Alumno',
            'url' => 'alta_alumno',
            'padre' => $m2->id,
        ]);

        factory(Menu::class)->create([
            'label' => 'Promociones',
            'page' => 'promociones',
            'father' => $m2->id,
            'order' => 0,
        ]);

        factory(Menu::class)->create([
            'label' => 'Reservas',
            'page' => 'reservas',
            'father' => $m2->id,
            'order' => 1,
        ]);

        factory(Menu::class)->create([
            'label' => 'Inscripciones',
            'page' => 'inscripciones',
            'father' => $m2->id,
            'order' => 2,
            ]);

        factory(Menu::class)->create([
            'label' => 'Tipos de usuarios',
            'page' => 'tipos_de_usuarios_abm',
            'father' => $m3->id,
            'order' => 0,
        ]);

        factory(Menu::class)->create([
            'label' => 'Usuarios',
            'page' => 'usuarios_abm',
            'father' => $m3->id,
            'order' => 1,
        ]);

        factory(Menu::class)->create([
            'label' => 'Tipos de canchas',
            'page' => 'tipos_de_canchas_abm',
            'father' => $m3->id,
            'order' => 2,
        ]);

        factory(Menu::class)->create([
            'label' => 'Estado de las canchas',
            'page' => 'estado_de_las_canchas_abm',
            'father' => $m3->id,
            'order' => 3,
        ]);

        factory(Menu::class)->create([
            'label' => 'Canchas',
            'page' => 'canchas_abm',
            'father' => $m3->id,
            'order' => 4,
        ]);

        factory(Menu::class)->create([
            'label' => 'Promociones',
            'page' => 'promociones_abm',
            'father' => $m3->id,
            'order' => 5,
        ]);

        factory(Menu::class)->create([
            'label' => 'Actividades',
            'page' => 'actividades_abm',
            'father' => $m3->id,
            'order' => 6,
        ]);

        factory(Menu::class)->create([
            'label' => 'Pdf',
            'page' => 'pdf',
            'father' => $m4->id,
            'order' => 0,
        ]);

        factory(Menu::class)->create([
            'label' => 'Acerca de',
            'page' => 'acerca_de',
            'father' => $m4->id,
            'order' => 1,
        ]);
    }
}
