<form action="{{ $action }}" method="GET" class="flex flex-col md:flex-row gap-4">
    <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" class="form-input w-full md:w-3/4 px-4 py-2 rounded-md border border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200"/>

    <select name="category" class="form-select w-full md:w-1/4 px-4 py-2 rounded-md border border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200">
        <option value="">All Categories</option>
        @foreach ($categories as $cat)
            <option value="{{ $cat->name }}" {{ request('category') == $cat->name ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>

    <x-primary-button>
        {{ __('Filter') }}
    </x-primary-button>
</form>