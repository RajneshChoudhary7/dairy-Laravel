<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg h-screen flex flex-col">
        <!-- Logo -->
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Dairy Saathi</h1>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg bg-blue-100 text-blue-700 font-semibold">
                        🏠 <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
                        📦 <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
                        📝 <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
                        👥 <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
                        📊 <span>Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
                        ⚙️ <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Footer (Optional) -->
        <div class="p-4 border-t text-gray-500 text-sm">
            © 2025 Dairy Saathi
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow sticky top-0 z-20">
            <div class="flex items-center justify-between px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>

                <!-- User Info + Notifications -->
                <div class="flex items-center space-x-4">
                    <!-- Notification Button -->
                    <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600">
                        🔔
                    </button>

                    <!-- User Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-100">
                            <img src="user-photo.jpg" alt="User" class="w-8 h-8 rounded-full border">
                            <div class="hidden sm:flex flex-col text-left">
                                <span class="font-medium text-gray-800">John Doe</span>
                                <span class="text-sm text-gray-500">Admin</span>
                            </div>
                            <span class="text-gray-400">▼</span>
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 text-red-600">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6 overflow-auto">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t p-4 text-center text-gray-500">
            © 2025 Dairy Saathi • v1.0.0
        </footer>
    </div>

</body>
</html>
