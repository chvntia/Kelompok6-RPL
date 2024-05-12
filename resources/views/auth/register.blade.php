@include('layouts.navbar')
<x-guest-layout>
    <div class="flex flex-col md:flex-row sm:flex-col sm:gap-10">
        <div class="md:h-auto md:w-1/2 shadow-2xl rounded-xl sm:shadow-md flex items-center justify-center h-screen bg-lime-50">
            <img class="w-100 h-100 object-cover" src="{{ asset('images/logo.jpg') }}" alt="" />     
        </div>
        
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Register
                </h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <!-- Email -->
                    <div class="">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    
                    <!-- Phone Number -->
                    <div class="">
                        <x-label for="no_hp" value="{{ __('No Handphone') }}" />
                        <x-input id="no_hp" class="border p-2 block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="phone" name="no_hp" :value="old('no_hp')" required autocomplete="no_hp" />
                    </div>
                    
                    <!-- Address -->
                    <div class="">
                        <x-label for="alamat" value="{{ __('Alamat') }}" />
                        <x-input id="alamat" class="border p-2 block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="alamat" name="alamat" :value="old('alamat')" required autocomplete="alamat" />
                    </div>

                    <!-- Password -->
                    <div class="">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <!-- Register Button -->
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('login') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Sudah Registrasi?
                        </a>

                        <button type="submit" class="inline-flex items-center ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>