<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaleController extends Controller
{
    
    public function catalog(){
        $dati = [
            'parfumes' => [
                [
                    'id' => '1',
                    'title' => 'JeanPaul Goutier',
                    'description' => 'Profumo intenso per te',
                    'img' => 'https://i.makeup.it/i/ie/ie3keqqyftfe.jpg',

                ],
                [
                    'id' => '2',
                    'title' => 'Boss Boss',
                    'description' => 'Profumo piuttosto intenso',
                    'img' => 'https://m.media-amazon.com/images/I/61RkwaEsrIL._AC_UF894,1000_QL80_.jpg',
                ],
                [
                    'id' => '3',
                    'title' => 'Creedici',
                    'description' => 'Profumo costosissimo',
                    'img' => 'https://cdn2.essenzaltro.it/6638-thickbox_default/creed-aventus-edp.jpg',
                ],
            ]

        ];

        return view('male.catalog',$dati);
    }

    public function details($id){
        $dati = [
            'current_id' => $id,

            'parfumes' => [
                [
                    'id' => '1',
                    'title' => 'JeanPaul Goutier',
                    'description' => 'Il miglior profumo francese dal 2006',
                    'img' => 'https://i.makeup.it/i/ie/ie3keqqyftfe.jpg'
                ],
                [
                    'id' => '2',
                    'title' => 'Boss Boss',
                    'description' => 'Odi il tuo capo? Questo profumo allora non fa per te.',
                    'img' => 'https://m.media-amazon.com/images/I/61RkwaEsrIL._AC_UF894,1000_QL80_.jpg',
                ],
                [
                    'id' => '3',
                    'title' => 'Creedici',
                    'description' => 'Hai pochi soldi? mi dispiace, puoi rubarli a tua madre.',
                    'img' => 'https://cdn2.essenzaltro.it/6638-thickbox_default/creed-aventus-edp.jpg',
                ],
            ]
            
            
        ];

        return view('male.details',$dati);
    }

}
