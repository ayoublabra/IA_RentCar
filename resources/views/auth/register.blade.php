<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="nom" value="Nom" />
            <x-text-input id="nom"
                class="block mt-1 w-full"
                type="text"
                name="nom"
                :value="old('nom')"
                required
                autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Prénom -->
        <div class="mt-4">
            <x-input-label for="prenom" value="Prénom" />
            <x-text-input id="prenom"
                class="block mt-1 w-full"
                type="text"
                name="prenom"
                :value="old('prenom')"
                required />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" value="Nom d'utilisateur" />
            <x-text-input id="username"
                class="block mt-1 w-full"
                type="text"
                name="username"
                :value="old('username')"
                required />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />
            <x-text-input id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="Mot de passe" />
            <x-text-input id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmation -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Confirmation" />
            <x-text-input id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                href="{{ route('login') }}">
                Déjà inscrit ?
            </a>

            <x-primary-button class="ms-4">
                S'inscrire
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
