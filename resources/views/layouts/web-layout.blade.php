<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME SCHEDULE</title>


    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    @livewire('web.header-user')
    <!-- acceuil section -->


    <!-- A propos section -->

    <main class="min-h-screen pt-16">
        {{$slot}}

    </main>



    <footer>
        <p> Réalisé par <span>GEORGES MANKULU KAZAMB</span> | Tous les droits sont réservés. </p>
        <p id="Contact">Contact : +243814654306 | &copy;Juin 2023, TIMESCHEDULE UCC.</p>
    </footer>


    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>

    @livewireScriptConfig

</body>

</html>
