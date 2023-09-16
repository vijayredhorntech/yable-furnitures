@extends('layouts.layout')


@section('content')
    <div class="w-full mt-4">
        <div class="w-full flex lg:flex-row md:flex-row  flex-col gap-2">
            <div class="lg:w-[50%]  gap-4 p-4 flex lg:flex-row md:flex-row flex-col-reverse ">
                <div class="lg:w-[30%] md:w-[30%] w-[100%] flex lg:flex-col md:flex-col flex-row gap-4">
                    <div class="flex justify-end w-full">
                        <a href="#" class="small-image" onclick="changeImage()" data-image-src="https://images.unsplash.com/photo-1566890463705-46b4fefa8a53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1925&q=80">
                            <img class="w-[60px]" src="https://images.unsplash.com/photo-1566890463705-46b4fefa8a53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1925&q=80" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end w-full">
                        <a href="#" class="small-image" onclick="changeImage()" data-image-src="https://images.unsplash.com/photo-1549895058-36748fa6c6a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80">
                            <img class="w-[60px]" src="https://images.unsplash.com/photo-1549895058-36748fa6c6a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end w-full">
                        <a href="#" class="small-image" onclick="changeImage()" data-image-src="https://plus.unsplash.com/premium_photo-1680807988328-7ba28ad24d9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80">
                            <img class="w-[60px]" src="https://plus.unsplash.com/premium_photo-1680807988328-7ba28ad24d9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end w-full">
                        <a href="#" class="small-image" onclick="changeImage()" data-image-src="https://images.unsplash.com/photo-1558998708-ed5f8eaf1af1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2052&q=80">
                            <img class="w-[60px]" src="https://images.unsplash.com/photo-1558998708-ed5f8eaf1af1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2052&q=80" alt="">
                        </a>
                    </div>
                    <div class="flex justify-end w-full">
                        <a href="#" class="small-image" onclick="changeImage()" data-image-src="https://images.unsplash.com/photo-1562932831-afcfe48b5786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2115&q=80">
                            <img class="w-[60px]" src="https://images.unsplash.com/photo-1562932831-afcfe48b5786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2115&q=80" alt="">
                        </a>
                    </div>
{{--                    <div class="flex justify-end w-full ">--}}
{{--                        <div class="relative h-max w-max">--}}
{{--                            <a href="#" class="small-image" onclick="changeImage()"  data-image-src="">--}}
{{--                                <video class="lg:w-[60px] md:w-[60px] w-[30px] ">--}}
{{--                                    <source src="" type="video/mp4">--}}
{{--                                </video>--}}
{{--                            </a>--}}
{{--                            <div class="absolute inset-0 m-auto h-max w-max z-10">--}}
{{--                                <i class="fa fa-play text-white"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                    </div>--}}
                </div>
                <div class="lg:w-[70%] md:w-[70%] w-[100%]">
                    <div class="w-full">
                        <img class="rounded-md big-image" src="https://images.unsplash.com/photo-1566890463705-46b4fefa8a53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1925&q=80" alt="">
                        <video class="w-full h-[600px] videoSection" controls style="display: none">
                            <source class="videoSrc" src="https://thehimalayanfarm.in/storage/videos/1/augmxv6Ow5OAxuGaai6IZvcxkXViyPgb7QapdLvo.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="lg:w-[50%] p-4">
                <div class="xl:w-[65%] lg:w-[80%] md:w-[100%] w-[100%] flex flex-col font-['Rubik', sans-serif]">
                        <span class="font-bold text-[22px]">
                            Egg Dining Table
                        </span>
                    <span>
                        <span>
                            <i class="fa fa-star text-yellow-500"></i>
                            <i class="fa fa-star text-yellow-500"></i>
                            <i class="fa fa-star text-yellow-500"></i>
                            <i class="fa fa-star text-yellow-500"></i>
                            <i class="fa fa-star text-yellow-500"></i>
                        </span>
                        (1 customer review)
                    </span>
                    <span class="text-[20px] text-black font-normal ">₹1799 <span class="line-through font-semibold text-red-600 ml-2">₹ 1899</span></span>

                    <div class="w-full text-justify mt-2 border-t-[1px] border-t-gray-300 pt-6">
                              <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem ex incidunt inventore perferendis rem sint. Accusamus, animi autem ducimus magnam odio recusandae. A ab aliquam animi delectus dolorem dolores illo in laborum nulla quasi quia quibusdam sapiente sint soluta totam vel, velit voluptatum. Aperiam at dolores ex quis.
                        </span>
                    </div>


                    <div class="w-full flex mt-4 gap-2 ">
                        <div class="border-[1px] border-black">
                                <button class="bg-white text-black py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:bg-black hover:text-white transition ease-in duration-200 font-bold"><i class="fa fa-minus"></i></button>
                                <button class="bg-white text-black py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 font-bold">1</button>
                                <button class="bg-white text-black py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:bg-black hover:text-white transition ease-in duration-200 font-bold"><i class="fa fa-plus"></i></button>

                        </div>

                        <div class="border-[1px] border-black">
                        <button class="bg-white py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:bg-black hover:text-white transition ease-in duration-200 font-normal"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button class="bg-white py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:bg-black hover:text-white transition ease-in duration-200 font-normal"><i class="fa fa-heart"></i> Wishlist</button>
                        </div>
                    </div>

                    <div class="w-full mt-4">
                        <a href="{{route('checkout')}}"><button class=" w-full bg-white border-[1px] border-black py-4 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:bg-black hover:text-white transition ease-in duration-200 font-normal"><i class="fa-solid fa-bag-shopping"></i> Buy Nowt</button>
                        </a>
                    </div>

                    <div class="w-full text-justify mt-6 border-t-[1px] border-t-gray-300 pt-4 flex flex-col gap-4">
                        <span class="text-[#7b8e9d] text-[14px] font-normal  text-justify">
                          <i class="fa fa-truck mr-2"></i> Free worldwide shipping on all orders over ₹ 5,000 </span>
                        <span class="text-[#7b8e9d] text-[14px] font-normal  text-justify">
                          <i class="fa fa-calendar mr-2"></i>Delivers in: 3-7 Working Days</span>
                    </div>

                    <div class="w-full text-justify mt-6 border-t-[1px] border-t-gray-300 pt-4 flex flex-col gap-4">
                        <span class="text-[#7b8e9d] text-[14px] font-normal text-justify">SKU: <span class="text-black font-semibold"> D2409 </span></span>
                        <span class="text-[#7b8e9d] text-[14px] font-normal text-justify">Categories: <span class="text-black font-semibold"> Bed, Chair, Seating </span></span>
                        <span class="text-[#7b8e9d] text-[14px] font-normal text-justify">Tags: <span class="text-black font-semibold"> Blue, Hot, Trend </span></span>
                    </div>



                </div>


            </div>

        </div>
    </div>
    <div class="mt-4 px-4">
        <div class="w-full border-b-[1px] border-b-gray-200">
            <div class="w-max py-4 border-b-[2px] border-b-red-500">
                 <span class="text-black font-semibold text-md">
                     Description
                 </span>
            </div>
        </div>

        <div class="w-full mt-3">
            <span>Product Description Here</span>
        </div>


    </div>
    <div class="mt-4 px-4">
        <div class="w-full border-b-[1px] border-b-gray-200">
            <div class="w-max py-4 border-b-[2px] border-b-red-500">
                         <span class="text-black font-semibold text-md">
                             Reviews(2)
                         </span>
            </div>
        </div>

        <div class="w-full mt-3">
{{--            <span>No reviews yet</span>--}}
        </div>
        <div class="w-full border-[1px] border-gray-300 flex flex-col ">
          <div class="flex flex-col">
              <div class="w-max flex p-4 gap-4">
                  <div class="h-32 w-32 rounded-full">
                      <img class="h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                  </div>
                  <div class="flex flex-col gap-2 my-auto">
                    <span>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                    </span>
                      <span class="text-md font-semibold text-black ">User Name</span>
                      <span class="text-xs font-thin text-gray-400 ">April 1, 2021</span>
                  </div>
              </div>
              <div class="p-4">
                      <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem ex incidunt inventore perferendis rem sint. Accusamus, animi autem ducimus magnam odio recusandae. A ab aliquam animi delectus dolorem dolores illo in laborum nulla quasi quia quibusdam sapiente sint soluta totam vel, velit voluptatum. Aperiam at dolores ex quis.
                        </span>
              </div>
          </div>

            <div class="flex flex-col">
                <div class="w-max flex p-4 gap-4">
                    <div class="h-32 w-32 rounded-full">
                        <img class="h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                    </div>
                    <div class="flex flex-col gap-2 my-auto">
                    <span>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                    </span>
                        <span class="text-md font-semibold text-black ">User Name</span>
                        <span class="text-xs font-thin text-gray-400 ">April 1, 2021</span>
                    </div>
                </div>
                <div class="p-4">
                      <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem ex incidunt inventore perferendis rem sint. Accusamus, animi autem ducimus magnam odio recusandae. A ab aliquam animi delectus dolorem dolores illo in laborum nulla quasi quia quibusdam sapiente sint soluta totam vel, velit voluptatum. Aperiam at dolores ex quis.
                        </span>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-4 px-4">
        <div class="w-full h-max] border-[1px] border-gray-300 rounded-lg my-auto overflow-hidden">
            <div class="w-full py-4 flex px-2">
                <span class="font-semibold text-black text-2xl">Review Product</span>
            </div>



            {{--            <div class="w-full p-6 ">--}}
            {{--                 <div class="w-full p-4 rounded-md bg-red-100">--}}
            {{--                        <span class="font-normal text-md">You need to Login to review this product</span>--}}
            {{--                 </div>--}}
            {{--            </div>--}}
            <div class="w-full p-6">
                <div class="flex flex-col mb-2">
                    <label for="amount" class="text-gray-400 text-sm ">Review Text:</label>
                    <textarea class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2 focus:ring-0 focus:outline-none " rows="5"  placeholder="Write your review"></textarea>
                </div>
                <div class="flex flex-col mb-2">
                    <label for="amount" class="text-gray-400 text-sm ">Upload Images:</label>
                    <input class="form-control bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2 p-2 focus:ring-0 focus:outline-none " type="file" placeholder="No file Chosen">
                </div>
                <div class="w-full py-4 flex ">
                    <button class="bg-white border-[1px] border-black text-black hover:text-white hover:bg-black transition ease-in duration-200 py-3 px-6">Submit Review</button>
                </div>
            </div>


        </div>


    </div>

@endsection
