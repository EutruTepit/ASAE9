<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 50);
            $table->string("uf", 2);
            $table->timestamps();
        });

        $estados = array(
            array("nome"=>"Acre", "uf"=>"AC"),
            array("nome"=>"Alagoas", "uf"=>"AL"),
            array("nome"=>"Amapá", "uf"=>"AP"),
            array("nome"=>"Amazonas", "uf"=>"AM"),
            array("nome"=>"Bahia", "uf"=>"BA"),
            array("nome"=>"Ceará", "uf"=>"CE"),
            array("nome"=>"Distrito Federal", "uf"=>"DF"),
            array("nome"=>"Espírito Santo", "uf"=>"ES"),
            array("nome"=>"Goiás", "uf"=>"GO"),
            array("nome"=>"Maranhão", "uf"=>"MA"),
            array("nome"=>"Mato Grosso", "uf"=>"MT"),
            array("nome"=>"Mato Grosso", "uf"=>"MT"),
            array("nome"=>"Minas Gerais", "uf"=>"MG"),
            array("nome"=>"Pará", "uf"=>"PA"),
            array("nome"=>"Paraíba", "uf"=>"PB"),
            array("nome"=>"Paraná", "uf"=>"PR"),
            array("nome"=>"Pernambuco", "uf"=>"PE"),
            array("nome"=>"Piauí", "uf"=>"PI"),
            array("nome"=>"Rio de Janeiro", "uf"=>"RJ"),
            array("nome"=>"Rio Grande do Norte", "uf"=>"RN"),
            array("nome"=>"Rio Grande do Sul", "uf"=>"RS"),
            array("nome"=>"Rondônia", "uf"=>"RO"),
            array("nome"=>"Roraima", "uf"=>"RR"),
            array("nome"=>"Santa Catarina", "uf"=>"SC"),
            array("nome"=>"São Paulo", "uf"=>"SP"),
            array("nome"=>"Sergipe", "uf"=>"SE"),
            array("nome"=>"Tocantins", "uf"=>"TO")
        );

        foreach($estados as $e){
            DB::table('estados')->insert($e);
        }

    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
