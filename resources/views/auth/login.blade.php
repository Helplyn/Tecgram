@extends('layouts.app')
@section('titulo')
Tirate un Login en TecGram
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-lg" src="{{asset('img/imagendos.png')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login.store')}}" method="POST">
                @csrf

                @if (session('mensaje'))
                    <p class="text-red-700 my-2">{{session('mensaje')}}</p>
                @endif

                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="username">Username</label>
                <input class="border p-1 w-full rounded-lg @error('email') border-red-500 @enderror" type="text" id="username" name="username" value="{{old('username')}}">
               </div> 

               @error('username')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror
                
                <div class="mb-7">
                <label class="mb-2 block text-gray-700 font-extrabold uppercase" for="password">Password</label>
                <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="password" id="password" name="password" >
                </div>

                @error('password')
                <p class="text-red-600 text-center mb-2">{{$message}}</p>
                @enderror

                <div class=" mb-3">
                    <input type="checkbox" name="remember" id="remember" >
                    <label class="text-gray-800" for="remember">recuerdame</label>
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold uppercase hover:bg-sky-700 cursor-pointer" type="submit" value="Iniciar Sesion">


            </form>
        </div>
    </div>
@endsection