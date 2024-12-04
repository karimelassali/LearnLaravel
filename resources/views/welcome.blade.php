<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{$title}}</title>
</head>
<body>
   @include('components.nav.nav')
    <a href="/about">About</a>
   @include('components.hero.hero')

   <x-footer name="Jenny Carter" thin=9 age='39'  >
        <h2>hello</h2>
    </x-footer >

</body>
</html>