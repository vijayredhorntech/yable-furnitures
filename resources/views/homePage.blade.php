@extends('layouts.layout')

@section('content')

{{--    banner slider--}}
<div class="swiffy-slider">
    <ul class="slider-container">
        <li><img class="lg:h-[80vh] md:h-[70vh] sm:h-[60vh] h-[50vh] w-full object-cover" src="https://images.unsplash.com/photo-1569152811536-fb47aced8409?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" ></li>
        <li><img class="lg:h-[80vh] md:h-[70vh] sm:h-[60vh] h-[50vh] w-full object-cover" src="https://images.unsplash.com/photo-1582239052618-4e2324cef034?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" ></li>
        <li><img class="lg:h-[80vh] md:h-[70vh] sm:h-[60vh] h-[50vh] w-full object-cover" src="https://images.unsplash.com/photo-1612031736732-082438882d51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1880&q=80" ></li>
    </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
</div>
   <div class="w-full mt-4">
        <div class="px-8">
            <span class="lg:text-5xl md:text-4xl text-3xl font-bold text-gray-700"> All Categories </span>
            <span class="text-xl font-normal mt-2 text-gray-700"></span>
        </div>
        <div class="w-full grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-4 grid-cols-2  gap-4 p-4 mt-4">
            <a href="">
               <div class="flex flex-col">
                   <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                       <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                           <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                       </div>
                   </div>
                   <div class=" mt-2 w-full flex justify-center">
                       <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                   </div>
               </div>
            </a>
            <a href="">
                <div class="flex flex-col">
                    <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                        <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                            <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                        </div>
                    </div>
                    <div class=" mt-2 w-full flex justify-center">
                        <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col">
                    <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                        <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                            <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                        </div>
                    </div>
                    <div class=" mt-2 w-full flex justify-center">
                        <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col">
                    <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                        <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                            <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                        </div>
                    </div>
                    <div class=" mt-2 w-full flex justify-center">
                        <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col">
                    <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                        <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                            <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                        </div>
                    </div>
                    <div class=" mt-2 w-full flex justify-center">
                        <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col">
                    <div class="w-full lg:h-48 md:h-48 lg:w-48 md:w-48 sm:h-32 sm:w-32 h-32 w-32 rounded-full flex justify-center mx-auto  bg-yellow-100 hover:bg-yellow-200 transition ease-in-out delay-150">
                        <div class="lg:w-28 lg:h-28 md:h-28 md:w-28 sm:h-20 sm:w-20 w-20 h-20 rounded-full border-[1px] border-black flex justify-center my-auto">
                            <i class="fa-solid fa-tablet my-auto lg:text-5xl md:text-5xl sm:text-3xl text-2xl"></i>
                        </div>
                    </div>
                    <div class=" mt-2 w-full flex justify-center">
                        <span class="font-semibold text-xl mx-auto " >Steel Cupboard</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
   <div class="w-full mt-8">
    <div class="px-8 flex flex-col">
        <span class="lg:text-5xl md:text-4xl text-3xl font-bold text-gray-700"> Featured Categories </span>
        <span class="text-xl font-normal mt-2 text-gray-700"> We just keep things minimal  </span>
    </div>
    <div class="w-full grid lg:grid-cols-3 md:grid-cols-2  grid-cols-1  gap-8 py-4 lg:px-20 px-8 mt-4">
        <a href="">
            <div class="w-full h-96 flex justify-center rounded-md bg-center bg-cover bg-no-repeat bg-[url('https://images.unsplash.com/photo-1550226891-ef816aed4a98?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">
                 <div class="h-[80%] w-[80%] my-auto bg-black/50 rounded-md flex flex-col" style="justify-content:space-evenly">
                       <div class="flex flex-col justify-center text-white ">
                           <span class="mx-auto font-semibold text-xl ">2020 COLLECTION</span>
                           <span class="mx-auto font-bold text-3xl ">OFFICE FURNITURE</span>
                       </div>
                      <button class="w-max mx-auto px-6 py-3 text-white font-semibold hover:bg-white hover:text-black hover:font-bold rounded-sm border-[1px] border-white">
                          SHOP NOW
                      </button>
                 </div>
            </div>
        </a>
        <a href="">
            <div class="w-full h-96 flex justify-center rounded-md bg-center bg-cover bg-no-repeat bg-[url('https://images.unsplash.com/photo-1588854337236-6889d631faa8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">
                <div class="h-[80%] w-[80%] my-auto bg-black/50 rounded-md flex flex-col" style="justify-content:space-evenly">
                    <div class="flex flex-col justify-center text-white ">
                        <span class="mx-auto font-semibold text-xl ">MODERN DESIGN</span>
                        <span class="mx-auto font-bold text-3xl ">KITCHEN FURNITURE</span>
                    </div>
                    <button class="w-max mx-auto px-6 py-3 text-white font-semibold hover:bg-white hover:text-black hover:font-bold rounded-sm border-[1px] border-white">
                        SHOP NOW
                    </button>
                </div>
            </div>
        </a>
        <a href="">
            <div class="w-full h-96 flex justify-center rounded-md bg-center bg-cover bg-no-repeat bg-[url('https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">
                <div class="h-[80%] w-[80%] my-auto bg-black/50 rounded-md flex flex-col" style="justify-content:space-evenly">
                    <div class="flex flex-col justify-center text-white ">
                        <span class="mx-auto font-semibold text-xl ">NEW DISCOUNTS</span>
                        <span class="mx-auto font-bold text-3xl ">LIVING ROOMS</span>
                    </div>
                    <button class="w-max mx-auto px-6 py-3 text-white font-semibold hover:bg-white hover:text-black hover:font-bold rounded-sm border-[1px] border-white">
                        SHOP NOW
                    </button>
                </div>
            </div>
        </a>
    </div>
    <div class="w-full flex justify-end px-16">
           <button class=" rounded-full px-8 py-2 font-semibold bg-yellow-500">VIEW ALL</button>
    </div>
