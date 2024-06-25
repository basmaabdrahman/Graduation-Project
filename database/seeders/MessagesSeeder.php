<?php

namespace Database\Seeders;



use App\Models\Message;
use Illuminate\Database\Seeder;

class messagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::factory()->count(5)->create();
    }
}
