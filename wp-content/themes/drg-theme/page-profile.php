<?php
/**
 * The template for displaying the following page: profile
 *
 * @package WordPress
 * @subpackage DevsAreGenius
 * @since 1.0.0
 */
get_header();
?>
    <section class="relative block" style="height: 500px;">
        <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("assets/img/scenery/image5.jpg");'
        >
          <span
                  id="blackOverlay"
                  class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;"
        >
            <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
            >
                <polygon
                        class="text-gray-200 fill-current"
                        points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-gray-200">
        <div class="container mx-auto px-4">
            <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
            >
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div
                                class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                        >
                            <div class="relative">
                                <img
                                        alt="..."
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute w-64 -m-16 -ml-20 lg:-ml-16"
                                        style="max-width: 150px;"
                                />
                            </div>
                        </div>
                        <div
                                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                        >
                            <div class="py-6 px-3 mt-8">
                                <!-- I'm an easter egg -->
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      >2405</span
                      ><span class="text-sm text-gray-500">IQ</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      >10</span
                      ><span class="text-sm text-gray-500">Ideas</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                      <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      ><span class="text-sm text-gray-500">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3
                                class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                        >
                        </h3>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                    Hello, I'm Kellis and I love web development. I mainly use PHP, TypeScript, Vue but
                                    I can use any language! I'm ready for the BattleDev 2021, what about you ?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <div class="w-full inline-block">
                    <h4 class="text-2xl font-semibold inline-block text-left leading-tight">His last ideas:</h4>
                        <p class="text-lg text-purple-900 font-semibold inline-blockv float-right leading-tight">See
                            more
                            »</p>
                    </a>
                </div>
                <div class="flex flex-wrap my-4">
                            <div class="w-full xl:w-1/4 lg:w-1/3 md:w-1/2 px-4 text-center">
                                <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                                >
                                    <div class="bg-gray-200 rounded-t-lg top-0 w-full h-36 bg-center bg-cover relative"
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-200 px-6 py-4 rounded-b-lg">
                                        <div class="flex mx-4 items-end">
                                            <a class="font-bold w-full text-purple-900 text-right"
                                               href="<?php the_permalink(); ?>">See
                                                the
                                                idea »</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					<?php } else { ?>
                        <label for="search-bar" class="relative text-center py-24 md:py-48 space-y-4">
                            <p class="text-3xl font-semibold">No Idea Found</p>
                            <p class="text-xl">Try to change your keywords</p>
                        </label>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
