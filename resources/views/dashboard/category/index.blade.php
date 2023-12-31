@seoTitle(__('Product Categories'))

<x-dashboard-layout>
    {{-- Head --}}
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.category.index') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Categories
                        </Link>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs rtl:rotate-180"></i>
                        <a href="#"
                           class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            @lang('main.list')
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                Categories
            </h1>
        </div>
        <div>
            @can('create users')
                <Link href="{{ route('dashboard.category.create') }}" class="bg-black text-white p-1 rounded-md" slideover>
                    @lang('main.add_new')
                </Link>
            @endcan
        </div>
    </div>

    <x-section-content>
        <x-splade-table :for="$categories">
            <x-splade-cell title_image as="$category">
                <img src="{{ asset('storage/'.$category->title_image) }}" alt="{{ $category->name }}" class="w-10 h-10 rounded-full">
            </x-splade-cell>
            <x-splade-cell actions as="$category">
                <Link href="{{ route('dashboard.category.edit', $category) }}" class="p-1" slideover>
                    <i class="fa-solid fa-edit"></i>
                </Link>
                <Link href="{{ route('dashboard.category.delete', $category) }}" method="DELETE" confirm class="p-1">
                    <i class="fa-solid fa-trash"></i>
                </Link>
            </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
