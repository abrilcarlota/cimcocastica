<form class="w-full max-w-lg border-4" method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5">{{ $title }} </h1>
     <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="nombre">
                {{ __("Nombre Lector") }}
            </label>
            <input name="nombre" value="{{ old('nombre') ?? $lectore->nombre }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Nombre Lector") }}</p>
            @error("nombre")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="apellidos">
                {{ __("Apellidos Lector") }}
            </label>
            <input name="apellidos" value="{{ old('apellidos') ?? $lectore->apellidos }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="direccion" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Apellidos Escritor") }}</p>
            @error("apellidos")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="direccion">
                {{ __("Dirección Lector") }}
            </label>
            <input name="direccion" value="{{ old('direccion') ?? $lectore->direccion }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="direccion" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Dirección Lector") }}</p>
            @error("direccion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="name">
                {{ __("Name") }}
            </label>
            <input name="name" value="{{ old('name') ?? $lectore->name }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Name") }}</p>
            @error("name")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Dirección de correo electrónico') }}:
            </label>

            <input id="email" type="email"
                class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                value="{{ old('email') ?? $user->email }}" required autocomplete="email">

            @error('email')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Contraseña') }}:
            </label>

            <input id="password" type="password"
                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                required autocomplete="new-password">

            @error('password')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>