@extends('template.app')
@section('content')
<section class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-white mb-4">Threads Video Download</h2>
        <p class="text-gray-100 mb-8">Download Video Threads, Photo online</p>
        <form method="POST" action="{{ route('home') }}" class="flex items-center">
        @csrf
            <div class="relative w-full">
                <input type="text" placeholder="Enter Threads post URL" name="url"
                    class="w-full rounded-l px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500 url-input" value="">
                <button type="button"
                    class="absolute right-0 top-0 bottom-0 px-3 flex items-center bg-gray-200 rounded-r paste-button">
                    <svg class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-r">Download</button>
        </form>
    </div>
</section>

<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">All Features of DlThreads</h1>
                <p class="text-gray-600 mb-8">DlThreads supports all types of Threads videos and images links. It is the
                    ultimate tool for downloading Threads content effortlessly. DlThreads allows you to download videos,
                    photos, and more.</p>
            </div>
        </div>
    </div>
</div>

<section class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">How to Download Threads Content with DlThreads</h2>

        <div class="mb-8">
            <h3 class="text-xl font-bold mb-2">Step 01: Copy URL of Threads Photos & Videos</h3>
            <p class="text-gray-600">
                On the Threads app:<br>
                - Click "Get the Threads photo URL" (iOS) or "Copy the Threads URL" (Android) above the post, then hit
                "Copy Share URL". The link will be saved to your clipboard.<br>
                On PC / Mac:<br>
                - Right-click on the date of the video or photo on Threads, then click "Copy Link Address" to download
                Threads video on desktop.
            </p>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-bold mb-2">Step 02: Paste the URL into the DlThreads.App</h3>
            <p class="text-gray-600">Paste the copied Threads URL into the text box area provided in the DlThreads.App -
                Threads downloader.</p>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-bold mb-2">Step 03: Hit the "Download" Button</h3>
            <p class="text-gray-600">Click the "Download" button to initiate the Threads video download process.</p>
        </div>

        <div>
            <p class="text-gray-600">
                Our tool was designed to help you download videos and images uploaded by your own Threads account. We
                reserve the right to refuse to provide our service if you use our tools to infringe upon others' privacy
                and material.
            </p>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">What is Threads?</h2>
        <p class="text-gray-600 mb-8">Threads is a new app from the parent company of Facebook, Instagram, and WhatsApp.
            The platform resembles Twitter, with a feed of mostly text-based posts—though users can also post photos and
            videos—where people can have real-time conversations.</p>

        <h3 class="text-xl font-bold mb-2">How does Threads work?</h3>
        <p class="text-gray-600 mb-8">Threads combines the existing aesthetics and navigation system of Instagram and
            offers the ability to share Threads posts directly to Instagram Stories. Users can post messages with a
            limit of 500 characters, similar to Twitter. They can reply, forward, and quote other users' topic posts.
        </p>

        <h3 class="text-xl font-bold mb-2">Public and Private Accounts</h3>
        <p class="text-gray-600 mb-8">Accounts can be listed as public or private. Verified Instagram accounts are
            automatically verified on Threads.</p>

        <h3 class="text-xl font-bold mb-2">How to Sign Up? (And Can You Leave?)</h3>
        <p class="text-gray-600 mb-8">Users sign up through their Instagram accounts and keep the same username,
            password, and account name, although they can edit their bio to be exclusive to Threads. Users can also
            import their list of followed accounts directly from Instagram, making it super easy to get started with the
            app. However, leaving Threads is not as easy. While users can temporarily deactivate their profiles through
            the app's settings section, the company states in its privacy policy that "your Threads profile can only be
            deleted by deleting your Instagram account."</p>

        <h3 class="text-xl font-bold mb-2">Availability</h3>
        <p class="text-gray-600">Threads is available in 100 countries and in over 30 languages on iOS and Android,
            according to the company.</p>
    </div>
</section>
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
</script>
@endsection