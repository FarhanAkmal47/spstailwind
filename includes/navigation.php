<style>
/* Hide mobile menu by default on mobile screens */
#headerNav.hidden-mobile-menu {
    transform: translateX(-300px);
    transition: all 0.5s ease;
}

#headerNav.show-mobile-menu {
    transform: translateX(0);
    transition: all 0.5s ease;
}

/* Overlay hidden by default */
#mobileOverlay {
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

#mobileOverlay.active {
    opacity: 0.5;
    /* semi-transparent */
    pointer-events: auto;
}

.menu-animate li a {
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
}

.menu-animate li:hover a {
    transform: translateX(6px);
    color: #00b4d7;
}

.menu-animate li a i {
    transition: transform 0.25s ease;
}

.menu-animate li:hover a i {
    transform: translateX(4px);
}
</style>

<!-- Header Start -->
<header id="headerWrapper1" class="site-header fixed left-0 max-2xl:!top-0 z-999 w-full transition-all duration-300">
    <div class="sticky-header main-bar-wraper w-full">
        <div class="main-bar bg-secondary lg:text-white text-secondary w-full" style="background: transparent;">
            <div class="container-fluid flex items-center relative">

                <!-- Website Logo -->
                <div class="flex items-center align-middle xl:w-100.75 w-100.75 sm:h-20 h-15.25 max-xl:me-2 logo-dark">
                    <a href="<?= $app_path ?>assets/index.html" class="table-cell align-middle">
                        <img loading="lazy" src="assets/images/logowhitenew.png" alt="logo" class="object-contain"
                            width="300px">
                    </a>
                </div>

                <!-- Mobile overlay -->
                <div id="mobileOverlay"
                    class="lg:hidden fixed top-0 left-0 w-full h-full bg-black/50 z-40 opacity-0 pointer-events-none transition-all duration-300">
                </div>

                <!-- Navigation -->
                <div id="headerNav"
                    class="flex lg:basis-auto lg:grow max-lg:flex-col lg:justify-end max-lg:fixed max-lg:h-full max-lg:px-5 max-lg:top-0 max-lg:-left-[300px] max-lg:z-50 max-lg:bg-white max-lg:w-72 max-lg:overflow-auto max-lg:transition-all max-lg:duration-500 header-nav custom-scroll">

                    <!-- Mobile Logo inside menu -->
                    <div class="flex items-center relative z-10 py-6.25 lg:hidden h-15.25">
                        <a href="<?= $app_path ?>assets/index.html" class="table-cell align-middle">
                            <img loading="lazy" src="assets/images/logo.png" alt="logo" width="400" height="120"
                                class="object-contain duration-500" />
                        </a>
                    </div>

                    <!-- Menu Items -->
                    <ul class="lg:flex flex-wrap navbar-nav">
                        <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 group">
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-white max-lg:after:hidden"
                                href="javascript:void(0);">
                                <span class="inline-block leading-7.5">Home</span>
                            </a>
                        </li>
                        <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-white after:content-['+'] max-lg:after:hidden"
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
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-white after:content-['+'] max-lg:after:hidden"
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
                        <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 group">
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-white after:content-['+'] max-lg:after:hidden"
                                href="javascript:void(0);">
                                <span class="inline-block leading-7.5">Automation</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 rounded text-center text-xs bg-secondary text-white float-end"></i>
                            </a>
                            <div class="mega-menu lg:absolute left-1/2 -translate-x-1/2 bg-white shadow-xl rounded-xl 
                                lg:py-10 py-5 lg:px-10 px-5 lg:w-[1100px] w-full 
                                lg:opacity-0 lg:invisible lg:translate-y-5 duration-300
                                lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 
                                z-50">

                                <div class="grid lg:grid-cols-3 grid-cols-1 gap-10">

                                    <!-- LEFT SIDE — FULL HEIGHT IMAGE + PARAGRAPH -->
                                    <div class="flex flex-col justify-between w-100">

                                        <!-- Image full height style -->
                                        <img src="<?= $app_path ?>assets/images/spsimg/ab2.jpg" alt="Preview"
                                            class="rounded-lg shadow-md w-full object-cover max-h-[260px] mb-5">

                                        <!-- Paragraph -->
                                        <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                            SPS empowers enterprises with Cybersecurity, Cloud, AI & Automation
                                            solutions designed to scale and secure digital transformation.
                                        </p>

                                        <a href="#" class="text-primary text-sm font-medium hover:underline">
                                            Discover More →
                                        </a>

                                    </div>

                                    <!-- RIGHT SIDE — CATEGORIES ONLY -->
                                    <div class="lg:col-span-2 grid lg:grid-cols-3 grid-cols-1 gap-10 ml-3">

                                        <!-- Cybersecurity -->
                                        <div>
                                            <h4 class="text-black text-lg font-semibold mb-3">Cybersecurity</h4>
                                            <ul class="space-y-2 menu-animate menu-animate">
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">Network
                                                        Security <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">SMaaS
                                                        <i class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">GRC <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a>
                                                </li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm"
                                                        href="#">Identity & Access <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">Threat
                                                        Management <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                            </ul>
                                        </div>

                                        <!-- Cloud -->
                                        <div>
                                            <h4 class="text-black text-lg font-semibold mb-3">Cloud</h4>
                                            <ul class="space-y-2 menu-animate">
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">DevOps
                                                        <i class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm"
                                                        href="#">Migration Services <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                            </ul>
                                        </div>

                                        <!-- AI & Automation -->
                                        <div>
                                            <h4 class="text-black text-lg font-semibold mb-3">AI & Automation</h4>
                                            <ul class="space-y-2 menu-animate">
                                                <li><a class="text-gray-600 hover:text-primary text-sm"
                                                        href="#">Automation <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">Data
                                                        Science <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="text-black text-lg font-semibold mb-3">Training</h4>
                                            <ul class="space-y-2 menu-animate">
                                                <li><a class="text-gray-600 hover:text-primary text-sm"
                                                        href="#">Automation <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">Data
                                                        Science <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="text-black text-lg font-semibold mb-3">Collaboration</h4>
                                            <ul class="space-y-2 menu-animate">
                                                <li><a class="text-gray-600 hover:text-primary text-sm" href="#">Events
                                                        <i class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                                <li><a class="text-gray-600 hover:text-primary text-sm"
                                                        href="#">Training <i
                                                            class="feather icon-arrow-right ms-2 text-xs"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 relative group">
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white after:ml-1 after:-mt-1 after:inline-block after:size-3 after:text-white after:content-['+'] max-lg:after:hidden"
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
                            <a class="lg:py-7 py-2 xl:px-4 lg:px-2 relative lg:inline-block block xl:text-sm text-2sm font-medium hover:text-white"
                                href="<?= $app_path ?>assets/white-us.html">
                                <span class="inline-block leading-7.5">Contact Us</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Social icons for mobile -->
                    <div class="lg:hidden block max-lg:p-5 text-center">
                        <ul class="flex justify-center gap-2.5">
                            <li><a href="#"
                                    class="fab fa-facebook-f text-secondary border border-black/10 text-center w-10 h-10 inline-block"></a>
                            </li>
                            <li><a href="#"
                                    class="fab fa-twitter text-secondary border border-black/10 text-center w-10 h-10 inline-block"></a>
                            </li>
                            <li><a href="#"
                                    class="fab fa-linkedin-in text-secondary border border-black/10 text-center w-10 h-10 inline-block"></a>
                            </li>
                            <li><a href="#"
                                    class="fab fa-instagram text-secondary border border-black/10 text-center w-10 h-10 inline-block"></a>
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
                                    class="btn btn-trans btn-hover1 max-md:!text-sm max-md:!py-2.5 max-md:!px-4.5 max-md:!rounded-2lg">
                                    Internship
                                </a>
                            </li>
                            <li class="inline-block" data-drawer="#offcanvas-right" data-drawer-placement="right">
                                <button type="button"
                                    class="md:size-12.5 size-10.5 bg-transparent border border-white-custom min-w-10 md:rounded-xxl rounded-lg flex flex-col justify-center items-center relative cursor-pointer toggle-nav-btn"
                                    aria-label="Toggle drawer">
                                    <span class="w-5 h-0.5 bg-white block duration-500"></span>
                                    <span class="w-4 my-1.25 h-0.5 bg-white block duration-500"></span>
                                    <span class="w-5 h-0.5 bg-white block duration-500"></span>
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Mobile menu toggle -->
                <div class="lg:hidden ml-auto">
                    <button id="toggleNavBtn" type="button"
                        class="bg-transparent border border-white-custom min-w-10 rounded-lg flex flex-col justify-center items-center relative cursor-pointer"
                        aria-label="Toggle drawer">
                        <span class="w-5 h-0.5 bg-white block mb-1"></span>
                        <span class="w-4 h-0.5 bg-white block mb-1"></span>
                        <span class="w-5 h-0.5 bg-white block"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>
