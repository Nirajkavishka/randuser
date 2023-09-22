<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Random User</title>
</head>
<body>
  <h1>{{ $user['name']['title'] }} {{ $user['name']['first'] }} {{ $user['name']['last'] }}</h1>
  <img src="{{ $user['picture']['large'] }}" alt="user image">
  <ul>
    <li>User Name: {{ $user['login']['username'] ?? '' }}</li>
    <li>Email: {{ $user['email'] ?? '' }}</li>
    <li>Age: {{ $user['dob']['age'] ?? '' }}</li>
    <li>Gender: {{ $user['gender'] ?? '' }}</li>
    <li>Phone: {{ $user['phone'] ?? '' }}</li>
    <li>Mobile: {{ $user['cell'] ?? '' }}</li>
  </ul>
  <h5>Json Response</h5>
  <pre style="color:darkgreen; background-color:black">{{ json_encode($user, 218) }}</pre>
  <small>My first package {{ date('Y') }}</small>
</body>
</html>