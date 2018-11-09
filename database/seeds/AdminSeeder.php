<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $administrator = new \App\User;
            $administrator->username = "administrator";
            $administrator->name = "Site Administrator";
            $administrator->email = "administrator@larashop.test";
            $administrator->roles = json_encode(["ADMIN"]);
            $administrator->address = 'Benua Pogung';
            $administrator->phone = '089765678';
            $administrator->avatar = 'avatar aang';
            $administrator->password = \Hash::make("larashop");
            $administrator->save();
            $this->command->info("User Admin berhasil diinsert");
    }
}
