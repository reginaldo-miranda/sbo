<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\grupo;

class GrupoComponent extends Component
{
    public $nome="aqui é um livewire novo render";
    public $comissao;

    protected $rules =[
        'nome' =>'required',
        'comissao'=>'required'
    ];

    public function render()
    {
        return view('livewire.grupo-component');
    }

    public function create(){
        $this->validate();
        grupo::create([
          'nome'=>$this->nome,
          'comissao'=>$this->comissao
        ]);
       // dd($this->nome, $this->comissao);
    }
}
