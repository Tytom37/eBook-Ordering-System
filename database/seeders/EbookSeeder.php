<?php

namespace Database\Seeders;

use App\Models\Ebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'The Silent Patient',
                'description' => "A psychological thriller about a woman's act of violence against her husband and her subsequent silence.",
                'author' => 'Alex Michaelides',
                'price' => '1400.00'
            ],
            [
                'title' => 'Educated',
                'description' => 'A memoir about a woman who grows up in a strict and abusive household in rural Idaho but eventually escapes to learn about the wider world through education.',
                'author' => 'Tara Westover',
                'price' => '553.00'
            ],
            [
                'title' => 'Becoming',
                'description' => 'The memoir of the former First Lady, offering insights into her life, experiences, and journey.',
                'author' => 'Michelle Obama',
                'price' => '397.00'
            ],
            [
                'title' => 'Where the Crawdads Sing',
                'description' => 'A mystery novel about a young woman who grows up isolated in the marshes of North Carolina and becomes the prime suspect in a murder investigation.',
                'author' => 'Delia Owens',
                'price' => '722.00'
            ],
            [
                'title' => 'Sapiens: A Brief History of HumanKind',
                'description' => 'An overview of the history of the human species from the emergence of Homo sapiens to the present day.',
                'author' => 'Yuva Noah Harari',
                'price' => '834.00'
            ],
            [
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'description' => "A self-help book that challenges conventional self-help advice and encourages readers to embrace life's challenges.",
                'author' => 'Mark Manson',
                'price' => '751.00'
            ],
            [
                'title' => 'Circe',
                'description' => ' A novel that reimagines the story of Circe, a lesser-known character from Greek mythology.',
                'author' => 'Madeline Miller',
                'price' => '1056.60'
            ],
            [
                'title' => 'The Testaments',
                'description' => "A sequel to 'The Handmaid's Tale,' exploring the lives of three women in the dystopian Republic of Gilead.",
                'author' => 'Margaret Atwood',
                'price' => '778.40'
            ],
            [
                'title' => 'Atomic Habits',
                'description' => 'A guide to understanding and changing habits to achieve positive outcomes in life.',
                'author' => 'James Clear',
                'price' => '1254.68'
            ],
            [
                'title' => 'Normal People',
                'description' => ' A novel that follows the complex relationship between two young people as they navigate love, friendship, and societal expectations.',
                'author' => 'Sally Rooney',
                'price' => '399.00'
            ]
        ];

        foreach($data as $d){
            Ebook::create($d);
        }
    }
}
