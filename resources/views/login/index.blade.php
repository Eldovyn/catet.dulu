@extends('layouts.auth')

@section('container')
    <form action="" class="p-6 rounded-md w-100 gap-2 flex flex-col border border-gray-200">
        <h1 class="font-semibold text-2xl">Welcome back!</h1>
        <p class="text-sm text-gray-500">Enter your credentials to access your account</p>
        <br>
        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-semibold">Email</label>
            <input type="text" placeholder="Type here"
                class="input w-full border border-gray-200 focus:outline-none! focus:ring-0! focus:ring-offset-0! focus:shadow-none!" />
        </div>
        <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-semibold">Password</label>
            <div class="flex flex-col gap-1">
                <div class="relative w-full">
                    <input type="text" placeholder="Type here"
                        class="input w-full border border-gray-200 pr-11
           focus:outline-none! focus:ring-0! focus:ring-offset-0! focus:shadow-none!" />

                    <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                        <i class="hgi hgi-stroke hgi-view cursor-pointer"></i>
                    </span>
                </div>

                <a href="/forgot-password" class="text-[10px] text-end text-blue-500 underline">Fogot Password</a>
            </div>
        </div>
        <br>
        <div class="flex flex-col gap-2">
            <button class="btn btn-active" type="submit">Sign In</button>
            <p class="text-[12px] text-center">Don't have an account? <a href="/register"
                    class="text-blue-500 underline">Sign
                    Up</a></p>
        </div>
    </form>
@endsection
