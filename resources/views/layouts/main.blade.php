<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ seo()->render() }}

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    {{ $slot }}
</body>

</html>
