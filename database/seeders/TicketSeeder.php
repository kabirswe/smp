<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'unit_price' => '500',                
                'quantity' => '1',
                'total_price' => '100',
                'category_name' => 'Local',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'unit_price' => '600',                
                'quantity' => '2',
                'total_price' => '200',
                'category_name' => 'Defence',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'unit_price' => '700',                
                'quantity' => '3',
                'total_price' => '300',
                'category_name' => 'Foreigner',
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            Ticket::create($data);
        }
    }
}
