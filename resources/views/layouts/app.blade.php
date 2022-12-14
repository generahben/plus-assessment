<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-base text-white flex">
        <aside class="min-h-screen bg-secondary w-2/12 p-5">
            <a href="{{ route('users.index') }}">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <nav>
                <ul>
                    <li class="bg-primary text-secondary w-full px-2 py-1 text-left mt-4 font-semibold">
                        <a href="{{ route('users.index') }}" class="flex justify-items-center items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 29.3333H25.3333C26.0406 29.3333 26.7189 29.0524 27.219 28.5523C27.719 28.0522 28 27.3739 28 26.6667V5.33332C28 4.62608 27.719 3.9478 27.219 3.4477C26.7189 2.94761 26.0406 2.66666 25.3333 2.66666H6.66667C5.95942 2.66666 5.28115 2.94761 4.78105 3.4477C4.28095 3.9478 4 4.62608 4 5.33332V26.6667C4 27.3739 4.28095 28.0522 4.78105 28.5523C5.28115 29.0524 5.95942 29.3333 6.66667 29.3333H8ZM16 6.66532C18.196 6.66532 20 8.46666 20 10.6653C20 12.8627 18.196 14.6667 16 14.6667C13.804 14.6667 12 12.8627 12 10.6653C12 8.46666 13.804 6.66532 16 6.66532ZM8 23C8 20.0413 11.6067 17 16 17C20.3933 17 24 20.0413 24 23V24H8V23Z" fill="black"/>
                            </svg>
                            Users
                        </a>
                    </li>

                    <li class="text-white text-secondary w-full px-2 py-1 text-left mt-4">
                        <a href="{{ route('users.index') }}" class="flex justify-items-center items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.80002 3.20001C8.1635 3.20001 7.55306 3.45287 7.10297 3.90296C6.65288 4.35304 6.40002 4.96349 6.40002 5.60001V26.4C6.40002 27.0365 6.65288 27.647 7.10297 28.0971C7.55306 28.5472 8.1635 28.8 8.80002 28.8H23.2C23.8365 28.8 24.447 28.5472 24.8971 28.0971C25.3472 27.647 25.6 27.0365 25.6 26.4V5.60001C25.6 4.96349 25.3472 4.35304 24.8971 3.90296C24.447 3.45287 23.8365 3.20001 23.2 3.20001H8.80002ZM20.144 11.1872L20 11.2H12C11.8001 11.2004 11.6073 11.1259 11.4596 10.9912C11.3118 10.8565 11.2199 10.6714 11.2018 10.4723C11.1838 10.2732 11.2409 10.0746 11.362 9.91548C11.4831 9.75641 11.6593 9.64843 11.856 9.61281L12 9.60001H20C20.1999 9.59964 20.3927 9.67414 20.5405 9.80883C20.6882 9.94351 20.7802 10.1286 20.7982 10.3277C20.8163 10.5268 20.7592 10.7255 20.6381 10.8845C20.517 11.0436 20.3407 11.1516 20.144 11.1872ZM20.144 16.7872L20 16.8H12C11.8001 16.8004 11.6073 16.7259 11.4596 16.5912C11.3118 16.4565 11.2199 16.2714 11.2018 16.0723C11.1838 15.8732 11.2409 15.6746 11.362 15.5155C11.4831 15.3564 11.6593 15.2484 11.856 15.2128L12 15.2H20C20.1999 15.1996 20.3927 15.2741 20.5405 15.4088C20.6882 15.5435 20.7802 15.7286 20.7982 15.9277C20.8163 16.1268 20.7592 16.3255 20.6381 16.4845C20.517 16.6436 20.3407 16.7516 20.144 16.7872ZM20.144 22.3872L20 22.4H12C11.8001 22.4004 11.6073 22.3259 11.4596 22.1912C11.3118 22.0565 11.2199 21.8714 11.2018 21.6723C11.1838 21.4732 11.2409 21.2746 11.362 21.1155C11.4831 20.9564 11.6593 20.8484 11.856 20.8128L12 20.8H20C20.1999 20.7996 20.3927 20.8741 20.5405 21.0088C20.6882 21.1435 20.7802 21.3286 20.7982 21.5277C20.8163 21.7268 20.7592 21.9255 20.6381 22.0845C20.517 22.2436 20.3407 22.3516 20.144 22.3872Z" fill="black"/>
                            </svg>
                            Pages
                        </a>
                    </li>

                    <li class="text-white text-secondary w-full px-2 py-1 text-left mt-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{route('logout')}}" class="flex justify-items-center items-center" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Logout
                            </a>
                        </form>

                    </li>
                </ul>
            </nav>

        </aside>
        <aside class="min-h-screen w-10/12 p-5">
            <div class="flex justify-between">
                <span>
                @isset($goBack)
                   <p>{{ $goBack }}</p>
                @endisset
                @isset($title)
                    <h2 class="text-2xl font-bold">{{ $title }}</h2>
                @endisset
                </span>
                @isset($topRight)
                    <span>{{ $topRight }}</span>
                @endisset
            </div>
           {{$slot}}
        </aside>
    </body>
</html>
