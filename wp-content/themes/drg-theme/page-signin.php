<?php
/**
 * The template for displaying the following page: signin
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();

?>
    <section class="relative w-full h-screen flex content-center items-center justify-center" style="min-height: 75vh;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url(./assets/img/tech/image4.jpg);"
        >          <span
                id="blackOverlay"
                class="w-full h-full absolute opacity-50 bg-black"
        ></span>
        </div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0"
                    >
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="text-center mb-3">
                                <img src="assets/img/tech/drg_header_dark_alt.svg" alt="DRG Header"
                                     class="w-64 block m-auto">
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400"/>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 py-12">
                            <form>

                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                >Email</label
                                >
                                <div class="relative flex w-full flex-wrap items-stretch w-full mb-3">
                                    <div class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                        <i class="fas fa-envelope text-purple-500"></i>
                                    </div>
                                    <input
                                            type="email"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                                            placeholder="Email"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                </div>

                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                >Password</label
                                >
                                <div class="relative flex w-full flex-wrap items-stretch w-full mb-3">
                                    <div class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                        <i class="fas fa-lock text-purple-500"></i>
                                    </div>
                                    <input
                                            type="password"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                                            placeholder="Password"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                </div>
                                <div>
                                    <label class="inline-flex items-center cursor-pointer"
                                    ><input
                                            id="customCheckLogin"
                                            type="checkbox"
                                            class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5"
                                            style="transition: all 0.15s ease 0s;"
                                    /><span class="ml-2 text-sm font-semibold text-gray-700"
                                    >Remember me</span
                                    ></label
                                    >
                                </div>
                                <div class="text-center mt-6">
                                    <button class="w-full block text-center transition duration-200 bg-purple-900 text-gray-300 shadow hover:shadow-lg outline-none focus:outline-none uppercase hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded items-center">
                                        Sign in
                                    </button>
                                </div>
                            </form>
                            <div class="flex flex-wrap mt-6">
                                <div class="w-1/2">
                                    <a href="#" class="text-gray-700"
                                    ><small>Forgot password?</small></a
                                    >
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="signup.html" class="text-gray-700"
                                    ><small>Create new account</small></a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
