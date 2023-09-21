<x-splade-modal >
    <x-splade-form :method="$details['method']" :action="$details['url']" class="space-y-4" :default="$defaults ?? []">
        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
            {{ $details['title'] }}
        </h3>
        <x-splade-input name="name" label="Name" placeholder="Category Name" required/>
        <x-splade-textarea name="summary" label="Summary" placeholder="Summary" required/>
        <x-splade-textarea name="description" label="Description" placeholder="Category Description" required/>
        <x-splade-select name="category_id" label="Category" :options="\App\Models\Category::where('status',1)->get()" option-label="name" option-value="id"
                         placeholder="Category" choices required/>
        <div class="flex">
            <x-splade-select class="w-1/2 p-1" name="status" label="Status"
                             :options="[1 => 'Active', 0 => 'Inactive']"
                             placeholder="Status" required/>
            <x-splade-select class="w-1/2 p-1" name="featured" label="Featured"
                             :options="[1 => 'Yes', 0 => 'No']"
                             placeholder="Featured" required/>
        </div>
        <div class="flex justify-center">
            <x-splade-submit class="w-full" name="submit" :label="$details['title']"/>
        </div>
    </x-splade-form>
</x-splade-modal>
