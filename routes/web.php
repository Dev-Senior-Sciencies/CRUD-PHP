<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Models\Empreendimento;


Route::get('/', function () {
    return view('db');
});

Route::get('/criarApiUnidade', function () {
    return view('criarApiUnidade');
});

/* Criar unidade */

Route::post('/criar-unidade', function (Request $request) {

    Unidade::create([
        'codigo' => $request->codigo,
        'bloco' => $request->bloco,
        'valor' => $request->valor,
        'status' => $request->status
    ]);

    echo "Unidade Criada com sucesso!";
});

/* Ler unidade */

Route::get('/ler-unidade/{id}', function ($id) {

    $unidade = Unidade::find($id);

    return view('lerApiUnidade', ['unidade' => $unidade]);
});

/* atualiza Unidade */

Route::get('/atualizar-unidade/{id}', function ($id) {

    $unidade = Unidade::find($id);

    return view('atualizarApiUnidade', ['unidade' => $unidade]);
});

Route::post('/atualizar-unidade/{id}', function (Request $request, $id) {

    $unidade = Unidade::find($id);
    $unidade->update([
        'codigo' => $request->codigo,
        'bloco' => $request->bloco,
        'valor' => $request->valor,
        'status' => $request->status
    ]);

    echo "Unidade Atualizado com sucesso!";
});

/* excluir Unidade */

Route::get('/excluir-unidade/{id}', function ($id) {

    $unidade = Unidade::find($id);
    $unidade->delete();

    echo "Unidade excluir com sucesso!";
});

/* Criar empreendimento */
Route::get('/criarApiEmpreendimento', function () {
    return view('criarApiEmpreendimento');
});

Route::post('/criar-empreendimento', function (Request $request) {

    Empreendimento::create([
        'codigo' => $request->codigo,
        'nome' => $request->nome,
        'localização' => $request->localização,
        'previsão' => $request->previsão
    ]);

    echo "empreendimento Criada com sucesso!";
});

/* Ler empreendimento */

Route::get('/ler-empreendimento/{id}', function ($id) {

    $empreendimento = Empreendimento::find($id);

    return view('lerApiEmpreendimento', ['empreendimento' => $empreendimento]);
});

/* atualiza Empreendimento */

Route::get('/atualizar-empreendimento/{id}', function ($id) {

    $empreendimento = Empreendimento::find($id);

    return view('atualizarApiEmpreendimento', ['empreendimento' => $empreendimento]);
});

Route::post('/atualizar-empreendimento/{id}', function (Request $request, $id) {

    $empreendimento = Empreendimento::find($id);
    $empreendimento->update([
        'codigo' => $request->codigo,
        'nome' => $request->nome,
        'localização' => $request->localização,
        'previsão' => $request->previsão
    ]);

    echo "Empreendimento Atualizado com sucesso!";
});

/* excluir Empreendimento */

Route::get('/excluir-empreendimento/{id}', function ($id) {

    $empreendimento = Empreendimento::find($id);
    $empreendimento->delete();

    echo "Empreendimento excluir com sucesso!";
});
