@props(['active' => ''])

<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full
           bg-gray-900 border-r border-gray-700 md:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <div class="mb-6 text-center text-white font-semibold text-xl">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                class="w-8 inline-block mr-2">
            Admin Dashboard
        </div>

        <ul class="space-y-2 font-medium">
            {{-- Dashboard --}}
            <li>
                <x-admin.sidelink :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <span>Dashboard</span>
                </x-admin.sidelink>

            </li>

            {{-- Students --}}
            <li>
                <x-admin.sidelink :href="route('students.index')" :active="request()->routeIs('students.index')">
                    <span>Students</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink :href="route('guardians.index')" :active="request()->routeIs('guardians.index')">
                    <span>Walmur</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink :href="route('teachers.index')" :active="request()->routeIs('teachers.index')">
                    <span>Teacher</span>
                </x-admin.sidelink>
            </li>


            {{-- Teachers --}}
            {{-- <li>
                <x-admin.sidelink 
                    href="{{ route('teacher.index') }}" 
                    :active="request()->routeIs('teacher.index')"
                >
                   
                    <span>Teachers</span>
                </x-admin.sidelink>
            </li> --}}

            {{-- Subjects --}}
            {{-- <li>
                <x-admin.sidelink 
                    href="{{ route('subject.index') }}" 
                    :active="request()->routeIs('subject.index')"
                >
                  
                    <span>Subjects</span>
                </x-admin.sidelink>
            </li> --}}
        </ul>
    </div>
</aside>
