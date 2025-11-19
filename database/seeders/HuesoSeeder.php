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
        //Vacía la tabla para evitar datos duplicados
        Hueso::truncate(); 

        // Insertar huesos
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
        Hueso::create([
            'identificador' => 'Cervical',
            'nombre' => 'Vértebras Cervicales',
            'descripcion' => 'Son los siete huesos que conforman la parte superior de la columna vertebral del cuello, entre el cráneo y la regió torácica.'
        ]);
        Hueso::create([
            'identificador' => 'Toracica',
            'nombre' => 'Vértebras Torácicas',
            'descripcion' => 'Son doce vertebras que forman la sección media de la columna vertebral teniendo una movilidad limitada.'
        ]);
        Hueso::create([
            'identificador' => 'Lumbar',
            'nombre' => 'Vértebras Lumbares',
            'descripcion' => 'Cinco vertebras que componen la parte baja de la espalda, soportan el peso corporal y permiten la movilidad.'
        ]);
        Hueso::create([
            'identificador' => 'EscapulaL',
            'nombre' => 'Escápula Izquierda',
            'descripcion' => 'Permite el movimiento y la estabilidad del brazo y el hombro (Izquierdo), siendo un punto de conexión entre el brazo y el tronco.'
        ]);
        Hueso::create([
            'identificador' => 'EscapulaD',
            'nombre' => 'Escápula Derecha',
            'descripcion' => 'Permite el movimiento y la estabilidad del brazo y el hombro (Derecho), siendo un punto de conexión entre el brazo y el tronco.'
        ]);
        Hueso::create([
            'identificador' => 'ClaviculaL',
            'nombre' => 'Clavícula Izquierda',
            'descripcion' => 'Sirve como soporte para el hombro, conecta la escápula y el esternón, protege nervios y vasos sanguíneos del cuello.'
        ]);
        Hueso::create([
            'identificador' => 'ClaviculaD',
            'nombre' => 'Clavícula Derecha',
            'descripcion' => 'Sirve como soporte para el hombro, conecta la escápula y el esternón, protege nervios y vasos sanguíneos del cuello.'
        ]);
        Hueso::create([
            'identificador' => 'Esternon',
            'nombre' => 'Esternon',
            'descripcion' => 'Protege Los órganos vitales del tórax, como el corazón y los pulmones.'
        ]);
        Hueso::create([
            'identificador' => 'PrimeraCostillaD',
            'nombre' => 'Primera Costilla Derecha',
            'descripcion' => 'Es la costilla más corta, ancha y curvada. Se ubica debajo de la clavícula y protege vasos sanguíneos y nervios vitales, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'PrimeraCostillaL',
            'nombre' => 'Primera Costilla Izquierda',
            'descripcion' => 'Es la costilla más corta, ancha y curvada. Se ubica debajo de la clavícula y protege vasos sanguíneos y nervios vitales, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'SegundaCostillaD',
            'nombre' => 'Segunda Costilla Derecha',
            'descripcion' => 'Más delgada y larga que la primera. Se une al esternón en el ángulo de Louis y sirve de anclaje para músculos respiratorios, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'SegundaCostillaL',
            'nombre' => 'Segunda Costilla Izquierda',
            'descripcion' => 'Más delgada y larga que la primera. Se une al esternón en el ángulo de Louis y sirve de anclaje para músculos respiratorios, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'TerceraCostillaD',
            'nombre' => 'Tercera Costilla Derecha',
            'descripcion' => 'Costilla verdadera típica. Se conecta directamente al esternón mediante su propio cartílago costal, protegiendo los pulmones, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'TerceraCostillaL',
            'nombre' => 'Tercera Costilla Izquierda',
            'descripcion' => 'Costilla verdadera típica. Se conecta directamente al esternón mediante su propio cartílago costal, protegiendo los pulmones, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'CuartaCostillaD',
            'nombre' => 'Cuarta Costilla Derecha',
            'descripcion' => 'Costilla verdadera ubicada en la parte media del tórax. Su movimiento es fundamental para la expansión del pecho al respirar, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'CuartaCostillaL',
            'nombre' => 'Cuarta Costilla Izquierda',
            'descripcion' => 'Costilla verdadera ubicada en la parte media del tórax. Su movimiento es fundamental para la expansión del pecho al respirar, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'QuintaCostillaD',
            'nombre' => 'Quinta Costilla Derecha',
            'descripcion' => 'Costilla verdadera que protege el lóbulo medio del pulmón derecho y parte del corazón. Se articula directamente con el esternón, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'QuintaCostillaL',
            'nombre' => 'Quinta Costilla Izquierda',
            'descripcion' => 'Costilla verdadera que protege el lóbulo superior del pulmón izquierdo y parte del corazón. Se articula directamente con el esternón, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'ConjuntoCostillaD',
            'nombre' => 'Costillas Inferiores Derechas',
            'descripcion' => 'Grupo que incluye las últimas costillas verdaderas, las falsas (que comparten cartílago) y las flotantes. Protegen hígado y riñones, ubicada en la zona derecha.'
        ]);
        Hueso::create([
            'identificador' => 'ConjuntoCostillaL',
            'nombre' => 'Costillas inferiores Izquierdas',
            'descripcion' => 'Grupo que incluye las últimas costillas verdaderas, las falsas (que comparten cartílago) y las flotantes. Protegen bazo y riñones, ubicada en la zona izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'EscafoideL',
            'nombre' => 'Escafoides izquierdo',
            'descripcion' => 'Hueso con forma de barco ubicado debajo del pulgar. Es crucial para la movilidad de la muñeca y es el que se fractura con mayor frecuencia.'
        ]);
        Hueso::create([
            'identificador' => 'SemiLunarL',
            'nombre' => 'Semilunar izquierdo',
            'descripcion' => 'Hueso con forma de media luna situado en el centro de la muñeca. Se articula con el radio y es fundamental para la flexión y extensión.'
        ]);
        Hueso::create([
            'identificador' => 'TrapecioL',
            'nombre' => 'Trapecio izquierdo',
            'descripcion' => 'Ubicado en la base del pulgar. Su forma de "silla de montar" es la que permite que el pulgar se mueva y pueda tocar los otros dedos (oposición).'
        ]);
        Hueso::create([
            'identificador' => 'TrapezoideL',
            'nombre' => 'Trapezoide izquierdo',
            'descripcion' => 'Hueso pequeño situado en la base del dedo índice. Proporciona una base estable y firme para el segundo metacarpiano.'
        ]);
        Hueso::create([
            'identificador' => 'GrandeL',
            'nombre' => 'Hueso Grande izquierdo', 
            'descripcion' => 'Es el hueso más grande del carpo y ocupa la posición central. Actúa como la piedra angular que soporta y transmite las fuerzas de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'GanchosoL',
            'nombre' => 'Ganchoso izquierdo',
            'descripcion' => 'Se distingue por una prominencia ósea llamada "gancho" o hámulo. Protege el paso de nervios y tendones hacia la parte del meñique.'
        ]);
        Hueso::create([
            'identificador' => 'PiramidalI', 
            'nombre' => 'Piramidal izquierdo',
            'descripcion' => 'Hueso con forma de pirámide situado en el lado del meñique. Facilita los movimientos de desviación de la muñeca.'
        ]);
        Hueso::create([
            'identificador' => 'PisiformeL',
            'nombre' => 'Pisiforme izquierdo',
            'descripcion' => 'El hueso más pequeño del carpo, con forma de guisante. Es un hueso sesamoideo (dentro de un tendón) que actúa como polea para potenciar la fuerza.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano1L',
            'nombre' => 'Primer metacarpiano izquierdo',
            'descripcion' => 'Hueso de la palma que soporta el pulgar. Es el más móvil de todos, permitiendo la oposición (tocar los otros dedos).'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano2L',
            'nombre' => 'Segundo metacarpiano izquierdo',
            'descripcion' => 'Hueso de la palma que corresponde al dedo índice. Es el más largo y su base se articula firmemente con el carpo.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano3L',
            'nombre' => 'Tercer metacarpiano izquierdo',
            'descripcion' => 'Hueso de la palma que corresponde al dedo medio. Actúa como el eje central de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano4L',
            'nombre' => 'Cuarto metacarpiano izquierdo',
            'descripcion' => 'Hueso de la palma que corresponde al dedo anular. Es más delgado y tiene menos movilidad que el del pulgar o meñique.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano5L',
            'nombre' => 'Quinto metacarpiano izquierdo',
            'descripcion' => 'Hueso de la palma que corresponde al dedo meñique. Es propenso a fracturas conocidas como "fractura del boxeador".'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal1L',
            'nombre' => 'Falange proximal del pulgar Izquierdo',
            'descripcion' => 'Primera falange del dedo pulgar. Es robusta y ancha para soportar la fuerza de agarre de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal2L',
            'nombre' => 'Falange proximal del índice Izquierdo',
            'descripcion' => 'Hueso en la base del dedo índice. Se articula con el segundo metacarpiano permitiendo señalar y agarrar.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal3L',
            'nombre' => 'Falange proximal del medio Izquierdo',
            'descripcion' => 'Hueso en la base del dedo medio o corazón. Es generalmente la falange más larga de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal4L',
            'nombre' => 'Falange proximal del anular Izquierdo',
            'descripcion' => 'Hueso en la base del dedo anular. Trabaja en conjunto con los otros dedos para el agarre de fuerza.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal5L',
            'nombre' => 'Falange proximal del meñique Izquierdo',
            'descripcion' => 'Hueso en la base del dedo meñique. A pesar de ser pequeño, es crucial para cerrar el puño firmemente.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia1L',
            'nombre' => 'Falange media del índice Izquierdo',
            'descripcion' => 'Pequeño hueso situado entre la falange proximal y distal del dedo índice.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia2L',
            'nombre' => 'Falange media del dedo medio Izquierdo',
            'descripcion' => 'Hueso central del dedo medio. Proporciona estructura para la flexión del dedo más largo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia3L',
            'nombre' => 'Falange media del anular Izquierdo',
            'descripcion' => 'Hueso central del dedo anular, situado entre las articulaciones interfalángicas.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia4L',
            'nombre' => 'Falange media del meñique Izquierdo',
            'descripcion' => 'Hueso central del dedo meñique. Es la falange media más pequeña de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales1L',
            'nombre' => 'Falange distal del pulgar Izquierdo',
            'descripcion' => 'Hueso de la punta del pulgar. Soporta la uña y la yema, siendo esencial para la sensibilidad táctil.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales2L',
            'nombre' => 'Falange distal del índice Izquierdo',
            'descripcion' => 'Hueso de la punta del dedo índice. Soporta la uña y es fundamental para la precisión en el agarre de pinza.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales3L',
            'nombre' => 'Falange distal del medio Izquierdo',
            'descripcion' => 'Hueso de la punta del dedo medio. Protege el extremo del dedo y soporta la almohadilla digital.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales4L',
            'nombre' => 'Falange distal del anular Izquierdo',
            'descripcion' => 'Hueso de la punta del dedo anular. Contribuye a la forma del dedo y al soporte de la uña.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales5L',
            'nombre' => 'Falange distal del meñique Izquierdo',
            'descripcion' => 'El hueso más pequeño y alejado de la mano, ubicado en la punta del dedo meñique.'
        ]);
        Hueso::create([
            'identificador' => 'EscafoideD',
            'nombre' => 'Escafoides derecho',
            'descripcion' => 'Hueso con forma de barco en el lado del pulgar. Es fundamental para la movilidad y estabilidad de la muñeca derecha.'
        ]);
        Hueso::create([
            'identificador' => 'SemiLunarD',
            'nombre' => 'Semilunar derecho',
            'descripcion' => 'Hueso con forma de media luna en el centro de la muñeca derecha. Articula principalmente con el radio.'
        ]);
        Hueso::create([
            'identificador' => 'PisiformeD',
            'nombre' => 'Pisiforme derecho',
            'descripcion' => 'Pequeño hueso con forma de guisante. Es un hueso sesamoideo que sirve de punto de inserción para tendones en la muñeca derecha.'
        ]);
        Hueso::create([
            'identificador' => 'PiramidalD',
            'nombre' => 'Piramidal derecho',
            'descripcion' => 'Hueso con forma de pirámide situado en el lado del meñique. Trabaja junto con el pisiforme y el ganchoso.'
        ]);
        Hueso::create([
            'identificador' => 'GanchosoD',
            'nombre' => 'Ganchoso derecho',
            'descripcion' => 'Reconocible por su apófisis en forma de gancho. Protege estructuras nerviosas vitales en la palma de la mano derecha.'
        ]);
        Hueso::create([
            'identificador' => 'GrandeD',
            'nombre' => 'Hueso Grande derecho',
            'descripcion' => 'El hueso más voluminoso del carpo derecho. Actúa como el pilar central para la estabilidad de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'TrapezoideD',
            'nombre' => 'Trapezoide derecho',
            'descripcion' => 'Hueso pequeño y profundo que proporciona una base estable para el segundo metacarpiano (dedo índice) de la mano derecha.'
        ]);
        Hueso::create([
            'identificador' => 'TrapecioD',
            'nombre' => 'Trapecio derecho',
            'descripcion' => 'Hueso en forma de silla de montar en la base del pulgar derecho. Es clave para el movimiento de pinza y oposición.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano1D',
            'nombre' => 'Primer metacarpiano derecho',
            'descripcion' => 'Hueso de la palma derecha que soporta el pulgar. Permite la gran movilidad y fuerza de agarre de la mano dominante (en diestros).'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano2D',
            'nombre' => 'Segundo metacarpiano derecho',
            'descripcion' => 'Hueso de la palma derecha correspondiente al dedo índice. Es el metacarpiano más largo y estable.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano3D',
            'nombre' => 'Tercer metacarpiano derecho',
            'descripcion' => 'Hueso de la palma derecha correspondiente al dedo medio. Actúa como eje central para los movimientos de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano4D', 
            'nombre' => 'Cuarto metacarpiano derecho',
            'descripcion' => 'Hueso de la palma derecha correspondiente al dedo anular. Es más delgado y comparte tendones con el dedo meñique.'
        ]);
        Hueso::create([
            'identificador' => 'Metacarpiano5D',
            'nombre' => 'Quinto metacarpiano derecho',
            'descripcion' => 'Hueso de la palma derecha correspondiente al dedo meñique. Es el metacarpiano que se fractura más comúnmente al golpear objetos.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal1D',
            'nombre' => 'Falange proximal del pulgar (Derecha)',
            'descripcion' => 'Base ósea del dedo pulgar derecho. Es corta y fuerte para soportar la presión de la pinza manual.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal2D',
            'nombre' => 'Falange proximal del índice (Derecha)',
            'descripcion' => 'Base ósea del dedo índice derecho. Fundamental para señalar y realizar agarres de precisión.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal3D',
            'nombre' => 'Falange proximal del medio (Derecha)',
            'descripcion' => 'Base ósea del dedo corazón o medio derecho. Es la falange más larga de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal4D',
            'nombre' => 'Falange proximal del anular (Derecha)',
            'descripcion' => 'Base ósea del dedo anular derecho. Trabaja en coordinación con el dedo medio y meñique para el agarre de fuerza.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeProximal5D',
            'nombre' => 'Falange proximal del meñique (Derecha)',
            'descripcion' => 'Base ósea del dedo meñique derecho. Proporciona el cierre final del puño en el lado cubital de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia1D',
            'nombre' => 'Falange media del índice (Derecha)',
            'descripcion' => 'Hueso intermedio del dedo índice derecho, entre la falange proximal y la distal.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia2D',
            'nombre' => 'Falange media del dedo medio (Derecha)',
            'descripcion' => 'Hueso intermedio del dedo corazón derecho. Aporta longitud y flexibilidad al centro de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia3D',
            'nombre' => 'Falange media del anular (Derecha)',
            'descripcion' => 'Hueso intermedio del dedo anular derecho. Su movimiento suele estar ligado al del dedo meñique.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeMedia4D',
            'nombre' => 'Falange media del meñique (Derecha)',
            'descripcion' => 'Hueso intermedio del dedo meñique derecho. Es pequeño pero esencial para envolver objetos al agarrarlos.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales1D',
            'nombre' => 'Falange distal del pulgar (Derecha)',
            'descripcion' => 'Punta del pulgar derecho. Soporta la uña y contiene gran cantidad de terminaciones nerviosas para el tacto.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales2D',
            'nombre' => 'Falange distal del índice (Derecha)',
            'descripcion' => 'Punta del dedo índice derecho. Esencial para la escritura, el uso de pantallas y la manipulación fina.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales3D',
            'nombre' => 'Falange distal del medio (Derecha)',
            'descripcion' => 'Punta del dedo medio derecho. Protege el extremo del dedo más largo de la mano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales4D',
            'nombre' => 'Falange distal del anular (Derecha)',
            'descripcion' => 'Punta del dedo anular derecho. Da soporte a la uña y completa el arco de los dedos.'
        ]);
        Hueso::create([
            'identificador' => 'FalangeDistales5D',
            'nombre' => 'Falange distal del meñique (Derecha)',
            'descripcion' => 'Punta del dedo meñique derecho. Es el hueso más pequeño y periférico de los dedos.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie1D',
            'nombre' => 'Falange distal del dedo gordo (Derecho)',
            'descripcion' => 'Hueso de la punta del dedo gordo (Hallux). Es robusto ya que participa activamente en el despegue del pie al caminar.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie2D',
            'nombre' => 'Falange distal del segundo dedo (Derecho)',
            'descripcion' => 'Pequeño hueso en la punta del segundo dedo del pie derecho.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie3D',
            'nombre' => 'Falange distal del tercer dedo (Derecho)',
            'descripcion' => 'Pequeño hueso en la punta del tercer dedo del pie derecho.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie4D',
            'nombre' => 'Falange distal del cuarto dedo (Derecho)',
            'descripcion' => 'Pequeño hueso en la punta del cuarto dedo del pie derecho.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie5D',
            'nombre' => 'Falange distal del quinto dedo (Derecho)',
            'descripcion' => 'Hueso diminuto en la punta del dedo meñique del pie. A menudo se fusiona con la falange media en algunas personas.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie1D',
            'nombre' => 'Falange media del segundo dedo (Derecho)',
            'descripcion' => 'Hueso corto situado entre la falange proximal y distal del segundo dedo del pie.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie2D',
            'nombre' => 'Falange media del tercer dedo (Derecho)',
            'descripcion' => 'Hueso corto situado en el centro del tercer dedo del pie.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie3D',
            'nombre' => 'Falange media del cuarto dedo (Derecho)',
            'descripcion' => 'Hueso corto situado en el centro del cuarto dedo del pie.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie4D',
            'nombre' => 'Falange media del quinto dedo (Derecho)',
            'descripcion' => 'Hueso muy corto del dedo meñique. Es común que sea muy pequeño o cuadrado.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie1D',
            'nombre' => 'Falange proximal del dedo gordo (Derecho)',
            'descripcion' => 'Hueso grande en la base del dedo gordo. Soporta una gran cantidad de carga durante la fase de impulso de la marcha.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie2D',
            'nombre' => 'Falange proximal del segundo dedo (Derecho)',
            'descripcion' => 'Hueso en la base del segundo dedo del pie. Se articula con el segundo metatarsiano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie3D',
            'nombre' => 'Falange proximal del tercer dedo (Derecho)',
            'descripcion' => 'Hueso en la base del tercer dedo del pie derecho.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie4D',
            'nombre' => 'Falange proximal del cuarto dedo (Derecho)',
            'descripcion' => 'Hueso en la base del cuarto dedo del pie derecho.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie5D',
            'nombre' => 'Falange proximal del quinto dedo (Derecho)',
            'descripcion' => 'Hueso en la base del dedo meñique del pie. Se articula con el quinto metatarsiano.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano1D',
            'nombre' => 'Primer metatarsiano derecho',
            'descripcion' => 'Es el metatarsiano más grueso y corto. Juega un papel crucial en el equilibrio y soporte del peso corporal.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano2D',
            'nombre' => 'Segundo metatarsiano derecho',
            'descripcion' => 'Es el metatarsiano más largo. Su base está firmemente encajada en los huesos del tarso, lo que lo hace menos móvil.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano3D',
            'nombre' => 'Tercer metatarsiano derecho',
            'descripcion' => 'Hueso largo del pie que se articula con la tercera cuña (cuneiforme lateral).'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano4D',
            'nombre' => 'Cuarto metatarsiano derecho',
            'descripcion' => 'Hueso largo del pie que se articula con el hueso cuboides.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano5D',
            'nombre' => 'Quinto metatarsiano derecho',
            'descripcion' => 'Hueso del borde externo del pie. Su base tiene una prominencia (apófisis estiloides) que se puede palpar fácilmente por fuera del pie.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerCuneiformeD',
            'nombre' => 'Primer cuneiforme derecho (Medial)',
            'descripcion' => 'El más grande de los tres cuneiformes. Se ubica en la base del dedo gordo y es clave para el arco interno del pie.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoCuneiformeD',
            'nombre' => 'Segundo cuneiforme derecho (Intermedio)',
            'descripcion' => 'El más pequeño de los huesos cuneiformes. Tiene forma de cuña y se sitúa entre los otros dos, articulándose con el segundo metatarsiano.'
        ]);
        Hueso::create([
            'identificador' => 'TercerCuneiformeD',
            'nombre' => 'Tercer cuneiforme derecho (Lateral)',
            'descripcion' => 'Ubicado en el centro del pie, se articula con el tercer metatarsiano y el hueso cuboides.'
        ]);
        Hueso::create([
            'identificador' => 'CuboidesD',
            'nombre' => 'Hueso Cuboides derecho',
            'descripcion' => 'Hueso con forma de cubo situado en el borde externo del pie. Es esencial para la estabilidad lateral y el equilibrio.'
        ]);
        Hueso::create([
            'identificador' => 'NavicularD',
            'nombre' => 'Hueso Navicular derecho', 
            'descripcion' => 'Hueso con forma de barco situado delante del astrágalo. Es un punto clave de inserción para el tendón tibial posterior.'
        ]);
        Hueso::create([
            'identificador' => 'CalcaneoD',
            'nombre' => 'Calcáneo derecho',
            'descripcion' => 'El hueso del talón. Es el hueso más grande y fuerte del pie, soportando el impacto inicial al caminar. Aquí se inserta el tendón de Aquiles.'
        ]);
        Hueso::create([
            'identificador' => 'TaloD',
            'nombre' => 'Astrágalo derecho (Talus)',
            'descripcion' => 'El hueso del tobillo propiamente dicho. Conecta la pierna (tibia y peroné) con el pie y distribuye el peso hacia el calcáneo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie1L',
            'nombre' => 'Falange distal del dedo gordo (Izquierdo)',
            'descripcion' => 'Hueso de la punta del dedo gordo izquierdo. Es el punto final de apoyo en la fase de despegue al caminar.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie2L',
            'nombre' => 'Falange distal del segundo dedo (Izquierdo)',
            'descripcion' => 'Pequeño hueso en la punta del segundo dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie3L',
            'nombre' => 'Falange distal del tercer dedo (Izquierdo)',
            'descripcion' => 'Pequeño hueso en la punta del tercer dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie4L',
            'nombre' => 'Falange distal del cuarto dedo (Izquierdo)',
            'descripcion' => 'Pequeño hueso en la punta del cuarto dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesDistalesPie5L',
            'nombre' => 'Falange distal del quinto dedo (Izquierdo)',
            'descripcion' => 'Hueso diminuto en la punta del dedo meñique izquierdo. A menudo es apenas visible en radiografías por su tamaño.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie1L',
            'nombre' => 'Falange media del segundo dedo (Izquierdo)',
            'descripcion' => 'Hueso corto intermedio del segundo dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie2L',
            'nombre' => 'Falange media del tercer dedo (Izquierdo)',
            'descripcion' => 'Hueso corto intermedio del tercer dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie3L',
            'nombre' => 'Falange media del cuarto dedo (Izquierdo)',
            'descripcion' => 'Hueso corto intermedio del cuarto dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesMedialesPie4L',
            'nombre' => 'Falange media del quinto dedo (Izquierdo)',
            'descripcion' => 'Hueso corto intermedio del dedo meñique izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie1L',
            'nombre' => 'Falange proximal del dedo gordo (Izquierdo)',
            'descripcion' => 'Hueso base del dedo gordo izquierdo. Es grueso y fuerte para soportar la carga del cuerpo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie2L',
            'nombre' => 'Falange proximal del segundo dedo (Izquierdo)',
            'descripcion' => 'Hueso base del segundo dedo del pie izquierdo. Se une al segundo metatarsiano.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie3L',
            'nombre' => 'Falange proximal del tercer dedo (Izquierdo)',
            'descripcion' => 'Hueso base del tercer dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie4L',
            'nombre' => 'Falange proximal del cuarto dedo (Izquierdo)',
            'descripcion' => 'Hueso base del cuarto dedo del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'FalangesProximalesPie5L',
            'nombre' => 'Falange proximal del quinto dedo (Izquierdo)',
            'descripcion' => 'Hueso base del dedo meñique izquierdo. Se une al quinto metatarsiano en el borde externo del pie.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano1L',
            'nombre' => 'Primer metatarsiano izquierdo',
            'descripcion' => 'El hueso más grueso del empeine izquierdo. Es vital para el impulso al caminar.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano2L',
            'nombre' => 'Segundo metatarsiano izquierdo',
            'descripcion' => 'El hueso más largo del empeine izquierdo. Su rigidez lo hace propenso a fracturas por estrés en corredores.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano3L',
            'nombre' => 'Tercer metatarsiano izquierdo',
            'descripcion' => 'Hueso largo central del pie izquierdo que conecta el tarso con el tercer dedo.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano4L',
            'nombre' => 'Cuarto metatarsiano izquierdo',
            'descripcion' => 'Hueso largo del pie izquierdo que conecta el tarso con el cuarto dedo.'
        ]);
        Hueso::create([
            'identificador' => 'Metatarsiano5L',
            'nombre' => 'Quinto metatarsiano izquierdo',
            'descripcion' => 'Hueso del borde externo del pie izquierdo. Su base es palpable y es un sitio común de fracturas (fractura de Jones).'
        ]);
        Hueso::create([
            'identificador' => 'PrimerCuneiformeL',
            'nombre' => 'Primer cuneiforme izquierdo (Medial)',
            'descripcion' => 'El más grande de los tres cuneiformes izquierdos. Se sitúa en la base del dedo gordo y es vital para el arco del pie.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoCuneiformeL',
            'nombre' => 'Segundo cuneiforme izquierdo (Intermedio)',
            'descripcion' => 'El más pequeño de los huesos del tarso izquierdo. Su forma de cuña le da gran estabilidad al empeine.'
        ]);
        Hueso::create([
            'identificador' => 'TercerCuneiformeL',
            'nombre' => 'Tercer cuneiforme izquierdo (Lateral)',
            'descripcion' => 'Ubicado en el centro del pie izquierdo, actúa como una llave de arco articulándose con el tercer metatarsiano.'
        ]);
        Hueso::create([
            'identificador' => 'CuboidesL',
            'nombre' => 'Hueso Cuboides izquierdo',
            'descripcion' => 'Situado en el borde externo del pie izquierdo. Proporciona estabilidad lateral y soporte al arco plantar.'
        ]);
        Hueso::create([
            'identificador' => 'NavicularL',
            'nombre' => 'Hueso Navicular izquierdo',
            'descripcion' => 'Conocido como escafoides del tarso. Su forma de barco aloja la cabeza del astrágalo en la parte interna del pie izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'CalcaneoL',
            'nombre' => 'Calcáneo izquierdo',
            'descripcion' => 'El hueso del talón izquierdo. Es el hueso más grande del pie, diseñado para soportar el impacto inicial al caminar.'
        ]);
        Hueso::create([
            'identificador' => 'TaloL',
            'nombre' => 'Astrágalo izquierdo (Talus)',
            'descripcion' => 'Forma la articulación del tobillo izquierdo. Es único porque ningún músculo se inserta directamente en él; actúa como un pivote.'
        ]);
        Hueso::create([
            'identificador' => 'TercerMolarArriba',
            'nombre' => 'Tercer molar superior derecho',
            'descripcion' => 'Conocida como la muela del juicio superior derecha. Es la última en erupcionar y a menudo no tiene espacio suficiente para salir.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoMolarA',
            'nombre' => 'Segundo molar superior derecho',
            'descripcion' => 'Muela de los 12 años. Tiene una gran superficie oclusal para triturar los alimentos antes de tragar.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerMolarA',
            'nombre' => 'Primer molar superior derecho',
            'descripcion' => 'Muela de los 6 años. Es clave para la oclusión (mordida) y soporta la mayor presión de masticación.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoPreMolarA',
            'nombre' => 'Segundo premolar superior derecho',
            'descripcion' => 'Diente de transición que ayuda a triturar la comida. Suele tener dos cúspides.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerPreMoA',
            'nombre' => 'Primer premolar superior derecho',
            'descripcion' => 'Ayuda a los caninos a desgarrar y a los molares a triturar. Generalmente tiene dos raíces.'
        ]);
        Hueso::create([
            'identificador' => 'CaninoAD',
            'nombre' => 'Canino superior derecho',
            'descripcion' => 'Conocido como "colmillo". Es el diente más largo y fuerte, diseñado para desgarrar alimentos duros.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoLateralA',
            'nombre' => 'Incisivo lateral superior derecho',
            'descripcion' => 'Situado junto al central, ayuda a cortar alimentos. Es más pequeño y estrecho que el incisivo central.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoCentralA',
            'nombre' => 'Incisivo central superior derecho',
            'descripcion' => 'Diente frontal prominente. Su borde afilado en forma de pala es vital para cortar los alimentos al morder.'
        ]);
        Hueso::create([
            'identificador' => 'TercerMolarBajo',
            'nombre' => 'Tercer molar inferior derecho',
            'descripcion' => 'Muela del juicio inferior derecha. Su extracción es común si causa dolor o apiñamiento dental.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoMolarB',
            'nombre' => 'Segundo molar inferior derecho',
            'descripcion' => 'Gran diente posterior inferior diseñado para la molienda final de los alimentos.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerMolarB',
            'nombre' => 'Primer molar inferior derecho',
            'descripcion' => 'El diente más grande del arco inferior. Es el primero en salir (a los 6 años) y fundamental para la estructura de la boca.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoPreMolarB',
            'nombre' => 'Segundo premolar inferior derecho',
            'descripcion' => 'Diente bicúspide inferior que asiste en la trituración.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerPreMoB',
            'nombre' => 'Primer premolar inferior derecho',
            'descripcion' => 'El premolar más pequeño. Tiene una cúspide funcional principal y ayuda en el desgarro de comida.'
        ]);
        Hueso::create([
            'identificador' => 'CaninoBD',
            'nombre' => 'Canino inferior derecho',
            'descripcion' => 'Colmillo inferior. Trabaja en conjunto con el superior para desgarrar. Es crucial para la guía de la mordida lateral.'
        ]);

        Hueso::create([
            'identificador' => 'IncisivoLateralB',
            'nombre' => 'Incisivo lateral inferior derecho',
            'descripcion' => 'Diente frontal inferior, ligeramente más grande que el incisivo central inferior.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoCentralB', 
            'nombre' => 'Incisivo central inferior derecho',
            'descripcion' => 'El diente más pequeño de la boca. Es el primero en cortar la comida junto con su par izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoCentralAL',
            'nombre' => 'Incisivo central superior izquierdo',
            'descripcion' => 'Diente frontal izquierdo. Es esencial para la estética de la sonrisa y la fonética (pronunciación).'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoLateralAL',
            'nombre' => 'Incisivo lateral superior izquierdo',
            'descripcion' => 'Diente de corte situado entre el central y el canino izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'CaninoADL', 
            'nombre' => 'Canino superior izquierdo',
            'descripcion' => 'Colmillo izquierdo. Su larga raíz forma la prominencia canina en el hueso maxilar, dando forma a la cara.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerPreMoAL',
            'nombre' => 'Primer premolar superior izquierdo',
            'descripcion' => 'Diente posterior izquierdo que inicia el proceso de trituración fina.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoPreMolarAL',
            'nombre' => 'Segundo premolar superior izquierdo',
            'descripcion' => 'Refuerza la acción de molienda del primer premolar en el lado izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerMolarAL',
            'nombre' => 'Primer molar superior izquierdo',
            'descripcion' => 'Muela principal izquierda. Tiene tres raíces para anclarse firmemente al hueso maxilar.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoMolarAL',
            'nombre' => 'Segundo molar superior izquierdo',
            'descripcion' => 'Complementa la función del primer molar en la masticación pesada del lado izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'TercerMolarArribaL',
            'nombre' => 'Tercer molar superior izquierdo',
            'descripcion' => 'Muela del juicio superior izquierda. Es el último diente del arco superior izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoCentralBL',
            'nombre' => 'Incisivo central inferior izquierdo',
            'descripcion' => 'Diente frontal inferior izquierdo. Junto con el derecho, son los dientes más pequeños y simétricos.'
        ]);
        Hueso::create([
            'identificador' => 'IncisivoLateralBL',
            'nombre' => 'Incisivo lateral inferior izquierdo',
            'descripcion' => 'Ayuda a cortar la comida. Su raíz es única y aplanada.'
        ]);
        Hueso::create([
            'identificador' => 'CaninoBDL',
            'nombre' => 'Canino inferior izquierdo',
            'descripcion' => 'Colmillo inferior izquierdo. Es fundamental para guiar la mandíbula en movimientos laterales.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerPreMoBL',
            'nombre' => 'Primer premolar inferior izquierdo',
            'descripcion' => 'Transición entre los dientes anteriores (corte) y posteriores (molienda) en la mandíbula izquierda.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoPreMolarBL',
            'nombre' => 'Segundo premolar inferior izquierdo',
            'descripcion' => 'Tiene una corona más grande que el primero y ayuda activamente a pulverizar los alimentos.'
        ]);
        Hueso::create([
            'identificador' => 'PrimerMolarBL',
            'nombre' => 'Primer molar inferior izquierdo',
            'descripcion' => 'La "piedra angular" de la oclusión en el lado izquierdo. Tiene dos raíces y cinco cúspides.'
        ]);
        Hueso::create([
            'identificador' => 'SegundoMolarBL',
            'nombre' => 'Segundo molar inferior izquierdo',
            'descripcion' => 'Similar al primero pero más pequeño. Termina de moler el alimento antes de la deglución.'
        ]);
        Hueso::create([
            'identificador' => 'TercerMolarBajoL',
            'nombre' => 'Tercer molar inferior izquierdo',
            'descripcion' => 'Muela del juicio inferior izquierda. A menudo varía en forma y tamaño, o puede no desarrollarse (agenesia).'
        ]);
        Hueso::create([
            'identificador' => 'OnceCostillaD',
            'nombre' => 'Undécima costilla derecha (Flotante)',
            'descripcion' => 'Es una costilla flotante, llamada así porque no se une al esternón. Termina en la musculatura abdominal y protege el riñón derecho.'
        ]);
        Hueso::create([
            'identificador' => 'DoceCostillaD',
            'nombre' => 'Duodécima costilla derecha (Flotante)',
            'descripcion' => 'La última costilla del lado derecho. Es corta y flotante. Sirve de punto de anclaje para músculos de la espalda y abdomen.'
        ]);
        Hueso::create([
            'identificador' => 'OnceCostillaL',
            'nombre' => 'Undécima costilla izquierda (Flotante)',
            'descripcion' => 'Costilla flotante del lado izquierdo. No tiene conexión cartilaginosa con el esternón y protege el riñón izquierdo.'
        ]);
        Hueso::create([
            'identificador' => 'DoceCostillaL',
            'nombre' => 'Duodécima costilla izquierda (Flotante)',
            'descripcion' => 'La costilla más baja del tórax izquierdo. Al ser flotante, permite mayor movilidad en la parte baja de la caja torácica.'
        ]);
    }
}
    

