<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
         <h1>Bienvenue sur Mon site</h1>
         <p>Il est actuellment {{date('h:i A')}}</p>

         <footer>
             <p>&copy; Copyright {{date('Y')}} &middot; <a href="/about-us"> A propos<a> </p>
         </footer>
    </body>
</html>
