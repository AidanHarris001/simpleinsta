<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;


class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Account;
        $a->forename = "Aidan";
        $a->surname = "Harris";
        $a->date_of_birth = "2001-08-29";
        $a->bio = "yo it's Aidan!";
        $a->save();

        $account = Account::factory()->count(10)->create();
    }
}
