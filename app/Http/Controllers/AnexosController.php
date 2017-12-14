<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anexo;

class AnexosController extends Controller
{
    public function adicionaAnexo(Request $request){
       // Define o valor default para a variável que contém o nome do anexo 
    $nomeDoArquivo = null;
    $entrada = $request->all();
    print_r($entrada);
    print("<br><br><br>");
    $teste=$request->file('anexo');
    print_r($teste);
    if($teste->hasFile('anexo[]')){
        print("<h1>ok</h1>");
    }
    //    // Verifica se informou o arquivo e se é válido
    //    if ($request->hasFile('anexo[]') && $request->file('anexo[]')->isValid()) {
    //     print("<br><br><br><h1>Entrou</h1>");
    //        // Define um aleatório para o arquivo baseado no timestamps atual
    //        $nome = uniqid(date('HisYmd'));
    
    //        // Recupera a extensão do arquivo
    //        $extension = $request->anexo->extension();
    
    //        // Define finalmente o nome
    //        $nomeDoArquivo = "{$nome}.{$extension}";

    //        //recupera descrição
    //        $descricao = $request->input('descricao_anexo');    
    //        // Faz o upload:
    //         $upload = $request->anexo->storeAs('categories', $nomeDoArquivo);
    //        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
    
    //        // Verifica se NÃO deu certo o upload (Redireciona de volta)
    //        if ( !$upload ){

    //            return redirect()
    //            ->back()
    //            ->with('error', 'Falha ao fazer upload')
    //            ->withInput();
    //         }else{
    //             $arquivoArray=[
    //                 'nome'=>'$nomeDoArquivo',
    //                 'descricao'=>'$descricao',
    //             ];
    //             Anexo::create($input);
    //          }
    //     }
    }
    public function ver(Request $request){
        
        $teste=$request->input('descricao_anexo');
        return print_r($teste);
        
    }
    
}
