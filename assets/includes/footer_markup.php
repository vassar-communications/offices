<style>
/*
@font-face {
    font-display: swap;
    font-family: "Source Sans Variable";
    font-weight: 200 900;
    font-stretch: normal;
    src: url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSansVariable-Roman.ttf.woff2") format("woff2"), url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSansVariable-Roman.ttf.woff") format("woff"), url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSansVariable-Roman.ttf") format("ttf");
}
@font-face {
    font-display: swap;
    font-family: "Source Sans Variable";
    font-weight: 200 900;
    font-style: italic;
    font-stretch: normal;
    src: url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSans3VF-Italic.ttf.woff2") format("woff2"), url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSans3VF-Italic.ttf.woff") format("woff"), url("https://www.vassar.edu/themes/custom/vassar_bootstrap/fonts/SourceSans3VF-Italic.ttf") format("ttf");
}
*/

.footer {
    color: #fff;
    /*  This is hidden right now. On Admission and Alums, it's
            only revealed after the user has scrolled a little ways
            down the page, since having it appear right at the top
            of the page would be awkward. However, revealing it
            requires additional scripting which might not be
            available across our sites, so I'm leaving it hidden
            for now.
    */
}

.footer * {
    /* "1rem" could mean different things on different sites */
    font-size: 16px !important;
}

.footer .footer-section {
    font-family: "Source Sans Variable";
    padding: clamp(0.2rem, 4%, 4rem);
    padding-top: calc(1.575rem + 3.9vw);
}

.footer a:link,
.footer a:visited,
.footer .btn-link:link,
.footer .btn-link:visited {
    color: #fff;
    text-decoration: none;
    border-bottom: 1px solid transparent;
}

.footer a:link:hover,
.footer a:link:focus,
.footer a:visited:hover,
.footer a:visited:focus,
.footer .btn-link:link:hover,
.footer .btn-link:link:focus,
.footer .btn-link:visited:hover,
.footer .btn-link:visited:focus {
    border-bottom-color: #fff;
}

.footer .theme-dark-burgundy {
    background: #641a2b;
}

.footer .theme-darkest-burgundy {
    background: #3d0f1a;
}

@media (min-width: 768px) {
    .footer .footer__main-content-container {
        display: flex;
        gap: clamp(1rem, 4vw, 4rem);
    }
}

.footer .footer-row {
    margin: 1rem 0;
}

@media (min-width: 992px) {
    .footer .link-collection {
        display: flex;
        gap: 0.8rem;
    }
}

.footer .vassar-logo-svg {
    fill: #fff;
    width: 180px;
}

.footer .footer__main-content-primary {
    text-align: center;
}

@media (min-width: 768px) {
    .footer .footer__main-content-primary {
        text-align: left;
        width: 66%;
    }
}

@media (min-width: 992px) {
    .footer .footer__main-content-primary {
        width: 75%;
    }
}

@media (min-width: 768px) {
    .footer .footer-feature-module {
        text-align: left;
        width: 33%;
    }
}

@media (min-width: 992px) {
    .footer .footer-feature-module {
        width: 25%;
    }
}

@media (max-width: 768px) {
    .footer .footer-feature-module {
        max-width: 20rem;
        margin-left: auto;
        margin-right: auto;
    }
}

.footer .footer-feature-module img {
    width: 100%;
}

.footer .footer-feature-module .module-link__label {
    display: inline-block;
    line-height: 1;
    margin-top: 0.8rem;
}

.footer .footer-feature-module .feature-image-container {
    display: block;
    border-radius: 0.2rem;
    overflow: hidden;
    line-height: 0;
}

.footer .footer-feature-module .footer-feature-module__link,
.footer .footer-feature-module .footer-feature-module__link img {
    transition: 0.4s all ease;
}

.footer .footer-feature-module .footer-feature-module__link:hover img {
    transform: scale(1.04);
    filter: brightness(110%);
}

.footer .btn-link.arrow-no-circle:after {
    content: "→";
    font-size: 1.4rem;
    align-items: center;
    border-radius: 50%;
    margin-left: 0.6rem;
}

.footer .btn-link.arrow-circle:after {
    content: "→";
    border: 1px solid;
    width: 2rem;
    height: 2rem;
    display: inline-flex;
    justify-content: center;
    padding-bottom: 0.12rem;
    font-size: 1.4rem;
    align-items: center;
    border-radius: 50%;
    margin-left: 1rem;
}

