<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostComment;

class PostCommentSeeder extends Seeder
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
                'name' => 'Asadul Islam',                
                'email' => 'asaduzzamannur@gmail.com',
                'website' => 'mdasadulislam.com',
                'comment' => 'good product',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Jakir mia',                
                'email' => 'jak@gmail.com',
                'website' => 'jakir.com',
                'comment' => 'good product',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Shifat',                
                'email' => 'shifat@gmail.com',
                'website' => 'shifat.com',
                'comment' => 'Nice post',
                'created_by' => '1',
                'updated_by' => '1'
            ],            
        ];

        foreach($datas as $data)
        {
            PostComment::create($data);
        }
    }
}
