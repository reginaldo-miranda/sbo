<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <form wire:submit.prevent="create" method="post">
         
         <input type="text" wire:model="nome" style="border :2px solid #f00">
         <input type="text" wire:model="comissao" style="border :2px solid #f00">
         <button type="submit">gravar</button>

  </form>
    {{-- 
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>  --}}
</div>
