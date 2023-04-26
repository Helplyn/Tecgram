@extends('layouts.app')
@section('titulo')
Registrate en TecGram
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-lg" src="{{asset('img/imagendos.png')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('cuenta.store')}}" method="POST">
                @csrf

                <div class="mb-7">
                    <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="name">Nombre</label>
                <input class="border p-1 w-full rounded-lg @error('name') border-red-500 @enderror" type="text" id="name" name="name" value="{{old('name')}}">
                </div>

                @error('name')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror

                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="username">Username</label>
                <input class="border p-1 w-full rounded-lg @error('email') border-red-500 @enderror" type="text" id="username" name="username" value="{{old('username')}}">
               </div> 

               @error('username')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror

                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="email">Email</label>
                <input class="border p-1 w-full rounded-lg @error('email') border-red-500 @enderror" type="text" id="email" name="email" value="{{old('email')}}">
                </div>

                @error('email')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror
                
                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="password">Password</label>
                <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="password" id="password" name="password" >
                </div>

                @error('password')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror

                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="password_confirmation">Repetir password</label>
                <input class="border p-1 w-full rounded-lg" type="password" id="password_confirmation" name="password_confirmation" >
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold uppercase hover:bg-sky-700 cursor-pointer" type="submit" value="Crear cuenta">

            </form>
        </div>
    </div>
@endsection