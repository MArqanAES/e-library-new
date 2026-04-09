<header class="h-16 border-b border-gray-200 bg-white">
    <div class="flex h-full items-center justify-between px-6">
        <button type="button" class="hidden text-gray-700 sm:inline-flex">
            <i class="fa-sharp fa-regular fa-bars"></i>
        </button>

        <div class="ml-auto flex items-center gap-4">
            <button type="button" class="text-gray-600 hover:text-gray-900">
                <i class="fa-sharp fa-regular fa-magnifying-glass"></i>
            </button>
            <button type="button" class="text-gray-600 hover:text-gray-900">
                <i class="fa-sharp fa-regular fa-bell"></i>
            </button>
            <button type="button" class="text-gray-600 hover:text-gray-900">
                <i class="fa-sharp fa-regular fa-expand"></i>
            </button>

            <div class="flex items-center gap-3" x-data="{ open: false }">
                <img class="h-9 w-9 rounded-full object-cover" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="leading-tight">
                    <button type="button" @click="open = !open" class="text-left">
                        <div class="text-sm font-semibold text-gray-900">{{ auth()->user()->name ?? 'Admin' }}</div>
                        <div class="text-xs text-gray-500">admin</div>
                    </button>
                </div>

                <div x-show="open" @click.outside="open = false" class="absolute right-6 top-16 z-50 mt-2 w-44 overflow-hidden rounded-md border border-gray-200 bg-white shadow" style="display: none;">
                    <form action="/logout" method="POST" class="w-full">
                        @csrf
                        <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50">Sign out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
