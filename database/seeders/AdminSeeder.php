<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::query()->create([
            'name'=>'mehrdad',
            'phone'=>'05465416554',
            'password'=>'hpWT4N1GiLEgD7f401AFZoCyX4XLjvANnQjlMl7k'//8Bnxogisb$#nLe%$HGyjJ0q77sDVru,
        ]);
    }
}