</div>
   <div class="w-full mt-8">
    <div class="px-8 flex flex-col">
        <span class="lg:text-5xl md:text-4xl text-3xl font-bold text-gray-700">Upcoming Products</span>
        <span class="text-xl font-normal mt-2 text-gray-700">Find the perfect match</span>
    </div>
    <div class="w-full grid lg:grid-cols-3 md:grid-cols-2  grid-cols-1  gap-8 py-4 lg:px-20 px-8 mt-4">
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://plus.unsplash.com/premium_photo-1677437035387-26049940fb90?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                 <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                     <span>Steel Cupboard</span>
                 </div>
            </div>
        </a>
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://plus.unsplash.com/premium_photo-1682145344450-34d8323dec84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                    <span>Desert Cooler</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="">
                </div>
                <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                    <span>Office Furniture</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://images.unsplash.com/photo-1511199781968-93198fe4916f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                    <span>Wall-mount Shoe Rack</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://images.unsplash.com/photo-1549030782-4935f80baeb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" alt="">
                </div>
                <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                    <span>Steel Ladder</span>
                </div>
            </div>
        </a>
        <a href="">
            <div class="w-full flex flex-col justify-center rounded-md bg-gray-50 rounded-md p-4 hover:scale-90 shadow-lg shadow-gray-400">
                <div class="mt-2 h-96 rounded-md">
                    <img class="w-[100%]  h-full  mx-auto rounded-md" src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1868&q=80" alt="">
                </div>
                <div class="text-black font-semibold font-['sans'] text-2xl px-4 mt-2">
                    <span>Modular Kitchen</span>
                </div>
            </div>
        </a>

    </div>

