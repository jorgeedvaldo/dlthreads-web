<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')DlThreads.net - Best Threads Downloader</title>
</head>
<body>
    <header class="bg-white py-4">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center">
                <div class="text-gray-900 text-lg">DlThreads</div>
                <div>
                    <a href="#" class="text-gray-900 hover:text-gray-700 px-4">Blog</a>
                    <div class="relative inline-block">
                        <button class="text-gray-900 hover:text-gray-700 px-4 py-2 rounded cursor-pointer dropdown-button">
                            Language
                            <svg class="h-4 w-4 inline-block ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-6a6 6 0 100 12 6 6 0 000-12z" />
                            </svg>
                        </button>
                        <ul class="absolute hidden bg-white text-gray-700 pt-1 dropdown-menu">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">English</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Português</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-4">
        <div class="container mx-auto px-4 flex justify-between">
            <div class="text-gray-500">
                <a href="#" class="mr-4">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
            <p class="text-center text-gray-500">© 2023 DlThreads. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const pasteButton = document.querySelector('.paste-button');

        pasteButton.addEventListener('click', async () => {
        try {
            const text = await navigator.clipboard.readText()
            document.querySelector('.url-input').value += text;
            console.log('Text pasted.');
        } catch (error) {
            console.log('Failed to read clipboard');
        }
        });

        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>