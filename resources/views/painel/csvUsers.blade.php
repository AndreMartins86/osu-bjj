<table>
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cargo</th>      
    </tr>
  </thead>
  <tbody>
  	@foreach($usuarios as $user)
    <tr>
      <td scope="row">{{ $user->nome }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role }}</td>      
    </tr>
    @endforeach   
  </tbody>
</table>