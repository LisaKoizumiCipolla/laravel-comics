<header class=" wrapper">
        <div>
            <img src="../assets/img/dc-logo.png" alt="">
        </div>
        <div>
            <ul class="flex">
                @foreach ($headerNavbar as $nav)
                <li  class="{{ ($nav['selected']) ? 'active' : '' }}">
                {{ $nav['text'] }}
                </li>
                @endforeach
            </ul>
        </div>
    </header>