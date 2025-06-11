<nav class="bg-red-500 w-screen h-14 fixed z-10">
    <ul class="inline-flex float-right space-x-4 p-4 text-white">
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
    <ul class="float-left inline-flex space-x-4 p-4 text-white">
        <li><button id="closeButton" type="button">Close</button></li>
    </ul>
</nav>
