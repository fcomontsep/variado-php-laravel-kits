<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center flex-col overflow-y-scroll">
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
                    <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">Flowbite</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 h-10">
        <div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-base"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
            </div>
        </div>
    </div>    

    <div class="min-h-screen flex items-center justify-center">
        <div id="card-form" class="bg-black/33 backdrop-blur-sm p-8 rounded-2xl border border-white/10 shadow-2xl w-full max-w-md">
            <form class="max-w-sm mx-auto">
                <label for="input-group-1" class="block mb-2.5 text-sm font-medium text-heading">Your Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <input type="text" id="input-group-1"
                        class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                        placeholder="name@flowbite.com">
                </div>
            </form>
            <form class="max-w-sm mx-auto">
                <div class="mb-6">
                    <label for="success" class="block mb-2.5 text-sm font-medium text-fg-success-strong">Your name</label>
                    <input type="text" id="success"
                        class="bg-success-soft border border-success-subtle text-fg-success-strong text-sm rounded-base focus:ring-success focus:border-success block w-full px-3 py-2.5 shadow-xs placeholder:text-fg-success-strong"
                        placeholder="Success input">
                    <p class="mt-2.5 text-sm text-fg-success-strong"><span class="font-medium">Well done!</span> Some success
                        message.</p>
                </div>
                <div class="mb-6">
                    <label for="danger" class="block mb-2.5 text-sm font-medium text-fg-danger-strong">Your name</label>
                    <input type="text" id="danger"
                        class="bg-danger-soft border border-danger-subtle text-fg-danger-strong text-sm rounded-base focus:ring-danger focus:border-danger block w-full px-3 py-2.5 shadow-xs placeholder:text-fg-danger-strong"
                        placeholder="Error input">
                    <p class="mt-2.5 text-sm text-fg-danger-strong"><span class="font-medium">Oh, snapp!</span> Some error
                        message.</p>
                </div>
            </form>
            <!-- Modal toggle -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                type="button">
                Toggle modal
            </button>
        </div>
    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                <!-- Modal header -->
                <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                    <h3 class="text-lg font-medium text-heading">
                        Terms of Service
                    </h3>
                    <button type="button"
                        class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="default-modal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                    <p class="leading-relaxed text-body">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="leading-relaxed text-body">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25
                        and is meant to ensure a common set of data rights in the European Union. It requires
                        organizations to notify users as soon as possible of high-risk data breaches that could
                        personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">I
                        accept</button>
                    <button data-modal-hide="default-modal" type="button"
                        class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Decline</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
