<!DOCTYPE html>
<html lang="en-US">
@include('templates.head')

<body class="dark">

@include('templates.preloader')

<!-- mobile header -->
<header class="mobile-header-2">
    <div class="container">
        <!-- menu icon -->
        <div class="menu-icon d-inline-flex mr-4">
            <button>
                <span></span>
            </button>
        </div>
        <!-- logo image -->
        <div class="site-logo">
            <a href="{{URL::to('/')}}">
                <img src="https://i.imgur.com/lUJT5hk.png" alt="Image" />
            </a>
        </div>
    </div>
</header>

<!-- desktop header -->
<header class="desktop-header-2 d-flex align-items-start flex-column">

    <!-- logo image -->
    <div class="site-logo">
        <a href="{{URL::to('/')}}">
            <img src="https://i.imgur.com/lUJT5hk.png" alt="Image" />
        </a>
    </div>

    <!-- main menu -->
    <nav>
        <ul class="vertical-menu scrollspy">
            <li class="active"><a href="#home"><i class="icon-home"></i></a></li>
            <li><a href="#about"><i class="icon-user-following"></i></a></li>
            <li><a href="#services"><i class="icon-briefcase"></i></a></li>
            <li><a href="#works"><i class="icon-layers"></i></a></li>
            <li><a href="#blog"><i class="icon-note"></i></a></li>
            <li><a href="#contact"><i class="icon-bubbles"></i></a></li>
        </ul>
    </nav>

    <!-- site footer -->
    <div class="footer">
        <!-- copyright text -->
        <span class="copyright">© {{date('Y')}} {{env('THEME_FULL_NAME')}}</span>
    </div>

</header>

