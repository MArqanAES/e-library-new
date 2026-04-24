@extends('layouts.main')

@section('konten')
    <div class="scroll-mt-24" x-data="{ active: 'overview', faqOpen: null }">
        <section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 via-slate-900 to-indigo-900 px-6 py-10 text-white sm:px-10">
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 10%, rgba(99,102,241,0.55), transparent 55%), radial-gradient(circle at 80% 70%, rgba(56,189,248,0.45), transparent 50%);"></div>

            <div class="relative">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-sm font-medium text-sky-200">E-Library</p>
                        <h1 class="mt-2 text-3xl font-semibold tracking-tight sm:text-4xl">{{ $title }}</h1>
                        <p class="mt-3 max-w-2xl text-sm text-slate-200 sm:text-base">Tempat yang lebih cepat dan rapi untuk menjelajah buku, meminjam, dan mengelola koleksi. Dibuat supaya pengalaman membaca jadi lebih nyaman.</p>
                    </div>

                    <div class="grid w-full max-w-xl grid-cols-1 gap-3 sm:grid-cols-2">
                        <a href="/hall" class="group rounded-xl bg-white/10 px-5 py-4 ring-1 ring-white/15 backdrop-blur transition hover:bg-white/15">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold">Explore Hall</span>
                                <span class="text-sky-200 transition group-hover:translate-x-0.5">→</span>
                            </div>
                            <p class="mt-1 text-xs text-slate-200">Cari buku berdasarkan kategori & penulis.</p>
                        </a>
                        @auth
                            <a href="/borrow/{{ auth()->user()->slug }}" class="group rounded-xl bg-white/10 px-5 py-4 ring-1 ring-white/15 backdrop-blur transition hover:bg-white/15">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold">My Borrows</span>
                                    <span class="text-sky-200 transition group-hover:translate-x-0.5">→</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-200">Pantau status peminjaman kamu.</p>
                            </a>
                        @endauth
                        @guest
                            <a href="/login" class="group rounded-xl bg-white/10 px-5 py-4 ring-1 ring-white/15 backdrop-blur transition hover:bg-white/15">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold">Login</span>
                                    <span class="text-sky-200 transition group-hover:translate-x-0.5">→</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-200">Masuk untuk meminjam buku.</p>
                            </a>
                        @endguest
                        <a href="#features" @click.prevent="document.getElementById('features')?.scrollIntoView({ behavior: 'smooth' }); active = 'features'" class="group rounded-xl bg-white/10 px-5 py-4 ring-1 ring-white/15 backdrop-blur transition hover:bg-white/15">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold">See Features</span>
                                <span class="text-sky-200 transition group-hover:translate-x-0.5">→</span>
                            </div>
                            <p class="mt-1 text-xs text-slate-200">Apa yang bikin E-Library enak dipakai.</p>
                        </a>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-2">
                    <a href="#overview" @click.prevent="document.getElementById('overview')?.scrollIntoView({ behavior: 'smooth' }); active = 'overview'" :class="active === 'overview' ? 'bg-white text-slate-900' : 'bg-white/10 text-white hover:bg-white/15'" class="rounded-full px-4 py-2 text-xs font-semibold transition">Overview</a>
                    <a href="#features" @click.prevent="document.getElementById('features')?.scrollIntoView({ behavior: 'smooth' }); active = 'features'" :class="active === 'features' ? 'bg-white text-slate-900' : 'bg-white/10 text-white hover:bg-white/15'" class="rounded-full px-4 py-2 text-xs font-semibold transition">Features</a>
                    <a href="#workflow" @click.prevent="document.getElementById('workflow')?.scrollIntoView({ behavior: 'smooth' }); active = 'workflow'" :class="active === 'workflow' ? 'bg-white text-slate-900' : 'bg-white/10 text-white hover:bg-white/15'" class="rounded-full px-4 py-2 text-xs font-semibold transition">Workflow</a>
                    <a href="#faq" @click.prevent="document.getElementById('faq')?.scrollIntoView({ behavior: 'smooth' }); active = 'faq'" :class="active === 'faq' ? 'bg-white text-slate-900' : 'bg-white/10 text-white hover:bg-white/15'" class="rounded-full px-4 py-2 text-xs font-semibold transition">FAQ</a>
                </div>
            </div>
        </section>

        <section id="overview" class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Tentang E-Library</h2>
                    <p class="mt-3 text-sm leading-relaxed text-gray-600">E-Library membantu kamu menemukan buku lebih cepat dan memudahkan proses peminjaman. Halaman Hall dibuat untuk browsing, sementara Dashboard membantu admin mengelola data buku, kategori, penulis, user, dan peminjaman.</p>

                    <div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <div class="rounded-xl bg-gray-50 p-4 ring-1 ring-gray-200">
                            <p class="text-xs font-semibold text-gray-700">Fast Browse</p>
                            <p class="mt-1 text-xs text-gray-600">Cari dan filter buku dengan cepat.</p>
                        </div>
                        <div class="rounded-xl bg-gray-50 p-4 ring-1 ring-gray-200">
                            <p class="text-xs font-semibold text-gray-700">Borrow Tracking</p>
                            <p class="mt-1 text-xs text-gray-600">Pantau status dari diajukan sampai selesai.</p>
                        </div>
                        <div class="rounded-xl bg-gray-50 p-4 ring-1 ring-gray-200">
                            <p class="text-xs font-semibold text-gray-700">Admin Control</p>
                            <p class="mt-1 text-xs text-gray-600">Kelola data inti dalam satu tempat.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900">Quick Links</h3>
                    <div class="mt-4 grid gap-3">
                        <a href="/" class="flex items-center justify-between rounded-xl bg-gray-50 px-4 py-3 text-sm text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100">
                            <span>Homepage</span>
                            <span class="text-gray-400">→</span>
                        </a>
                        <a href="/hall" class="flex items-center justify-between rounded-xl bg-gray-50 px-4 py-3 text-sm text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100">
                            <span>Hall</span>
                            <span class="text-gray-400">→</span>
                        </a>
                        @auth
                            <a href="/borrow/{{ auth()->user()->slug }}" class="flex items-center justify-between rounded-xl bg-gray-50 px-4 py-3 text-sm text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100">
                                <span>My Borrows</span>
                                <span class="text-gray-400">→</span>
                            </a>
                        @endauth
                        @guest
                            <a href="/login" class="flex items-center justify-between rounded-xl bg-gray-50 px-4 py-3 text-sm text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100">
                                <span>Login</span>
                                <span class="text-gray-400">→</span>
                            </a>
                        @endguest
                        @auth
                            @if (auth()->user()->role == 'admin')
                                <a href="/dashboard" class="flex items-center justify-between rounded-xl bg-gray-50 px-4 py-3 text-sm text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100">
                                    <span>Dashboard</span>
                                    <span class="text-gray-400">→</span>
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="mt-10">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Fitur yang kamu rasakan</h2>
                        <p class="mt-1 text-sm text-gray-600">Beberapa detail kecil yang bikin penggunaan terasa smooth.</p>
                    </div>
                    <a href="#workflow" @click.prevent="document.getElementById('workflow')?.scrollIntoView({ behavior: 'smooth' }); active = 'workflow'" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700">Lihat alur penggunaan →</a>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">UI Konsisten</p>
                        <p class="mt-1 text-sm text-gray-600">Style mengikuti layout utama, jadi terasa menyatu.</p>
                    </div>
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">Navigasi Cepat</p>
                        <p class="mt-1 text-sm text-gray-600">Klik tab untuk lompat ke section yang kamu mau.</p>
                    </div>
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">Komponen Interaktif</p>
                        <p class="mt-1 text-sm text-gray-600">FAQ pakai accordion supaya ringkas.</p>
                    </div>
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">Aman untuk Guest</p>
                        <p class="mt-1 text-sm text-gray-600">CTA menyesuaikan status login kamu.</p>
                    </div>
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">Mobile Friendly</p>
                        <p class="mt-1 text-sm text-gray-600">Grid & spacing responsif dari layar kecil sampai besar.</p>
                    </div>
                    <div class="group rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50 p-5 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <p class="text-xs font-semibold text-gray-900">Reusable Section</p>
                        <p class="mt-1 text-sm text-gray-600">Section mudah diisi ulang kapanpun kamu mau.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="workflow" class="mt-10">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Alur singkat</h2>
                <p class="mt-1 text-sm text-gray-600">Biar jelas, ini langkah paling umum saat menggunakan E-Library.</p>

                <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div class="rounded-2xl bg-gray-50 p-5 ring-1 ring-gray-200">
                        <p class="text-xs font-semibold text-gray-900">1. Browse</p>
                        <p class="mt-1 text-sm text-gray-600">Buka Hall dan pilih buku yang kamu mau.</p>
                        <a href="/hall" class="mt-3 inline-flex text-sm font-semibold text-indigo-600 hover:text-indigo-700">Ke Hall →</a>
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-5 ring-1 ring-gray-200">
                        <p class="text-xs font-semibold text-gray-900">2. Borrow</p>
                        <p class="mt-1 text-sm text-gray-600">Ajukan peminjaman (perlu login).</p>
                        @guest
                            <a href="/login" class="mt-3 inline-flex text-sm font-semibold text-indigo-600 hover:text-indigo-700">Login →</a>
                        @endguest
                        @auth
                            <a href="/borrow/{{ auth()->user()->slug }}" class="mt-3 inline-flex text-sm font-semibold text-indigo-600 hover:text-indigo-700">Lihat Borrows →</a>
                        @endauth
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-5 ring-1 ring-gray-200">
                        <p class="text-xs font-semibold text-gray-900">3. Track</p>
                        <p class="mt-1 text-sm text-gray-600">Cek status hingga selesai atau ditolak.</p>
                        @auth
                            <a href="/borrow/{{ auth()->user()->slug }}" class="mt-3 inline-flex text-sm font-semibold text-indigo-600 hover:text-indigo-700">Pantau Status →</a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="mt-10">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">FAQ</h2>
                        <p class="mt-1 text-sm text-gray-600">Pertanyaan yang sering muncul.</p>
                    </div>
                    <button type="button" class="rounded-lg bg-gray-50 px-3 py-2 text-xs font-semibold text-gray-700 ring-1 ring-gray-200 transition hover:bg-gray-100" @click="faqOpen = null">Collapse all</button>
                </div>

                <div class="mt-6 space-y-3">
                    <div class="rounded-xl border border-gray-200">
                        <button type="button" class="flex w-full items-center justify-between px-4 py-3 text-left text-sm font-semibold text-gray-900" @click="faqOpen = faqOpen === 1 ? null : 1">
                            <span>Kenapa harus login untuk meminjam?</span>
                            <span class="text-gray-400" x-text="faqOpen === 1 ? '−' : '+'"></span>
                        </button>
                        <div x-show="faqOpen === 1" x-collapse class="px-4 pb-4 text-sm text-gray-600">Supaya peminjaman bisa tercatat per user dan statusnya bisa dipantau.</div>
                    </div>
                    <div class="rounded-xl border border-gray-200">
                        <button type="button" class="flex w-full items-center justify-between px-4 py-3 text-left text-sm font-semibold text-gray-900" @click="faqOpen = faqOpen === 2 ? null : 2">
                            <span>Di mana cek status peminjaman?</span>
                            <span class="text-gray-400" x-text="faqOpen === 2 ? '−' : '+'"></span>
                        </button>
                        <div x-show="faqOpen === 2" x-collapse class="px-4 pb-4 text-sm text-gray-600">Buka menu <span class="font-semibold">My Borrows</span> di navbar untuk melihat status terbaru.</div>
                    </div>
                    <div class="rounded-xl border border-gray-200">
                        <button type="button" class="flex w-full items-center justify-between px-4 py-3 text-left text-sm font-semibold text-gray-900" @click="faqOpen = faqOpen === 3 ? null : 3">
                            <span>Admin bisa ngapain saja?</span>
                            <span class="text-gray-400" x-text="faqOpen === 3 ? '−' : '+'"></span>
                        </button>
                        <div x-show="faqOpen === 3" x-collapse class="px-4 pb-4 text-sm text-gray-600">Admin bisa mengelola kategori, penulis, user, buku, dan memproses peminjaman dari dashboard.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-10">
            <div class="rounded-2xl bg-slate-900 px-6 py-8 text-white shadow-sm">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-lg font-semibold">Siap mulai?</h2>
                        <p class="mt-1 text-sm text-slate-200">Mulai dari Hall untuk cari buku, lalu ajukan peminjaman.</p>
                    </div>
                    <div class="flex flex-col gap-2 sm:flex-row">
                        <a href="/hall" class="rounded-xl bg-white px-5 py-3 text-center text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Explore Hall</a>
                        @guest
                            <a href="/login" class="rounded-xl bg-white/10 px-5 py-3 text-center text-sm font-semibold text-white ring-1 ring-white/15 transition hover:bg-white/15">Login</a>
                        @endguest
                        @auth
                            <a href="/borrow/{{ auth()->user()->slug }}" class="rounded-xl bg-white/10 px-5 py-3 text-center text-sm font-semibold text-white ring-1 ring-white/15 transition hover:bg-white/15">My Borrows</a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection