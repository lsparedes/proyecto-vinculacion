<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hueso; 

class HuesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Vacía la tabla para evitar datos duplicados
        Hueso::truncate(); 

        // 2. Inserta los 18 huesos de tu script.js
        Hueso::create([
            'identificador' => 'pelvis',
            'nombre' => 'Pelvis',
            'descripcion' => 'Conjunto de huesos que soporta el peso del cuerpo y conecta la columna con las extremidades inferiores.'
        ]);

        Hueso::create([
            'identificador' => 'radiod',
            'nombre' => 'Radio derecho',
            'descripcion' => 'Uno de los huesos del antebrazo, ubicado en el lado derecho, el cual permite el movimiento del brazo y la muñeca.'
        ]);

        Hueso::create([
            'identificador' => 'radiol',
            'nombre' => 'Radio izquierdo',
            'descripcion' => 'Uno de los huesos del antebrazo, ubicado en el lado izquierdo, el cual permite el movimiento del brazo y la muñeca.'
        ]);

        Hueso::create([
            'identificador' => 'ulnad',
            'nombre' => 'Ulna derecha',
            'descripcion' => 'Estabiliza el antebrazo, permite la flexión y extensión del codo al articularse con el húmero, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'ulnal',
            'nombre' => 'Ulna izquierda',
            'descripcion' => 'Estabiliza el antebrazo, permite la flexión y extensión del codo al articularse con el húmero, ubicado en el lado izquierdo.'
        ]);

        Hueso::create([
            'identificador' => 'rotulal',
            'nombre' => 'Rótula izquierda',
            'descripcion' => 'Hueso sesamoideo de la rodilla que protege y mejora la eficiencia del cuádriceps, ubicado en el lado izquierdo.'
        ]);

        Hueso::create([
            'identificador' => 'rotulad',
            'nombre' => 'Rótula derecha',
            'descripcion' => 'Hueso sesamoideo de la rodilla que protege y mejora la eficiencia del cuádriceps, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'sacro',
            'nombre' => 'Sacro',
            'descripcion' => 'Hueso triangular en la base de la columna vertebral que conecta con la pelvis.'
        ]);

        Hueso::create([
            'identificador' => 'craneo',
            'nombre' => 'Cráneo',
            'descripcion' => 'Hueso que sostiene y protege el cerebro, encéfalo, ojos y da un sitio de adhesión para los músculos faciales.'
        ]);

        Hueso::create([
            'identificador' => 'mandibula',
            'nombre' => 'Mandíbula',
            'descripcion' => 'Permite los movimientos necesarios para masticar y hablar'
        ]);

        Hueso::create([
            'identificador' => 'humerod',
            'nombre' => 'Húmero derecho',
            'descripcion' => 'Es la parte superior del brazo, siendo fundamental para mover el brazo, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'humerol',
            'nombre' => 'Húmero izquierdo',
            'descripcion' => 'Es la parte superior del brazo, siendo fundamental para mover el brazo, ubicado en el lado izquierdo.'
        ]);

        Hueso::create([
            'identificador' => 'femurl',
            'nombre' => 'Fémur izquierdo',
            'descripcion' => 'Hueso mas largo y fuerte del cuerpo, siendo crucial para mantenerse de pie, ubicado en el lado izquierdo.'
        ]);

        Hueso::create([
            'identificador' => 'femurd',
            'nombre' => 'Fémur derecho',
            'descripcion' => 'Hueso mas largo y fuerte del cuerpo, siendo crucial para mantenerse de pie, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'tibiad',
            'nombre' => 'Tibia derecha',
            'descripcion' => 'Transfiere la carga de la rodilla al pie, siendo soporte de peso y estabilidad, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'tibial',
            'nombre' => 'Tibia izquierda',
            'descripcion' => 'Transfiere la carga de la rodilla al pie, siendo soporte de peso y estabilidad, ubicado en el lado izquierdo.'
        ]);

        Hueso::create([
            'identificador' => 'fibulad',
            'nombre' => 'Fíbula derecha',
            'descripcion' => 'Proporciona estabilidad lateral a la parte inferior de la pierna y al tobillo, ubicado en el lado derecho.'
        ]);

        Hueso::create([
            'identificador' => 'fibulal',
            'nombre' => 'Fíbula izquierda',
            'descripcion' => 'Proporciona estabilidad lateral a la parte inferior de la pierna y al tobillo, ubicado en el lado izquierdo.'
        ]);
    }
}
    

