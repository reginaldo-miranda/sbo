<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <form wire:submit.prevent="create" method="post">
         
         <input type="text" wire:model="nome" style="border :2px solid #f00">
         <input type="text" wire:model="comissao" style="border :2px solid #f00">
         <button type="submit">gravar</button>

  </form>
    
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>nome</th>
            <th>comissao</th>
            <th colspan=2&nbps></th>
          </tr>
        </thead>
        <tbody>
          @foreach($grupos as $grupu)
          <tr>
               <td>{{ $grupu->id_grupo }}</td> 
               <td>{{ $grupu->nome }}</td>
               <td>{{ $grupu->comissao }}</td>
               <td><button class="btn btn-primary btn-sm">Editar</button></td>
               <td><button wire:click="deletar({{ $grupu->id_grupo }})" class="btn btn-danger btn-sm">Deletar</button></td>     
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
