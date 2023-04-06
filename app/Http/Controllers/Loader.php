<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loader extends Controller
{
    
    // protected static $navbar =
    // [
    //     [
    //         'display'=>'Struttura',
    //         'uri'=>'/struttura',
    //     ],
    //     [
    //         'display'=>'I Corsi',
    //         'uri'=>'/corsi',
    //     ],
    //     [
    //         'display'=>'Contattaci',
    //         'uri'=>'/contatti',
    //     ],
    //     [
    //         'display'=>'Dove siamo',
    //         'uri'=>'/dove-siamo'
    //     ]
    //     ];

    protected static $array=
    [
        [
            'name'=>'Aerobica',
            'id'=>'1',
            'desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, vero? Animi molestias, adipisci aliquam inventore repellendus a. Libero non, ad vero porro animi obcaecati illum reprehenderit aliquam veniam aliquid excepturi.',
            'img'=>'https://picsum.photos/300/200'
        ],
        [
            'name'=>'Pesistica',
            'id'=>'2',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsam assumenda quo nihil dolorum et repudiandae, modi unde nostrum ipsum soluta porro quos numquam neque consectetur magnam consequuntur doloribus sed.',
            'img'=>'https://picsum.photos/300/200'
        ],
        [
            'name'=>'Calisthenics',
            'id'=>'3',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quis aliquid nulla labore dolorem officiis officia, pariatur, eaque ullam non iusto sapiente ab corporis atque laborum velit a! Id, quas.',
            'img'=>'https://picsum.photos/300/200'
        ],
        [
            'name'=>'Zumba',
            'id'=>'4',
            'desc'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, at quaerat eum veritatis cum ea porro! Dolorum perspiciatis, non magni laboriosam fugit quod commodi veniam laudantium rerum veritatis ullam officiis.',
            'img'=>'https://picsum.photos/300/200'
        ]
    
    
        ];

    public function welcome(){
        return view('welcome',);
    }
    public function struttura(){
        return view('struttura');
    }
    public function corsi(){
        return view('corsi',['array'=>self::$array]);
    }
    public function contatti(){
        return view('contatti');
    }
    public function dovesiamo(){
        return view('dove-siamo');
    }
    public function detail($id){
        foreach (self::$array as $item){
            if ($item['id']==$id){
                return view('detail',['detail'=>$item]);
            }
        }
    }
}