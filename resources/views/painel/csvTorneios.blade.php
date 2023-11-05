<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>  
      <th scope="col">Data</th>  
      <th scope="col">Tipo</th>  
      <th scope="col">Status</th>  
      <th scope="col">Data Criação</th>  
      <th scope="col">Atualizado</th>  
    </tr>
  </thead>
  <tbody>
  	@foreach($campeonatos as $campeonato)
    <tr>
      <td scope="row">{{ $campeonato->id }}</td>
      <td>{{ $campeonato->titulo }}</td>
      <td>{{ $campeonato->cidade }}</td> 
      <td>{{ $campeonato->getEstadoSigla() }}</td> 
      <td>{{ $campeonato->dataCampeonato }}</td> 
      <td>{{ $campeonato->getTipo() }}</td> 
      <td>{{ $campeonato->ativo }}</td> 
      <td>{{ $campeonato->created_at }}</td> 
      <td>{{ $campeonato->updated_at }}</td>       
    </tr>
    @endforeach   
  </tbody>
</table>