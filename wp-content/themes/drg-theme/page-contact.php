<?php
/**
 * The template for displaying the following page: contact
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>
    <section class="bg-gray-200 pb-16">
        <div class="container mx-auto px-4">
            <div class="py-8">
                <h2 class="text-2xl font-semibold leading-tight">Contact us</h2>
            </div>
            <div class="flex flex-wrap">
                <div class="h-auto w-full md:flex bg-gray-100 shadow-2xl rounded-lg">
                    <div class="md:w-1/3 w-full space-y-6 p-12 bg-gradient-to-b from-indigo-900 to-purple-900 text-white rounded-t-lg md:rounded-none md:rounded-l-lg">
                        <h3 class="text-xl mb-4">Contact information</h3>
                        <a href="https://github.com/Gumbraise">
                            <p class="text-lg"><i class="fab fa-github mr-4"></i>Gumbraise</p>
                        </a>
                        <a href="https://twitter.com/DevsAreGenius">
                            <p class="text-lg"><i class="fab fa-twitter mr-4"></i>@DevsAreGenius</p>
                        </a>
                        <a href="mailto:contact@drg.kellis.fr">
                            <p class="text-lg"><i class="far fa-envelope mr-4"></i>contact@drg.kellis.fr</p>
                        </a>
                    </div>
                    <div class="md:w-2/3 w-full p-12">
                        <h3 class="text-xl mb-4">Send us a message</h3>
                        <form action="#" method="POST">
                            <div class="md:flex w-full md:space-x-4">
                                <div class="md:w-1/2 w-full">
                                    <label
                                            class="block text-lg mb-2"
                                            for="contact-fullname"
                                    >Full Name</label>
                                    <div class="relative flex flex-wrap items-stretch mb-3">
                                        <input
                                                id="contact-fullname"
                                                type="text"
                                                class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                                placeholder="Full Name"
                                                style="transition: all 0.15s ease 0s;"
                                                required
                                        />
                                    </div>
                                </div>
                                <div class="md:w-1/2 w-full">
                                    <label
                                            class="block text-lg mb-2"
                                            for="contact-email"
                                    >Email</label
                                    >
                                    <div class="relative flex flex-wrap items-stretch mb-3">
                                        <input
                                                id="contact-email"
                                                type="email"
                                                class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                                placeholder="Email"
                                                style="transition: all 0.15s ease 0s;"
                                                required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <label
                                        class="block text-lg mb-2"
                                        for="contact-subject"
                                >Subject</label
                                >
                                <div class="relative flex flex-wrap items-stretch mb-3">
                                    <select
                                            id="contact-subject"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    >
                                        <option value="question" selected>Comment or question</option>
                                        <option value="sponsor">I want to become a sponsor</option>
                                        <option value="certified">I want my account to be certified</option>
                                        <option value="feature">New feature</option>
                                        <option value="report1">Report a problem</option>
                                        <option value="report2">Report a problem / I got access trouble</option>
                                        <option value="report3">Report a problem / The service is unavailable</option>
                                        <option value="report4">Report a problem / An error occurs</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full">
                                <label
                                        class="block text-lg mb-2"
                                        for="contact-textarea"
                                >Message</label
                                >
                                <div class="relative flex flex-wrap items-stretch mb-3">
                                    <textarea
                                            id="contact-textarea"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full"
                                            placeholder="Type a message..."
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    ></textarea>
                                </div>
                            </div>
                            <div class="w-full text-center mt-6">
                                <button class="w-full block text-center transition duration-200 bg-purple-900 text-gray-300 shadow hover:shadow-lg outline-none focus:outline-none uppercase hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded items-center">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