.footer hr {
    border: none;
    border-top: 1px solid #fff;
    margin: 2rem 0;
    opacity: 0.2;
}

.footer .inline-list {
    padding-left: 0;
    margin: 2rem 0;
}

.footer .inline-list li {
    display: inline;
    list-style: none;
    margin-right: 0.8rem;
}

.footer .link-to-top {
    position: fixed;
    bottom: 2rem;
    left: calc(50vw - 3.4rem);
    padding: 0.1rem 0.6rem;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 2rem;
    backdrop-filter: blur(20px);
    z-index: 1000;
    opacity: 0;
    transition: 0.4s all ease;
    border: 1px solid #fff;
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.4);
}

.footer .pt-0 {
    padding-top: 0 !important;
}

.footer .mt-0 {
    margin-top: 0 !important;
}

.footer .text-center {
    text-align: center;
}

@media (min-width: 768px) {
    .footer .text-left-md {
        text-align: left;
    }
}

.social-icon-link svg {
    width: 1.2rem;
    height: 1.2rem;
}

.social-icon-link svg path {
    fill: #fff;
}
</style>



<footer class="footer">

    <div class="footer-section text-light theme-dark-burgundy">
        <div class="footer__main-content-container">
            <div class="footer__main-content-primary text-center text-left-md">
                <a class="logo" href="https://vassar.edu"><svg class="vassar-logo-svg" aria-labelledby="vassar-title" role="img" width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2002 396">
                        <title id="vassar-title">Vassar</title>
                        <path d="M379 32a104 104 0 0 1 22-17l-1-6-56 1-69-1-1 6c7 3 16 8 22 16 6 9 13 21 13 43 0 31-14 74-44 136l-49 108h-1c-20-49-44-101-67-153l-30-69c-7-19-12-34-13-46 3-18 18-30 35-35l-1-6-71 1L1 9l-1 7c22 6 41 31 55 58a4241 4241 0 0 1 142 322h7l23-63 53-117c33-73 56-122 72-148 9-14 17-26 27-36zM493 0l-7 1-24 64-52 116c-31 69-56 122-74 152-8 14-16 24-25 33-9 8-15 13-22 16l1 6 51-1 74 1v-6c-7-3-16-7-22-15-8-9-14-20-14-41 0-20 8-49 20-78l73-1 78 1 22 54c7 18 13 34 13 47-2 17-18 28-34 33v6l67-1 38 1c-4-13-89-209-116-271L493 0zm-21 232l-67-1 19-44 50-111h1l67 154c-21 2-45 2-70 2zM819 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-49-63l-17 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110zM2000 378a60 60 0 0 1-10 1c-19-5-53-27-78-53-33-36-68-84-89-122 41-16 79-51 79-102 0-32-13-54-37-71-28-18-61-22-106-22l-87 1-76-1-1 6c8 1 19 4 26 8a57 57 0 0 1 22 23c7 12 10 29 11 55l2 100v24l-2 69c-1 28-4 47-14 62l-1 1c-12 18-39 19-54 2-9-10-17-22-24-35A3434 3434 0 0 1 1419 0l-7 1-24 64-52 116c-31 69-55 122-73 152-9 14-16 24-26 33-8 8-15 13-21 16v6l51-1 74 1 1-6c-8-3-16-7-23-15-7-9-14-20-14-41 0-20 9-49 21-78l72-1 78 1 23 54c6 18 12 34 13 47-3 17-19 28-35 33l1 6 67-1h132l89 1v-7c-12-2-25-6-37-15-14-12-23-26-25-57-2-26-3-57-3-86v-15l71 2c27 50 55 96 88 134 14 16 27 26 42 35s33 12 53 12a176 176 0 0 0 47-7zm-602-146l-66-1 18-44 50-111h2l66 154c-21 2-45 2-70 2zm392-35c-32 0-67-3-89-8v-11c0-52 1-110 6-154a265 265 0 0 1 40-3c31 2 55 9 76 28 17 16 27 38 27 65 0 33-10 62-36 82l-24 1zM1113 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-48-63l-18 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110z"></path>
                        <image alt="Vassar College" src="https://www.vassar.edu/assets/images/vassar-logo.png" width="402" height="80"></image>
                    </svg></a>

                <div class="footer-row">
                    <a class="social-icon-link" href="https://www.google.com/maps/place/Vassar+College/@41.6869086,-73.8936575,16.16z/data=!4m5!3m4!1s0x0:0xe3c87d640882d54c!8m2!3d41.6866781!4d-73.8936812">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                        </svg>
                        124 Raymond Avenue, Poughkeepsie, New York 12604</a>
                </div>

                <!--
                <div class="pt-2 link-collection footer-row">
                    <a href="/alumni/community/" class="me-3 my-2">Community <i class="px-1 fa-solid fa-circle-arrow-right"></i></a> <a href="/alumni/calendar/" class="me-3 my-2">Calendar <i class="px-1 fa-solid fa-circle-arrow-right"></i></a> <a href="/alumni/contact/" class="me-3 my-2">Contact <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
                </div>