</div>
   <div class="w-full mt-4">
         <div class="relative">
             <img class="lg:h-[80vh] md:h-[70vh] sm:h-[60vh] h-[50vh] w-full object-cover w-full" src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
          <div class="absolute top-0 left-0 w-full h-full flex  bg-black/50">
              <div class="h-max w-max text-white flex  flex-col my-auto px-8 ">
                  <span class="lg:text-5xl md:text-4xl text-3xl font-bold">Stay in touch</span>
                  <span class=" text-xl font-semibold mt-2">Be first to know about all new interior features!</span>
                  <div class="mt-4">
                      <input class="lg:text-xl md:text-xl sm:text-xl text-lg rounded-sm p-2 lg:w-96 md:w-96 w-64 " type="text" placeholder="Enter your email">
                      <button class=" text-white border-[1px] boreder-white lg:px-6 md:px-6 sm:px-6 px-3 py-2 font-semibold hover:bg-white hover:text-black hover:font-bold lg:text-xl md:text-xl sm:text-xl text-lg lg:mt-0 md:mt-0 sm:mt-0 mt-2">SUBSCRIBE</button>
                  </div>
              </div>
          </div>
         </div>
    </div>



    <div class="w-full ">
           <div class="grid lg:grid-cols-4 md:col-span-4 sm:grid-cols-2 grid-cols-1 bg-yellow-100">
                 <div class="w-full flex-col p-8 ">
                          <img class="h-24 w-48 object-cover rounded-lg" src="https://images.unsplash.com/photo-1496200186974-4293800e2c20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" alt="">
                            <p class="mt-2 font-semibold text-gray-900">
                                Lorem ipsum dolor  voluptates. Atque autem deleniti doloremque, et fugiat ipsum laudantium nam necessitatibus, obcaecati odit quidem recusandae repellat ullam, vero voluptatibus. Accusantium consequuntur illum ut velit voluptates.
                            </p>
                      <div class="mt-2">
                          <a href="" class="mr-3"> <i class="fa fa-facebook"></i></a>
                          <a href="" class="mr-3"> <i class="fa fa-twitter"></i></a>
                          <a href="" class="mr-3"> <i class="fa fa-instagram"></i></a>
                          <a href="" class="mr-3"> <i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
                 <div class="w-full flex-col p-8 ">
                   <span class="text-gray-900 font-semibold text-2xl">Quick Links </span>
                   <div class="text-gray-500 font-semibold text-lg flex flex-col gap-4 mt-4">
                       <a href="" class="hover:text-gray-800"><span>Home</span></a>
                       <a href="" class="hover:text-gray-800"><span>About Us</span></a>
                       <a href="" class="hover:text-gray-800"><span>Products</span></a>
                       <a href="" class="hover:text-gray-800"><span>Services</span></a>
                       <a href="" class="hover:text-gray-800"><span>Contact</span></a>
                   </div>
               </div>
                 <div class="w-full flex-col p-8 ">
                   <span class="text-gray-900 font-semibold text-2xl">Quick Links </span>
                   <div class="text-gray-500 font-semibold text-lg flex flex-col gap-4 mt-4">
                       <a href="" class="hover:text-gray-800"><span>In-Store Pickup</span></a>
                       <a href="" class="hover:text-gray-800"><span>Gift Cards</span></a>
                       <a href="" class="hover:text-gray-800"><span>After Pay</span></a>
                       <a href="" class="hover:text-gray-800"><span>Shop </span></a>
                       <a href="" class="hover:text-gray-800"><span>FAQ</span></a>
                   </div>
               </div>
               <div class="w-full flex-col p-8 ">
                   <span class="text-gray-900 font-semibold text-2xl">Address</span>
                   <div class="text-gray-500 font-semibold text-lg flex flex-col gap-4 mt-4">
                       <a href="" class="hover:text-gray-800"><i class="fa fa-location text-gray-800 mr-2"></i><span>Plot No. 290, Phase-9, Industrial Area, Mohali, Punjab</span></a>
                       <a href="" class="hover:text-gray-800"><i class="fa fa-phone text-gray-800 mr-2"></i><span>85578-78801 & 94173-93931</span></a>
                       <a href="" class="hover:text-gray-800"><i class="fa fa-envelope text-gray-800 mr-2"></i><span>Ganeshsons@gmail.com</span></a>
                   </div>
               </div>
           </div>
    </div>

    <div class="w-full">
        <div class="w-full bg-gray-600 flex justify-center p-4">
            <span class="text-white  font-semibold text-md">@ copyright.All Rights Reserved | Designed by <a href="" class="text-green-500 font-bold">Him Soft Solution</a> </span>
        </div>
    </div>

@endsection
