<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    <div class="flex z-0">
        <!-- Sidebar -->
        <x-sidebar />
        <!-- Main content -->
        <div id="main" class="mt-16 ml-64 w-full h-full">
            <div class="px-2">
                @yield('main')
            </div>
        </div>
    </div>
    <script>
        const closeButton = document.getElementById('closeButton');
        const sidebar = document.getElementById('sidebar');
        const mainPage = document.getElementById('main');
        const sidebarStorage = localStorage.getItem('sidebar');

        if (sidebarStorage == 'hidden') {
            sidebar.classList.toggle('hidden')
            mainPage.classList.toggle('ml-64')
        }

        function WindowResizedToMobileView() {
            if (window.innerWidth < 768) {
                localStorage.setItem('sidebar', 'hidden');
                sidebar.classList.add('hidden');
                mainPage.classList.remove('ml-64');
            }
        }

        window.addEventListener('DOMContentLoaded', WindowResizedToMobileView);
        window.addEventListener('resize', WindowResizedToMobileView);

        closeButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            mainPage.classList.toggle('ml-64');
            const isNowHidden = sidebar.classList.contains('hidden');
            localStorage.setItem('sidebar', isNowHidden ? 'hidden' : 'shown');
        })
    </script>
</body>

</html>
