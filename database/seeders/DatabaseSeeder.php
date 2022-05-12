<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Project;
use App\Models\Student;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('event')->insert([
            'nom_event' => 'event1',
            'lieu' => 'Casablanca',
            'date' => '2022-01-16',
            'prix' => 'on',
            'montant_prix' => '8000',
            'nom_entreprise' => 'Entreprise1'
        ]);*/
       Event::create([
            'nom_event' => 'event1',
            'lieu' => 'Casablanca',
            'date' => '2022-01-16',
            'prix' => 'on',
            'montant_prix' => '8000',
            'nom_entreprise' => 'Entreprise1'
        ]);

        Event::create([
            'nom_event' => 'event2',
            'lieu' => 'Rabat',
            'date' => '2022-01-22',
            'prix' => 'on',
            'montant_prix' => '2000',
            'nom_entreprise' => 'Entreprise1'
        ]);

        Event::create([
            'nom_event' => 'event3',
            'lieu' => 'Marrakech',
            'date' => '2022-02-16'
        ]);

        Category::create([
            'category_name' => 'Informatique'
        ]);

        Category::create([
            'category_name' => 'Humanitaire'
        ]);

        Category::create([
            'category_name' => 'Technologique'
        ]);

        Project::create([
            'title'=>'project1',
            'description'=>'oiajbdckizdjb dzkjhvb kzhdbv kjzhdb',
            'id_category'=>'1',
            'dateLancement'=>'2022-02-02',
            'dateRealisation'=>'2022-02-22'
        ]);

        Project::create([
            'title'=>'project44',
            'description'=>' dzkjhvb kzhdbv kjzhdb',
            'id_category'=>'2',
            'dateLancement'=>'2022-02-02',
            'dateRealisation'=>'2022-02-13'
        ]);

        Project::create([
            'title'=>'project2',
            'description'=>'oiajbdckizdjb dzkjhvb kzhdbv kjzhdb',
            'id_category'=>'3',
            'dateLancement'=>'2022-02-02',
            'dateRealisation'=>'2022-02-26'
        ]);

        Student::create([
            'code_apogee' => 'R123',
            'cne' => 'R123',
            'cin' => 'R123',
            'nom' => 'R123',
            'prenom' => 'R123',
            'date_de_naissance' => '2001-01-01',
            'adresse' => 'R123',
            'email_institutionnel' => 'R123',
            'email_personnel' => 'R123',
            'telephone' => 'R123',
            'sexe' => 'homme'
        ]);
        
        Student::create([
            'code_apogee' => 'R133',
            'cne' => 'R133',
            'cin' => 'R133',
            'nom' => 'R133',
            'prenom' => 'R133',
            'date_de_naissance' => '2001-01-01',
            'adresse' => 'R133',
            'email_institutionnel' => 'R133',
            'email_personnel' => 'R133',
            'telephone' => 'R133',
            'sexe' => 'homme'
        ]);

        Student::create([
            'code_apogee' => 'R153',
            'cne' => 'R153',
            'cin' => 'R153',
            'nom' => 'R153',
            'prenom' => 'R153',
            'date_de_naissance' => '2001-01-01',
            'adresse' => 'R153',
            'email_institutionnel' => 'R153',
            'email_personnel' => 'R153',
            'telephone' => 'R153',
            'sexe' => 'homme'
        ]);
        
    }
}
