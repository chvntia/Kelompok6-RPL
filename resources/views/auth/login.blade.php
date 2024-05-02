@include('layouts.navbar')
<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row sm:flex-col sm:gap-10">
        <div class="md:h-auto md:w-1/2 shadow-2xl rounded-xl sm:shadow-md flex items-center justify-center h-screen">
            <img class="w-100 h-100 object-cover" src="{{ asset('images/logo.jpg') }}" alt="" />     
        </div>
        
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Log in
                </h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex items-center mt-4">
                        <input type="checkbox" name="remember" id="remember_me" class="text-indigo-600 focus:ring-indigo-500 h-4 w-4 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>

                        <button type="submit" class="inline-flex items-center ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
