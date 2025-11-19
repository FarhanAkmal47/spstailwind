<?php
ob_start();
session_start();
include("config.php");
//local path
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">

<head>
    <!-- Character Encoding -->
    <meta charset="UTF-8" />

    <!-- Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Software productivity Strategist Inc</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="ClinicMaster is a modern and responsive Tailwind CSS template designed for health and medical websites. Ideal for clinics, hospitals, and healthcare professionals seeking a professional online presence with an elegant and user-friendly design." />
    <meta name="keywords"
        content="healthcare HTML template, medical Tailwind template, clinic website template, hospital HTML template, responsive medical template, healthcare web design, Tailwind health template, ClinicMaster medical design, modern medical template, health website design" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />

    <!-- CANONICAL URL -->
    <link rel="canonical" href="https://clinicmaster.dexignzone.com/tailwind/demo/assets/index.html" />

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/png" href="<?= $app_path ?>assets/images/favicon.png" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Software productivity Strategist Inc" />
    <meta property="og:description"
        content="ClinicMaster is a modern and responsive Tailwind CSS template designed for health and medical websites. Ideal for clinics, hospitals, and healthcare professionals seeking a professional online presence with an elegant and user-friendly design." />
    <meta property="og:url" content="https://clinicmaster.dexignzone.com/tailwind/demo/social-image.png" />
    <meta property="og:image" content="https://clinicmaster.dexignzone.com/tailwind/demo/social-image.png" />
    <meta property="og:site_name" content="ClinicMaster" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Software productivity Strategist Inc" />
    <meta name="twitter:description"
        content="ClinicMaster is a modern and responsive Tailwind CSS template designed for health and medical websites. Ideal for clinics, hospitals, and healthcare professionals seeking a professional online presence with an elegant and user-friendly design." />
    <meta name="twitter:image" content="https://clinicmaster.dexignzone.com/tailwind/demo/social-image.png" />

    <!-- IE Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" media="print" onload="this.media='all'" type="text/css"
        href="<?= $app_path ?>assets/vendor/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" media="print" onload="this.media='all'" type="text/css"
        href="<?= $app_path ?>assets/icons/fontawesome/css/all.min.css" />
    <link rel="stylesheet" media="print" onload="this.media='all'" type="text/css"
        href="<?= $app_path ?>assets/icons/flaticon/flaticon.css" />
    <link rel="stylesheet" media="print" onload="this.media='all'" type="text/css"
        href="<?= $app_path ?>assets/icons/feather/css/iconfont.css" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= $app_path ?>assets/css/style.css" />

</head>

<body id="bg">
    <div class="fixed size-full left-0 top-0 z-9999999 flex items-center justify-center bg-white" id="dzPreloader">
        <div class="preloader-inner">
            <svg class="size-22.5" width="240" height="240" viewBox="0 0 240 240">
                <circle class="stroke-primary animate-dzRing1" cx="120" cy="120" r="105" fill="none" stroke="#000"
                    stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
                <circle class="stroke-secondary animate-dzRing2" cx="120" cy="120" r="35" fill="none" stroke="#000"
                    stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
                <circle class="stroke-[#255ff4] animate-dzRing3" cx="85" cy="120" r="70" fill="none" stroke="#000"
                    stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
                <circle class="stroke-[#f42582] animate-dzRing4" cx="155" cy="120" r="70" fill="none" stroke="#000"
                    stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            </svg>
        </div>
    </div>

    <?php include("nav3.php"); ?>
    <div id="smooth-wrapper">
        <div id="smooth-content">