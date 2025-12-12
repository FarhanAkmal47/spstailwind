<?php
$page_title = "Sps Website";
include("includes/header.php");
?>
<style>
.video-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.video-bg video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.heroSwiper .swiper-slide {
    height: 700px;
}

.swiper-button-next,
.swiper-button-prev {
    color: #fff !important;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    transition: all 0.35s ease;
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 22px !important;
    font-weight: bold;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background: rgba(255, 255, 255, 0.35);
    transform: scale(1.12);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
}

.swiper-button-next:active,
.swiper-button-prev:active {
    transform: scale(0.95);
    background: rgba(255, 255, 255, 0.5);
}

.btnpadding {
    padding: calc(var(--spacing) * 1.5) calc(var(--spacing) * 6.25);
}
</style>
<style>
@keyframes bounce-slow {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-6px);
    }
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

.nav-bg {
    background: #d1caca !important;
}

.logo-clr {
    color: #00b4d7 !important;
}
</style>
<main class="page-content">
    <!-- Hero Slider -->
    <div class="swiper heroSwiper relative overflow-hidden">

        <div class="swiper-wrapper h-full">

            <!-- Slide 0 -->
            <div class="swiper-slide relative h-full">
                <div class="video-bg">
                    <video autoplay muted loop playsinline preload="auto">
                        <source src="<?= $app_path ?>assets/images/spsvideo/v4.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="container h-full flex items-center relative z-10">
                    <div class="text-white max-w-2xl">
                        <h1 class="text-5xl font-bold mb-4 text-white">What If</h1>
                        <ul class="list-disc pl-5 space-y-2 text-white mb-4">
                            <li>You could enhance your Identity Management.</li>
                            <li>You could modernize your legacy enterprise information systems.</li>
                            <li>You could have Security Operations Center 24x7.</li>
                            <li>You could have your Cyber Security environment managed for you.</li>
                            <li>You could have Compliance Artifacts for your Auditors at click of a button.</li>
                        </ul>

                        <a href="#" class="btn btn-primary mr-3">Request Consultation</a>
                        <a href="#" class="btn btn-secondary">How can we help you today</a>
                    </div>
                </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide relative h-full">
                <div class="video-bg">
                    <video autoplay muted loop playsinline preload="auto">
                        <source src="<?= $app_path ?>assets/images/spsvideo/v2.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="container h-full flex items-center relative z-10">
                    <div class="text-white max-w-2xl">
                        <h1 class="text-5xl font-bold mb-4 text-white">Artificial Intelligence</h1>
                        <p class="text-xl mb-2 text-white">Transforming businesses with AI-driven automation.</p>
                        <p class="text-lg mb-4 text-white">Implement AI strategies to reduce operational costs and
                            enhance customer experience.</p>
                        <p class="text-lg mb-6 text-white">Our AI solutions adapt to your business needs.</p>
                        <a href="#" class="btn btn-primary mr-3">Explore AI</a>
                        <a href="#" class="btn btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide relative h-full">
                <div class="video-bg">
                    <video autoplay muted loop playsinline preload="auto">
                        <source src="<?= $app_path ?>assets/images/spsvideo/v3.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="container h-full flex items-center relative z-10">
                    <div class="text-white max-w-2xl">
                        <h1 class="text-5xl font-bold mb-4 text-white">Cloud Solutions</h1>
                        <p class="text-xl mb-2 text-white">Scale your business with secure cloud technology.</p>
                        <p class="text-lg mb-4 text-white">Migrate to the cloud seamlessly.</p>
                        <p class="text-lg mb-6 text-white">High performance & 24/7 availability.</p>
                        <a href="#" class="btn btn-primary mr-3">Explore Cloud</a>
                        <a href="#" class="btn btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide relative h-full">
                <div class="video-bg">
                    <video autoplay muted loop playsinline preload="auto">
                        <source src="<?= $app_path ?>assets/images/spsvideo/v1.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="container h-full flex items-center relative z-10">
                    <div class="text-white max-w-2xl">
                        <h1 class="text-5xl font-bold mb-4 text-white">Cybersecurity Services</h1>
                        <p class="text-xl mb-2 text-white">Protect your business with advanced cyber defense.</p>
                        <p class="text-lg mb-4 text-white">Safeguard digital assets against threats.</p>
                        <p class="text-lg mb-6 text-white">Continuous monitoring & rapid response.</p>
                        <a href="#" class="btn btn-primary mr-3">Explore Security</a>
                        <a href="#" class="btn btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <section class="2xl:pt-25 2xl:pb-17.5 md:pt-17.5 md:pb-10 sm:pt-12.5 sm:pb-5 pt-10 pb-5 bg-light">
        <div class="container">
            <div class="row content-wrapper style-25 items-center">
                <div class="lg:w-1/2 w-full mb-3.75">
                    <div class="2xxl:-ml-20 2xxl:pr-48.75 xl:pr-33.75 lg:pr-18.75 max-lg:mb-5">
                        <div class="flex items-center relative max-lg:h-130 max-sm:!h-87.5">
                            <img src="<?= $app_path ?>assets/images/spsimg/ab1.jpg" alt=""
                                class="size-full object-cover rounded-2xl">
                            <img src="<?= $app_path ?>assets/images/spsimg/ab2.jpg" alt=""
                                class="xl:-ml-32.5 -ml-25 xl:w-55 w-37.5 xl:h-65 h-45 object-cover rounded-2xl">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full mb-7.5">
                    <div class="sm:mb-7.5 mb-5">
                        <div class="text-primary font-semibold leading-5 uppercase text-lg inline-flex gap-1.25"
                            data-wow-delay="0.2s" data-wow-duration="0.8s">About Us</div>

                        <h2 class="2xxl:text-4xxl lg:text-[38px] sm:text-[32px] text-2xxl capitalize wow fadeInUp"
                            data-wow-delay="0.2s" data-wow-duration="0.8s">
                            We Specialize in Digital Transformation
                        </h2>

                        <p class="xl:text-lg text-base font-light md:mb-12 mb-6 wow fadeInUp" data-wow-delay="0.4s"
                            data-wow-duration="0.8s">
                            Whether you are an entrepreneur looking for an engineering team or an enterprise
                            pursuing digital transformation, we can help you bring your vision to reality.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center wow fadeInUp" data-wow-delay="0.8s"
                        data-wow-duration="0.8s">
                        <a href="about-us.html" class="btn btn-primary btn-rounded me-6 wow fadeInUp"
                            data-wow-delay="0.6s" data-wow-duration="0.8s">
                            Read More
                            <i class="feather icon-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <div class="relative -mt-16 z-20">
        <div class="container mx-auto">
            <div class="bg-white rounded-2xl p-6 shadow-xl text-center animate-bounce-slow">
                <h4 class="text-sm md:text-sm font-bold  p-5">
                    Whether you are an entrepreneur looking for an engineering team or an enterprise
                    pursuing digital transformation, we can help you bring your vision to reality.
                </h4>
            </div>
        </div>
    </div> -->
    <!-- <div class="relative -mt-16 z-20">
        <div class="container mx-auto">
            <div class="bg-white rounded-2xl p-6 shadow-xl text-center animate-bounce-slow">
                <h4 class="text-sm md:text-sm font-bold  p-5 text-white bg-secondary">
                    Whether you are an entrepreneur looking for an engineering team or an enterprise
                    pursuing digital transformation, we can help you bring your vision to reality.
                </h4>
            </div>
        </div>
    </div> -->
    <div class="text-center">
        <div class="xl:py-10.5 md:py-10 py-7.5">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <!-- <div class="sm:mb-7.5 mb-5">
                            <h4 class="text-xxl inline-block mb-0 relative after:absolute after:top-1/2 after:-left-40 after:w-37.5 after:h-px after:bg-black after:opacity-15 before:absolute before:top-1/2 before:-right-40 before:w-37.5 before:h-px before:bg-black before:opacity-15"
                                style="background: #3494ab1f;padding: 5px;border-radius: 10px;">
                                Whether you are an entrepreneur looking for an engineering team or an enterprise
                                pursuing digital transformation we can help you bring your vision to reality.</h4>

                        </div> -->

                        <div class="mb-5 text-start">
                            <div class="custom-tab">
                                <ul class="flex flex-wrap justify-center">
                                    <li class="tab-title tab-underline active"
                                        style=" border: 1px solid #416482; margin-left: 5px; border-radius: 10px; ">
                                        <button
                                            class="py-2.5 px-5 font-medium -mb-0.5 text-secondary rounded-2lg cursor-pointer relative duration-500 [.tab-title.active_&]:bg-primary [.tab-title.active_&]:text-white">
                                            <i class="fa-solid fa-shield-halved me-2"></i> Cybersecurity
                                        </button>
                                    </li>

                                    <li class="tab-title tab-underline"
                                        style=" border: 1px solid #416482; margin-left: 5px; border-radius: 10px; ">
                                        <button
                                            class="py-2.5 px-5 font-medium -mb-0.5 text-secondary rounded-2lg cursor-pointer relative duration-500 [.tab-title.active_&]:bg-primary [.tab-title.active_&]:text-white">
                                            <i class="fa-solid fa-cloud me-2"></i> Cloud
                                        </button>
                                    </li>

                                    <li class="tab-title tab-underline"
                                        style=" border: 1px solid #416482; margin-left: 5px; border-radius: 10px; ">
                                        <button
                                            class="py-2.5 px-5 font-medium -mb-0.5 text-secondary rounded-2lg cursor-pointer relative duration-500 [.tab-title.active_&]:bg-primary [.tab-title.active_&]:text-white">
                                            <i class="fa-solid fa-robot me-2"></i> AI & Automation
                                        </button>
                                    </li>

                                    <li class="tab-title tab-underline"
                                        style=" border: 1px solid #416482; margin-left: 5px; border-radius: 10px; ">
                                        <button
                                            class="py-2.5 px-5 font-medium -mb-0.5 text-secondary rounded-2lg cursor-pointer relative duration-500 [.tab-title.active_&]:bg-primary [.tab-title.active_&]:text-white">
                                            <i class="fa-solid fa-users me-2"></i> Collaboration
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-contents">
                                    <div class="tab-content active">
                                        <div class="w-full">
                                            <div class="sm:mb-7.5 mb-5 mt-5">
                                                <h4 class="text-sm text-center px-5">
                                                    SPS Cybersecurity team has the following practices: Digital
                                                    Trust (User Security, Data Security, Mobile Device Management),
                                                    Threat Management (Cybersecurity Program, SIEM systems,
                                                    Application Security, Network Security), Keysight (Professional
                                                    Services, Help Desk Services, Security Operations), and SAP
                                                    Security.

                                                </h4>
                                            </div>
                                            <div class="mb-5 text-start">
                                                <div
                                                    class="swiper service-swiper swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                                                    <div class="swiper-wrapper box-hover-wrapper"
                                                        id="swiper-wrapper-ea58816e2b09a4d8" aria-live="off"
                                                        style="transition-duration: 0ms; transition-delay: 0ms;">
                                                        <div class="swiper-slide" role="group" aria-label="5 / 5"
                                                            data-swiper-slide-index="5"
                                                            style="width: 301.25px; margin-right: 35px;">
                                                            <div
                                                                class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span
                                                                            class="[.box-hover.active_&]:[--color-primary:#fff]">
                                                                            <!-- Network Icon -->
                                                                            <i
                                                                                class="fa-solid fa-network-wired text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <!-- Faded background icon -->
                                                                        <i
                                                                            class="fa-solid fa-network-wired text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3
                                                                            class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">
                                                                            Network Security
                                                                        </h3>
                                                                        <p
                                                                            class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                                                            <a class="n_links"
                                                                                href="https://www.spsnet.com/service-detail/security/network-security/network-visibility-operations-services/">Network
                                                                                Visibility Operations Services</a>, <a
                                                                                class="n_links"
                                                                                href="https://www.spsnet.com/service-detail/security/network-security/network-visibility-design-implementation-services/">Network
                                                                                Visibility Design & Implementation
                                                                                Services</a>, and <a class="n_links"
                                                                                href="https://www.spsnet.com/service-detail/security/network-security/keysight-ixnetwork-training/">Keysight
                                                                                IxNetwork Training</a>.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about our services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- SMaaS -->
                                                        <div class="swiper-slide" role="group" aria-label="1 / 5"
                                                            data-swiper-slide-index="0"
                                                            style="width: 301.25px; margin-right: 35px;">
                                                            <div
                                                                class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span
                                                                            class="[.box-hover.active_&]:[--color-primary:#fff]">
                                                                            <i
                                                                                class="fa-solid fa-server text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i class="fa-solid fa-server text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3
                                                                            class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">
                                                                            SMaaS</h3>
                                                                        <p
                                                                            class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                                                            <a class="n_links" href="#">Service
                                                                                Management as a Service</a>, including
                                                                            cloud monitoring and operations solutions.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 duration-500 
                                                                        before:absolute before:top-0 before:left-0 before:right-0 before:h-px 
                                                                        before:bg-linear-(--icon-bx-footer-gradient) 
                                                                        [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) 
                                                                        before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about SMaaS services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRC -->
                                                        <div class="swiper-slide" role="group" aria-label="2 / 5"
                                                            data-swiper-slide-index="1"
                                                            style="width: 301.25px; margin-right: 35px;">
                                                            <div
                                                                class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                                after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                                after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                                after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span
                                                                            class="[.box-hover.active_&]:[--color-primary:#fff]">
                                                                            <i
                                                                                class="fa-solid fa-shield-halved text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-shield-halved text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3
                                                                            class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">
                                                                            GRC</h3>
                                                                        <p
                                                                            class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                                                            <a class="n_links" href="#">Governance, Risk
                                                                                & Compliance</a> solutions for
                                                                            enterprise-wide policies and controls.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 duration-500 
                                                                    before:absolute before:top-0 before:left-0 before:right-0 before:h-px 
                                                                    before:bg-linear-(--icon-bx-footer-gradient) 
                                                                    [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) 
                                                                    before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about GRC services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Identity & Access -->
                                                        <div class="swiper-slide" role="group" aria-label="3 / 5"
                                                            data-swiper-slide-index="2"
                                                            style="width: 301.25px; margin-right: 35px;">
                                                            <div
                                                                class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span
                                                                            class="[.box-hover.active_&]:[--color-primary:#fff]">
                                                                            <i
                                                                                class="fa-solid fa-user-shield text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-user-shield text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3
                                                                            class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">
                                                                            Identity & Access</h3>
                                                                        <p
                                                                            class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                                                            <a class="n_links" href="#">Identity &
                                                                                Access Management</a> solutions for
                                                                            secure authentication and authorization.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 duration-500 
                                                                        before:absolute before:top-0 before:left-0 before:right-0 before:h-px 
                                                                        before:bg-linear-(--icon-bx-footer-gradient) 
                                                                        [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) 
                                                                        before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Identity & Access services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Threat Management -->
                                                        <div class="swiper-slide" role="group" aria-label="4 / 5"
                                                            data-swiper-slide-index="3"
                                                            style="width: 301.25px; margin-right: 35px;">
                                                            <div
                                                                class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                    after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                    after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                    after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span
                                                                            class="[.box-hover.active_&]:[--color-primary:#fff]">
                                                                            <i
                                                                                class="fa-solid fa-bug text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i class="fa-solid fa-bug text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3
                                                                            class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">
                                                                            Threat Management</h3>
                                                                        <p
                                                                            class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                                                            <a class="n_links" href="#">Threat
                                                                                Management</a> solutions for proactive
                                                                            detection and mitigation of cyber threats.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 duration-500 
                                                                        before:absolute before:top-0 before:left-0 before:right-0 before:h-px 
                                                                        before:bg-linear-(--icon-bx-footer-gradient) 
                                                                        [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) 
                                                                        before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Threat Management services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="w-full">
                                            <div class="sm:mb-7.5 mb-5 mt-5">
                                                <h4 class="text-sm text-center px-5">
                                                    SPS Cloud team offers services in DevOps (CI/CD Pipelines,
                                                    Automation, Containerization)
                                                    and Migration Services (Cloud Strategy, Application Migration, Data
                                                    Migration, Multi-cloud Solutions).
                                                </h4>
                                            </div>
                                            <div class="mb-5 text-start">
                                                <div class="swiper service-swiper">
                                                    <div class="swiper-wrapper box-hover-wrapper">
                                                        <!-- DevOps Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-code-branch text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-code-branch text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">DevOps</h3>
                                                                        <ul>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/cloud/devops/cloud-application-development/">Cloud
                                                                                    Application Development</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/cloud/devops/it-ops-and-support/">IT
                                                                                    Ops and Support</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about DevOps services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Migration Services Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                        after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                        after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                        after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-cloud-arrow-up text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-cloud-arrow-up text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">Migration
                                                                            Services</h3>
                                                                        <ul>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/cloud/public-cloud/migrate-vmware-workload-to-cloud/">Migrate
                                                                                    VMware Workload to Cloud</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/cloud/public-cloud/migrate-ms-exchange-to-office-365/">Migrate
                                                                                    MS Exchange to office 365</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/cloud/public-cloud/migrate-ibm-power-to-cloud/">Migrate
                                                                                    IBM Power to Cloud</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Migration services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="w-full">
                                            <div class="sm:mb-7.5 mb-5 mt-5">
                                                <h4 class="text-sm text-center px-5">
                                                    SPS AI & Automation team offers solutions in Automation (Robotic
                                                    Process Automation, Workflow Automation)
                                                    and Data Science (Machine Learning, Predictive Analytics, AI Model
                                                    Development).
                                                </h4>
                                            </div>
                                            <div class="mb-5 text-start">
                                                <div class="swiper service-swiper">
                                                    <div class="swiper-wrapper box-hover-wrapper">
                                                        <!-- Automation Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-robot text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i class="fa-solid fa-robot text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">Automation
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/automation/business-process-modeling-using-aris/">Business
                                                                                    Process Modeling Using ARIS</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/automation/business-process-automation-using-webmethods/">Business
                                                                                    Process Automation Using
                                                                                    webMethods</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/automation/low-code-application-development-using-appian/">Code
                                                                                    Application Development Using
                                                                                    Appian</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Automation services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Data Science Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                                                    after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                                                    after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                                                    after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-brain text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i class="fa-solid fa-brain text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">Data Science
                                                                        </h3>
                                                                        <ul>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/data-science/generative-ai/">Generative
                                                                                    AI</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/data-science/internet-of-things/">Internet
                                                                                    of Things</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/ai/data-science/data-analytics/">Data
                                                                                    Analytics</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Data Science services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="w-full">
                                            <div class="sm:mb-7.5 mb-5 mt-5">
                                                <h4 class="text-sm text-center px-5">
                                                    SPS Collaboration team focuses on enhancing organizational learning
                                                    and engagement through Learning initiatives and Events.
                                                </h4>
                                            </div>
                                            <div class="mb-5 text-start">
                                                <div class="swiper service-swiper">
                                                    <div class="swiper-wrapper box-hover-wrapper">
                                                        <!-- Learning Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                    after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                    after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                    after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-graduation-cap text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-graduation-cap text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">Learning</h3>
                                                                        <ul>
                                                                            <li><a class="n_links" href="#">Training
                                                                                    Programs</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="#">Workshops</a>
                                                                            </li>
                                                                            <li><a class="n_links" href="#">Knowledge
                                                                                    Sharing</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#"
                                                                        aria-label="Read more about Learning services"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Events Card -->
                                                        <div class="swiper-slide"
                                                            style="width:301.25px; margin-right:35px;">
                                                            <div class="h-95 relative rounded-2xxl p-7.5 z-1 flex flex-col 
                                    after:absolute after:bg-light after:size-full after:top-0 after:left-0 after:-z-1 
                                    after:rounded-2xxl after:mask-[url(../images/bg02.svg)] after:mask-bottom-right 
                                    after:duration-500 icon-bx-wraper box-hover group">
                                                                <div class="mb-auto">
                                                                    <div
                                                                        class="relative size-15 block mb-2.5 text-center">
                                                                        <span>
                                                                            <i
                                                                                class="fa-solid fa-calendar-days text-5xl text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                                                        <i
                                                                            class="fa-solid fa-calendar-days text-[60px]"></i>
                                                                    </span>
                                                                    <div class="overflow-hidden">
                                                                        <h3 class="text-xl font-bold mb-3">Events</h3>
                                                                        <ul>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/events/events/events-services/">Events
                                                                                    Services</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/events/events/virtual-platform-training/">Virtual
                                                                                    Platform Training</a>
                                                                            </li>
                                                                            <li><a class="n_links"
                                                                                    href="https://www.spsnet.com/service-detail/events/events/recording-editing/">Recording
                                                                                    &amp; Editing</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="relative pt-5 mt-5 mr-12.5 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                                                    <span
                                                                        class="text-sm text-secondary flex items-center gap-2 leading-[1.2]">
                                                                        <i
                                                                            class="fa fa-circle text-tiny text-primary"></i>
                                                                        Read More
                                                                    </span>
                                                                    <a href="#" aria-label="Read more about Events"
                                                                        class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                                                        <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <section
        class="lg:pt-20 lg:pb-10 pt-12.5 pb-5 bg-secondary bg-blend-multiply bg-fixed bg-no-repeat bg-cover bg-[url('assets/images/background/avif.avif')] min-h-[500px]">
        <div class="text-center container">
            <h3 class="text-white text-3xl lg:text-3xl font-semibold mb-2">Our Startups</h3>
            <h4 class="text-white text-lg lg:text-xl font-normal">Digital solutions we have built for ourselves and our
                customers</h4>

            <p class="text-white text-base lg:text-lg mb-10">
                We develop AI-based solutions for corporate &amp; startups. From strategy to execution, we guide our
                clients
                through their next digital transformation leveraging technologies like Data Analytics, Natural Language
                Processing, Computer Vision, Machine Learning, Deep Learning &amp; IoT.
            </p>
        </div>
    </section> -->

    <section class="relative lg:pt-20 lg:pb-10 pt-12.5 pb-5 bg-secondary min-h-[500px]">
        <div class="absolute inset-0">
            <img src="assets/images/background/avif.avif" alt="background"
                class="w-full h-full object-cover opacity-10">
        </div>

        <div class="relative container mx-auto text-center z-10">
            <h3 class="text-white text-3xl lg:text-3xl font-semibold mb-2">Our Startups</h3>
            <h4 class="text-white text-lg lg:text-xl font-normal">
                Digital solutions we have built for ourselves and our customers
            </h4>

            <p class="text-white text-base lg:text-lg mb-10">
                We develop AI-based solutions for corporate & startups. From strategy to execution, we guide our clients
                through their next digital transformation leveraging technologies like Data Analytics, Natural Language
                Processing, Computer Vision, Machine Learning, Deep Learning & IoT.
            </p>
        </div>
    </section>

    <section>
        <div class="xl:py-17.5 md:py-10 py-7.5 bg-light">
            <div class="container">
                <div class="row box-hover-wrapper">
                    <!-- GateKeyper -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group active">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/g.png"
                                            alt="GateKeyper Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/ai-icon-bg.png"
                                        alt="Background AI Icon" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">GateKeyper</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        Dennis Beam, who held a patent on the safety of heavy equipment, wanted to build
                                        an app to ensure safety of professional operators.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about GateKeyper"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CREyield -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/creyield.png"
                                            alt="CREyield Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/creyield-bg.png"
                                        alt="CREyield Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">CREyield</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        CREyield streamlines real estate investment analytics and reporting for better
                                        decision-making.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about CREyield"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CSM -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/csm.png" alt="CSM Icon"
                                            class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/csm-bg.png"
                                        alt="CSM Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">CSM</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        CSM enables efficient customer service management with AI-driven insights and
                                        automation.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about CSM"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- MyHealthChart -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/myhealthcard.png"
                                            alt="MyHealthChart Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/myhealthcard.png"
                                        alt="MyHealthChart Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">MyHealthChart
                                    </h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        MyHealthChart provides patients with an integrated view of their health records
                                        and insights.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about MyHealthChart"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Dashboard -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/dashboard.png"
                                            alt="Analytics Dashboard Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/dashboard.png"
                                        alt="Analytics Dashboard Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">Analytics
                                        Dashboard</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        Analytics Dashboard provides actionable insights and visualizations for business
                                        decision-making.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about Analytics Dashboard"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- AIMY -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/aimy.png"
                                            alt="AIMY Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/aimy-bg.png"
                                        alt="AIMY Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">AIMY</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        AIMY is an AI-driven personal assistant that helps businesses automate routine
                                        tasks efficiently.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about AIMY"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- HerDomain -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/herdomain.png"
                                            alt="HerDomain Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/herdomain-bg.png"
                                        alt="HerDomain Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">HerDomain</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        HerDomain is a platform empowering women entrepreneurs with digital tools and
                                        resources.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about HerDomain"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Watch Over -->
                    <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5">
                        <div
                            class="relative rounded-2xxl p-7.5 z-1 h-full flex flex-col after:absolute after:bg-white after:size-full after:top-0 after:left-0 after:-z-1 after:rounded-2xxl after:duration-500 icon-bx-wraper [.box-hover.active]:after:bg-primary box-hover group">
                            <div class="mb-auto">
                                <div class="relative size-15 block mb-7.5">
                                    <span class="[.box-hover.active_&]:[--color-primary:#fff]">
                                        <img src="<?= $app_path ?>assets/images/spsimg/products/watchover.png"
                                            alt="Watch Over Icon" class="size-full object-contain" />
                                    </span>
                                </div>
                                <span class="absolute right-1.25 top-1.25 w-35 opacity-[0.025]">
                                    <img src="<?= $app_path ?>assets/images/spsimg/products/watchover.png"
                                        alt="Watch Over Background" class="w-full h-full object-cover" />
                                </span>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl font-bold mb-3 [.box-hover.active_&]:text-white">Watch Over</h3>
                                    <p class="text-2sm font-light mb-0 [.box-hover.active_&]:text-white">
                                        Watch Over monitors critical systems and processes, providing real-time alerts
                                        and insights.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="relative pt-5 mt-5 mr-12.5 duration-500 before:absolute before:top-0 before:left-0 before:right-0 before:h-px before:bg-linear-(--icon-bx-footer-gradient) [.box-hover.active_&]:before:bg-linear-(--icon-bx-footer-white-gradient) before:duration-500 before:bg-[length:10px_1px] before:bg-repeat-x">
                                <span
                                    class="text-sm text-secondary flex items-center gap-2 leading-[1.2] [.box-hover.active_&]:text-white">
                                    <i
                                        class="fa fa-circle text-tiny text-primary duration-500 [.box-hover.active_&]:text-secondary"></i>
                                    Read More
                                </span>
                                <a href="service-detail.html" aria-label="Read more about Watch Over"
                                    class="btn btn-primary btn-square shadow-btn-squre !absolute -right-20 -bottom-7.5 !text-xl !rounded-full">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section
        class="2xxl:pt-25 2xxl:pb-17.5 md:pt-17.5 md:pb-10 sm:pt-12.5 pt-10 pb-5 relative before:absolute before:left-0 before:top-0 before:size-full before:bg-secondary before:opacity-90 bg-blend-luminosity bg-fixed overflow-hidden bg-no-repeat bg-position-[right_center] bg-cover bg-[url(assets/images/background/bg1.webp)]">
        <div class="container">
            <div class="row items-center">
                <!-- Image + Experience -->
                <div class="lg:w-1/2 w-full mb-7.5">
                    <div class="relative xl:mr-12.5">
                        <div class="relative overflow-hidden sm:rounded-3xl rounded-xxl">
                            <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/595.jpg" alt="img5"
                                width="600" height="600"
                                class="mask-[url(images/shape/shape1.svg)] mask-center mask-no-repeat mask-size-[99%] w-full" />
                        </div>
                        <div class="absolute right-0 bottom-0 2xxl:w-45.5 sm:w-42.5 w-26.5">
                            <div class="sn:p-6.25 sm:pt-5 p-3.75 rounded-2xl bg-primary text-center">
                                <span class="sm:text-5xxl text-2xxl font-bold text-white"><span class="value"
                                        data-value="20">20</span>+</span>
                                <span class="sm:text-xl text-2xs font-medium mb-0 text-white/80">Years <br />
                                    Driving Innovation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:w-1/2 w-full mb-7.5">
                    <div class="section-head style-1 mb-7.5">
                        <h2
                            class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold text-white capitalize relative [--bs-gutter-y:40px] mb-0">
                            Organization Trusted SPS Products
                        </h2>
                    </div>

                    <div class="row ![--bs-gutter-y:40px] g-5">

                        <!-- Card 1 -->
                        <div class="sm:w-1/2 max-sm:!mt-5">
                            <div
                                class="relative rounded-2xl p-5 bg-white/5 backdrop-blur-[30px] text-center text-white after:w-px after:h-full after:opacity-20 after:-right-6.5 after:absolute after:-bottom-5 after:bg-linear-(--content-wrapper-gradient) before:w-full before:h-px before:opacity-20 before:-bottom-5 before:-right-6.5 before:absolute before:bg-linear-(--content-wrapper-2-gradient) max-sm:after:hidden max-sm:before:hidden">
                                <div class="mx-auto size-25 rounded-full flex items-center justify-center mb-2.5 ">
                                    <span>
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/products/azalio.webp" alt="check1"
                                            width="200" height="18" />
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h3 class="sm:text-lg text-base text-white">
                                        Azalio
                                    </h3>
                                    <p class="text-white/70 text-2sm/normal font-extralight mb-0">
                                        Keep your frontline employees happy, Reward Employees. Track employee
                                        engagement. Manage workforce operations.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="sm:w-1/2 max-sm:!mt-5">
                            <div
                                class="relative rounded-2xl p-5 bg-white/5 backdrop-blur-[30px] text-center text-white after:w-full after:h-px after:opacity-20 after:-left-6.5 after:absolute after:-bottom-5 after:bg-linear-(--content-wrapper-gradient) max-sm:after:hidden">
                                <div class="mx-auto size-25 rounded-full flex items-center justify-center mb-2.5 ">
                                    <span>
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/products/myid.webp" alt="check2"
                                            width="200" height="18" />
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h3 class="sm:text-lg text-base text-white">
                                        MYID Self Verify
                                    </h3>
                                    <p class="text-white/70 text-2sm/normal font-extralight mb-0">
                                        MYID helps organizations allow their employees to manage their corporate
                                        identity through secure and easy-to-use mobile application.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="sm:w-1/2 max-sm:!mt-5">
                            <div
                                class="relative rounded-2xl p-5 bg-white/5 backdrop-blur-[30px] text-center text-white before:w-px before:h-full before:opacity-20 before:-top-5 before:-right-6.5 before:absolute before:bg-linear-(--content-wrapper-2-gradient) max-sm:before:hidden">
                                <div class="mx-auto size-25 rounded-full flex items-center justify-center mb-2.5 ">
                                    <span>
                                        <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/products/csm.png"
                                            alt="check3" width="80" height="18" />
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h3 class="sm:text-lg text-base text-white">
                                        CSM
                                    </h3>
                                    <p class="text-white/70 text-2sm/normal font-extralight mb-0">
                                        Protect your business with SOC services, zero-trust security, endpoint defense,
                                        and SIEM/SOAR solutions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="sm:w-1/2 max-sm:!mt-5">
                            <div
                                class="relative rounded-2xl p-5 bg-white/5 backdrop-blur-[30px] text-center text-white">
                                <div class="mx-auto size-25 rounded-full flex items-center justify-center mb-2.5 ">
                                    <span>
                                        <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/products/bms.png"
                                            alt="check" width="200" height="18" />
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h3 class="sm:text-lg text-base text-white">
                                        BMS
                                    </h3>
                                    <p class="text-white/70 text-2sm/normal font-extralight mb-0">
                                        Get real-time insights into every aspect of your company’s performance, optimize
                                        processes and streamline business with our Business Management System.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /row -->
                </div>
            </div>
        </div>
    </section>
    <section class="2xxl:pt-25 md:pt-17.5 sm:pt-12.5 pt-10 bg-light z-2 bg-[url(assets/images/background/bg5.webp)]">
        <div class="container">
            <div class="row items-end max-lg:flex-col-reverse">
                <div class="lg:w-1/2 w-full text-center">
                    <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/s4.png" alt="img03" width="600"
                        height="600" class="max-lg:mx-auto" />
                </div>
                <div class="lg:w-1/2 w-full">
                    <div class="relative lg:pl-12.5 xl:ml-15 lg:-mb-10 mb-7.5">
                        <div
                            class="[writing-mode:tb] -rotate-180 rounded-tr-2xxl rounded-br-2xxl text-white text-center px-7.5 py-2.5 text-lg uppercase font-semibold bg-secondary w-12.5 flex items-center justify-center absolute left-0 top-11.25 max-lg:hidden">
                            Appointment Now
                        </div>
                        <div
                            class="sm:rounded-3xl rounded-xxl xl:py-12.5 xl:px-10 py-8.75 px-7.5 bg-primary bg-blend-color-burn bg-cover bg-[url(assets/images/background/bg02.webp)]">
                            <div class="sm:mb-7.5 mb-5">
                                <h2 class="sm:text-2xxl text-xl text-white mb-0">
                                    Manage Your
                                    <span class="text-secondary font-bold">IT Services</span>

                                    <br />
                                    Request Software Solutions
                                </h2>
                            </div>
                            <form action="assets/script/contact_smtp.php" class="dzForm" method="POST">
                                <input type="hidden" class="form-control" name="dzToDo" value="Appointment" />
                                <input type="hidden" class="form-control" name="reCaptchaEnable" value="0" />
                                <div class="dzFormMsg"></div>
                                <div class="row">
                                    <div class="sm:w-1/2 w-full mb-7.5">
                                        <div class="relative">
                                            <input name="dzName" type="text"
                                                class="py-3.75 text-lg text-left text-white border-b-2 border-white duration-300 focus:border-yellow-500 placeholder:text-white/0 peer w-full"
                                                id="inputYourName" placeholder="Your Name" />
                                            <label
                                                class="absolute left-0 top-3.75 text-lg text-yellow-500 duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5.5 peer-focus:text-yellow-500 peer-placeholder-shown:text-white/60 pointer-events-none"
                                                for="inputYourName">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="sm:w-1/2 w-full mb-7.5">
                                        <div class="relative">
                                            <input name="dzEmail" type="email"
                                                class="py-3.75 text-lg text-left text-white border-b-2 border-white duration-300 focus:border-yellow-500 placeholder:text-white/0 peer w-full"
                                                id="inputYourEmail" placeholder="Your Email" />
                                            <label
                                                class="absolute left-0 top-3.75 text-lg text-yellow-500 duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5.5 peer-focus:text-yellow-500 peer-placeholder-shown:text-white/60 pointer-events-none"
                                                for="inputYourEmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="sm:w-1/2 w-full mb-7.5">
                                        <div class="relative">
                                            <input name="dzPhoneNumber" type="text"
                                                class="py-3.75 text-lg text-left text-white border-b-2 border-white duration-300 focus:border-yellow-500 placeholder:text-white/0 peer w-full dz-number"
                                                id="inputPhoneNumber" placeholder="Phone Number" />
                                            <label
                                                class="absolute left-0 top-3.75 text-lg text-yellow-500 duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5.5 peer-focus:text-yellow-500 peer-placeholder-shown:text-white/60 pointer-events-none"
                                                for="inputPhoneNumber">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="sm:w-1/2 w-full mb-7.5">
                                        <div class="relative custom-select">
                                            <div data-label="Services">
                                                <select name="dzOther[Services]" class="dynamic-select"
                                                    id="sortingSelect">
                                                    <option value="AI Solutions">AI Solutions</option>
                                                    <option value="Cloud Services">Cloud Services</option>
                                                    <option value="Cybersecurity">Cybersecurity</option>
                                                    <option value="Software Development">Software Development</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full mb-7.5">
                                        <div class="relative">
                                            <textarea name="dzMessage"
                                                class="py-3.75 text-lg text-left text-white border-b-2 border-white duration-300 focus:border-yellow-500 placeholder:text-white/0 w-full peer"
                                                id="inputMessage" rows="6" placeholder="Select Service"></textarea>
                                            <label
                                                class="absolute left-0 top-3.75 text-lg text-yellow-500 duration-300 transform -translate-y-6 scale-75 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5.5 peer-focus:text-yellow-500 peer-placeholder-shown:text-white/60 pointer-events-none"
                                                for="inputMessage">Message</label>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <button type="submit" name="submit" value="submit"
                                            class="btn btn-lg btn-icon btn-white group">
                                            Appointment
                                            <span
                                                class="size-11 min-w-11 bg-secondary text-white rounded-2lg inline-flex items-center justify-center -my-2.75 -mr-4.5 ml-3 duration-500 group-hover:bg-white group-hover:text-secondary"><i
                                                    class="feather icon-arrow-right group-hover:animate-toRightFromLeft"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="clearfix pt-12.5 relative before:absolute before:left-0 before:top-0 before:size-full before:bg-secondary before:opacity-90 bg-primary bg-blend-multiply overflow-hidden bg-position-[right_center] bg-cover bg-[url(assets/images/background/bg3.webp)]">
        <div class="container relative z-1">
            <div class="row max-xl:flex-col-reverse">
                <div class="xl:w-1/2 w-full">
                    <div class="relative xl:w-162.5 sm:w-137.5 w-full max-xl:mx-auto max-xl:mt-7.5">
                        <div class="xl:pr-37.5 lg:pr-20 sm:pr-12.5 relative overflow-hidden">
                            <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/ai.jpg" alt="Tech Image"
                                width="525" height="655" class="w-full" />
                        </div>

                        <!-- Animated Circles -->
                        <div
                            class="xxl:w-162.5 sm:w-150 w-87.5 aspect-square absolute -z-1 sm:-bottom-25 bottom-0 sm:-left-15 -left-2.5">
                            <span
                                class="w-4/5 rounded-full block absolute top-1/2 left-1/2 aspect-square border-2 border-white/10 animate-circleWrapper">
                                <span
                                    class="bg-primary block size-2.5 rounded-full absolute right-17.5 top-17.5"></span>
                                <span class="bg-primary block size-2.5 rounded-full absolute left-2.5 top-40.75"></span>
                                <span
                                    class="bg-primary block size-2.5 rounded-full absolute right-3.75 top-37.5"></span>
                            </span>
                            <span
                                class="w-full rounded-full block absolute top-1/2 left-1/2 aspect-square border-2 border-white/10 animate-circleWrapper">
                                <span class="bg-primary block size-2.5 rounded-full absolute right-19.5 top-25"></span>
                                <span
                                    class="bg-primary block size-2.5 rounded-full absolute right-0.5 bottom-62.5"></span>
                                <span class="bg-primary block size-2.5 rounded-full absolute left-0 top-62.5"></span>
                            </span>
                        </div>

                        <!-- Side Box — 150k+ Deployments -->
                        <div class="absolute 2xxl:-left-20 -left-10 bottom-16.25 max-sm:hidden" data-speed="0.95">
                            <div
                                class="rounded-6xl shadow-1 flex items-center justify-center bg-white p-3.75 pr-3.75 animate-move3">
                                <div class="flex">
                                    <img class="size-10 rounded-full border-white border-2 first:ml-0 -ml-3"
                                        src="<?= $app_path ?>assets/images/avatar/small/avatar1.webp" alt="avatar1" />
                                    <img class="size-10 rounded-full border-white border-2 first:ml-0 -ml-3"
                                        src="<?= $app_path ?>assets/images/avatar/small/avatar2.webp" alt="avatar2" />
                                    <img class="size-10 rounded-full border-white border-2 first:ml-0 -ml-3"
                                        src="<?= $app_path ?>assets/images/avatar/small/avatar3.webp" alt="avatar3" />
                                    <img class="size-10 rounded-full border-white border-2 first:ml-0 -ml-3"
                                        src="<?= $app_path ?>assets/images/avatar/small/avatar4.webp" alt="avatar4" />
                                </div>
                                <div class="clearfix ms-2">
                                    <span
                                        class="sm:text-lg text-base leading-[1.2] font-bold block text-primary">150k+</span>
                                    <span class="text-sm block">Deployments Worldwide</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Floating Review -->
                        <div class="absolute xl:right-20 md:-right-10 right-0 bottom-55 max-sm:hidden" data-speed="1.1">
                            <div class="shadow-info-widget-3 w-68.75 rounded-2xxl bg-white p-5 animate-move1">
                                <div class="flex gap-3 mb-3">
                                    <div class="size-11.25 overflow-hidden rounded-full">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/avatar/small/avatar5.webp"
                                            alt="Tech Leader" />
                                    </div>
                                    <div class="widget-content">
                                        <span class="text-secondary font-bold block">Farhan Akmal</span>
                                        <ul class="flex gap-1.25">
                                            <li class="text-base text-star"><i class="fa fa-star"></i></li>
                                            <li class="text-base text-star"><i class="fa fa-star"></i></li>
                                            <li class="text-base text-star"><i class="fa fa-star"></i></li>
                                            <li class="text-base text-star"><i class="fa fa-star"></i></li>
                                            <li class="text-base text-star"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="text-2xs/[1.4] mb-0">
                                    "A powerful, scalable, and secure AI-driven platform that has transformed our
                                    digital
                                    operations."
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Text + Slider -->
                <div class="xl:w-1/2 lg:w-5/6 w-full self-center mb-7.5">
                    <div class="sm:mb-7.5 mb-5">
                        <h2 class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold capitalize text-white mb-0">
                            Real Teams. Real Innovation. And Our Impact.
                        </h2>
                    </div>

                    <div class="relative">
                        <div class="swiper testimonial-swiper1">
                            <div class="swiper-wrapper">

                                <!-- SLIDE 1 -->
                                <div class="swiper-slide">
                                    <div
                                        class="flex bg-white sm:rounded-3xl rounded-xxl overflow-hidden relative max-sm:flex-col">

                                        <div
                                            class="sm:min-w-52.5 sm:w-52.5 w-full relative overflow-hidden max-sm:flex items-center max-sm:p-5 max-sm:pb-0">
                                            <div class="relative">
                                                <img loading="lazy"
                                                    src="<?= $app_path ?>assets/images/testimonial/img1.webp"
                                                    alt="AI Developer" class="max-sm:w-17.5 max-sm:rounded-lg" />
                                            </div>
                                            <div class="sm:bg-light sm:p-3 p-3.75 sm:text-center">
                                                <span class="sm:text-lg text-base text-secondary font-semibold block">
                                                    Kenneth Fong
                                                </span>
                                                <span class="text-sm text-primary">AI Developer</span>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:py-10 sm:px-7.5 p-5 flex flex-col items-center justify-center relative z-1 after:bg-qoute after:w-33.75 after:h-25 after:absolute after:right-7.5 after:bottom-8.75 after:-z-1 after:opacity-5">
                                            <div class="relative z-1">
                                                <h3 class="md:text-xl text-lg">Outstanding AI Performance</h3>
                                                <p class="text-secondary leading-[1.7] mb-0 max-md:text-sm">
                                                    Our AI engine improved processing speeds by 200%, allowing teams to
                                                    automate workflows, detect threats faster, and scale cloud workloads
                                                    effortlessly.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- SLIDE 2 -->
                                <div class="swiper-slide">
                                    <div
                                        class="flex bg-white sm:rounded-3xl rounded-xxl overflow-hidden relative max-sm:flex-col">

                                        <div
                                            class="sm:min-w-52.5 sm:w-52.5 w-full relative overflow-hidden max-sm:flex items-center max-sm:p-5 max-sm:pb-0">
                                            <div class="relative">
                                                <img loading="lazy"
                                                    src="<?= $app_path ?>assets/images/testimonial/img2.webp"
                                                    alt="Cloud Architect" class="max-sm:w-17.5 max-sm:rounded-lg" />
                                            </div>
                                            <div class="sm:bg-light sm:p-3 p-3.75 sm:text-center">
                                                <span class="sm:text-lg text-base text-secondary font-semibold block">
                                                    Sarah Liu
                                                </span>
                                                <span class="text-sm text-primary">Cloud Architect</span>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:py-10 sm:px-7.5 p-5 flex flex-col items-center justify-center relative z-1 after:bg-qoute after:w-33.75 after:h-25 after:absolute after:right-7.5 after:bottom-8.75 after:-z-1 after:opacity-5">
                                            <div class="relative z-1">
                                                <h3 class="md:text-xl text-lg">Cloud Scalability</h3>
                                                <p class="text-secondary leading-[1.7] mb-0 max-md:text-sm">
                                                    By shifting to our cloud-native framework, their organization
                                                    reduced
                                                    infrastructure costs by 40% and achieved near-zero downtime
                                                    performance.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- SLIDE 3 -->
                                <div class="swiper-slide">
                                    <div
                                        class="flex bg-white sm:rounded-3xl rounded-xxl overflow-hidden relative max-sm:flex-col">

                                        <div
                                            class="sm:min-w-52.5 sm:w-52.5 w-full relative overflow-hidden max-sm:flex items-center max-sm:p-5 max-sm:pb-0">
                                            <div class="relative">
                                                <img loading="lazy"
                                                    src="<?= $app_path ?>assets/images/testimonial/img3.webp"
                                                    alt="Cybersecurity Analyst"
                                                    class="max-sm:w-17.5 max-sm:rounded-lg" />
                                            </div>
                                            <div class="sm:bg-light sm:p-3 p-3.75 sm:text-center">
                                                <span class="sm:text-lg text-base text-secondary font-semibold block">
                                                    David Chen
                                                </span>
                                                <span class="text-sm text-primary">Cybersecurity Analyst</span>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:py-10 sm:px-7.5 p-5 flex flex-col items-center justify-center relative z-1 after:bg-qoute after:w-33.75 after:h-25 after:absolute after:right-7.5 after:bottom-8.75 after:-z-1 after:opacity-5">
                                            <div class="relative z-1">
                                                <h3 class="md:text-xl text-lg">Threat Detection Excellence</h3>
                                                <p class="text-secondary leading-[1.7] mb-0 max-md:text-sm">
                                                    Our threat-intelligence engine helped them block 98% of attacks in
                                                    real
                                                    time, improving security posture across the entire enterprise
                                                    network.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Slider Arrows -->
                        <div
                            class="swiper1-button-prev absolute top-1/2 -translate-y-1/2 -left-17.5 opacity-20 cursor-pointer duration-500 hover:opacity-100 max-lg:hidden">
                            <img loading="lazy" src="<?= $app_path ?>assets/images/svg/arrow-left.svg" alt="Prev" />
                        </div>

                        <div
                            class="swiper1-button-next absolute top-1/2 -translate-y-1/2 -right-17.5 opacity-20 cursor-pointer duration-500 hover:opacity-100 max-lg:hidden">
                            <img loading="lazy" src="<?= $app_path ?>assets/images/svg/arrow-right.svg" alt="Next" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="2xxl:pt-25 2xxl:pb-17.5 md:pt-17.5 md:pb-10 sm:pt-12.5 pt-10 pb-5">
        <div class="container">
            <div class="row content-wrapper style-3">
                <div class="xl:w-1/3 w-full mb-7.5 pe-xl-4">
                    <div class="sm:mb-7.5 mb-5">
                        <h2 class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold capitalize mb-0">
                            How it work
                        </h2>
                        <p class="sm:text-lg text-base leading-[1.6] font-light">
                            Our modern approach helps organizations adopt Cloud, AI, Cybersecurity, and Digital
                            Transformation with a structured and scalable process.
                        </p>
                    </div>
                    <div class="row">
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative flex items-center gap-3.75 mb-5 group">
                                <div
                                    class="size-15 flex items-center text-primary text-2xl justify-center bg-light rounded-full duration-500 group-hover:bg-primary group-hover:text-white relative before:absolute before:top-0 before:left-0 before:size-full before:bg-primary before:scale-0 before:opacity-10 before:rounded-full group-hover:before:scale-[1.3] after:absolute after:top-0 after:left-0 after:size-full after:bg-primary after:scale-0 after:opacity-5 after:rounded-full group-hover:after:scale-[1.6]">
                                    <span>
                                        <i class="feather icon-clock flex"></i>
                                    </span>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl mb-0 font-medium">
                                        Book an Appointment
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative flex items-center gap-3.75 mb-5 group">
                                <div
                                    class="size-15 flex items-center text-primary text-2xl justify-center bg-light rounded-full duration-500 group-hover:bg-primary group-hover:text-white relative before:absolute before:top-0 before:left-0 before:size-full before:bg-primary before:scale-0 before:opacity-10 before:rounded-full group-hover:before:scale-[1.3] after:absolute after:top-0 after:left-0 after:size-full after:bg-primary after:scale-0 after:opacity-5 after:rounded-full group-hover:after:scale-[1.6]">
                                    <span>
                                        <i class="flaticon-list flex"></i>
                                    </span>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl mb-0 font-medium">
                                        Conduct visualizations
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative flex items-center gap-3.75 mb-5 group">
                                <div
                                    class="size-15 flex items-center text-primary text-2xl justify-center bg-light rounded-full duration-500 group-hover:bg-primary group-hover:text-white relative before:absolute before:top-0 before:left-0 before:size-full before:bg-primary before:scale-0 before:opacity-10 before:rounded-full group-hover:before:scale-[1.3] after:absolute after:top-0 after:left-0 after:size-full after:bg-primary after:scale-0 after:opacity-5 after:rounded-full group-hover:after:scale-[1.6]">
                                    <span>
                                        <i class="flaticon-stethoscope flex"></i>
                                    </span>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl mb-0 font-medium">
                                        Perform Execution
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative flex items-center gap-3.75 mb-5 group">
                                <div
                                    class="size-15 flex items-center text-primary text-2xl justify-center bg-light rounded-full duration-500 group-hover:bg-primary group-hover:text-white relative before:absolute before:top-0 before:left-0 before:size-full before:bg-primary before:scale-0 before:opacity-10 before:rounded-full group-hover:before:scale-[1.3] after:absolute after:top-0 after:left-0 after:size-full after:bg-primary after:scale-0 after:opacity-5 after:rounded-full group-hover:after:scale-[1.6]">
                                    <span>
                                        <i class="flaticon-hand-holding-usd flex"></i>
                                    </span>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl mb-0 font-medium">
                                        Detail & Payment
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:w-2/3 w-full">
                    <div class="relative pb-10">
                        <div
                            class="sm:rounded-xxl rounded-lg lg:h-127.5 md:h-105 sm:h-80 h-62.5 bg-light relative overflow-hidden">
                            <img loading="lazy" src="<?= $app_path ?>assets/images/spsimg/867.jpg" alt="img4"
                                width="1200" height="715" class="size-full object-cover" />

                            <div
                                class="absolute bottom-0 left-0 bg-white pt-3.75 pr-3.75 rounded-se-2xxl before:bg-rounded-corner before:size-6.25 before:absolute before:bg-no-repeat before:bg-center before:bg-size-[100%] before:left-0 before:-top-6.25 after:bg-rounded-corner after:size-6.25 after:absolute after:bg-no-repeat after:bg-center after:bg-size-[100%] after:-right-6.25 after:bottom-0">
                                <a href="appointment.html" class="btn btn-lg btn-icon btn-secondary btn-shadow group">
                                    Appointment
                                    <span
                                        class="size-11 min-w-11 bg-white rounded-2lg text-heading inline-flex items-center justify-center -my-2.75 -mr-4.5 ml-3"><i
                                            class="feather icon-arrow-right group-hover:animate-toRightFromLeft"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="md:absolute static bottom-0 2xxl:right-11.25 right-6.25 2xxl:max-w-120 2xxl:w-120 lg:max-w-112.5 lg:w-112.5 md:max-w-87.5 md:w-87.5 w-full max-md:mt-5 max-md:!transform-none"
                            data-speed="0.95">
                            <div class="sm:p-6.25 p-4 rounded-2lg bg-primary">
                                <div class="row g-0">
                                    <div
                                        class="w-1/2 flex relative after:h-full after:w-px after:opacity-50 after:bg-linear-(--vertical-divider-gradient)">
                                        <div class="m-auto text-center">
                                            <span class="lg:text-5xl text-3xl font-bold text-white"><span class="value"
                                                    data-value="180">180</span>+</span>
                                            <span
                                                class="sm:text-lg text-base font-light opacity-70 text-white block">Specialists</span>
                                        </div>
                                    </div>
                                    <div class="w-1/2 flex">
                                        <div class="m-auto text-center">
                                            <span class="lg:text-5xl text-3xl font-bold text-white"><span class="value"
                                                    data-value="45">45</span>K</span>
                                            <span
                                                class="sm:text-lg text-base font-light opacity-70 text-white block">Happy
                                                Clients</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="2xxl:py-25 xl:py-17.5 sm:py-10 py-7.5 bg-light overflow-hidden">
        <div class="container-left">
            <div class="row g-0 items-center">
                <div class="2xl:w-1/4">
                    <div class="sm:mb-7.5 mb-5">
                        <h2 class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold capitalize">
                            Our Technology Partners
                        </h2>
                        <p class="sm:text-lg text-base leading-[1.6] font-light">
                            We work with world-class technology vendors to deliver secure,
                            scalable, and innovative solutions across Cloud, AI,
                            Cybersecurity, and Enterprise IT.
                        </p>
                    </div>

                    <!-- Partner Filters (Optional) -->
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Cloud
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        AI
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Cybersecurity
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Networking
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        DevOps
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        View All
                    </button>
                </div>

                <div class="2xl:w-3/4">
                    <div class="swiper awards-swiper xl:!ml-12.5 xl:!-mr-87.5 -mr-30 max-xl:mt-7.5">
                        <div class="swiper-wrapper">

                            <!-- Partner 1 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/aws.png"
                                            alt="AWS Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Amazon Web Services
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Certified Cloud Consulting Partner
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 2 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/microsoft.png"
                                            alt="Microsoft Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Microsoft
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Cloud • Security • Productivity Solutions
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 3 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/fortinet.png"
                                            alt="Fortinet Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Fortinet
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Network Security & Threat Protection
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 4 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/ibm.png"
                                            alt="IBM Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            IBM Security
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Identity, Access & Zero Trust Solutions
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 5 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30  relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/tenable.png"
                                            alt="Tenable Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Tenable
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Vulnerability Management & Risk Assessment
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 6 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/google-cloud.png"
                                            alt="Google Cloud Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Google Cloud
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            AI • Machine Learning • Cloud Innovation
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .swiper-wrapper -->
                    </div><!-- .swiper -->
                </div>
            </div>
        </div>
    </section>
    <!-- <section
        class="lg:pt-20 lg:pb-10 pt-12.5 pb-5 bg-secondary bg-blend-multiply bg-fixed bg-no-repeat bg-position-[right_center] bg-cover bg-[url(assets/images/background/bg2.webp)]">
        <div class="text-center container">
            <h3 class="text-white text-lg lg:text-xl font-bold">We have an award-winning team that includes
                IBM-certified inventors and champions who have won multiple worldwide competitions.</h3>
            <p class="text-white text-sm lg:text-lg mb-10">
                As an enterprise-class innovator and solution creator with expertise across all phases of product
                design, development, deployment, security, operations, monitoring, and support, we have been helping our
                clients build, deploy and secure applications. Our development, quality, cybersecurity, training,
                operations, monitoring, and support teams work in tandem to create high-performance, secure, reliable,
                scalable, and manageable systems.
            </p>
        </div>
    </section> -->
    <section class="relative lg:pt-20 lg:pb-10 pt-12.5 pb-5 bg-secondary min-h-[500px]">
        <div class="absolute inset-0">
            <img src="assets/images/background/avif.avif" alt="background"
                class="w-full h-full object-cover opacity-10">
        </div>
        <div class="relative container mx-auto text-center z-10">
            <h3 class="text-white text-lg lg:text-xl font-bold mb-4">
                We have an award-winning team that includes IBM-certified inventors and champions who have won multiple
                worldwide competitions.
            </h3>
            <p class="text-white text-sm lg:text-lg mb-10">
                As an enterprise-class innovator and solution creator with expertise across all phases of product
                design, development, deployment, security, operations, monitoring, and support, we have been helping our
                clients build, deploy and secure applications. Our development, quality, cybersecurity, training,
                operations, monitoring, and support teams work in tandem to create high-performance, secure, reliable,
                scalable, and manageable systems.
            </p>
        </div>

    </section>

    <section class="2xxl:py-25 xl:py-17.5 sm:py-10 py-7.5 bg-light overflow-hidden">
        <div class="container-left">
            <div class="row g-0 items-center">
                <div class="2xl:w-1/4">
                    <div class="sm:mb-7.5 mb-5">
                        <h2 class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold capitalize">
                            Customers we are proud to work with.
                        </h2>
                        <p class="sm:text-lg text-base leading-[1.6] font-light">
                            Our mission is to deliver compelling narratives, remarkable experiences, and outstanding
                            results for our clients.
                        </p>
                    </div>

                    <!-- Partner Filters (Optional) -->
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Cloud
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        AI
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Cybersecurity
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        Networking
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        DevOps
                    </button>
                    <button type="button"
                        class="btn btn-outline-light !rounded-5xl mr-1.25 mb-2.5 duration-500 hover:bg-primary hover:!text-white">
                        View All
                    </button>
                </div>

                <div class="2xl:w-3/4">
                    <div class="swiper awards-swiper xl:!ml-12.5 xl:!-mr-87.5 -mr-30 max-xl:mt-7.5">
                        <div class="swiper-wrapper">

                            <!-- Partner 1 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/aws.png"
                                            alt="AWS Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Amazon Web Services
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Certified Cloud Consulting Partner
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 2 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/microsoft.png"
                                            alt="Microsoft Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Microsoft
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Cloud • Security • Productivity Solutions
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 3 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/fortinet.png"
                                            alt="Fortinet Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Fortinet
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Network Security & Threat Protection
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 4 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/ibm.png"
                                            alt="IBM Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            IBM Security
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Identity, Access & Zero Trust Solutions
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 5 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30  relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/tenable.png"
                                            alt="Tenable Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Tenable
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            Vulnerability Management & Risk Assessment
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Partner 6 -->
                            <div class="swiper-slide">
                                <div
                                    class="flex flex-col bg-white sm:rounded-xxl rounded-lg md:py-11.25 md:px-8.75 py-8.75 px-6.25 gap-3 items-center text-center dz-img-box h-80">
                                    <div class="flex  justify-center sm:w-37.5 w-30 relative overflow-hidden">
                                        <img loading="lazy"
                                            src="<?= $app_path ?>assets/images/spsimg/techpartnersimg/google-cloud.png"
                                            alt="Google Cloud Partner" class="w-1/2" />
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="md:text-2xl text-xl mb-1.25 font-bold">
                                            Google Cloud
                                        </h3>
                                        <p class="md:text-base text-sm mb-2 font-medium">
                                            AI • Machine Learning • Cloud Innovation
                                        </p>
                                        <a href="contact-us.html" class="md:text-sm text-2xs text-primary">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .swiper-wrapper -->
                    </div><!-- .swiper -->
                </div>
            </div>
        </div>
    </section>
    <section class="2xxl:pt-25 md:pt-17.5 sm:pt-12.5 pt-10 2xxl:pb-17.5 md:pb-10 pb-5">
        <div class="container">
            <div class="row items-center">
                <div class="xl:w-1/3">
                    <div class="sm:mb-7.5 mb-5 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <h2 class="2xxl:text-4xxl lg:text-[38px] sm:text-[32px] text-2xxl font-bold capitalize mb-0">
                            Customers we are proud to work with.</h2>
                    </div>
                </div>
                <div class="xl:w-2/3 mb-7.5">
                    <div class="swiper client-swiper2 swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-af52c60ce9750dc10" aria-live="off"
                            style="transition-duration: 0ms; transform: translate3d(-897px, 0px, 0px); transition-delay: 0ms;">
                            <div class="swiper-slide wow bounceIn" data-wow-delay="0.2s" data-wow-duration="0.8s"
                                role="group" aria-label="2 / 8" data-swiper-slide-index="1"
                                style="width: 194.25px; margin-right: 30px;">
                                <div
                                    class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/ibm.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn" data-wow-delay="0.3s" data-wow-duration="0.8s"
                                role="group" aria-label="3 / 8" data-swiper-slide-index="2"
                                style="width: 194.25px; margin-right: 30px;">
                                <div class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5 mt-3"
                                    style=" width: 160px; ">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/aws.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn" data-wow-delay="0.4s" data-wow-duration="0.8s"
                                role="group" aria-label="4 / 8" data-swiper-slide-index="3"
                                style="width: 194.25px; margin-right: 30px;">
                                <div
                                    class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/ibm.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn swiper-slide-prev" data-wow-delay="0.5s"
                                data-wow-duration="0.8s" role="group" aria-label="5 / 8" data-swiper-slide-index="4"
                                style="width: 194.25px; margin-right: 30px;">
                                <div class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5 mt-3"
                                    style=" width: 160px; ">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/aws.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn swiper-slide-active" data-wow-delay="0.6s"
                                data-wow-duration="0.8s" role="group" aria-label="6 / 8" data-swiper-slide-index="5"
                                style="width: 194.25px; margin-right: 30px;">
                                <div
                                    class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/ibm.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn swiper-slide-next" data-wow-delay="0.7s"
                                data-wow-duration="0.8s" role="group" aria-label="7 / 8" data-swiper-slide-index="6"
                                style="width: 194.25px; margin-right: 30px;">
                                <div class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5 mt-3"
                                    style=" width: 160px; ">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/aws.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn" data-wow-delay="0.8s" data-wow-duration="0.8s"
                                role="group" aria-label="8 / 8" data-swiper-slide-index="7"
                                style="width: 194.25px; margin-right: 30px;">
                                <div
                                    class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/ibm.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide wow bounceIn" data-wow-delay="0.1s" data-wow-duration="0.8s"
                                role="group" aria-label="1 / 8" data-swiper-slide-index="0"
                                style="width: 194.25px; margin-right: 30px;">
                                <div class="rounded-2xl text-center p-7.5 duration-200 flex items-center justify-center min-h-27.5 mt-3"
                                    style=" width: 160px; ">
                                    <img src="http://localhost/my_sites/spswebsite/assets/images/spsimg/techpartnersimg/aws.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="2xxl:py-25 xl:17.5 md:py-12.5 sm:py-10 py-7.5 bg-secondary">
        <div class="container">
            <div class="3xl:-mx-22.5 2xxl:-mx-15 xl:-mx-5">
                <div class="sm:mb-7.5 mb-5 text-center">
                    <span
                        class="text-primary font-semibold leading-5 uppercase text-lg inline-flex gap-1.25 items-center">
                        News and Insights
                    </span>
                    <h4
                        class="2xxl:text-2xxl lg:text-[38px] sm:text-[32px] text-2xxl font-bold capitalize mb-0 text-white">
                        The
                        Know what our speakers<br> are saying on digital platforms. </h4>
                </div>
                <div class="row box-hover-wrapper justify-center gap-5">
                    <div class="xl:w-1/4 md:w-1/3 sm:w-1/2 w-full mb-7.5 wow fadeInUp">
                        <div class="rounded-xl h-full relative flex flex-col bg-white shadow-lg hover:shadow-xl 
                    duration-500 hover:-translate-y-1 box-hover [.box-hover.active]:bg-primary active overflow-hidden">

                            <div class="relative overflow-hidden rounded-t-xl h-52">
                                <img src="<?= $app_path ?>assets/images/spsimg/news/news1.jpg"
                                    class="w-full h-full object-cover" />
                            </div>

                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg mb-2 font-semibold duration-500 [.box-hover.active_&]:text-white">
                                    Hash Malik at a cloud partner panel discussion for "Succeeding with IBM"
                                </h3>
                                <p class="text-sm duration-500 [.box-hover.active_&]:text-white">
                                    Avnet Partner Summit. “Succeeding with IBM”
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="xl:w-1/4 md:w-1/3 sm:w-1/2 w-full mb-7.5 wow fadeInUp">
                        <div class="rounded-xl h-full relative flex flex-col bg-white shadow-lg hover:shadow-xl 
                    duration-500 hover:-translate-y-1 box-hover [.box-hover.active]:bg-primary overflow-hidden">

                            <div class="relative overflow-hidden rounded-t-xl h-52">
                                <img src="<?= $app_path ?>assets/images/spsimg/news/news2.jpg"
                                    class="w-full h-full object-cover" />
                            </div>

                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg mb-2 font-semibold duration-500 [.box-hover.active_&]:text-white">
                                    SPS makes a push into IoT through Mars rover demo
                                </h3>
                                <p class="text-sm duration-500 [.box-hover.active_&]:text-white">
                                    IoT Summit - SPS Participation
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="xl:w-1/4 md:w-1/3 sm:w-1/2 w-full mb-7.5 wow fadeInUp">
                        <div class="rounded-xl h-full relative flex flex-col bg-white shadow-lg hover:shadow-xl 
                    duration-500 hover:-translate-y-1 box-hover [.box-hover.active]:bg-primary overflow-hidden">

                            <div class="relative overflow-hidden rounded-t-xl h-52">
                                <img src="<?= $app_path ?>assets/images/spsimg/news/news3.jpg"
                                    class="w-full h-full object-cover" />
                            </div>

                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg mb-2 font-semibold duration-500 [.box-hover.active_&]:text-white">
                                    How To Secure & Monitor Your AI Models
                                </h3>
                                <p class="text-sm duration-500 [.box-hover.active_&]:text-white">
                                    Mr. Eugene Willard, a 35+ year industry veteran, shares his expert opinion
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="xl:py-17.5 md:py-10 py-7.5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <div class="sm:mb-7.5 mb-5 text-center">
                        <h4
                            class="text-primary text-2xl inline-block mb-0 relative after:absolute after:top-1/2 after:-left-40 after:w-37.5 after:h-px after:bg-black after:opacity-15 before:absolute before:top-1/2 before:-right-40 before:w-37.5 before:h-px before:bg-black before:opacity-15">
                            News & Insights – Style 2</h4>
                    </div>

                    <div class="mb-5 text-start">
                        <div class="row">

                            <!-- ITEM 1 -->
                            <div class="xl:w-1/3 md:w-1/2 w-full mb-6.25">
                                <div class="relative z-1 lg:p-7.5 p-5 h-full duration-200 bg-white rounded-3xl group">
                                    <div
                                        class="rounded-xxl mb-6.25 sm:h-62.5 h-50 relative overflow-hidden before:absolute before:top-0 before:-left-[75%] before:z-0 before:block before:w-1/2 before:h-full before:skew-x-[-25deg] before:bg-linear-(--img-hover-gradient) group-hover:before:animate-dzShine">
                                        <img src="<?= $app_path ?>assets/images/spsimg/news/news1.jpg" alt=""
                                            class="size-full object-cover">
                                    </div>

                                    <div class="relative">
                                        <div class="mb-2.5">
                                            <ul class="flex flex-wrap items-center gap-1.25">
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)]
                                                text-primary rounded-xxl font-medium text-2xs py-1.25 pr-3.75
                                                pl-5.75 leading-[1.4] relative inline-flex mr-1.25 items-center
                                                gap-1 flex-wrap after:absolute after:size-1.5 after:rounded-full
                                                after:bg-primary after:left-2.5">
                                                    17 May 2025
                                                </li>
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)] text-primary rounded-xxl 
                                                font-medium text-2xs py-1.25 pr-3.75 pl-5.75 leading-[1.4] relative 
                                                inline-flex mr-1.25 items-center gap-1 flex-wrap after:absolute 
                                                after:size-1.5 after:rounded-full after:bg-primary after:left-2.5">
                                                    By <a href="javascript:void(0);">Admin</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="xl:text-2xl text-xl mb-2.5">
                                            <a href="#">
                                                Hash Malik at a cloud partner panel discussion for "Succeeding with IBM"
                                            </a>
                                        </h3>

                                        <p class="text-2sm">
                                            Avnet Partner Summit: “Succeeding with IBM for Future Growth”
                                        </p>

                                        <a href="#" class="text-2sm font-medium capitalize text-primary">
                                            Read more <i class="feather icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 2 -->
                            <div class="xl:w-1/3 md:w-1/2 w-full mb-6.25">
                                <div class="relative z-1 lg:p-7.5 p-5 h-full duration-200 bg-white rounded-3xl group">
                                    <div class="rounded-xxl mb-6.25 sm:h-62.5 h-50 relative overflow-hidden before:absolute 
                                    before:top-0 before:-left-[75%] before:z-0 before:block before:w-1/2 before:h-full 
                                    before:skew-x-[-25deg] before:bg-linear-(--img-hover-gradient) 
                                    group-hover:before:animate-dzShine">
                                        <img src="<?= $app_path ?>assets/images/spsimg/news/news2.jpg" alt=""
                                            class="size-full object-cover">
                                    </div>

                                    <div class="relative">
                                        <div class="mb-2.5">
                                            <ul class="flex flex-wrap items-center gap-1.25">
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)]
                                                text-primary rounded-xxl font-medium text-2xs py-1.25 pr-3.75
                                                pl-5.75 leading-[1.4] relative inline-flex mr-1.25 items-center
                                                gap-1 flex-wrap after:absolute after:size-1.5 after:rounded-full
                                                after:bg-primary after:left-2.5">
                                                    17 May 2025
                                                </li>
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)] text-primary rounded-xxl 
                                                font-medium text-2xs py-1.25 pr-3.75 pl-5.75 leading-[1.4] relative 
                                                inline-flex mr-1.25 items-center gap-1 flex-wrap after:absolute 
                                                after:size-1.5 after:rounded-full after:bg-primary after:left-2.5">
                                                    By <a href="javascript:void(0);">Admin</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="xl:text-2xl text-xl mb-2.5">
                                            <a href="#">
                                                SPS makes a push into IoT through Mars rover innovation demo
                                            </a>
                                        </h3>

                                        <p class="text-2sm">
                                            IoT Summit – SPS Participation Driving Digital Transformation
                                        </p>

                                        <a href="#" class="text-2sm font-medium capitalize text-primary">
                                            Read more <i class="feather icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 3 -->
                            <div class="xl:w-1/3 md:w-1/2 w-full mb-6.25">
                                <div class="relative z-1 lg:p-7.5 p-5 h-full duration-200 bg-white rounded-3xl group">
                                    <div class="rounded-xxl mb-6.25 sm:h-62.5 h-50 relative overflow-hidden before:absolute 
                                    before:top-0 before:-left-[75%] before:z-0 before:block before:w-1/2 before:h-full 
                                    before:skew-x-[-25deg] before:bg-linear-(--img-hover-gradient) 
                                    group-hover:before:animate-dzShine">
                                        <img src="<?= $app_path ?>assets/images/spsimg/news/news3.jpg" alt=""
                                            class="size-full object-cover">
                                    </div>

                                    <div class="relative">
                                        <div class="mb-2.5">
                                            <ul class="flex flex-wrap items-center gap-1.25">
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)]
                                                text-primary rounded-xxl font-medium text-2xs py-1.25 pr-3.75
                                                pl-5.75 leading-[1.4] relative inline-flex mr-1.25 items-center
                                                gap-1 flex-wrap after:absolute after:size-1.5 after:rounded-full
                                                after:bg-primary after:left-2.5">
                                                    17 May 2025
                                                </li>
                                                <li class="bg-[rgba(var(--primary-rgb),0.1)] text-primary rounded-xxl 
                                                font-medium text-2xs py-1.25 pr-3.75 pl-5.75 leading-[1.4] relative 
                                                inline-flex mr-1.25 items-center gap-1 flex-wrap after:absolute 
                                                after:size-1.5 after:rounded-full after:bg-primary after:left-2.5">
                                                    By <a href="javascript:void(0);">Admin</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="xl:text-2xl text-xl mb-2.5">
                                            <a href="#">
                                                How To Secure & Monitor Your AI Models in Real-World Environments
                                            </a>
                                        </h3>

                                        <p class="text-2sm">
                                            Mr. Eugene Willard, a 35+ year industry veteran, shares his expert opinion
                                        </p>

                                        <a href="#" class="text-2sm font-medium capitalize text-primary">
                                            Read more <i class="feather icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="2xxl:py-25 xl:py-17.5 md:py-10 py-7.5">
        <div class="container">
            <div class="mb-7.5 row items-end">
                <div class="lg:w-7/12 md:w-2/3">
                    <h2 class="xl:text-4xxl sm:text-3xxl text-2xxl font-bold capitalize mb-0">
                        Stay Updated with <br> Our Latest News & Insights
                    </h2>
                </div>
                <div class="lg:w-5/12 md:w-1/3 md:text-end hidden md:block">
                    <a href="#" class="btn btn-icon btn-primary btn-shadow group">
                        View All
                        <span
                            class="size-11 min-w-11 bg-white rounded-2lg text-heading inline-flex items-center justify-center -my-2.75 md:-mr-5 ml-3 -mr-4 max-sm:hidden">
                            <i class="feather icon-arrow-right group-hover:animate-toRightFromLeft"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="row g-20">

                <!-- MAIN BIG LEFT BLOG (NEWS 1) -->
                <div class="lg:w-1/3 w-full">
                    <div class="relative overflow-hidden sm:rounded-3xl rounded-xxl xl:h-137.5 h-105 bg-light bg-cover"
                        style="background-image: url('<?= $app_path ?>assets/images/spsimg/news/news1.jpg');">
                        <div class="relative !pt-17.5 xl:p-7.5 p-5 size-full flex flex-col z-1">
                            <div class="max-w-1/2">
                                <div class="py-1.25 px-3.75 absolute top-7.5 left-7.5 z-1 
                                text-secondary bg-white font-medium text-xs uppercase rounded-5xl">
                                    News Update
                                </div>
                                <h3 class="xl:text-2xl text-xl mb-0 text-white">
                                    <a href="#">
                                        Hash Malik at a cloud partner panel discussion — “Succeeding with IBM”
                                    </a>
                                </h3>
                            </div>
                            <div class="flex items-end gap-7.5 flex-1 justify-between">
                                <a href="#" class="btn btn-icon btn-lg btn-primary">
                                    Read More
                                    <span
                                        class="size-11 min-w-11 bg-white rounded-2lg text-heading inline-flex items-center justify-center ml-3">
                                        <i class="feather icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LARGE CENTER BLOG (NEWS 2) -->
                <div class="xl:w-5/12 lg:w-2/3 w-full">
                    <div class="relative overflow-hidden sm:rounded-3xl rounded-xxl xl:h-137.5 h-105 bg-light bg-cover 
                    after:absolute after:left-0 after:size-full after:top-0 after:bg-linear-(--card-2-gradient)"
                        style="background-image: url('<?= $app_path ?>assets/images/spsimg/news/news2.jpg');">
                        <div class="relative !pt-17.5 xl:p-7.5 p-5 size-full flex flex-col z-1">
                            <div class="py-1.25 px-3.75 absolute top-7.5 left-7.5 z-1 
                            text-secondary bg-white font-medium text-xs uppercase rounded-5xl">
                                IoT Summit
                            </div>
                            <div class="flex items-end gap-7.5 flex-1 justify-between">
                                <h3 class="xl:text-2xl text-xl mb-0 text-white">
                                    <a href="#">
                                        SPS makes a push into IoT through Mars rover demo
                                    </a>
                                </h3>
                                <a href="#" class="btn btn-square btn-white !rounded-full group">
                                    <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SMALL TWO BLOGS (NEWS 3 + CUSTOM EMPTY) -->
                <div class="xl:w-1/4 lg:w-full">
                    <div class="row g-20">

                        <!-- SMALL CARD (NEWS 3) -->
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative overflow-hidden sm:rounded-3xl rounded-xxl h-66.25 bg-light bg-cover 
                            after:absolute after:left-0 after:size-full after:top-0 after:bg-linear-(--card-2-gradient)"
                                style="background-image:url('<?= $app_path ?>assets/images/spsimg/news/news3.jpg');">
                                <div class="relative !pt-17.5 xl:p-7.5 p-5 size-full flex flex-col z-1">
                                    <div class="py-1.25 px-3.75 absolute top-7.5 left-7.5 z-1 
                                    text-secondary bg-white font-medium text-xs uppercase rounded-5xl">
                                        Expert Opinion
                                    </div>

                                    <div class="flex items-end gap-7.5 flex-1 justify-between">
                                        <h3 class="text-xl mb-0 text-white">
                                            <a href="#">
                                                How To Secure & Monitor Your AI Models
                                            </a>
                                        </h3>
                                        <a href="#" class="btn btn-square btn-white !rounded-full group">
                                            <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SMALL EMPTY BLOG CARD (OPTIONAL / CAN REMOVE) -->
                        <div class="xl:w-full md:w-1/2 w-full">
                            <div class="relative overflow-hidden sm:rounded-3xl rounded-xxl h-66.25 bg-secondary">
                                <div class="relative !pt-17.5 xl:p-7.5 p-5 size-full flex flex-col z-1 text-white">
                                    <h3 class="text-xl mb-0 text-white">
                                        <a href="#">More updates coming soon...</a>
                                    </h3>
                                    <div class="flex items-end gap-7.5 flex-1 justify-between ms-auto">
                                        <a href="#" class="btn btn-square btn-white !rounded-full group">
                                            <i class="feather icon-arrow-up-right group-hover:animate-toTopRight"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="2xxl:py-25 xl:py-17.5 md:py-12.5 sm:py-10 py-7.5 bg-light bg-cover">
        <div class="container">
            <div class="mb-7.5 text-center" data-wow-delay="0.2s" data-wow-duration="0.8s">
                <span class="text-primary font-semibold leading-5 uppercase text-lg inline-flex gap-1.25 items-center">
                    SPS Verticals
                </span>
                <h2
                    class="2xxl:text-2xxl lg:text-[38px] sm:text-[32px] text-2xxl font-bold capitalize mb-0 wow fadeInUp">
                    Comprehensive Industry Solutions <br> &amp; Digital Transformation </h2>
            </div>
            <div class="row gx-lg-4 box-hover-wrapper">
                <!-- PUBLIC SECTOR -->
                <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.4s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v1.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">Public Sector
                                </h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">Now more than ever,
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.</p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Government</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                        before:absolute before:left-0 before:font-black before:content-['\f109']
                                        before:font-['flaticon'] before:text-primary before:size-5 before:leading-5
                                        before:text-center before:bg-white before:rounded-full before:shadow-1
                                        before:top-2">Public Safety</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Education</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                        before:absolute before:left-0 before:font-black before:content-['\f109']
                                        before:font-['flaticon'] before:text-primary before:size-5 before:leading-5
                                        before:text-center before:bg-white before:rounded-full before:shadow-1
                                        before:top-2">Healthcare – Mid Atl</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        County Government</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDUSTRIALS -->
                <div class=" xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.6s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover active"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v2.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Industrials
                                </h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.</p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Manufacturing</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                            before:absolute before:left-0 before:font-black
                                                            before:content-['\f109'] before:font-['flaticon']
                                                            before:text-primary before:size-5 before:leading-5
                                                            before:text-center before:bg-white before:rounded-full
                                                            before:shadow-1 before:top-2">Textile</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Utilities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HEALTHCARE -->
                <div class=" xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.8s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v3.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Healthcare
                                </h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.
                                </p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Telehealth & Remote Monitoring</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                                                before:absolute before:left-0
                                                                                before:font-black
                                                                                before:content-['\f109']
                                                                                before:font-['flaticon']
                                                                                before:text-primary before:size-5
                                                                                before:leading-5 before:text-center
                                                                                before:bg-white before:rounded-full
                                                                                before:shadow-1 before:top-2">
                                        Multi-Clinic Consolidation</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Compliance Requirements</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                                                before:absolute before:left-0
                                                                                before:font-black
                                                                                before:content-['\f109']
                                                                                before:font-['flaticon']
                                                                                before:text-primary before:size-5
                                                                                before:leading-5 before:text-center
                                                                                before:bg-white before:rounded-full
                                                                                before:shadow-1 before:top-2">Patient
                                        Experience</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Health Systems Interoperability</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                                                before:absolute before:left-0
                                                                                before:font-black
                                                                                before:content-['\f109']
                                                                                before:font-['flaticon']
                                                                                before:text-primary before:size-5
                                                                                before:leading-5 before:text-center
                                                                                before:bg-white before:rounded-full
                                                                                before:shadow-1 before:top-2">Retail
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RETAIL -->
                <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="1.0s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v4.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Retail</h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.</p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Supply Chain</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                                        before:absolute before:left-0 before:font-black
                                                                        before:content-['\f109']
                                                                        before:font-['flaticon'] before:text-primary
                                                                        before:size-5 before:leading-5
                                                                        before:text-center before:bg-white
                                                                        before:rounded-full before:shadow-1
                                                                        before:top-2">Marketing / Merchandising</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Personalization & Localization</li>
                                    <li class="  w-full py-1.5 pe-1.25 ps-5 relative text-base
                                                                        before:absolute before:left-0 before:font-black
                                                                        before:content-['\f109']
                                                                        before:font-['flaticon'] before:text-primary
                                                                        before:size-5 before:leading-5
                                                                        before:text-center before:bg-white
                                                                        before:rounded-full before:shadow-1
                                                                        before:top-2">Omni-channel Operations</li>
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Convenience Stores</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ENERGY -->
                <div class=" xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.4s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v5.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Energy</h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.
                                </p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Electric</li>
                                    <li
                                        class="w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Oil & Gas
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FINANCIAL -->
                <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.6s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v6.webp);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Financial
                                </h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.</p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Insurance</li>
                                    <li
                                        class="  w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Banking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TELECOMMUNICATIONS -->
                <div class="xl:w-1/4 md:w-1/2 w-full mb-7.5 wow fadeInUp" data-wow-delay="0.8s"
                    data-wow-duration="0.8s">
                    <div class="bg-center h-full relative rounded-2xl min-h-93.75 shadow-20 after:absolute after:top-0 after:left-0 after:size-full after:duration-700 after:rounded-2xl after:bg-white [.box-hover.active]:after:[background:var(--service-card-gradient)] box-hover bg-cover"
                        style="background-image: url(<?= $app_path ?>assets/images/spsimg/verticles/v7.jpg);">
                        <div class="relative z-1 flex flex-col h-full p-8.75">
                            <div class="overflow-hidden">
                                <h3 class="w-[80%] text-2xl relative [.box-hover.active_&amp;]:text-white">
                                    Telecommunications</h3>
                                <p class="text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    Many industrial enterprises are prime for analytics and IoT because they struggle
                                    with antiquated infrastructure that negatively affects business processes, security
                                    posture, and growth.</p>
                                <ul
                                    class="space-y-2 my-6 flex-grow text-base mb-0 [.box-hover.active_&amp;]:text-white">
                                    <li
                                        class=" w-full py-1.5 pe-1.25 ps-5 relative text-base before:absolute before:left-0 before:font-black before:content-['\f109'] before:font-['flaticon'] before:text-primary before:size-5 before:leading-5 before:text-center before:bg-white before:rounded-full before:shadow-1 before:top-2">
                                        Telcos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include("includes/footer.php"); ?>
<script src=" https://www.youtube.com/iframe_api">
</script>

<script src="<?= $app_path ?>assets/vendor/swiper/swiper-bundle.min.js">
</script>
<script>
var swiper = new Swiper(
    ".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
</script>