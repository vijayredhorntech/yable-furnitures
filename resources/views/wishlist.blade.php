@extends('layouts.layout')

@section('content')
    <div class="w-full flex justify-end">
        <div class="lg:w-[30%] md:w-[50%] sm:w-[50%] w-[100%]  max-h-screen overflow-y-auto border-[1px] border-gray-300">
            <div class="w-full py-4 flex justify-between bg-gray-100 relative">
                <div class="w-full flex justify-between px-4">
                    <span class="my-auto text-[25px] font-bold font-['Jost', sans-serif]">Wishlist (3 Product)</span>
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
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-shopping-cart"></i> Cart</button>
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-trash"></i> Remove</button>
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
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-shopping-cart"></i> Cart</button>
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-trash"></i> Remove</button>
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
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-shopping-cart"></i> Cart</button>
                                <button class=" bg-white border-[1px] border-black hover:bg-black hover:text-white lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 font-semibold text-[15px]"><i class="fa fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full grid grid-cols-1 gap-4 border-[2px] border-gray-200 mt-2">
                    <div class="w-full  py-4 px-6 border-b-[2px] border-b-gray-200 flex justify-between">
                            <a href="{{route('checkout')}}">
                                <button class="bg-white text-black border-[1px] border-black hover:bg-black hover:text-white transition ease-in duration-200 py-2 px-4"><i class="fa fa-shopping-cart"></i> Add All To Cart</button>
                            </a>
                        <a href="{{route('checkout')}}">
                            <button class="bg-white text-black border-[1px] border-black hover:bg-black hover:text-white transition ease-in duration-200 py-2 px-4"><i class="fa fa-trash"></i>Remove All</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
