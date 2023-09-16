@extends('layouts.layout')


@section('content')
    <div class="w-full my-8">
        <div class="w-full px-4 mt-10 flex lg:flex-row md:flex-row flex-col gap-4">
            <div class="lg:w-[70%] md:w-[70%] w-[100%]">
                <div class="w-full h-max] border-[1px] border-gray-300 rounded-sm my-auto overflow-hidden">
                    <div class="w-full py-2 bg-[#f7f7f7] flex flex-col px-6">
                        <span class="font-normal text-[30px]">Select Address for Delivery</span>
                        <button class="bg-white border-[1px] border-black text-black hover:bg-black hover:text-white transition ease-in duration-200 py-1 px-4 w-max rounded-sm">Add New Address</button>

                        <div class="w-full rounded-sm bg-white border-[1px] border-gray-300 mt-4 ">
                            <div class="w-full p-6">
                                <div class="flex flex-col mb-2">
                                    <label for="amount" class="text-gray-400 text-sm ">Address Line One</label>
                                    <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="text" placeholder="Address Line One">
                                </div>
                                <div class="flex lg:flex-row md:flex-row flex-col gap-4 mb-2">
                                    <div class="lg:w-[50%] md:w-[50%] w-[100%] flex flex-col mb-2">
                                        <label for="amount" class="text-gray-400 text-sm ">Address Line Two</label>
                                        <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="text" placeholder="Address Line Two">
                                    </div>

                                    <div class="lg:w-[50%] md:w-[50%] w-[100%] flex flex-col mb-2">
                                        <label for="amount" class="text-gray-400 text-sm ">Phone</label>
                                        <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="number" placeholder="Phone">
                                    </div>

                                </div>
                                <div class="flex lg:flex-row md:flex-row flex-col gap-4 mb-2">
                                    <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                                        <label for="amount" class="text-gray-400 text-sm ">City</label>
                                        <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="text" placeholder="City">
                                    </div>

                                    <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                                        <label for="amount" class="text-gray-400 text-sm ">State</label>
                                        <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="text" placeholder="State">
                                    </div>
                                    <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                                        <label for="amount" class="text-gray-400 text-sm ">Zip Code</label>
                                        <input class="bg-white border-[1px] border-gray-400 rounded-sm placeholder:text-gray-400 mt-2 px-2 py-3" type="number" placeholder="Zip Code">
                                    </div>

                                </div>
                                <div class=" flex justify-center mt-4">
                                    <button class="bg-white border-[1px] border-black text-black hover:bg-black hover:text-white transition ease-in duration-200 py-3 font-semibold px-8 w-max rounded-sm">Save</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-full px-6 py-2 text-[16px] flex flex-col gap-4">
                        <span class="font-bold text-black text-[20px]">Address</span>

                        <div class="w-full flex justify-between lg:flex-row md:flex-col sm:flex-row flex-col gap-4 bg-white shadow-md shadow-gray-200 py-4 px-2 rounded-md">
                            <div class="flex ">
                                <input type="radio" class="my-auto">
                                <span class="text-black text-[17px] font-normal ml-4 my-auto">some random address here</span>
                            </div>

                            <div class=" flex flex-row gap-4">
                                <button class="bg-white border-[1px] border-black text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 w-max rounded-sm"><i class="fa fa-edit"></i></button>
                                <button class="bg-white border-[1px] border-black text-black hover:bg-black hover:text-white transition ease-in duration-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 w-max rounded-sm"><i class="fa fa-trash"></i></button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="lg:w-[30%] md:w-[30%] w-[100%]">
                <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden">
                    <div class="w-full py-2  flex px-6">
                        <span class="font-normal text-[30px]">Checkout</span>
                    </div>
                    <div class="w-full p-6 text-[16px] flex flex-col gap-4">
                        <p>
                            <span class="font-semibold">Delivery Address:</span> Some random Address
                        </p>
                        <p>
                            <span class="font-semibold">Total MRP:</span> ₹ 3800
                        </p>

                        <p>
                            <span class="font-semibold">Delivery Charges:</span> Free for orders above ₹ 500
                        </p>
                    </div>

                    <div class="w-full py-2 px-6  flex ">
                        <button class="bg-white border-[1px] border-black text-black hover:bg-black hover:text-white transition ease-in duration-200 py-3 px-8 w-max rounded-sm"> Pay 1200 INR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