-->
                <hr>

                <div class="pt-2 link_collection">
                    <ul class="inline-list">

                        <li><a href="https://www.vassar.edu/about" class="me-3 my-2">About</a></li>

                        <li><a href="https://www.vassar.edu/academics" class="me-3 my-2">Academics</a></li>

                        <li><a href="https://www.vassar.edu/admission" class="me-3 my-2">Admission</a></li>

                        <li><a href="https://www.vassar.edu/campuslife" class="me-3 my-2">Campus Life</a></li>

                        <li><a href="https://www.vassar.edu/institute" class="me-3 my-2">The Vassar Institute for the Liberal Arts</a></li>

                    </ul>

                    <ul class="inline-list mt-0">


                        <li> <a class="social-icon-link" href="https://www.instagram.com/vassarcollege/">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>Instagram</title>
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg></a></li>


                        <li> <a class="social-icon-link" href="https://www.facebook.com/vassarcollege/">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>Facebook</title>
                                    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                                </svg>
                            </a></li>

                        <li><a class="social-icon-link" href="https://www.linkedin.com/edu/school?id=19077">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>LinkedIn</title>
                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                </svg>
                            </a></li>

                        <li><a class="social-icon-link" href="https://www.youtube.com/vassar/">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>YouTube</title>
                                    <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                                </svg>
                            </a></li>


                        <li><a class="social-icon-link" href="https://www.tiktok.com/@vassar_college">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>TikTok</title>
                                    <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                </svg></a></li>


                        <li> <a class="social-icon-link" href="https://x.com/vassar/">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <title>X</title>
                                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                </svg>

                            </a></li>


                        <li> <a class="social-icon-link" href="https://www.threads.net/@vassarcollege">

                                <svg xmlns="http://www.w3.org/2000/svg" aria-label="Threads" viewBox="0 0 192 192">
                                    <title>Threads</title>
                                    <path class="x19hqcy" d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z" />
                                </svg>

                            </a></li>


                        <li class="bluesky">
                            <a class="social-icon-link" href="https://bsky.app/profile/vassar.bsky.social"> <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <title>Bluesky</title>
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"></path>
                                    </svg></span>
                            </a>

                        </li>



                        <li> <a class="social-icon-link" href="https://www.flickr.com/photos/vassarcollegemedia/">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <title>Flickr</title>
                                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM144.5 319c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5zm159 0c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5z" />
                                </svg>
                            </a></li>



                        <li><a href="https://www.vassar.edu/social-media">Social&nbsp;Media&nbsp;Directory</a></li>
                        <li><a href="https://vas.emscloudservice.com/calendar/MasterCalendar.aspx">Campus&nbsp;Calendar</a></li>


                    </ul>
                </div>
            </div>

            <div class="footer-feature-module">
                <a href="https://campaign.vassar.edu/" class="donate-btn footer-feature-module__link">
                    <span class="feature-image-container">
                        <img src="https://www.vassar.edu/sites/default/files/2022-10/2022-campaign-logo.gif" alt="A Vassar College logo is encircled by the text 'Fearlessly Consequential: A Campaign for Our Collective Future'"></span>
                    <span class="module-link__label btn-link arrow-no-circle">Learn more about our comprehensive campaign</span></a>
            </div>

        </div>

    </div>

    <div class="footer-section text-light theme-darkest-burgundy text-center">
        <style>
        a.white-on-hover:hover,
        a.white-on-hover:focus {
            color: #fff !important;
        }
        </style>


        <ul class="inline-list">
            <li> <a href="https://offices.vassar.edu/campus-safety/statistics/" class="me-3 my-2 white-on-hover">Annual Security and Fire Safety Report</a></li>
            <li> <a href="https://offices.vassar.edu/eoaa/" class="me-3 my-2 white-on-hover">Title IX</a></li>
        </ul>


        <p>© 2022 Vassar College</p>

    </div>

    <a class="link-to-top" href="#top">Back to top</a>

</footer>