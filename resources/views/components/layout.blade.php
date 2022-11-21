<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, inital-scalse=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'つぶやきアプリ' }}</title>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('css')
</head>
<body class="bg-gray-50">
  {{ $slot }}
</body>
</html>