<!-- main layout -->
<main class="content-2">

    <!-- section home -->
    <section id="home" class="home d-flex align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img src="https://d1jwnk81pqqyj5.cloudfront.net/images/seans+face+instagram.jpg" alt="Sean's Face!" class="mb-4" />

                <!-- info -->
                <h1 class="mb-2 mt-0">{{env('THEME_FULL_NAME')}}</h1>
                <span>I'm a <span class="text-rotating">Developer, Network Admin, System Administrator</span></span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <li class="list-inline-item"><a href="https://www.instagram.com/sean_odonnell_96/"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/sean_odonnell96"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/sean-o-donnell-a435a770/"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/SOD96/"><i class="fab fa-github"></i></a></li>
                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="mailto:contact@seanodonnell.co.uk" class="btn btn-default">Contact me</a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down">
                <a href="#about" class="mouse-wrapper">
                    <span>Scroll Down</span>
                    <span class="mouse">
						<span class="wheel"></span>
					</span>
                </a>
            </div>

            <!-- parallax layers -->
            <div class="parallax" data-relative-input="true">

                <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg"><path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd"/></svg>

                <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg"><path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

                <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg"><path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd"/></svg>

                <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd"/></svg>

                <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

                <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg"><g fill="#FF4C60" fill-rule="evenodd"><path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z"/><path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z"/></g></svg>

                <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg"><path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

                <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

                <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg"><path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd"/></svg>

                <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg"><g fill="#44D7B6" fill-rule="evenodd"><path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z"/><path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z"/></g></svg>

                <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg"><path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd"/></svg>

            </div>
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">About Me</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left">
                        <img src="{{URL::to('/images/sean-cat.png')}}" alt="Bolby" />
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-dark shadow-light padding-30">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- about text -->
                                <p>I'm {{env('THEME_FULL_NAME')}}, Software Developer, Supporter of moving everything into the Cloud ☁, System Administrator and all around follower in technology!</p>
                                <p>That's Chloe the cat on my shoulder!</p>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>

                            <h4>Skills / Proficient Skills</h4>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">C++</h4>
                                        <span class="float-right">25%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="25" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">VueJS</h4>
                                        <span class="float-right">50%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Serverless</h4>
                                        <span class="float-right">10%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10" data-color="#6C6CE5">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">PHP / Laravel</h4>
                                        <span class="float-right">100%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">IT System Administration & Networking</h4>
                                        <span class="float-right">100%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">AWS EC2, RDS, MediaConvert, S3...</h4>
                                        <span class="float-right">100%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" data-color="#6C6CE5">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            <div class="spacer" data-height="70"></div>

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-fire"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">5</em></h3>
                            <p class="mb-0">Projects completed</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-cup"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">{{$tea}}</em></h3>
                            <p class="mb-0">Cups of tea</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-people"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">450</em></h3>
                            <p class="mb-0">Users</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>


            </div>

        </div>

    </section>

    <!-- section services -->
    <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Skills & Training</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue" data-color="#6C6CE5">
                        <h3 class="mb-3 mt-0">Software Development</h3>
                        <p class="mb-0">With a focus more on backend, I routinely use languages such as PHP and C#. However I am currently taking a course in C++.</p>
                        <p class="mb-0">While I've focused on backend, I utilize frontend frameworks such as VueJS in my projects.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center shadow-yellow" data-color="#DFD660">
                        <h3 class="mb-3 mt-0">System Administration</h3>
                        <p class="mb-0">Years of experience working with Windows to switching it up in a Mac only office has given me valuable experience across two different methodologies of doing system administration!</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink" data-color="#F97B8B">
                        <h3 class="mb-3 mt-0">Cloud</h3>
                        <p class="mb-0">Building my own projects has put me on the front lines of learning to work with the cloud, from game servers to architecting my own workflows for content creation. I've got experience across a vast array of technologies.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section works -->
    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Projects</h2>

            <div class="spacer" data-height="60"></div>


            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#su-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Web</span>
                                <h4 class="title">StreamUpdater.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/streamupdater.com.png')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="su-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/streamupdater.com.png')}}" alt="Title" />
                        <h2>Stream Updater</h2>
                        <p>StreamUpdater is a platform designed to help streamers manage their twitch.tv streams automatically.</p>
                        <p>StreamUpdater was the first platform to change stream title and games automatically for the streamer to ensure everything is up to date.</p>
                        <a href="https://streamupdater.com" class="btn btn-default">Visit Site</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#sb-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Web</span>
                                <h4 class="title">StreamBit.tv</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/streambit.tv.png')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="sb-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/streambit.tv.png')}}" alt="Title" />
                        <h2>StreamBit</h2>
                        <p>StreamBit is a VOD and Streaming platform designed to compete with some of the biggest sites in the gaming scene</p>
                        <p>This was also one of the first companies I setup to learn more about business and terminology.</p>
                        <a href="https://streambit.tv" class="btn btn-default">Visit Site</a>
                    </div>
                </div>


                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#poi-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Game</span>
                                <h4 class="title">Path Of Immortals</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/unreal.jpg')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="poi-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/unreal.jpg')}}" alt="Title" />
                        <h2>Path Of Immortals</h2>
                        <p>Gaming has always been one of my biggest passions, that is why I'm learning how they work.</p>
                        <p>Currently learning on the Unreal Engine and undertaking various courses on C++</p>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#txp-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">INACTIVE</span>
                                <h4 class="title">TheXenProject</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/gmod.jpg')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="txp-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/gmod.jpg')}}" alt="Title" />
                        <h2>TheXenProject</h2>
                        <p>I've been involved in Game Servers since I was 15, hosting one of the most popular servers for the video game Garry's Mod.</p>
                        <p>TheXenProject was shelved due to focusing on education but still exists as a project to continue my education in game servers and Linux especially</p>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#mario-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">INACTIVE</span>
                                <h4 class="title">MarioShare.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/super-mario.jpg')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="mario-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('https://d1jwnk81pqqyj5.cloudfront.net/images/super-mario.jpg')}}" alt="Title" />
                        <h2>MarioShare</h2>
                        <p>This was a project for the Super Mario Maker video game that came out for the Nintendo Switch</p>
                        <p>This project gathered over 400 users and 1,000 shares levels being posted on it before being taken down as nintendo had developed their own service thus making my one irrelevant</p>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#zodazn-diag" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Web</span>
                                <h4 class="title">Zodazn.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img style="max-width: 100%; height: 200px; object-fit: fill;" src="{{URL::to('/images/zodazn.png')}}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="zodazn-diag" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{URL::to('/images/zodazn.png')}}" alt="Title" />
                        <h2>Zodazn</h2>
                        <p>Zodazn is a simple leads management system</p>
                        <p>I created Zodazn as a base for learning VueJS + InertiaJS with a Laravel (PHP) Backend. Extremely impressed with the responsive nature I ended up opening it up for anyone that wants to use it as a simple leads platform.</p>
                        <p>It was originally created to learn more about the leads process and act as a competitor to those extremely bloated platforms.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section prices
    <section id="prices">

        <div class="container">

            <h2 class="section-title wow fadeIn">Pricing Plans</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4 pr-md-0 mt-md-4 mt-0">
                    <div class="price-item bg-dark rounded shadow-light text-center">
                        <img src="https://via.placeholder.com/80x80" alt="Regular" />
                        <h2 class="plan">Basic</h2>
                        <p>A Simple option but powerful to manage your business</p>
                        <p>Email support</p>
                        <h3 class="price"><em>$</em>9<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4 px-md-0 my-4 my-md-0">
                    <div class="price-item bg-dark rounded shadow-light text-center best">
                        <span class="badge">Recommended</span>
                        <img src="https://via.placeholder.com/80x80" alt="Premium" />
                        <h2 class="plan">Premium</h2>
                        <p>Unlimited product including apps integrations and more features</p>
                        <p>Mon-Fri support</p>
                        <h3 class="price"><em>$</em>49<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4 pl-md-0 mt-md-4 mt-0">
                    <div class="price-item bg-dark rounded shadow-light text-center">
                        <img src="https://via.placeholder.com/80x80" alt="Ultimate" />
                        <h2 class="plan">Ultimate</h2>
                        <p>A wise option for large companies and individuals</p>
                        <p>24/7 support</p>
                        <h3 class="price"><em>$</em>99<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    -->
    <!-- section testimonials
    <section id="testimonials">

        <div class="container">

            <h2 class="section-title wow fadeInUp">Clients & Reviews</h2>

            <div class="spacer" data-height="60"></div>

            <div class="testimonials-wrapper">

                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="https://via.placeholder.com/90x90" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-dark padding-30 shadow-light rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun and interesting. Good luck! 👍</p>
                    </div>
                </div>

                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="https://via.placeholder.com/90x90" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-dark padding-30 shadow-light rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun and interesting. Good luck! 🔥</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    -->

    <!-- section blog -->
    <section id="blog">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Latest Posts</h2>
            <h4 class="wow fadeInUp">Blog Posts from SwitchedBit.com</h4>

            <div class="spacer" data-height="60"></div>

            <div class="row blog-wrapper">

                @foreach($posts as $p)
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <!-- blog item -->
                        <div class="blog-item rounded bg-dark shadow-light wow fadeIn">
                            <div class="thumb">
                                <a href="{{$p['id']}}">
                                </a>
                            </div>
                            <div class="details">
                                <h4 class="my-0 title"><a href="{{$p['id']}}">{{\Illuminate\Support\Str::limit($p['title'], 20)}}</a></h4>
                                <ul class="list-inline meta mb-0 mt-2">
                                    <li class="list-inline-item">{{\Carbon\Carbon::parse($p['published'])->diffForHumans()}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/jquery-1.12.3.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/jquery.easing.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/jquery.waypoints.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/jquery.counterup.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/popper.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/bootstrap.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/isotope.pkgd.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/infinite-scroll.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/imagesloaded.pkgd.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/slick.min.js"></script>
<script src="/js/contact.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/validator.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/wow.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/morphext.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/parallax.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/jquery.magnific-popup.min.js"></script>
<script src="https://d1jwnk81pqqyj5.cloudfront.net/js/custom.js"></script>

</body>
</html>
