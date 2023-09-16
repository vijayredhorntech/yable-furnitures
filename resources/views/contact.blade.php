@extends('layouts.layout')

@section('content')
    <div class="w-full">
        <div class=" lg:h-[50vh] md:h-[50vh] sm:h-[45vh] h-[40vh] relative">
            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1515973069-1e40b62f107f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">

            <div class="h-max w-max absolute left-10 bottom-10 text-white flex flex-col ">
                <span class="font-semibold lg:text-[50px] md:text-[45px] sm:text-[40px] text-[30px]">Contact</span>
                <span class="font-semibold text-white lg:text-[20px] md:text-[15px] text-[10px]"><a href="{{route('home')}}">Home</a> <span class=" text-gray-400"> > Contact</span></span>
            </div>




        </div>
    </div>

    <div class="w-full mt-4">
        <div class=" lg:h-[600px] md:h-[500px] sm:h-[400px] h-[300px] relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224097.62384762208!2d76.92842354718024!3d28.643983881762765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1694754039768!5m2!1sen!2sin" class="h-full w-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <div class=" w-full mt-4 flex mb-8">
         <div class="lg:w-[70%] w-[100%] mx-auto flex lg:flex-row md:flex-row flex-col-reverse gap-8 mt-8">
                 <div class="lg:w-[70%] flex flex-col px-4 ">
                       <div class="w-full">
                           <span class="text-black font-semibold text-3xl">Get In Touch</span>
                       </div>
                     <div class="flex lg:flex-row md:flex-row flex-col gap-4 py-4">
                        <div class="lg:w-[33%] md:w-[33%] w-[100%]  flex flex-col">
                            <label class="text-gray-700 font-semibold lg:text-md" for="name">Name</label>
                            <input class=" w-full mt-2 px-2 py-3 bg-white border-[1px] border-gray-200 placeholder:text-gray-300 focus:ring-0 focus:outline-none text-gray-500" placeholder="Enter your name:"  type="text">
                        </div>
                         <div class="lg:w-[33%] md:w-[33%] w-[100%]  flex flex-col">
                             <label class="text-gray-700 font-semibold lg:text-md" for="name">Email</label>
                             <input class=" w-full mt-2 px-2 py-3 bg-white border-[1px] border-gray-200 placeholder:text-gray-300 focus:ring-0 focus:outline-none text-gray-500" placeholder="Enter your email address:"  type="email">
                         </div>
                         <div class="lg:w-[33%] md:w-[33%] w-[100%]  flex flex-col">
                             <label class="text-gray-700 font-semibold lg:text-md" for="name">Phone</label>
                             <input class=" w-full mt-2 px-2 py-3 bg-white border-[1px] border-gray-200 placeholder:text-gray-300 focus:ring-0 focus:outline-none text-gray-500" placeholder="Enter your phone number:"  type="number">
                         </div>
                     </div>
                     <div class="flex gap-4">
                         <div class="w-full  flex flex-col mt-4">
                             <label class="text-gray-700 font-semibold lg:text-md" for="name">Your Message</label>
                             <textarea class=" w-full mt-2 px-2 py-3 bg-white border-[1px] border-gray-200 placeholder:text-gray-300 focus:ring-0 focus:outline-none text-gray-500" rows="5" placeholder="Comment or Message"></textarea>
                         </div>
                     </div>
                     <div class="flex gap-4">
                         <div class="w-full mt-4">
                             <button class="bg-white border-[1px] w-max border-black px-12 py-4 font-semibold text-black hover:bg-black hover:text-white transition ease-in duration-300">Send Message</button>
                         </div>
                     </div>
                 </div>
                 <div class="lg:w-[30%] flex flex-col px-4 ">
                           <div class="w-full flex flex-col pb-6 mb-4 border-b-[1px] border-b-gray-300">
                                 <span class="text-black font-semibold text-2xl">Address</span>
                                 <p class="text-gray-500 font-normal lg:text-lg">random area, random city, random state , 10000, India</p>
                           </div>
                     <div class="w-full flex flex-col pb-6 mb-4 border-b-[1px] border-b-gray-300">
                         <span class="text-black font-semibold text-2xl">Phone</span>
                         <p class="text-gray-500 font-normal lg:text-lg">+91 01234-56789</p>
                     </div>
                     <div class="w-full flex flex-col pb-6 mb-4 border-b-[1px] border-b-gray-300">
                         <span class="text-black font-semibold text-2xl">Email</span>
                         <p class="text-gray-500 font-normal lg:text-lg">sample@gmail.com</p>
                     </div>
                     <div class="w-full flex flex-col pb-6 mb-4 border-b-[1px] border-b-gray-300">
                         <span class="text-black font-semibold text-2xl">Follow Us on</span>
                         <div class="flex gap-4 text-gray-500 font-normal lg:text-lg mt-2">
                             <a href=""> <i class="fa fa-twitter hover:text-black hover:scale-125 transition ease-in duration-200"></i></a>
                             <a href=""> <i class="fa fa-facebook hover:text-black hover:scale-125 transition ease-in duration-200"></i></a>
                             <a href=""> <i class="fa fa-instagram hover:text-black hover:scale-125 transition ease-in duration-200"></i></a>
                         </div>

                     </div>
                 </div>
         </div>
    </div>



@endsection
