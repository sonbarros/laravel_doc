<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColecoesController extends Controller
{
    /**
     * Faça o teste na rota .../colecoes/aula01
     */
    public function aula01() {
        
        $collection = collect(['Jesus', 'Anderson', null])->map(function ($name) {
            
            return strtoupper($name); // Maiusculas
        })->reject(function ($name) {
            
            return empty($name); // true or false
        });

        $collection->dd();
    }

    /**
     * Criando uma coleção
     */
    public function aula02() {
        $collection = collect([1, 2, 3]);
        $collection->dd();
    }

    /**
     * Metodo ALL()
     */
    public function aula03() {
        $collection_array = collect([
            7,
            8,
            9
        ])->all();

        dd($collection_array);
    }

    /**
     * avg() média
     */
    public function aula04() {

        $average = collect([
            ['foo' => 10],
            ['foo' => 10],
            ['foo' => 20],
            ['foo' => 40],
        ]);

        //dd(
        //    $average->avg('foo') // 20
        //);

        // Outro exemplo
        dd(
            collect([1, 2, 3])->avg()
        );
    }

    /**
     * chunk()
     * Divide a coleção em várias coleções de um determinado tamanho
     */
    public function aula05() {

        $multCollections = collect([1,2,3,4,5,6,7,8])->chunk(2); // devolve coleção dentro de coleção
        
        dd(
            $multCollections->all() // [[1,2], [3,4], [5,6], [7,8]]
        );

        /** Ideal para trabalhar com grid
         * @foreach ($products->chunk(3) as $chunk)
         *  <div class="row">
         *      @foreach ($chunk as $product)
         *          <div class="col-xs-4">{{ $product->name }}</div>
         *       @endforeach
         *  </div>
         *  @endforeach
         */
        
    }

    public function aula06() {

        $Collections = collect(str_split('AABBCCCD'));
        $chunks = $Collections->chunkWhile(function ($value, $key, $chunk) {
            
            return $value === $chunk->last(); // true or false
            //$chunk->last(); // retorna o ultimo valor, ex na primeira rodada A === A 
        });

        dd(
            $chunks->all() // [['A', 'A'], ['B', 'B'], ['C', 'C', 'C'], ['D']]
        );

        // Observe que conforme o criterio ele irá agrupar os caracteres iguais
        
    }
}
