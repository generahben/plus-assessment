<x-app-layout>
    <x-slot:goBack>
        <a href="{{ route('users.index') }}">Back to Users</a>
    </x-slot:goBack>

    <x-slot:title>
        Create New User
    </x-slot>


    <div class="bg-dark-gray p-8 mt-8">
        <h4 class="text-xl mb-8">New User Details</h4>

        <form action="" class="w-1/2">
            <div class="flex space-x-4">
                <aside class="w-1/2">
                    <label for="firstName">First name</label> <br>
                    <input id="firstName" class="plus-input" type="text" value="joe">
                </aside>
                <aside class="w-1/2">
                    <label for="lastName">last name</label> <br>
                    <input id="lastName" class="plus-input" type="text" value="joe">
                </aside>
            </div>
            <div class="">
                <label for="emailAddress">Email address</label> <br>
                <input id="emailAddress" class="plus-input" type="text" value="joe">
            </div>
            <div class="">
                <label for="role">Role</label> <br>
                <select name="role" id="role" class="plus-input bg-dark-gray">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="flex space-x-4">
                <aside class="w-1/2">
                    <label for="password">Password</label> <br>
                    <input id="password" class="plus-input" type="password" value="joe">
                </aside>
                <aside class="w-1/2">
                    <label for="confirmPassword">Confirm Password</label> <br>
                    <input id="confirmPassword" name="password_confirmation" class="plus-input" type="password" value="joe">
                </aside>
            </div>

            <button class="text-yellow border border-yellow rounded-full px-2">Save</button>
        </form>
    </div>

</x-app-layout>
