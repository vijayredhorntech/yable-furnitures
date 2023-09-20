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
                        <a href="#" class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            @lang('main.list')
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                @lang('main.users')
            </h1>
        </div>
        <div>
            @can('create users')
                <x-btn-link href="#create" slideover>
                    @lang('main.add_new')
                </x-btn-link>
            @endcan
        </div>
    </div>
    {{-- Create Modal --}}
    @can('create users')
        <x-splade-modal name="create">
            <x-splade-form :action="route('dashboard.user.store')" method="POST" class="space-y-4">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    @lang('New Category')
                </h3>
                {{-- Name --}}
                <x-splade-input v-model="form.name" name="name" :label="__('main.name')" autocomplete="name" required />
                {{-- Username --}}
                <x-splade-input v-model="form.username" name="username" :label="__('main.username')" autocomplete="username" required />

                <x-splade-submit :label="__('main.submit')" />
            </x-splade-form>
        </x-splade-modal>
    @endcan
    {{-- Content --}}
    <x-section-content>
        <x-splade-table :for="$categories">
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
