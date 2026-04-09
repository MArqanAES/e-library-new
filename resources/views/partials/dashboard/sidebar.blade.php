<aside class="hidden w-64 flex-col border-r border-gray-200 bg-gray-50 sm:flex">
    <div class="flex h-16 items-center gap-2 border-b border-gray-200 px-6">
        <div class="text-lg font-bold tracking-wide text-gray-900">
            LOREM <span class="rounded bg-orange-500 px-1.5 py-0.5 text-white">IPSUM</span>
        </div>
    </div>

    <div class="px-4 py-6">
        <div class="text-xs font-semibold uppercase tracking-wider text-gray-500">Admin</div>

        <nav class="mt-4 space-y-1">
            <a href="/dashboard" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                <i class="fa-sharp fa-regular fa-grid-2"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                <i class="fa-sharp fa-regular fa-layer-group"></i>
                <span>Category</span>
            </a>
            <a href="#" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                <i class="fa-sharp fa-regular fa-user-pen"></i>
                <span>Author</span>
            </a>
            <a href="/dashboard/user/create" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dashboard/user*') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                <i class="fa-sharp fa-regular fa-user"></i>
                <span>User</span>
            </a>
        </nav>
    </div>
</aside>

<aside class="sm:hidden" x-data="{ open: false }">
    <button type="button" @click="open = true" class="fixed left-4 top-20 z-40 flex h-12 w-12 items-center justify-center rounded-full bg-gray-900 text-white shadow">
        <i class="fa-sharp fa-regular fa-angle-left"></i>
    </button>

    <div x-show="open" class="fixed inset-0 z-50" style="display: none;">
        <div class="absolute inset-0 bg-black/40" @click="open = false"></div>
        <div class="absolute inset-y-0 left-0 w-72 bg-gray-50 shadow-xl">
            <div class="flex h-16 items-center justify-between border-b border-gray-200 px-6">
                <div class="text-lg font-bold tracking-wide text-gray-900">
                    LOREM <span class="rounded bg-orange-500 px-1.5 py-0.5 text-white">IPSUM</span>
                </div>
                <button type="button" @click="open = false" class="text-gray-700">
                    <i class="fa-sharp fa-regular fa-xmark"></i>
                </button>
            </div>

            <div class="px-4 py-6">
                <div class="text-xs font-semibold uppercase tracking-wider text-gray-500">Admin</div>

                <nav class="mt-4 space-y-1">
                    <a href="/dashboard" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        <i class="fa-sharp fa-regular fa-grid-2"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                        <i class="fa-sharp fa-regular fa-layer-group"></i>
                        <span>Category</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                        <i class="fa-sharp fa-regular fa-user-pen"></i>
                        <span>Author</span>
                    </a>
                    <a href="/dashboard/user/create" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dashboard/user*') ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        <i class="fa-sharp fa-regular fa-user"></i>
                        <span>User</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</aside>
