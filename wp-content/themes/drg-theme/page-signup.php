<?php
/**
 * The template for displaying the following page: signup
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */

if ( is_user_logged_in() ): header( 'Location: ' . get_home_url() . '/profile' );
endif;

get_header();

echo do_shortcode( '[ultimatemember form_id="49"]' );
?>
    <section class="relative w-full h-screen flex content-center items-center justify-center" style="min-height: 75vh;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url("<?php echo get_background_image(); ?>");"
        > <span
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
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/tech/drg_header_dark_alt.svg'; ?>"
                                     alt="DRG Header"
                                     class="w-64 block m-auto">
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400"/>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 py-12">
                            <form action="" method="post">

                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                >Username</label
                                >
                                <div class="relative flex w-full flex-wrap items-stretch w-full mb-3">
                                    <div class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                        <i class="fas fa-user text-purple-500"></i>
                                    </div>
                                    <input
                                            name="user_login-49"
                                            id="user_login-49"
                                            data-validate="unique_username"
                                            data-key="user_login"
                                            type="text"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                                            placeholder="Username"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                </div>

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
                                            name="user_email-49"
                                            id="user_email-49"
                                            data-validate="unique_email"
                                            data-key="user_email"
                                            data-temp-mail-org="0"
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
                                            name="user_password-49"
                                            id="user_password-49"
                                            data-validate=""
                                            data-key="user_password"
                                            type="password"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                                            placeholder="Password"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                    <p class="text-red-700 text-xs pt-2">* Choose a password with at least a lower char,
                                        an upper char and a number.</p>
                                </div>
                                <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                >Repeat the password</label
                                >
                                <div class="relative flex w-full flex-wrap items-stretch w-full mb-3">
                                    <div class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                        <i class="fas fa-lock text-purple-500"></i>
                                    </div>
                                    <input
                                            name="confirm_user_password-49"
                                            id="confirm_user_password-49"
                                            data-validate=""
                                            data-key="confirm_user_password"
                                            type="password"
                                            class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
                                            placeholder="Repeat the password"
                                            style="transition: all 0.15s ease 0s;"
                                            required
                                    />
                                </div>
                                <input type="hidden" name="form_id" id="form_id_49" value="49">
                                <input type="hidden" name="um_request" id="um_request_49" class="input" value=""
                                       size="25" autocomplete="off">
                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="1b196da5f6"><input
                                        type="hidden" name="_wp_http_referer" value="/signup/">
                                <input type="checkbox" id="RGDP" name="RGDP" required>
                                <label class="uppercase text-gray-700 text-xs font-bold mb-2"
                                       for="RGDP">*I read and I accept the RGDP</label>
                                <div class="text-center mt-6">
                                    <input type="submit"
                                           value="Sign up"
                                           class="cursor-pointer w-full block text-center transition duration-200 bg-purple-900 text-gray-300 shadow hover:shadow-lg outline-none focus:outline-none uppercase hover:bg-purple-700 hover:text-white font-bold py-3 px-8 rounded items-center"
                                           id="um-submit-btn">
                                </div>
                            </form>
                            <div class="flex flex-wrap mt-6">
                                <div class="w-1/2">
                                    <a href="<?php echo home_url( ' /forgot-password ' ); ?>" class="text-gray-700"
                                    ><small>Forgot password?</small></a
                                    >
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="<?php echo home_url( ' /signin ' ); ?>" class="text-gray-700"
                                    ><small>Sign in to your account</small></a
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