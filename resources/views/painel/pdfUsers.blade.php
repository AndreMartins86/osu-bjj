<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDF</title>  

	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: blue;
			color: white;
		}		
	</style>
</head>


<body>


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
</body>
</html>

