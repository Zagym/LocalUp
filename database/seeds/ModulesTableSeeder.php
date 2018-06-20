<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('modules')->insert([
      'label' => 'Bureau',
      'price' => 216.5,
      'description' => 'Un simple bureau en bois. Sex appeal -10%.',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Chaise',
      'price' => 16.5,
      'description' => 'Une simple chaise en bois. Sex appeal -10%.',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Climatisation',
      'price' => 196,
      'description' => 'Emet un souffle encore plus froid que le Mont Blanc.',
      'type_id' => 2
    ]);

    DB::table('modules')->insert([
      'label' => 'Imprimante',
      'price' => 96.5,
      'description' => 'Une imprimante en 4D, reçue en avant-première.',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Téléphone',
      'price' => 196,
      'description' => 'Pour faire des appels au téléphone rose.',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Alimentation',
      'price' => 20.15,
      'description' => 'Croissant illimité le matin, de quoi se mettre bien',
      'type_id' => 2
    ]);

    DB::table('modules')->insert([
      'label' => 'Canapé',
      'price' => 400,
      'description' => 'Augmente votre level de 5 niveaux. Capacité de repos +10% sur ce canapé.',
      'type_id' => 2
    ]);

    DB::table('modules')->insert([
      'label' => 'Fauteuil massant',
      'price' => 1000,
      'description' => 'Augmente votre level de 10 niveaux. Capacité de repos +50% sur ce fauteuil massant.',
      'type_id' => 2
    ]);

    DB::table('modules')->insert([
      'label' => 'Pouff',
      'price' => 400,
      'description' => 'Un truc bizarre mais bien moelleux pour ken.',
      'type_id' => 2
    ]);

    DB::table('modules')->insert([
      'label' => 'Accès Salle de réunion',
      'price' => 2500,
      'description' => 'C\'est grand, c\'est beau, il y a une grande table avec pleins de chaises.',
      'type_id' => 3
    ]);

    DB::table('modules')->insert([
      'label' => 'Accès Salle de visio-conférence',
      'price' => 2500,
      'description' => 'Si vous aimez être enfermé dans une petite cage avec un téléphone et un écran, ce module est fait pour vous !',
      'type_id' => 3
    ]);

    DB::table('modules')->insert([
      'label' => 'Multiprise',
      'price' => 5,
      'description' => 'Multiprise',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Casier',
      'price' => 30,
      'description' => 'Casier pour stocker vos effets personnels',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Étagère',
      'price' => 80,
      'description' => 'Pour ranger ta merde', 
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Téléviseur',
      'price' => 100,
      'description' => 'Pour regarder les matchs de la coupe du monde.',
      'type_id' => 1
    ]);

    DB::table('modules')->insert([
      'label' => 'Écran PC',
      'price' => 100,
      'description' => 'Pour regarder des clips des années 90 en même temps que tu bosse',
      'type_id' => 1
    ]);


  }
}
