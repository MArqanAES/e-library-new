@extends('layouts.main')
@section('konten')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-5xl">
            
            <!-- Header -->
            <div class="p-6 bg-sky-950 text-white text-center rounded-t-lg">
                <h1 class="text-3xl font-bold">Pendaftaran Lomba Anda</h1>
            </div>
 
            <!-- Content -->
            <div class="overflow-x-auto p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    
                    <!-- Table Head -->
                    <thead class="bg-sky-900 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Foto</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Lembaga</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Cabang Lomba</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Action</th>
                        </tr>
                    </thead>
 
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-200">
 
                        <!-- Row 1 -->
                        <tr>
                            <td class="px-6 py-4 text-sm">1</td>
                            <td class="px-6 py-4">
                                <img src="https://picsum.photos/50?random=1" class="rounded-full">
                            </td>
                            <td class="px-6 py-4 text-sm">Ahmad Fauzi</td>
                            <td class="px-6 py-4 text-sm">SMK Negeri 1</td>
                            <td class="px-6 py-4 text-sm">Web Design</td>
                            <td class="px-6 py-4">
                                <span class="px-2 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">
                                    pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
 
                        <!-- Row 2 -->
                        <tr>
                            <td class="px-6 py-4 text-sm">2</td>
                            <td class="px-6 py-4">
                                <img src="https://picsum.photos/50?random=2" class="rounded-full">
                            </td>
                            <td class="px-6 py-4 text-sm">Siti Aisyah</td>
                            <td class="px-6 py-4 text-sm">SMA 5 Bandung</td>
                            <td class="px-6 py-4 text-sm">UI/UX Design</td>
                            <td class="px-6 py-4">
                                <span class="px-2 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    approved
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
 
                        <!-- Row 3 -->
                        <tr>
                            <td class="px-6 py-4 text-sm">3</td>
                            <td class="px-6 py-4">
                                <img src="https://picsum.photos/50?random=3" class="rounded-full">
                            </td>
                            <td class="px-6 py-4 text-sm">Budi Santoso</td>
                            <td class="px-6 py-4 text-sm">Universitas Indonesia</td>
                            <td class="px-6 py-4 text-sm">Mobile App</td>
                            <td class="px-6 py-4">
                                <span class="px-2 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    review
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
 
                        <!-- Row 4 -->
                        <tr>
                            <td class="px-6 py-4 text-sm">4</td>
                            <td class="px-6 py-4">
                                <img src="https://picsum.photos/50?random=4" class="rounded-full">
                            </td>
                            <td class="px-6 py-4 text-sm">Dewi Lestari</td>
                            <td class="px-6 py-4 text-sm">SMK Telkom</td>
                            <td class="px-6 py-4 text-sm">Game Dev</td>
                            <td class="px-6 py-4">
                                <span class="px-2 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    revision
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
 
                        <!-- Row 5 -->
                        <tr>
                            <td class="px-6 py-4 text-sm">5</td>
                            <td class="px-6 py-4">
                                <img src="https://picsum.photos/50?random=5" class="rounded-full">
                            </td>
                            <td class="px-6 py-4 text-sm">Rizky Pratama</td>
                            <td class="px-6 py-4 text-sm">Politeknik Negeri</td>
                            <td class="px-6 py-4 text-sm">Cyber Security</td>
                            <td class="px-6 py-4">
                                <span class="px-2 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    rejected
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection