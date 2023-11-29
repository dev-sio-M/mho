<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/onglet/bienvenue', function () {
    return view('onglet.bienvenue');
});

Route::get('/onglet/mesReseaux', function () {
    return view('onglet.mesReseaux');
});

Route::get('/onglet/monCompte', function () {
    if (Auth::check()) {
        return view('onglet.monCompte');
    } else {
        return redirect('/onglet/seConnecter');
    }
});


Route::get('/onglet/seConnecter', 'App\Http\Controllers\connexionController@showLoginForm')->name('showLoginForm');
Route::post('/onglet/seConnecter', 'App\Http\Controllers\connexionController@login')->name('login');

Route::get('/onglet/creerCompte', 'App\Http\Controllers\CreerCompteController@showRegistrationForm');
Route::post('/onglet/creerCompte', 'App\Http\Controllers\CreerCompteController@register')->name('register');


Route::post('/onglet/logout', 'App\Http\Controllers\connexionController@logout')->name('logout');













/*sommaire*/
Route::get('/onglet/sommaire', function () {
    return view('onglet.sommaire');
});

Route::get('/onglet/sommaireHeros/a', function () {
    return view('onglet.sommaireHeros.a');
});

Route::get('/onglet/sommaireHeros/b', function () {
    return view('onglet.sommaireHeros.b');
});

Route::get('/onglet/sommaireHeros/c', function () {
    return view('onglet.sommaireHeros.c');
});

Route::get('/onglet/sommaireHeros/d', function () {
    return view('onglet.sommaireHeros.d');
});

Route::get('/onglet/sommaireHeros/e', function () {
    return view('onglet.sommaireHeros.e');
});

Route::get('/onglet/sommaireHeros/f', function () {
    return view('onglet.sommaireHeros.f');
});

Route::get('/onglet/sommaireHeros/g', function () {
    return view('onglet.sommaireHeros.g');
});

Route::get('/onglet/sommaireHeros/h', function () {
    return view('onglet.sommaireHeros.h');
});

Route::get('/onglet/sommaireHeros/i', function () {
    return view('onglet.sommaireHeros.i');
});

Route::get('/onglet/sommaireHeros/j', function () {
    return view('onglet.sommaireHeros.j');
});

Route::get('/onglet/sommaireHeros/k', function () {
    return view('onglet.sommaireHeros.k');
});

Route::get('/onglet/sommaireHeros/l', function () {
    return view('onglet.sommaireHeros.l');
});

Route::get('/onglet/sommaireHeros/m', function () {
    return view('onglet.sommaireHeros.m');
});

Route::get('/onglet/sommaireHeros/n', function () {
    return view('onglet.sommaireHeros.n');
});

Route::get('/onglet/sommaireHeros/o', function () {
    return view('onglet.sommaireHeros.o');
});

Route::get('/onglet/sommaireHeros/p', function () {
    return view('onglet.sommaireHeros.p');
});

Route::get('/onglet/sommaireHeros/q', function () {
    return view('onglet.sommaireHeros.q');
});

Route::get('/onglet/sommaireHeros/r', function () {
    return view('onglet.sommaireHeros.r');
});

Route::get('/onglet/sommaireHeros/s', function () {
    return view('onglet.sommaireHeros.s');
});

Route::get('/onglet/sommaireHeros/t', function () {
    return view('onglet.sommaireHeros.t');
});

Route::get('/onglet/sommaireHeros/u', function () {
    return view('onglet.sommaireHeros.u');
});

Route::get('/onglet/sommaireHeros/v', function () {
    return view('onglet.sommaireHeros.v');
});

Route::get('/onglet/sommaireHeros/w', function () {
    return view('onglet.sommaireHeros.w');
});

Route::get('/onglet/sommaireHeros/x', function () {
    return view('onglet.sommaireHeros.x');
});

Route::get('/onglet/sommaireHeros/y', function () {
    return view('onglet.sommaireHeros.y');
});

Route::get('/onglet/sommaireHeros/z', function () {
    return view('onglet.sommaireHeros.z');
});


/*heros*/
Route::get('/heros/abomination', function () {
    return view('heros.abomination');
});

Route::get('/heros/absorbingMan', function () {
    return view('heros.absorbingMan');
});

Route::get('/heros/adamWarlock', function () {
    return view('heros.adamWarlock');
});

Route::get('/heros/aero', function () {
    return view('heros.aero');
});

Route::get('/heros/agathaHarkness', function () {
    return view('heros.agathaHarkness');
});

Route::get('/heros/agent13', function () {
    return view('heros.agent13');
});

Route::get('/heros/agentCoulson', function () {
    return view('heros.agentCoulson');
});

Route::get('/heros/americaChavez', function () {
    return view('heros.americaChavez');
});

Route::get('/heros/angel', function () {
    return view('heros.angel');
});

Route::get('/heros/angela', function () {
    return view('heros.angela');
});

Route::get('/heros/antMan', function () {
    return view('heros.antMan');
});

Route::get('/heros/apocalypse', function () {
    return view('heros.apocalypse');
});

Route::get('/heros/armor', function () {
    return view('heros.armor');
});

Route::get('/heros/arnimZola', function () {
    return view('heros.arnimZola');
});

Route::get('/heros/attuma', function () {
    return view('heros.attuma');
});

Route::get('/heros/baronMordo', function () {
    return view('heros.baronMordo');
});

Route::get('/heros/bast', function () {
    return view('heros.bast');
});

Route::get('/heros/beast', function () {
    return view('heros.beast');
});

Route::get('/heros/bishop', function () {
    return view('heros.bishop');
});

Route::get('/heros/blackBolt', function () {
    return view('heros.blackBolt');
});

Route::get('/heros/blakCat', function () {
    return view('heros.blakCat');
});

Route::get('/heros/blackPanther', function () {
    return view('heros.blackPanther');
});

Route::get('/heros/blackWidow', function () {
    return view('heros.blackWidow');
});

Route::get('/heros/blade', function () {
    return view('heros.blade');
});

Route::get('/heros/blueMarvel', function () {
    return view('heros.blueMarvel');
});

Route::get('/heros/brood', function () {
    return view('heros.brood');
});

Route::get('/heros/buckyBarnes', function () {
    return view('heros.buckyBarnes');
});

Route::get('/heros/cable', function () {
    return view('heros.cable');
});

Route::get('/heros/captainAmerica', function () {
    return view('heros.captainAmerica');
});

Route::get('/heros/captainMarvel', function () {
    return view('heros.captainMarvel');
});

Route::get('/heros/carnage', function () {
    return view('heros.carnage');
});

Route::get('/heros/cerebro', function () {
    return view('heros.cerebro');
});

Route::get('/heros/cloak', function () {
    return view('heros.cloak');
});

Route::get('/heros/coleenWing', function () {
    return view('heros.coleenWing');
});

Route::get('/heros/collector', function () {
    return view('heros.collector');
});

Route::get('/heros/colossus', function () {
    return view('heros.colossus');
});

Route::get('/heros/cosmo', function () {
    return view('heros.cosmo');
});

Route::get('/heros/crossbones', function () {
    return view('heros.crossbones');
});

Route::get('/heros/crystal', function () {
    return view('heros.crystal');
});

Route::get('/heros/cyclops', function () {
    return view('heros.cyclops');
});

Route::get('/heros/dagger', function () {
    return view('heros.dagger');
});

Route::get('/heros/daredevil', function () {
    return view('heros.daredevil');
});

Route::get('/heros/darkhawk', function () {
    return view('heros.darkhawk');
});

Route::get('/heros/dazzler', function () {
    return view('heros.dazzler');
});

Route::get('/heros/deadpool', function () {
    return view('heros.deadpool');
});

Route::get('/heros/death', function () {
    return view('heros.death');
});

Route::get('/heros/deathlok', function () {
    return view('heros.deathlok');
});

Route::get('/heros/debrii', function () {
    return view('heros.debrii');
});

Route::get('/heros/destroyer', function () {
    return view('heros.destroyer');
});

Route::get('/heros/devilDinosaur', function () {
    return view('heros.devilDinosaur');
});

Route::get('/heros/doctorDom', function () {
    return view('heros.doctorDom');
});

Route::get('/heros/doctorOctopus', function () {
    return view('heros.doctorOctopus');
});

Route::get('/heros/doctorStrange', function () {
    return view('heros.doctorStrange');
});

Route::get('/heros/domino', function () {
    return view('heros.domino');
});

Route::get('/heros/dracula', function () {
    return view('heros.dracula');
});

Route::get('/heros/drax', function () {
    return view('heros.drax');
});

Route::get('/heros/ebonyMaw', function () {
    return view('heros.ebonyMaw');
});

Route::get('/heros/electro', function () {
    return view('heros.electro');
});

Route::get('/heros/elektra', function () {
    return view('heros.elektra');
});

Route::get('/heros/enchantress', function () {
    return view('heros.enchantress');
});

Route::get('/heros/falcon', function () {
    return view('heros.falcon');
});

Route::get('/heros/forge', function () {
    return view('heros.forge');
});

Route::get('/heros/galactus', function () {
    return view('heros.galactus');
});

Route::get('/heros/gambit', function () {
    return view('heros.gambit');
});

Route::get('/heros/gamora', function () {
    return view('heros.gamora');
});

Route::get('/heros/ghost', function () {
    return view('heros.ghost');
});

Route::get('/heros/ghostRider', function () {
    return view('heros.ghostRider');
});

Route::get('/heros/greenGoblin', function () {
    return view('heros.greenGoblin');
});

Route::get('/heros/groot', function () {
    return view('heros.groot');
});

Route::get('/heros/hawkeye', function () {
    return view('heros.hawkeye');
});

Route::get('/heros/hazmat', function () {
    return view('heros.hazmat');
});

Route::get('/heros/heimdall', function () {
    return view('heros.heimdall');
});

Route::get('/heros/hela', function () {
    return view('heros.hela');
});

Route::get('/heros/helicarrier', function () {
    return view('heros.helicarrier');
});

Route::get('/heros/highEvolutionary', function () {
    return view('heros.highEvolutionary');
});

Route::get('/heros/hitMonkey', function () {
    return view('heros.hitMonkey');
});

Route::get('/heros/hobgoblin', function () {
    return view('heros.hobgoblin');
});

Route::get('/heros/hood', function () {
    return view('heros.hood');
});

Route::get('/heros/howardTheDuck', function () {
    return view('heros.howardTheDuck');
});

Route::get('/heros/hulk', function () {
    return view('heros.hulk');
});

Route::get('/heros/hulkbuster', function () {
    return view('heros.hulkbuster');
});

Route::get('/heros/humanTorch', function () {
    return view('heros.humanTorch');
});

Route::get('/heros/iceMan', function () {
    return view('heros.iceMan');
});

Route::get('/heros/invisibleWoman', function () {
    return view('heros.invisibleWoman');
});

Route::get('/heros/ironFist', function () {
    return view('heros.ironFist');
});

Route::get('/heros/ironMan', function () {
    return view('heros.ironMan');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});

Route::get('/heros/', function () {
    return view('heros.');
});
