<x-app-layout>
    <x-slot:title>
        Users
    </x-slot>
    <x-slot:topRight>
        <a href="{{ route('users.create') }}">
            <x-primary-button>Create  New User</x-primary-button>
        </a>
    </x-slot:topRight>

    <form action="" class="mt-8 mb-5">
        <label for="search">User name</label> <br>
        <input type="text" class="h-8 bg-dark-gray border-0 w-72" placeholder="Search for users">
        <span class="search-icon">
        <svg class="inline-block" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.75" d="M17.8805 16.0602L12.2493 10.4191C12.9806 9.32696 13.3735 8.04281 13.3735 6.69825C13.3735 4.90906 12.678 3.22697 11.415 1.96175C10.1519 0.696709 8.4729 0 6.68677 0C4.90065 0 3.22144 0.696709 1.95839 1.96175C0.695515 3.22697 0 4.90906 0 6.69825C0 8.48745 0.695515 10.1694 1.95857 11.4346C3.22162 12.6998 4.90065 13.3965 6.68695 13.3965C8.04432 13.3965 9.3396 12.9937 10.4378 12.2452L16.0636 17.8804C16.2535 18.0708 16.6027 18.0293 16.8434 17.7883L17.7887 16.8413C18.0294 16.6002 18.0706 16.2504 17.8805 16.0602ZM6.68677 11.5819C3.99831 11.5819 1.81133 9.39115 1.81133 6.69825C1.81133 4.00536 3.99849 1.81444 6.68677 1.81444C9.37506 1.81444 11.562 4.00536 11.562 6.69825C11.562 9.39115 9.37506 11.5819 6.68677 11.5819Z" fill="#1D1D1D"/>
        </svg>
    </span>
    </form

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-400 border-separate border-spacing-y-2">
            <thead class="text-xs Capitalize text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email Address
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Member Since
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-dark-gray">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    <a class="firstNameStyle" href="{{ route('users.show', 2) }}">Joe</a>
                </th>
                <td class="py-4 px-6">
                    Soap
                </td>
                <td class="py-4 px-6">
                    joe@soap.com
                </td>
                <td class="py-4 px-6">
                    Admin
                </td>
                <td class="py-4 px-6">
                    28 Sep 2021
                </td>
            </tr>

            <tr class="bg-dark-gray">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    <a class="firstNameStyle" href="">Joe</a>
                </th>
                <td class="py-4 px-6">
                    Soap
                </td>
                <td class="py-4 px-6">
                    joe@soap.com
                </td>
                <td class="py-4 px-6">
                    Admin
                </td>
                <td class="py-4 px-6">
                    28 Sep 2021
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
