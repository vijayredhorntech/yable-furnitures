@extends('layouts.layout')

@section('content')
    <div class="w-full flex justify-end">
        <div class="lg:w-[30%] md:w-[50%] sm:w-[50%] w-[100%]  max-h-screen overflow-y-auto border-[1px] border-gray-300">
            <div class="w-full py-4 flex justify-between bg-gray-100 relative">
                 <div class="w-full flex justify-between px-4">
                     <span class="my-auto text-[25px] font-bold font-['Jost', sans-serif]">Cart (1 Product)</span>
                     <div class="h-full absolute right-10 top-50 ">
                         <button><i class="fa fa-xmark text-3xl"></i></button>
                     </div>
                 </div>
            </div>
            <div class="w-full">
                <div class="w-full grid grid-cols-1 gap-4 p-4 border-[2px] border-gray-200">
                    <div class="w-full flex">
                        <div class="w-[30%]">
                            <img class="rounded-md" src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1916&q=80" alt="">
                        </div>
                        <div class="w-[70%] px-2">
                            <div>
                                <a href="">
                                    <h3 class="lg:text-[24px] md:text-[24px] sm:text-[22px] text-[11px] font-['Jost', sans-serif] text-[#112433]">
                                        <strong>
                                            Office Chair
                                        </strong>
                                    </h3>
                                </a>
                            </div>
                            <div class="flex flex-row  px-2 pt-4 pb-1  font-['Jost', sans-serif]">
                                <span class="line-through text-red-600 lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                                <span class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ml-2">₹ 1,999.00</span>
                            </div>
                            <div class=" flex flex-row px-2 gap-2 pb-2">
                                <div class="border-[1px] border-black">
                                <button class="bg-white text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">-</button>
                                <button class="bg-white text-black px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">1</button>
                                <button class="bg-white text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">+</button>
                                </div>
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-bold text-[15px]"><i class="fa fa-trash"></i></button>
                            </div>
                            <div class="w-full  px-2 pb-2  font-['Jost', sans-serif]">
                                <span class="text-black lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ">Total Price:- ₹1799</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex">
                        <div class="w-[30%]">
                            <img class="rounded-md" src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1916&q=80" alt="">
                        </div>
                        <div class="w-[70%] px-2">
                            <div>
                                <a href="">
                                    <h3 class="lg:text-[24px] md:text-[24px] sm:text-[22px] text-[11px] font-['Jost', sans-serif] text-[#112433]">
                                        <strong>
                                            Office Chair
                                        </strong>
                                    </h3>
                                </a>
                            </div>
                            <div class="flex flex-row  px-2 pt-4 pb-1  font-['Jost', sans-serif]">
                                <span class="line-through text-red-600 lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                                <span class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ml-2">₹ 1,999.00</span>
                            </div>
                            <div class=" flex flex-row px-2 gap-2 pb-2">
                                <div class="border-[1px] border-black">
                                    <button class="bg-white text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">-</button>
                                    <button class="bg-white text-black px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">1</button>
                                    <button class="bg-white text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1  font-bold text-[15px]">+</button>
                                </div>
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-bold text-[15px]"><i class="fa fa-trash"></i></button>
                            </div>
                            <div class="w-full  px-2 pb-2  font-['Jost', sans-serif]">
                                <span class="text-black lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ">Total Price:- ₹1799</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full grid grid-cols-1 gap-4 border-[2px] border-gray-200 mt-2 pb-4">
                    <div class="w-full  py-4 px-6 border-b-[2px] border-b-gray-200 flex">
                        <span class="my-auto text-[22px] font-normal font-['Jost', sans-serif]">Cart Summary</span>
                    </div>
                    <div class="w-full flex flex-col">
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Total MRP: ₹1999</span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                          <span class=" text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Discount on MRP:
                          <span class="text-[#018472]">
                              ₹1999
                          </span>
                          </span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span class=" text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Sub Total: ₹1799</span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                          <span class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Shipping Charges:
                          <span class="text-[#018472]">
                             Free for order above ₹999
                          </span>
                          </span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Total: ₹1799</span>
                        </div>
                    </div>
                    <div class="px-6 flex flex-col w-full">
                            <span class="text-gray-700 lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Coupon/Gift Card</span>
                        <div class="w-[100%] flex gap-2">

                                <input type="text" class="w-full rounded-sm bg-white border-[1px] border-gray-200 p-2 my-auto" placeholder="Coupon Code / Gift Card">

                            <button class="bg-white text-black border-[1px] border-black hover:bg-black hover:text-white transition ease-in duration-200 py-2 px-6 h-max my-auto">Apply</button>
                        </div>
                    </div>

                    {{--                  checkout--}}
                    <div class="w-full flex flex-col mt-2 px-6">
                        <div class="w-full  pb-2  font-['Jost', sans-serif]">
                            <span class="text-black  text-[16px] ">Add Order Note:</span>
                        </div>
                        <div class="w-full  flex pb-2  font-['Jost', sans-serif]">
                            <input class="mr-2" type="checkbox" checked>
                            <span class="text-black  text-[12px] my-auto ">Email me with news and offers.</span>
                        </div>
                        <div>
                            <a href="{{route('checkout')}}">
                                <button class="bg-white text-black border-[1px] border-black hover:bg-black hover:text-white transition ease-in duration-200 py-3 px-6">Proceed to Checkout</button>

                            </a>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>

@endsection
