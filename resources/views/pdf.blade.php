<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@foreach($usuarios as $user)
	<p>{{ $user->nome }}</p>
	@endforeach

</body>
</html>