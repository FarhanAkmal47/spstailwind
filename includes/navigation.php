    <!-- Header Star -->
    <header id="headerWrapper1"
        class="site-header fixed left-0 max-2xl:!top-0 z-999 w-full transition-all duration-300">
        <!-- <div class="relative flex-nowrap justify-start z-99 bg-white 2xl:block hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon1.svg" alt="icon1" width="45"
                                        height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">Contatc Us</span>
                                <p class="text-secondary font-semibold mb-0">
                                    <a href="tel:+11234567890" class="text-secondary">+301-337-2290</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon2.svg" alt="icon2" width="45"
                                        height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">Email Supports</span>
                                <p class="text-secondary font-semibold mb-0">
                                    <a href="mailto:email@domain.com" class="text-secondary">support@spsnet.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon3.svg" alt="icon3" width="45"
                                        height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">Online Appointment
                                </span>
                                <p class="text-secondary font-semibold mb-0">
                                    Book Now <i class="feather icon-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon4.svg" alt="icon4" width="45"
                                        height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">Supports</span>
                                <p class="text-secondary font-semibold mb-0">24x7 Supports</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon5.svg" alt="icon-ai-analytics"
                                        width="45" height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">AI Analytics</span>
                                <p class="text-secondary font-semibold mb-0">
                                    Insights
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="relative flex items-center gap-3.5">
                            <div class="flex items-center justify-center size-11.25 min-w-11.25">
                                <span class="icon-cell">
                                    <img loading="lazy" src="assets/images/svg/icon6.svg" alt="icon-ai-automation"
                                        width="45" height="45" />
                                </span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="font-medium text-2xs mb-1 text-primary">AI Automation</span>
                                <p class="text-secondary font-semibold mb-0">
                                    Automate Tasks
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <div class="sticky-header main-bar-wraper w-full">
            <div class="main-bar bg-secondary lg:text-white text-secondary w-full" style="background: transparent;">
                <div class="container-fluid flex items-center relative">
                    <!-- Website Logo -->
                    <div
                        class="flex items-center align-middle xl:w-100.75 w-100.75 sm:h-20 h-15.25 max-xl:me-2 logo-dark">
                        <a href="<?= $app_path ?>assets/index.html" class="table-cell align-middle"><img loading="lazy"
                                src="assets/images/logowhitenew.png" alt="logo" class="object-contain"
                                width="300px"></a>
                    </div>
                    <div
                        class="lg:hidden fixed top-0 left-0 bg-black size-full duration-300 z-999 opacity-0 visible pointer-events-none menu-close fade-overlay">
                    </div>
                    <div
                        class="flex lg:basis-auto lg:grow max-lg:flex-col lg:justify-end font-title max-lg:fixed max-lg:h-full max-lg:px-5 max-lg:top-0 max-lg:-left-75 max-lg:z-9999 max-lg:bg-white max-lg:w-72 max-lg:overflow-auto max-lg:duration-700 header-nav custom-scroll">
                        <div class="flex items-center relative z-9 py-6.25 lg:hidden w-33.75 h-15.25">
                            <a href="<?= $app_path ?>assets/index.html" class="table-cell align-middle">
                                <img loading="lazy" src="assets/images/logo.svg" alt="logo" width="400" height="120"
                                    class="object-contain duration-500" />
                            </a>
                        </div>
                        <ul class="lg:flex flex-wrap navbar-nav">
                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-primary max-lg:after:hidden"
                                    href="javascript:void(0);">
                                    <span class="inline-block leading-7.5">Home</span>
                                </a>
                            </li>
                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-primary after:content-['+'] max-lg:after:hidden"
                                    href="<?= $app_path ?>assets/about-us.html">
                                    <span class="inline-block leading-7.5">Products</span>
                                    <i
                                        class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 rounded text-center text-xs bg-secondary text-white float-end"></i>
                                </a>
                                <ul
                                    class="lg:absolute bg-white block lg:left-0 lg:py-5 max-lg:py-2.5 max-lg:border-t max-lg:border-gray-200 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden lg:shadow-submenu sub-menu">
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/about-us.html"><span>About Us</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/appointment.html"><span>Appointment</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/pricing-table.html"><span>Pricing
                                                Table</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/patient-info.html"><span>Patient
                                                Info</span></a>
                                    </li>
                                    <li class="group/second relative sub-menu-down">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary after:content-['\f054'] after:inline-block after:font-black after:font-['Font_Awesome_5_Free'] after:text-tiny after:float-right after:duration-500 max-lg:after:size-7 max-lg:after:leading-7 max-lg:after:text-center max-lg:after:text-xs max-lg:after:rounded max-lg:after:bg-secondary max-lg:after:text-white"
                                            href="javascript:void(0);"><span>Team</span></a>
                                        <ul
                                            class="bg-white lg:py-5 lg:w-55 2xl:left-55 lg:-left-55 lg:top-0 lg:absolute lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover/second:opacity-100 lg:group-hover/second:visible lg:group-hover/second:translate-y-0 max-lg:hidden max-lg:pl-5 sub-menu">
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/team.html"><span>Team</span></a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/team-detail.html"><span>Team
                                                        Detail</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/testimonial.html"><span>Testimonial</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/faqs.html"><span>Faqs</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/error-404.html"><span>Error 404</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/coming-soon.html"><span>Coming Soon</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/under-construction.html"><span>Under
                                                Construction</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-primary after:content-['+'] max-lg:after:hidden"
                                    href="javascript:void(0);">
                                    <span class="inline-block leading-7.5">Services</span>
                                    <i
                                        class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 rounded text-center text-xs bg-secondary text-white float-end"></i>
                                </a>
                                <div
                                    class="lg:absolute bg-white block lg:left-1/2 lg:-translate-x-1/2 lg:right-0 lg:py-12 2xxl:px-[calc((100vw_-_1320px)_/_2_+_15px)] xl:px-7.5 lg:-mx-2 max-lg:py-2.5 max-lg:border-t max-lg:border-gray-200 lg:w-screen lg:max-w-screen w-auto max-w-full lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left lg:overflow-y-auto lg:h-auto lg:max-h-[calc(100vh-80px)] duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden mega-menu">
                                    <ul class="lg:flex flex-wrap -mx-3.75">
                                        <li class="lg:min-w-80 px-4 flex-1 relative">
                                            <span
                                                class="text-black block text-base font-semibold pb-2.5 font-title max-lg:hidden">Cybersecurity</span>
                                            <ul class="lg:mb-4">
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">Network Security</a>
                                                </li>

                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">SMaaS</a>
                                                </li>

                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">GRC</a>
                                                </li>

                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">Identity & Access</a>
                                                </li>

                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">Threat Management</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="lg:min-w-80 px-4 flex-1 relative">
                                            <span
                                                class="text-black block text-base font-semibold pb-2.5 font-title max-lg:hidden">Cloud</span>
                                            <ul class="lg:mb-4">
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-counters.html">Devops</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-accordions.html">Migration Services</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="lg:min-w-80 px-4 flex-1 relative">
                                            <span
                                                class="text-black block text-base font-semibold pb-2.5 font-title max-lg:hidden">Ai
                                                & Automation</span>
                                            <ul class="lg:mb-4">
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-shop-widgets.html">Automation</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-form.html">Data Science</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="lg:min-w-80 px-4 flex-1 relative">
                                            <span
                                                class="text-black block text-base font-semibold pb-2.5 font-title max-lg:hidden">Collaboration</span>
                                            <ul class="lg:mb-4">
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-swiper.html">Training</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="elements/shortcode-widgets.html">Events</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <span
                                        class="text-black flex items-center gap-2 text-xl font-semibold font-title max-lg:hidden text-center my-6 relative after:flex-1 after:h-px after:bg-black after:opacity-15 before:flex-1 before:h-px before:bg-black before:opacity-15">

                                    </span>
                                    <ul class="lg:flex flex-wrap -mx-3.75">
                                        <li class="lg:min-w-80 px-4 flex-1 relative">
                                            <span
                                                class="text-black block text-base font-semibold pb-2.5 font-title max-lg:hidden">Training
                                            </span>
                                            <ul class="lg:mb-4">
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">SPS Oil & Gas</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">IBM</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">Google</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">AWS</a>
                                                </li>
                                                <li class="relative group/second">
                                                    <a class="block relative text-sm text-gray-600 font-normal py-1.25 duration-500 hover:text-primary"
                                                        href="#">See More</a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-primary after:content-['+'] max-lg:after:hidden"
                                    href="<?= $app_path ?>assets/services.html">
                                    <span class="inline-block leading-7.5">Automation</span>
                                    <i
                                        class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 rounded text-center text-xs bg-secondary text-white float-end"></i>
                                </a>
                                <ul
                                    class="lg:absolute bg-white block lg:left-0 lg:py-5 max-lg:py-2.5 max-lg:border-t max-lg:border-gray-200 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden lg:shadow-submenu mega-menu">
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/services.html"><span>Services</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/service-detail.html"><span>Services
                                                Detail</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-primary after:content-['+'] max-lg:after:hidden"
                                    href="<?= $app_path ?>assets/blog-grid.html">
                                    <span class="inline-block leading-7.5">Verticle</span>
                                    <i
                                        class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 rounded text-center text-xs bg-secondary text-white float-end"></i>
                                </a>
                                <ul
                                    class="lg:absolute bg-white block lg:left-0 lg:py-5 max-lg:py-2.5 max-lg:border-t max-lg:border-gray-200 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden lg:shadow-submenu sub-menu">
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/blog-grid.html"><span>Blog Grid</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/blog-list-sidebar.html"><span>Blog List
                                                Sidebar</span></a>
                                    </li>
                                    <li class="relative">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                            href="<?= $app_path ?>assets/blog-details.html"><span>Blog
                                                Details</span></a>
                                    </li>
                                    <li class="group/second relative sub-menu-down">
                                        <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary after:content-['\f054'] after:inline-block after:font-black after:font-['Font_Awesome_5_Free'] after:text-tiny after:float-right after:duration-500 max-lg:after:size-7 max-lg:after:leading-7 max-lg:after:text-center max-lg:after:text-xs max-lg:after:rounded max-lg:after:bg-secondary max-lg:after:text-white"
                                            href="standard-post.html"><span>Post Layout </span></a>
                                        <ul
                                            class="bg-white lg:py-5 lg:w-55 2xl:left-55 lg:-left-55 lg:top-0 lg:absolute lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover/second:opacity-100 lg:group-hover/second:visible lg:group-hover/second:translate-y-0 max-lg:hidden max-lg:pl-5 sub-menu">
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/standard-post.html"><span>Standard
                                                        Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/gutenberg-post.html"><span>Gutenberg
                                                        Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/corner-post.html"><span>Corner
                                                        Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/header-image.html"><span>Header
                                                        Image</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/post-gallery.html"><span> Post Gallery
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/link-post.html"><span>Link Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/video-post.html"><span>Video
                                                        Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/audio-post.html"><span>Audio
                                                        Post</span>
                                                </a>
                                            </li>
                                            <li class="relative">
                                                <a class="block relative text-sm text-gray-600 font-normal py-1.25 lg:px-7.5 duration-500 hover:text-primary"
                                                    href="<?= $app_path ?>assets/post-slider.html"><span>Post Slider
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                                <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-lg text-2sm font-medium hover:text-primary"
                                    href="<?= $app_path ?>assets/contact-us.html">
                                    <span class="inline-block leading-7.5">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                        <div class="lg:hidden block max-lg:p-5 text-center">
                            <ul>
                                <li class="inline-block mx-0.5">
                                    <a class="size-10 !leading-10 border border-black/10 text-center text-secondary fab fa-facebook-f"
                                        target="_blank" href="https://www.facebook.com/dexignzone"></a>
                                </li>
                                <li class="inline-block mx-0.5">
                                    <a class="size-10 !leading-10 border border-black/10 text-center text-secondary fab fa-twitter"
                                        target="_blank" href="https://twitter.com/dexignzones"></a>
                                </li>
                                <li class="inline-block mx-0.5">
                                    <a class="size-10 !leading-10 border border-black/10 text-center text-secondary fab fa-linkedin-in"
                                        target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a>
                                </li>
                                <li class="inline-block mx-0.5">
                                    <a class="size-10 !leading-10 border border-black/10 text-center text-secondary fab fa-instagram"
                                        target="_blank" href="https://www.instagram.com/dexignzone/"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="extra-nav flex items-center h-20 3xl:pl-7.5 ml-auto max-sm:w-full max-sm:bg-white max-sm:fixed max-sm:-bottom-20 max-sm:left-0 max-sm:px-5 max-sm:shadow-3 max-sm:h-15 max-sm:duration-500 [.extra-nav.active]:bottom-0 [.extra-nav.bottom-end]:-bottom-20">
                        <div class="flex items-center w-full">
                            <ul class="lg:ml-5 sm:ml-3.75 flex items-center gap-2.5 w-full justify-between">
                                <li class="inline-block">
                                    <a href="appointment.html"
                                        class="btn btn-primary btn-hover1 max-md:!text-sm max-md:!py-2.5 max-md:!px-4.5 max-md:!rounded-2lg">
                                        Internship
                                    </a>
                                </li>
                                <li class="inline-block" data-drawer="#offcanvas-right" data-drawer-placement="right">
                                    <button type="button"
                                        class="md:size-12.5 size-10.5 bg-white min-w-10 md:rounded-xxl rounded-lg flex flex-col justify-center items-center relative cursor-pointer toggle-nav-btn"
                                        aria-label="Toggle drawer">
                                        <span class="w-5 h-0.5 bg-secondary block duration-500"></span>
                                        <span class="w-4 my-1.25 h-0.5 bg-secondary block duration-500"></span>
                                        <span class="w-5 h-0.5 bg-secondary block duration-500"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="fixed -top-full left-0 size-full bg-black/80 z-999 flex items-center justify-center p-8 duration-500 xmenu-search"
                        id="searchOverlay4">
                        <form class="w-full" action="#">
                            <div class="relative max-w-3xl w-3xl mx-auto">
                                <input name="search" value="" type="text"
                                    class="h-14 py-4 px-5 border border-white/20 text-white w-full outline-none duration-300 focus:border-primary"
                                    placeholder="Type to search" />
                                <button type="button" aria-label="Search"
                                    class="absolute right-0 top-1/2 -translate-y-1/2 h-full w-10 flex items-center">
                                    <i class="fa fa-search text-base text-white" aria-hidden="true"></i>
                                </button>
                            </div>
                            <button type="button" aria-label="Close search"
                                class="absolute right-8 top-8 text-white text-xl opacity-80 size-8 cursor-pointer search-remove">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->