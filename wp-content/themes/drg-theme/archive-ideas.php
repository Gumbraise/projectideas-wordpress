<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DRG | DevsAreGenius - Find an idea</title>
    <link rel="icon" type="image/png" href="assets/img/tech/drg_logo.svg"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<div class="relative bg-purple-800 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">DRG</span>
                    <img class="h-8 w-auto sm:h-10 hidden md:flex" src="assets/img/tech/drg_header_alt.svg" alt="DRG">
                    <img class="h-8 w-auto sm:h-10 flex md:hidden" src="assets/img/tech/drg_logo.svg" alt="DRG">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button onclick="toggleNavbar('md');"
                        type="button"
                        class="bg-purple-900 rounded-md p-2 inline-flex items-center justify-center text-gray-300 hover:text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-900"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="post.html"
                   class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                    Post an idea
                </a>
                <a href="archive-ideas.php"
                   class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                    Find an idea
                </a>
                <a href="page-contact.php"
                   class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                    Become certified
                </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="signin.html"
                   class="hover:bg-purple-700 text-white px-3 py-2 rounded-md text-base font-medium">
                    Sign in
                </a>
                <a href="signup.html"
                   class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                    Sign up
                </a>
            </div>
        </div>
    </div>

    <div id="md" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-purple-800 divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="assets/img/tech/drg_logo.svg"
                             alt="DRG">
                    </div>
                    <div class="-mr-2">
                        <button onclick="toggleNavbar('md');"
                                type="button"
                                class="bg-purple-900 rounded-md p-2 inline-flex items-center justify-center text-gray-300 hover:text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-900">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="post.html"
                       class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium text-center">
                        Post an idea
                    </a>

                    <a href="archive-ideas.php"
                       class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium text-center">
                        Find an idea
                    </a>

                    <a href="page-contact.php"
                       class="col-span-2 text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-base font-medium text-center">
                        Become certified
                    </a>

                </div>
                <div>
                    <a href="signup.html"
                       class="w-full whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-purple-900 hover:bg-purple-700 border-solid border-purple-900 border-2">
                        Sign up
                    </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-300">
                        You already have an account ?
                        <a href="signin.html" class="text-purple-400 hover:text-purple-300">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="page landing-page">
    <section class="bg-gray-200 pb-16">
        <div class="container mx-auto px-4">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Find an idea</h2>
                </div>
                <div class="lex sm:flex-row flex-col">
                    <div class="mt-4 relative flex w-full flex-wrap items-stretch mb-3">
                        <button class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-search text-purple-500"></i>
                        </button>
                        <input
                                type="text"
                                placeholder="Keywords (college, Vue.js, Java, ...)"
                                class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                        />
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                    <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                             style='background-image: url("assets/img/scenery/image1.jpg");'>
                            <span class="relative block w-full h-full opacity-50 bg-black rounded-t-lg"></span>
                        </div>
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold">ProjectIdeas</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                I would like there to be a website where people like I or you can post their ideas
                                and
                                devs come on the platform to create it. It would be awesome! You can follow...
                            </p>

                        </div>
                        <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                            <div class="flex mx-4 items-end">
                                <a class="font-bold w-full text-purple-900 text-right" href="single-ideas.php">See the idea »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">

                <div class="inline-block w-full items-center justify-between">
                    <div class="flex-1 flex items-center justify-center">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                             aria-label="Pagination">
                            <a href="#"
                               class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <!-- Heroicon name: solid/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-purple-50 border-purple-500 text-purple-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                            <a href="#" aria-current="page"
                               class="z-10 bg-purple-50 border-purple-500 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                1
                            </a>
                            <a href="#"
                               class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                2
                            </a>
                            <a href="#"
                               class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                3
                            </a>
                            <a href="#"
                               class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                4
                            </a>
                            <a href="#"
                               class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </nav>
                    </div>
                    <div class="flex-1 flex items-center justify-center pt-8">
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">12</span>
                            of
                            <span class="font-medium">42</span>
                            results
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative bg-gray-200 pt-8 pb-6 shadow-2xl">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <span class="sr-only">DRG</span>
                <img src="assets/img/tech/drg_header_dark_alt.svg" alt="DRG logo" class="w-72">
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Collection of ideas for genius developers.
                </h5>
                <div class="my-6">
                    <a href="https://twitter.com/DevsAreGenius" target="_blank">
                        <button
                                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"
                        >
                            <i class="flex fab fa-twitter"></i></button
                        >
                    </a>
                    <a href="https://github.com/Gumbraise" target="_blank">
                        <button
                                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button"
                        >
                            <i class="flex fab fa-github"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-6/12">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <h6 class="block uppercase text-gray-600 text-sm font-semibold my-2">Useful Links</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="archive-ideas.php"
                                >All ideas</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Day idea</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Advanced search</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Search by user</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <h6 class="block uppercase text-gray-600 text-sm font-bold my-2">Other Resources</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Privacy policy</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#"
                                >Terms &amp; Conditions</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="page-contact.php"
                                >Report a bug</a
                                >
                            </li>
                            <li>
                                <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="page-contact.php"
                                >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400"/>
        <div
                class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    © 2021 ProjectIdeas
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    let transition = false;

    function toggleNavbar(collapseID) {
        if (transition) {
            document.getElementById(collapseID).classList.remove("md-navbar-in");
            document.getElementById(collapseID).classList.add("md-navbar-out");
            setTimeout(() => {
                document.getElementById(collapseID).classList.add("hidden")
            }, 200)
        } else {
            document.getElementById(collapseID).classList.add("md-navbar-in");
            document.getElementById(collapseID).classList.remove("md-navbar-out", "hidden");
        }
        transition = !transition
    }
</script>
</body>

</html>