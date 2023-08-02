<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public $customers = [
        ['id' => 1, 'name' => 'Jack Bro', 'email' => 'jackbro123@gmail.com', 'mobile' => '0121234567', 'user_id' => 1],
        ['id' => 2, 'name' => 'John Doe', 'email' => 'johndoe456@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 3, 'name' => 'Jane Smith', 'email' => 'janesmith789@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 4, 'name' => 'Alice Wonderland', 'email' => 'alicewonder123@hotmail.com', 'mobile' => '0197896543', 'user_id' => 1],
        ['id' => 5, 'name' => 'Bob Marley', 'email' => 'bobmarley111@gmail.com', 'mobile' => '0123456789', 'user_id' => 1],
        ['id' => 6, 'name' => 'Emma Stone', 'email' => 'emmastone007@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 7, 'name' => 'Peter Parker', 'email' => 'peterparker999@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 8, 'name' => 'Tom Cruise', 'email' => 'tomcruise@gmail.com', 'mobile' => '0121234567', 'user_id' => 1],
        ['id' => 9, 'name' => 'Jennifer Lawrence', 'email' => 'jenniferlaw@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 10, 'name' => 'Leonardo DiCaprio', 'email' => 'leonardodicaprio@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 11, 'name' => 'Emma Watson', 'email' => 'emmawatson@hotmail.com', 'mobile' => '0197896543', 'user_id' => 1],
        ['id' => 12, 'name' => 'Brad Pitt', 'email' => 'bradpitt@gmail.com', 'mobile' => '0123456789', 'user_id' => 1],
        ['id' => 13, 'name' => 'Angelina Jolie', 'email' => 'angelinajolie@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 14, 'name' => 'Robert Downey Jr.', 'email' => 'robertdowney@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 15, 'name' => 'Chris Hemsworth', 'email' => 'chrishemsworth@gmail.com', 'mobile' => '0121234567', 'user_id' => 1],
        ['id' => 16, 'name' => 'Gal Gadot', 'email' => 'galgadot@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 17, 'name' => 'Dwayne Johnson', 'email' => 'dwaynejohnson@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 18, 'name' => 'Scarlett Johansson', 'email' => 'scarlettjoh@gmail.com', 'mobile' => '0197896543', 'user_id' => 1],
        ['id' => 19, 'name' => 'Tom Hanks', 'email' => 'tomhanks@gmail.com', 'mobile' => '0123456789', 'user_id' => 1],
        ['id' => 20, 'name' => 'Natalie Portman', 'email' => 'natalieportman@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 21, 'name' => 'Keanu Reeves', 'email' => 'keanureeves@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 22, 'name' => 'Meryl Streep', 'email' => 'merylstreep@hotmail.com', 'mobile' => '0197896543', 'user_id' => 1],
        ['id' => 23, 'name' => 'Bradley Cooper', 'email' => 'bradleycooper@gmail.com', 'mobile' => '0121234567', 'user_id' => 1],
        ['id' => 24, 'name' => 'Emma Roberts', 'email' => 'emmaroberts@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 25, 'name' => 'Johnny Depp', 'email' => 'johnnydepp@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 26, 'name' => 'Charlize Theron', 'email' => 'charlizetheron@gmail.com', 'mobile' => '0123456789', 'user_id' => 1],
        ['id' => 27, 'name' => 'Will Smith', 'email' => 'willsmith@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
        ['id' => 28, 'name' => 'Jennifer Aniston', 'email' => 'jenniferani@outlook.com', 'mobile' => '0174567890', 'user_id' => 1],
        ['id' => 29, 'name' => 'Ryan Reynolds', 'email' => 'ryanreynolds@gmail.com', 'mobile' => '0121234567', 'user_id' => 1],
        ['id' => 30, 'name' => 'Anne Hathaway', 'email' => 'annehathaway@yahoo.com', 'mobile' => '0159876543', 'user_id' => 1],
    ];
    

    public function run(): void
    {

        foreach ($this->customers as $customer) {
            Customer::create($customer);
        }
    }
}
