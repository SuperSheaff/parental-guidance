<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ParentalGuidance 2022
 */

    $footerLogo     = get_field('settings_logo', 'options')['settings_logo_footer'] ?: get_stylesheet_directory_uri() . '/assets/src/image/logo.svg';
    $footerMenu     = klyp_generate_nav_menu('menu-primary');
    $socailLinks    = get_field('settings_social_media', 'options');

?>
        <footer class="pg-footer pg-bg-navy pg-color-white" id="pg-footer">
            <div class="pg-container">
                <div class="mb-3 text-center text-lg-left">
                    <a href="<?php echo get_site_url(); ?>" class="pg-footer__logo">
                        <svg class="pg-footer__logo" viewBox="0 0 1254 630" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_231_39)"><path d="M414.66 586.41a46.51 46.51 0 01-16.32 2.78c-9.96 0-18.663-2.18-26.11-6.54a44.998 44.998 0 01-17.18-17.58 49.859 49.859 0 01-6-24.26 54.258 54.258 0 016-25.77 44.448 44.448 0 0116.78-17.78 47.073 47.073 0 0124.52-6.41c5.3-.046 10.577.712 15.65 2.25a55.673 55.673 0 0112.75 5.68l-6.08 14.41c-7.14-5.02-14.41-7.533-21.81-7.54a29.364 29.364 0 00-15.79 4.56 33.471 33.471 0 00-11.7 12.43 34.923 34.923 0 00-4.37 17.25 38.394 38.394 0 004 17.78A29.783 29.783 0 00380.56 570a33.158 33.158 0 0017.25 4.43c4.3.061 8.576-.657 12.62-2.12a31.065 31.065 0 009.45-5.42l6.48 13.75a50.329 50.329 0 01-11.7 5.77zm72.5-70.78a50.277 50.277 0 0117.91-18 48.21 48.21 0 0149.17 0 51.136 51.136 0 0118 18.11 48.187 48.187 0 01.07 49 49.694 49.694 0 01-18 17.84 49.373 49.373 0 01-49.24.07 48.79 48.79 0 01-17.91-17.78 49.155 49.155 0 010-49.24zm13.75 41.71a34.004 34.004 0 0012.22 12.42 32.438 32.438 0 0017 4.63 31.53 31.53 0 0016.65-4.56 33.365 33.365 0 0012-12.43 35.707 35.707 0 00-.06-34.56 33.994 33.994 0 00-12.16-12.56 32.87 32.87 0 00-33.64 0 33.597 33.597 0 00-12 12.56 34.935 34.935 0 00-4.43 17.31 33.786 33.786 0 004.42 17.19zM656 563.81a21.525 21.525 0 007.93 7.6 21.858 21.858 0 0011 2.84c3.941.051 7.83-.902 11.3-2.77a20.89 20.89 0 008-7.54 19.616 19.616 0 002.91-10.44v-61.59h15.2v62a33.746 33.746 0 01-18.51 30.8 40.226 40.226 0 01-18.9 4.49 39.806 39.806 0 01-18.93-4.5 34.005 34.005 0 01-13.42-12.49 34.406 34.406 0 01-4.89-18.31v-62H653v61.6c.01 3.65 1.05 7.224 3 10.31zm136.23-71.9v81.42h47.45v14.8h-62.92v-96.22h15.47zM928.1 505c-4.747 0-8.513 1.06-11.3 3.18a10.36 10.36 0 00-4.16 8.72c0 3.613 1.74 6.63 5.22 9.05a68.747 68.747 0 0014.61 7.21 59.231 59.231 0 0112.22 5.75 26.039 26.039 0 018.4 8.79c2.2 3.7 3.3 8.367 3.3 14a26.003 26.003 0 01-3.83 13.88 27.198 27.198 0 01-11.1 9.91 37.429 37.429 0 01-17.19 3.7 55.92 55.92 0 01-17.18-2.71A53.469 53.469 0 01892 579l6.87-12a44.22 44.22 0 0011.57 6.15 36.153 36.153 0 0012.36 2.45 22.408 22.408 0 0012.29-3.37c3.52-2.247 5.283-5.707 5.29-10.38a11.575 11.575 0 00-4.43-9.25 43.467 43.467 0 00-12.36-6.74 104.44 104.44 0 01-13.61-6 28.249 28.249 0 01-9.32-8.33c-2.6-3.56-3.9-8-3.9-13.41 0-7.84 2.667-14.173 8-19s12.36-7.403 21.08-7.73a57.994 57.994 0 0116.72 2.18 53.388 53.388 0 0113.44 6.14l-5.81 11.76c-8.293-4.313-15.657-6.47-22.09-6.47zm88.83 10.63a50.238 50.238 0 0117.91-18 48.198 48.198 0 0124.59-6.74c8.65 0 17.14 2.328 24.58 6.74a51.16 51.16 0 0118 18.11 48.19 48.19 0 016.73 24.49 48.225 48.225 0 01-6.66 24.51 49.725 49.725 0 01-18 17.84 49.391 49.391 0 01-49.24.07 48.67 48.67 0 01-17.91-17.78 49.154 49.154 0 010-49.24zm13.74 41.71a34.123 34.123 0 0012.23 12.42 32.423 32.423 0 0017 4.63 31.525 31.525 0 0016.65-4.56 33.388 33.388 0 0012-12.43 35.67 35.67 0 004.43-17.288 35.753 35.753 0 00-4.49-17.272 34.047 34.047 0 00-12.16-12.56 32.881 32.881 0 00-16.82-4.63c-5.92 0-11.73 1.6-16.82 4.63a33.613 33.613 0 00-12 12.56 34.832 34.832 0 00-4.43 17.31 33.927 33.927 0 004.41 17.19zm223.25-65.43v99.66h-.39l-69.4-67.28.4 63.84h-15.6V488.6h.8l69.13 68.07-.27-64.76h15.33zM521.46 324.49a3.017 3.017 0 01-.39.15 39.497 39.497 0 00-8.67 4.42 89.95 89.95 0 00-8.26 6.13c-2.69 2.18-5.32 4.48-7.89 6.86-2.57 2.38-5.15 4.77-7.67 7.24-5.09 4.88-10.05 9.94-15.32 14.86-2.65 2.44-5.29 4.93-8.2 7.31a46.9 46.9 0 01-4.67 3.51 20.162 20.162 0 01-6.19 3c-.33.08-.64.18-1 .26l-1.19.13c-.41 0-.8.07-1.22.08-.42.01-.93-.09-1.4-.17a9.411 9.411 0 01-2.51-.71 9.306 9.306 0 01-2.25-1.21 9.964 9.964 0 01-2-1.71 10.797 10.797 0 01-1.5-2 11.014 11.014 0 01-1-2.05l-.41-1-.28-1a26.304 26.304 0 01-.94-7.07 42.706 42.706 0 01.39-6.21 89.984 89.984 0 013.88-16.31l-7.62 8.85c-6.66 7.68-13.26 15.45-20.37 22.91-3.55 3.72-7.23 7.38-11.19 10.89a64.452 64.452 0 01-13.59 9.74 23.184 23.184 0 01-4.83 1.8 14.175 14.175 0 01-6.88 0 11.997 11.997 0 01-6.68-4.78 16.345 16.345 0 01-2.47-6 34.228 34.228 0 01-.37-9.66 65.763 65.763 0 011.29-8.34 125.942 125.942 0 014.39-15.41c1.72-4.94 3.6-9.79 5.55-14.57 3.9-9.57 8.24-18.88 12.82-28 2.29-4.59 4.63-9.16 7.12-13.67.27-.5.56-1 .83-1.48-3.57 1.76-7.16 3.42-10.77 5.05-8.48 3.8-17.05 7.3-25.63 10.72-15.57 6.18-31.22 12-46.83 18a1177.499 1177.499 0 01-58.44 113.27 964.254 964.254 0 01-61.44 93c-11.25 14.86-23 29.37-35.79 43.18-12.79 13.81-26.42 27-42.35 38.14-8 5.5-16.6 10.61-26.65 13.89a50.823 50.823 0 01-16.25 2.68c-1.47 0-2.55-.12-3.85-.18-1.3-.06-2.49-.1-3.74-.27-2.49-.3-5-.55-7.48-1.06a78.658 78.658 0 01-14.77-4 67.506 67.506 0 01-13.85-7.07 68.425 68.425 0 01-21.19-22.48A85.003 85.003 0 011.5 565.74 95.94 95.94 0 010 550.88c0-2.5 0-5 .2-7.56.2-2.56.46-4.91.8-7.34 2.77-19.53 10.91-37.82 21.8-53.55C33.69 466.7 47.17 453.06 61.55 441a377.694 377.694 0 0145.66-32.48c31.78-19.43 65.33-35.35 99.31-49.85 30-12.78 60.53-24.33 91.06-35.58 13.91-30.28 26.58-61.14 37.63-92.52 12.09-34.38 22.32-69.43 29.34-105a486.366 486.366 0 007.66-53.62c.8-8.94 1.18-18 1.33-26.83 0-8.1-1.45-16.08-5.15-21.27a17.728 17.728 0 00-7.3-5.95 29.454 29.454 0 00-10.59-2.36c-7.85-.42-16.42 1.11-24.8 3.42-16.86 4.74-33.33 12.52-49.14 21.28-7.92 4.39-15.71 9.08-23.4 13.94-7.69 4.86-15.16 10.05-22.61 15.34-14.86 10.6-29.29 21.81-43.35 33.5-14.06 11.69-27.56 24-40.61 36.84a815.655 815.655 0 00-19.26 19.49 545.145 545.145 0 00-18.41 20.26c-6 6.867-11.85 13.847-17.55 20.94-5.68 7.12-11.1 14.45-16.37 21.81-3.2 4.52-6.3 9.12-9.29 13.76 3.19-1.87 6.4-3.72 9.66-5.46 4.88-2.68 9.85-5.15 14.79-7.77h.06a7.996 7.996 0 019.087.656 8.012 8.012 0 012.045 2.473 8.012 8.012 0 01.535 6.264A7.99 7.99 0 0197.73 237a8.665 8.665 0 01-1.65.66 85.184 85.184 0 00-14.3 5.45 104.585 104.585 0 00-13.19 7.7 116.385 116.385 0 00-12.06 9.42 112.518 112.518 0 00-10.76 11l-.56.48a8.842 8.842 0 01-14.407-5.054 8.84 8.84 0 01.937-5.946c18.75-33.35 42.71-62 67.74-89.48a911.65 911.65 0 0180.62-76.64c28.25-24 58.08-46.19 90.18-65.35a368.05 368.05 0 0124.8-13.33 203.518 203.518 0 0126.46-10.84c9.22-2.9 18.91-5.21 29.51-5.06a45.23 45.23 0 0116.31 3.12 34.228 34.228 0 0114.25 10.78 41.792 41.792 0 017.25 15.46 70.688 70.688 0 012 15.63c.1 9.58-.28 18.92-1 28.33a481.773 481.773 0 01-7.6 55.67c-7.09 36.7-17.4 72.56-29.57 107.66a1102.87 1102.87 0 01-30.26 77.27c13-4.79 26-9.62 38.9-14.62 8.54-3.33 17-6.74 25.38-10.41a191.668 191.668 0 0023.19-11.77 8.9 8.9 0 0112.31 12.78c.05 0 .21-.27.15-.18l-.1.15-.38.57-.87 1.41-1.83 3.07c-1.23 2.1-2.44 4.24-3.64 6.4-2.38 4.33-4.76 8.7-7.07 13.09-4.6 8.8-9 17.7-13.13 26.66a218.146 218.146 0 00-10.47 27c-.66 2.22-1.23 4.42-1.67 6.51a22.523 22.523 0 00-.52 5.43c0 .33.05.59.07.77.733-.128 1.45-.333 2.14-.61 3.63-1.49 7.63-4.31 11.37-7.26 3.74-2.95 7.45-6.25 11.06-9.64 7.2-6.79 14.17-14 20.75-21.54 6.58-7.54 12.93-15.35 19-23.39 2.993-4.04 5.83-8.213 8.51-12.52 1.24-2 2.45-4.08 3.62-6.18.91-1.85 1.81-3.72 2.73-5.55l.19.12c.34-.66.69-1.33 1-2a8.382 8.382 0 0115.68 5.42l-.8 4.16c-5.85 12.93-12.21 25.36-17.74 37.88a156.067 156.067 0 00-7.06 18.51c-.43 1.46-.8 2.95-1.06 4.28a15.975 15.975 0 00-.39 3.48c0 .92.06 1.16-.07 1.27-.13.11-.07.13 0 .16s.1.18 0 .14a.238.238 0 00-.1.08h.11l.13.08h.29a10.01 10.01 0 003.58-1 38.024 38.024 0 004.19-2.3 82.634 82.634 0 008.21-6.1c5.34-4.44 10.58-9.17 15.79-14l7.87-7.19a741.087 741.087 0 018.06-7.11c2.75-2.32 5.54-4.63 8.54-6.8a57.986 57.986 0 019.79-5.94 4.001 4.001 0 013.33 7.21l-.01.04zm-229.25 10.14c-27.49 10.56-54.84 21.39-81.72 33.2-33.49 14.76-66.49 30.89-97.34 50.24a364.717 364.717 0 00-43.88 32c-13.58 11.82-26 24.9-35.77 39.61-9.77 14.71-16.59 31.08-18.56 48.17-.25 2.12-.43 4.28-.55 6.39-.12 2.11-.07 4.14 0 6.23A81.59 81.59 0 0016 563a70.802 70.802 0 009 23.14 52.875 52.875 0 0016.71 17 51.321 51.321 0 0010.81 5.2 62.699 62.699 0 0011.89 3c2 .38 4.12.52 6.2.74 1 .12 2.09.11 3.14.18 1.05.07 2.22.14 3 .11a34 34 0 0010.82-2c7.47-2.51 14.9-6.92 22-11.91a199.82 199.82 0 0020.31-16.89c6.49-6.1 12.78-12.51 18.86-19.15 12.17-13.3 23.57-27.43 34.47-42A947.43 947.43 0 00243 428.93c17.8-30.66 34.11-62.21 49.21-94.3zm90.12 46.25a.856.856 0 00-.37-.1c-.23.01-.05.11.37.1z"/><path d="M842.88 169.05a6.533 6.533 0 01-6.35 5.06c-3.61-.14-7.33-.22-11-.27-3.67-.05-7.35 0-11 0-3.65 0-7.29.19-10.85.45-1.77.13-3.52.31-5.16.55-.82.12-1.6.27-2.3.42-.7.15-1.34.42-1.18.31a5 5 0 01-5.56-8.2c.21-.14.39-.23.58-.35-13.3-1.38-26.67-2.36-40.06-3a897.995 897.995 0 00-32.82-1 2390.672 2390.672 0 00-14.36 35.78 2188.14 2188.14 0 00-39.52 109.87c-12.06 37-23.2 74.29-32.19 112.05-4.5 18.88-8.51 37.86-11.68 56.94a457.507 457.507 0 00-6.2 57.45 5.942 5.942 0 01-11.5 1.908 5.937 5.937 0 01-.38-2.288 470.948 470.948 0 015.6-59.08c3-19.49 6.82-38.8 11.14-58 8.62-38.37 19.38-76.14 31.06-113.58s24.62-74.46 38.41-111.16c2.94-7.827 5.94-15.64 9-23.44l-7.36 11.22a2246.06 2246.06 0 01-29.86 43.87 3853.802 3853.802 0 01-30.7 43.34A3509.729 3509.729 0 01580.6 333c3.94 7.64 4.28 16.26 2.9 23.51-1.82 9-5.46 16.54-9.5 23.47a158.28 158.28 0 01-13.54 19.33 287.559 287.559 0 01-31.81 33.14c-2.86 2.55-5.76 5.05-8.84 7.43-1.54 1.21-3.1 2.37-4.82 3.53-.83.57-1.74 1.17-2.73 1.78a27.28 27.28 0 01-3.47 1.8 24.047 24.047 0 01-8.37 1.95c-.848.01-1.696-.03-2.54-.12a19.708 19.708 0 01-2.75-.6 13.388 13.388 0 01-5.48-3.29 12.14 12.14 0 01-3.2-5.65 16.76 16.76 0 01-.4-2.82c-.004-.835.043-1.67.14-2.5a19.117 19.117 0 013-7.45l.05-.09a5.879 5.879 0 014.66-3.52l.24-.24c1.47-1.47 3-3 4.44-4.62 3-3.17 5.9-6.42 8.78-9.72 5.78-6.6 11.49-13.267 17.13-20 11.29-13.51 22.44-27.16 33.32-41 1.74-2.2 3.45-4.44 5.19-6.65-.17-.24-.33-.48-.52-.7a13.365 13.365 0 00-5.37-3.64 36.608 36.608 0 00-8.43-2.09c-6.29-.9-13.31-.86-20.64-.71-3.69.07-7.46.19-11.57.08a62.654 62.654 0 01-6.62-.48 32.26 32.26 0 01-4-.84c-.38-.1-.71-.19-1.11-.32l-1.28-.5c-.42-.18-.83-.35-1.26-.55-.43-.2-1-.57-1.49-.88l-.73-.48-.35-.25c-.09-.06-.38-.3-.56-.46a11.678 11.678 0 01-2.16-2.45 11.274 11.274 0 01-1.45-3 11.778 11.778 0 01-.57-2.86 15.469 15.469 0 011.21-7 32.342 32.342 0 014-6.87 93.65 93.65 0 018.15-9.41c5.51-5.65 11.17-10.74 16.93-15.71 11.51-9.89 23.41-19 35.65-27.88 3.07-2.21 6.17-4.39 9.4-6.55 1.64-1.09 3.23-2.13 5.18-3.28 1.308-.8 2.691-1.47 4.13-2a14.147 14.147 0 017.55-.64 12.258 12.258 0 015 2.24c.698.517 1.335 1.11 1.9 1.77.491.571.936 1.179 1.33 1.82a16.34 16.34 0 012.06 5.92 28.792 28.792 0 01-.06 8.14 44.577 44.577 0 01-4 13.38 8.92 8.92 0 01-16.14-7.59l.08-.18c.39-.851.724-1.726 1-2.62-2.133 1.5-4.26 3.033-6.38 4.6-11.7 8.65-23.15 17.87-34.13 27.31-5.47 4.73-10.82 9.59-15.66 14.57a104.69 104.69 0 00-3.56 3.85c2.91 0 6 0 9.23-.11 7.48-.15 15.36-.31 23.78.86a53.838 53.838 0 0113.05 3.46 33.252 33.252 0 0110.42 6.76 2389.626 2389.626 0 0046.51-62.55 2780.762 2780.762 0 0030.39-43.27 1687.074 1687.074 0 0029.28-44c2.7-4.14 5.384-8.297 8.05-12.47-8.48.1-16.96.29-25.44.57-28.77 1-57.5 3-86 6.25a820.296 820.296 0 00-84.86 13.83 8.924 8.924 0 01-10.886-6.719 8.932 8.932 0 011.254-6.83 8.919 8.919 0 015.772-3.861h.12a837.626 837.626 0 0186.85-12.94c29.07-2.9 58.23-4.56 87.39-5.14 11.754-.233 23.507-.287 35.26-.16 9.32-15.17 18.15-30.64 26.06-46.6 2.6-5.81 5.27-11.63 8.24-17.55.053-.097.1-.197.14-.3a8.912 8.912 0 0115.351 2.217A8.908 8.908 0 01748.61 92c-4.26 8.23-8.33 17.14-12.29 25.94-3.96 8.8-7.8 17.76-11.6 26.71-.54 1.26-1.05 2.53-1.58 3.8 9.214.313 18.42.753 27.62 1.32 14.58.92 29.15 2.2 43.7 4a419.862 419.862 0 0143.54 7.46 6.516 6.516 0 014.88 7.82zM500 435c.1-.22-.05-.62-.29-1l-.12-.13c-.015.32.019.64.1.95.1.1.12.22.17.28.05.06.14-.01.14-.1zm62.29-73.25a47.412 47.412 0 002.53-8.15c-10.67 13.81-21.35 27.62-32.28 41.25a1292.87 1292.87 0 01-16.85 20.59c-2.86 3.4-5.71 6.82-8.67 10.2-1.48 1.69-3 3.38-4.57 5.07-.51.54-1 1.09-1.59 1.64l.68-.39c.47-.34 1-.6 1.37-.94.37-.34 1.15-.88 1.79-1.43l3.93-3.35c2.66-2.32 5.35-4.69 8-7.1a269.86 269.86 0 0029.43-31.31 141.278 141.278 0 0011.81-17.19 81.426 81.426 0 004.46-8.9l-.04.01zm17-106c.01-.13-.02-.13.02.01l-.02-.01z"/><path d="M780.45 323.27c-2.62 3.29-5.28 6.15-8 9.06-2.72 2.91-5.46 5.71-8.24 8.5a571.577 571.577 0 01-17 16.41c-5.78 5.36-11.65 10.63-17.74 15.73-3 2.55-6.16 5.06-9.38 7.5a102.18 102.18 0 01-10.35 7c-1 .55-2 1.09-3.09 1.6a19.543 19.543 0 01-3.94 1.41c-.38.11-.9.18-1.35.26-.564.066-1.132.1-1.7.1a9.75 9.75 0 01-2.31-.33 9.053 9.053 0 01-1.8-.68 12.709 12.709 0 01-4.72-3.81 17.266 17.266 0 01-3.22-9 37.285 37.285 0 01.11-7.28c1.08-8.94 3.64-16.64 6.3-24.31 2.49-6.95 5.26-13.69 8.16-20.34a5.955 5.955 0 01-1.592-1.887 5.93 5.93 0 01.962-6.913l.47-.5a21.651 21.651 0 002.45-3.19c.89-1.31 1.92-2.89 3-4.48a98.49 98.49 0 017.46-9.23l.34-.28a8.846 8.846 0 0111.155-.125 8.84 8.84 0 012.395 10.895c-1.94 3.89-3.73 7.12-5.55 10.61-1.82 3.49-3.58 6.84-5.32 10.26-3.46 6.86-6.75 13.75-9.67 20.7-2.92 6.95-5.51 14.06-6.64 20.61a23.943 23.943 0 00-.35 4.4c.003.403.043.805.12 1.2.67-.26 1.41-.61 2.16-1a89.794 89.794 0 009.33-5.66c3.12-2.11 6.22-4.35 9.28-6.65 6.13-4.62 12.16-9.47 18.1-14.42 5.94-4.95 11.79-10.06 17.53-15.25 2.87-2.6 5.7-5.22 8.49-7.89s5.55-5.38 7.94-8.08v-.06a4.002 4.002 0 015.247-.092 4 4 0 01.823 5.182l.14.03zm-80.54 54.39h.12a.496.496 0 00-.21 0s0 .02.09 0zm23.37-97.74a112.651 112.651 0 018.19-14.85 8.929 8.929 0 0114.84 9.93 94.51 94.51 0 00-6.64 12 8.919 8.919 0 01-16.24-.359 8.92 8.92 0 01-.15-6.641v-.08z"/><path d="M883 323l-.09.16c-3.81 6.53-8 13.46-12.22 20.15a166.2 166.2 0 01-14.46 19.6c-1.41 1.58-2.88 3.14-4.54 4.68a31.772 31.772 0 01-5.9 4.47 17.424 17.424 0 01-4.57 1.84 12.674 12.674 0 01-3.34.31 11.794 11.794 0 01-3.55-.69 12.89 12.89 0 01-5.4-3.77 18.537 18.537 0 01-2.63-4c-2.36-5-3.05-9-4-12.87a80.783 80.783 0 00-2.81-10.32 14.914 14.914 0 00-1.64-3.22c-.51-.68-.57-.57-.51-.57-.16 0 .1-.21-.81 0a16.403 16.403 0 00-3.38 1.67 60.376 60.376 0 00-8.12 6.49c-2.72 2.5-5.37 5.23-7.94 8.06a217.05 217.05 0 00-14.54 18.25c-2.28 3.22-4.5 6.52-6.75 9.92-2.25 3.4-4.34 6.84-7.37 10.84l-.15.13a8.82 8.82 0 01-12.46-.62 8.92 8.92 0 01-2-8.18l.47-1.78.4-1.41.8-2.8 1.61-5.54 3.26-11 6.6-22 5.63-18.36a4.912 4.912 0 01-3.7-1.64 5.002 5.002 0 01-.61-5.81c1.2-2.08 2.37-3.91 3.57-5.75 1.2-1.84 2.41-3.63 3.65-5.41l3.75-5.3c1.28-1.77 2.56-3.51 4-5.33a8.456 8.456 0 0110.131-2.527 8.455 8.455 0 014.029 3.778 8.456 8.456 0 01.84 5.459l-.51 2.91c-2.4 6.69-4.72 14.12-7 21.32L784 346l-2.76 9.22c2.06-2.72 4.11-5.47 6.21-8.22 2.42-3.21 4.9-6.42 7.59-9.61a64.358 64.358 0 019.33-9.26 26.843 26.843 0 016.87-4 18.139 18.139 0 015-1.16 17.097 17.097 0 012.88 0c.953.103 1.894.297 2.81.58a16.025 16.025 0 015.16 2.67 18.608 18.608 0 013.55 3.71 26.814 26.814 0 013.62 7.26 93.441 93.441 0 013 12.48c.37 1.91.72 3.75 1.11 5.44.3 1.464.714 2.901 1.24 4.3a22.022 22.022 0 003.13-2.14 51.824 51.824 0 003.93-3.49 208.702 208.702 0 0015.09-17 523.578 523.578 0 007.31-9.1c2.42-3.1 4.78-6.12 7.47-9.3A4 4 0 01883 323zm-44.76 37a.582.582 0 00.25-.05.562.562 0 00-.21.05h-.04z"/></g><defs><clipPath id="clip0_231_39"><path d="M0 0h1253.92v629.18H0z"/></clipPath></defs>
                        </svg>
                    </a>
                </div>
                <div class="pg-row"> 
                    <div class="col-lg-4 d-flex mb-4 mb-lg-0 order-lg-3">
                        <?php if (! empty($socailLinks['settings_facebook'])) { ?>
                            <a href="<?php echo $socailLinks['settings_facebook']['url']; ?>" class="mx-auto mr-lg-0"
                                <?php echo ($socailLinks['settings_facebook']['target']) ? 'target="_blank"' : ''; ?>>
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/dist/image/icons/icon-fb.svg'; ?>" class="img-fluid" alt="">
                            </a>
                        <?php } ?>
                        <?php if (! empty($socailLinks['settings_linkedin'])) { ?>
                            <a href="<?php echo $socailLinks['settings_linkedin']['url']; ?>" class="mx-auto ml-lg-4 mr-lg-0"
                                <?php echo ($socailLinks['settings_linkedin']['target']) ? 'target="_blank"' : ''; ?>>
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/dist/image/icons/icon-li.svg'; ?>" class="img-fluid" alt="">
                            </a>
                        <?php } ?>
                        <?php if (! empty($socailLinks['settings_twitter'])) { ?>
                            <a href="<?php echo $socailLinks['settings_twitter']['url']; ?>" class="mx-auto ml-lg-4 mr-lg-0"
                                <?php echo ($socailLinks['settings_twitter']['target']) ? 'target="_blank"' : ''; ?>>
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/dist/image/icons/icon-yt.svg'; ?>" class="img-fluid" alt="">
                            </a>
                        <?php } ?>
                        <?php if (! empty($socailLinks['settings_instagram'])) { ?>
                            <a href="<?php echo $socailLinks['settings_instagram']['url']; ?>" class="mx-auto ml-lg-4 mr-lg-0"
                                <?php echo ($socailLinks['settings_instagram']['target']) ? 'target="_blank"' : ''; ?>>
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/dist/image/icons/icon-insta.svg'; ?>" class="img-fluid" alt="">
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 d-flex mb-4 mb-lg-0 order-lg-2">
                        <?php foreach ($footerMenu as $item) : ?>
                            <a href="<?php echo $item['url']; ?>" class="mx-auto h6 <?php echo implode(' ', $item['class']); ?>">
                                <?php echo $item['title']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-center text-lg-left">
                        <p>Dr Justin Coulson is the co-host and parenting expert on Channel 9's "Parental Guidance", the founder of happyfamilies.com.au, and one of Australia’s most trusted parenting experts.</p>
                        <p class="pg-footer__copyright">
                            &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>