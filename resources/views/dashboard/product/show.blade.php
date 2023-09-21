@seoTitle($product->name)

<x-dashboard-layout>
    {{-- Head --}}
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.product.index') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Products
                        </Link>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs rtl:rotate-180"></i>
                        <a href="#"
                           class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            {{ $product->name }}
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                {{ $product->name }}
            </h1>
        </div>

    </div>

    <x-section-content>
        <div class="flex flex-col gap-4 border-b-2 border-gray-100 pb-1 mb-3">
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-1">
                    <span class="text-sm font-medium text-gray-500  border-b-2 border-gray-100 pb-2">Images <Link
                            class="button-black" href="#addImages">Add Images</Link> </span>
                    <div class="flex gap-2 justify-center">
                        @forelse($product->media as $image)
                            <div class="w-1/4">
                                <img src="{{ asset('storage/'.$image->image) }}" alt="{{ $product->name }}"
                                     class="w-full h-full object-cover">
                                <Link href="{{ route('dashboard.product.product.images.delete',$image) }}"
                                      method="DELETE" confirm>
                                <i class="fa-solid fa-trash"></i>
                                </Link>
                            </div>
                        @empty
                            <div class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">No Images</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <x-splade-modal name="addImages">
            <x-splade-form method="post" enctype="multipart/form-data"
                           action="{{ route('dashboard.product.product.images.upload', $product->slug) }}">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Add Images
                </h3>
                <x-splade-file name="images[]" placeholder="Select or Drop Product Images" label="Product Images"
                               multiple filepond preview max-size="1MB" required></x-splade-file>
                <x-splade-submit name="submit" label="Add Images"></x-splade-submit>
            </x-splade-form>
        </x-splade-modal>
        Product Details
        <Link class="button-black" href="{{ route('dashboard.product.edit',$product->slug) }}" modal>
        Edit Details</Link>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col gap-4">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-1">
                        <span class="text-sm font-medium text-gray-500">Category</span>
                        <span
                            class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->category->name }}</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-sm font-medium text-gray-500">Status</span>
                        <span
                            class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->status ? 'Active' : 'Inactive' }}</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-sm font-medium text-gray-500">Featured</span>
                        <span
                            class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->featured ? 'Yes' : 'No' }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-1">
                        <span class="text-sm font-medium text-gray-500">Summary</span>
                        <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->summary }}</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-sm font-medium text-gray-500">Description</span>
                        <span
                            class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->description }}</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-col gap-4 border-b-2 border-gray-100 pb-1 mb-3">
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-1">
                    <span class="text-sm font-medium text-gray-500  border-b-2 border-gray-100 pb-2">Variations <Link
                            class="button-black" href="#addVariation">Add Varaition</Link> </span>

                </div>
            <x-splade-table :for="$variations">
                <x-splade-cell images as="$variation">
                    @foreach($variation->media as $image)
                        <img src="{{ asset('storage/'.$image->image) }}" alt="{{ $variation->name }}"
                             class="w-32 h-full object-cover">
                    @endforeach
                </x-splade-cell>

                <x-splade-cell actions as="$variation">
                    <Link href="{{ route('dashboard.product.product.variation.delete',  $variation->id) }}" method="DELETE" confirm class="p-1">
                    <i class="fa-solid fa-trash"></i>
                    </Link>
                </x-splade-cell>
            </x-splade-table>
            </div>

        </div>

        <x-splade-modal name="addVariation">
            <x-splade-form method="post" enctype="multipart/form-data"
                           action="{{ route('dashboard.product.product.variation.store', $product->slug) }}">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Add New Variation
                </h3>
                <x-splade-input name="name" label="Name" placeholder="Variation Name" required/>
                <x-splade-input name="price" label="Price" placeholder="Variation Price" required/>
                <x-splade-input name="discount" label="Discount" placeholder="Variation Discount" required/>
                <x-splade-file name="images[]" placeholder="Select or Drop Variation Images" label="Variation Images"
                               multiple filepond preview max-size="1MB" required></x-splade-file>
                <x-splade-submit name="submit" label="Add Variation"></x-splade-submit>
            </x-splade-form>
        </x-splade-modal>

    </x-section-content>
</x-dashboard-layout>
