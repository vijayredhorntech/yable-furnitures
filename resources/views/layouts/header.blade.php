
    <div class="w-full h-24 flex justify-between py-4 lg:px-8 md:px-6 px-2 border-b-[1px] border-b-gray-200 shadow-lg shadow-gray-300 relative sticky top-0 z-50 bg-white">
        <div class="h-full flex  ">
            <img class="h-full w-auto object-cover rounded-lg" src="https://images.unsplash.com/photo-1496200186974-4293800e2c20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" alt="">
        </div>

        <div class="lg:h-full md:h-full h-max lg:w-full md:w-full w-[100vw]  w-max flex lg:block md:block lg:static md:static absolute left-0 top-24 lg:block md:block hidden " id="navBar">
            <ul class="flex lg:flex-row md:flex-row flex-col justify-center mx-auto lg:w-max md:w-max w-[100vw] h-full gap-8 lg:text-lg md:text-md lg:p-0 md:p-0 p-6 font-semibold lg:bg-transparent md:bg-transparent bg-black lg:text-black md:text-black text-white">
                <a href="{{route('home')}}" class="my-auto hover:border-b-[1px] hover:border-b-black transition ease-in duration-300"> <li>HOME</li></a>
                <a href="{{route('about')}}" class="my-auto hover:border-b-[1px] hover:border-b-black transition ease-in duration-300"> <li>ABOUT</li></a>
                <a href="{{route('store')}}" class="my-auto hover:border-b-[1px] hover:border-b-black transition ease-in duration-300"> <li>PRODUCTS</li></a>
                <a href="" class="my-auto hover:border-b-[1px] hover:border-b-black transition ease-in duration-300"> <li>SERVICES</li></a>
                <a href="{{route('contact')}}" class="my-auto hover:border-b-[1px] hover:border-b-black transition ease-in duration-300"> <li>CONTACT US</li></a>
            </ul>
        </div>


        <div class="h-full w-max flex my-auto flex gap-2">
            <a href="{{route('login')}}" class="my-auto"><button class="bg-white border-[1px] text-black hover:bg-black hover:text-white transition ease-in duration-200 border-black  px-3 py-2 h-max my-auto lg:text-md md:text-sm font rounded-full font-bold w-max"><i class="fa fa-user"></i></button>
            </a>
            <a href="{{route('cart')}}" class="my-auto"><button class="bg-white border-[1px] text-black hover:bg-black hover:text-white transition ease-in duration-200 border-black  px-3 py-2 h-max my-auto lg:text-md md:text-sm font rounded-full font-bold w-max"><i class="fa fa-shopping-cart"></i></button>
            </a>
            <a href="{{route('wishlist')}}" class="my-auto"><button class="bg-white border-[1px] text-black hover:bg-black hover:text-white transition ease-in duration-200 border-black  px-3 py-2 h-max my-auto lg:text-md md:text-sm font rounded-full font-bold w-max"><i class="fa fa-heart"></i></button>
            </a>
            <a href="" class="my-auto"><button class="bg-white border-[1px] text-black hover:bg-black hover:text-white transition ease-in duration-200 border-black  px-4 py-4 h-max my-auto lg:text-md md:text-sm font rounded-full font-bold w-max lg:block hidden">BOOK YOUR ORDER</button>
            </a>
            <button class="bg-white border-[1px] text-black hover:bg-black hover:text-white transition ease-in duration-200 border-black  px-4 py-2 text-md font rounded-md font-bold my-auto lg:hidden md:hidden block" id="navToggleButton" onclick="toggleNavbar()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
