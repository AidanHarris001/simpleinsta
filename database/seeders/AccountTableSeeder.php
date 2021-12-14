<?php

namespace Database\Seeders;
use App\Models\Account;
use Illuminate\Database\Seeder;

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
        $a->bio = "yo it's cam!";
        $a->save();
    }
}
