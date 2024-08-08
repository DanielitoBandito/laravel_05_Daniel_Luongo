<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FemaleController extends Controller
{
    public function catalog(){
        $dati = [
            'parfumes' => [
                [
                    'id' => '1',
                    'title' => 'JeanPaul Goutier',
                    'description' => 'Profumo intenso per lei',
                    'img' => 'https://m.media-amazon.com/images/I/61KnTj3JhZL._AC_UF1000,1000_QL80_.jpg',

                ],
                [
                    'id' => '2',
                    'title' => 'Boss Boss',
                    'description' => 'Profumo piuttosto intenso',
                    'img' => 'https://media.theperfumeshop.com/medias/sys_master/prd-images/h7e/hf2/8871683063838/zoom-side-1087196_420x420/hugo-boss-boss-woman-eau-de-toilette-spray-420x420',
                ],
                [
                    'id' => '3',
                    'title' => 'Creedici',
                    'description' => 'Profumo costosissimo',
                    'img' => 'https://fraguru.com/mdimg/perfume/375x500.84206.jpg',
                ],
            ]

        ];

        return view('female.catalog',$dati);
    }

    public function details($id){
        $dati = [
            'current_id' => $id,

            'parfumes' => [
                [
                    'id' => '1',
                    'title' => 'JeanPaul Goutier',
                    'description' => 'Le francesi amano questo aroma.',
                    'img' => 'https://m.media-amazon.com/images/I/61KnTj3JhZL._AC_UF1000,1000_QL80_.jpg'
                ],
                [
                    'id' => '2',
                    'title' => 'Boss Boss',
                    'description' => 'Vuoi diventare la nuova CEO della tua realtà? Ecco che fa al caso tuo.',
                    'img' => 'https://media.theperfumeshop.com/medias/sys_master/prd-images/h7e/hf2/8871683063838/zoom-side-1087196_420x420/hugo-boss-boss-woman-eau-de-toilette-spray-420x420',
                ],
                [
                    'id' => '3',
                    'title' => 'Creedici',
                    'description' => 'Vendi la tua macchina e quella di tuo marito se vuoi il flacone di prova!',
                    'img' => 'https://fraguru.com/mdimg/perfume/375x500.84206.jpg',
                ],
            ]
            
            
        ];

        return view('female.details',$dati);
    }
}
