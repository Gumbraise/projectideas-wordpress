<div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
>
    <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/tech/image4.jpg");'
    >
          <span
                  id="blackOverlay"
                  class="w-full h-full absolute opacity-50 bg-black"
          ></span>
						class="px-3 py-3 placeholder-purple-300 text-gray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-900 w-full pl-10"
    </div>
    <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                <h1 class="text-white font-semibold text-3xl sm:text-5xl">
                    DevsAreGenius
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                    Collection of ideas for genius developers, start using the app by searching some keywords below
                </p>
                <div class="mt-4 relative flex w-full flex-wrap items-stretch mb-3">
                    <form class="w-full" action="/ideas" method="GET">
                        <button class="z-10 h-full leading-snug font-normal absolute text-center text-purple-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-search text-purple-500"></i>
                        </button>
                        <input
                                name="search"
                                type="text"
                                placeholder="Keywords (college, Vue.js, Java, ...)"
							<?php if ( isset( $_GET['search'] ) ) {
								echo 'value ="' . $_GET['search'] . '"';
							} ?>
                        />
                    </form>
                </div>
            </div>
        </div>
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
</div>
