<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\grupo;


class GrupoComponent extends Component
{
    public $id_grupo; 
    public $nome;
    public $comissao;
    public $grupo;

    protected $rules =[
        'nome' =>'required',
        'comissao'=>'required'
    ];

 /*   public function mount(){
        $grupo = grupo::get();
    
        return view('livewire.grupo-component',compact('grupo'));
    }*/

    public function render()
    {
        return view('livewire.grupo-component',[
            'grupos' => grupo::all('id_grupo','nome','comissao')
        ]);
    }

    public function create(){
        $this->validate();
        grupo::create([
          'nome'=>$this->nome,
          'comissao'=>$this->comissao

        ]);
        $this->nome = '';
        $this->comissao = '';
       // dd($this->nome, $this->comissao);
    }

    public function deletar($id_grupo){
        grupo::destroy($id_grupo);
    }
}
