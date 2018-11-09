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
            $administrator->email = "admin@mail.com";
            $administrator->roles = json_encode(["ADMIN"]);
            $administrator->address = 'Benua Pogung';
            $administrator->phone = '089765678';
            $administrator->avatar = 'avatar aang';
            $administrator->password = \Hash::make("admin123");
            $administrator->save();
            $this->command->info("User Admin berhasil diinsert");
    }
}