<script>
const headerNav = document.getElementById('headerNav');
const overlay = document.getElementById('mobileOverlay');
const toggleButtons = document.querySelectorAll('.toggle-nav-btn, #toggleNavBtn');

// Only apply mobile menu behavior for small screens
function isMobile() {
    return window.innerWidth < 1024; // adjust breakpoint if needed
}

// Start with menu hidden on mobile
if (isMobile()) {
    headerNav.classList.add('hidden-mobile-menu');
}

toggleButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        if (!isMobile()) return; // do nothing on desktop

        headerNav.classList.toggle('hidden-mobile-menu');
        headerNav.classList.toggle('show-mobile-menu');

        overlay.classList.toggle('active');

        btn.classList.toggle('active');
    });
});

// Close menu when clicking overla
overlay.addEventListener('click', () => {
    headerNav.classList.add('hidden-mobile-menu');
    headerNav.classList.remove('show-mobile-menu');

    overlay.classList.remove('active');

    toggleButtons.forEach(btn => btn.classList.remove('active'));
});

// Optional: handle resize to reset menu on desktop
window.addEventListener('resize', () => {
    if (!isMobile()) {
        headerNav.classList.remove('hidden-mobile-menu', 'show-mobile-menu');
        overlay.classList.remove('active');
        toggleButtons.forEach(btn => btn.classList.remove('active'));
    } else {
        headerNav.classList.add('hidden-mobile-menu');
    }
});
</script>