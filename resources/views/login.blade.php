@extends('layouts.layout')

@section('content')
  <div class="w-full py-16 bg-black/25 flex">
        <div class="lg:w-[60%] md:w-[80%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col gap-4 px-6 justify-between overflow-hidden">
                 <div class="h-full lg:w-[50%] md:w-[50%] w-[100%]">
                     <div class="w-full h-48 relative sticky top-0">
                         <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1540574163026-643ea20ade25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                         <div class="absolute top-10 left-10">
                             <span class="font-semibold text-black text-3xl">Login</span>
                         </div>
                     </div>
                     <div id="signIn" class=" p-8 h-full bg-white flex flex-col gap-4">
                         <form action="" class="flex flex-col gap-4">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="email" placeholder="Enter your email:">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="password" placeholder="Password:">
                         </form>

                         <div>
                             <a href=""><span class="text-black font-semibold text-lg">Forget Password?</span></a>
                         </div>

                         <div>
                             <button class="w-full bg-white text-black border-[1px] border-black py-4 font-semibold text-lg transition ease-in duration-200 hover:bg-black hover:text-white">Sign In</button>
                         </div>

                         <div>
                             <a href="#signUp"><button class="w-full bg-gray-300 text-gray-800 border-[1px] border-black py-4 font-semibold text-lg transition ease-in duration-200 hover:bg-gray-700 hover:text-white">Create New Account</button>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="h-full lg:w-[50%] md:w-[50%] w-[100%]">

                     <div class="w-full h-48 relative sticky top-0">
                         <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                         <div class="absolute top-10 left-10">
                             <span class="font-semibold text-black text-3xl">Sign In</span>
                         </div>
                     </div>
                     <div id="signUp" class=" p-8 h-full  bg-white flex flex-col gap-4">
                         <form action="" class="flex flex-col gap-4">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="text" placeholder="Enter your name:">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="email" placeholder="Enter your email:">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="password" placeholder="Password:">
                             <input class="bg-white border-[1px] border-gray-300 px-2 py-4 w-full focus:outline-none focus:ring-0" type="password" placeholder="Confirm Password:">
                         </form>
                         <div>
                             <button class="w-full bg-white text-black border-[1px] border-black py-4 font-semibold text-lg transition ease-in duration-200 hover:bg-black hover:text-white">Sign In</button>
                         </div>
                     </div>
                 </div>
        </div>
  </div>



@endsection
