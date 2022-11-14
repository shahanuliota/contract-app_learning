<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Company::factory()->count(10)->create()->each(function (Company $company) {
            $company->contacts()->saveMany(
                Contact::factory()->count(rand(5, 10))->make()
            );
        });
//        $this->call([CompaniesTableSeeder::class, ContactTableSeeder::class]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
