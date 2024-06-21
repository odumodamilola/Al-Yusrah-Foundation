@extends('layouts.app')

@section('content')
    <div class="hero-wrap"
        style="background-image: url('https://img.freepik.com/free-photo/close-up-woman-market_23-2148761602.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Empowering the poor,
                        sustaining, sustiaining business and building community-connected development</h1>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194"
                            style="border-radius: 7px" class="btn btn-white btn-outline-white popup-vimeo px-4 py-3"><span
                                class="icon-play mr-2"></span>Learn More</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="style= container"border-radius: 7px"">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span class="text-light">Served Over</span>
                            <strong class="number" data-number="1432805">0</strong>
                            <span class="text-light">Children in 190 countries in the world</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="text-dark mb-4">Donate Money</h3>
                            <p class="text-dark">Power change. Your donation, big or small, makes a difference. Donate now.
                            </p>
                            <p><a href="#" class="btn bg-light btn-primary text-dark mt-2 px-3 py-2"
                                    style="border-radius: 3px">Donate Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="text-light mb-4">Be a Volunteer</h3>
                            <p class="text-light">Spark impact. Volunteer your time, skills, and passion. Join us today.</p>
                            <p><a href="#" class="btn bg-light btn-white text-dark mt-2 px-3 py-2"
                                    style="border-radius: 3px">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services d-block p-3 py-4">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1 text-light"
                                style="padding:20px 31px; background: rgb(206, 31, 0);border-radius:56px;"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Make Donation</h3>
                            <p>Your generosity can change lives. Make a meaningful impact by contributing to our cause. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services d-block p-3 py-4">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity text-light"
                                style="padding:20px 31px; background: rgb(34, 34, 240);border-radius:56px;"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Become A Volunteer</h3>
                            <p>Discover the joy of giving your time to a cause that matters. You can directly influence
                                positive change in the lives of others. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services d-block p-3 py-4">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation text-light"
                                style="padding:20px 31px; background: rgb(0, 194, 74);border-radius:56px;"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Sponsorship</h3>
                            <p>Empower transformation through sponsorship. By partnering with us, you're investing in the
                                potential of individuals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Visions</h2>
                    <p>Empowering lives, fostering equity, and creating a sustainable impact for a brighter, united future.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://images.pexels.com/photos/3213283/pexels-photo-3213283.jpeg);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Empowering Market Women</a></h3>
                                    <p>Fostering economic empowerment and resilience among market women through
                                        community-driven initiatives.</p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://sustainfashion.info/wp-content/uploads/2021/02/Canva-young-african-textile-worker-sewing-scaled.jpg);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Unleashing Potential Through Skill Development."</a></h3>
                                    <p>Elevating the future of youth through hands-on skill development for increased
                                        opportunities and personal growth.</p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://img.freepik.com/free-photo/local-market-scene-with-happy-traders-selling-one-using-his-phone-make-video-call_181624-41966.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Empowering Fruit Vendor Women: A Call to Support</a></h3>
                                    <p>Support the resilience of fruit vendor women. Your contribution creates economic opportunities and strengthens communities. Join us in making a positive impact today!</p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://img.freepik.com/premium-photo/happy-black-agronomist-couple-enjoying-working-farmland-agriculture-concept_33799-15114.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Empowering Poultry Workers: Stand with Us!</a></h3>
                                    <p>Support the resilience of poultry workers. Your contribution creates economic opportunities and strengthens communities. Join us in making a positive impact today
                                    </p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auto=compress&cs=tinysrgb&w=600);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Empower Entrepreneurs: Fueling Business Beginnings</a></h3>
                                    <p>Our initiative is dedicated to supporting aspiring entrepreneurs within the community
                                        by providing essential funds to kickstart their businesses, fostering economic
                                        growth and self-sustainability.</p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(https://fundsforngosmedia.s3.amazonaws.com/wp-content/uploads/2017/01/30100609/women-empowerment-1.jpg);"></a>
                                <div class="text p-md-4 p-3">
                                    <h3><a href="#">Community Orientation: Empowering Together</a></h3>
                                    <p>We're committed to giving the community a comprehensive orientation, empowering
                                        individuals with knowledge and resources to actively contribute to the collective
                                        well-being and development of our shared space.</p>
                                    {{-- <span class="donation-time d-block mb-3">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
								<div class="container">
												<div class="row justify-content-center mb-5 pb-3">
																<div class="col-md-7 heading-section ftco-animate text-center">
																				<h2 class="mb-4">Latest Donations</h2>
																				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
																								the blind texts.</p>
																</div>
												</div>
												<div class="row">
																<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
																				<div class="staff">
																								<div class="d-flex mb-4">
																												<div class="img" style="background-image: url(images/person_1.jpg);"></div>
																												<div class="info ml-4">
																																<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
																																<span class="position">Donated Just now</span>
																																<div class="text">
																																				<p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
																				<div class="staff">
																								<div class="d-flex mb-4">
																												<div class="img" style="background-image: url(images/person_2.jpg);"></div>
																												<div class="info ml-4">
																																<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
																																<span class="position">Donated Just now</span>
																																<div class="text">
																																				<p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
																				<div class="staff">
																								<div class="d-flex mb-4">
																												<div class="img" style="background-image: url(images/person_3.jpg);"></div>
																												<div class="info ml-4">
																																<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
																																<span class="position">Donated Just now</span>
																																<div class="text">
																																				<p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section> --}}

    <section class="ftco-gallery">
        <div class="d-md-flex">
            <a href="images/cause-2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://images.pexels.com/photos/3213283/pexels-photo-3213283.jpeg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://sustainfashion.info/wp-content/uploads/2021/02/Canva-young-african-textile-worker-sewing-scaled.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-4.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://img.freepik.com/premium-photo/happy-black-agronomist-couple-enjoying-working-farmland-agriculture-concept_33799-15114.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-5.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://img.freepik.com/free-photo/medium-shot-african-woman-working_23-2148789684.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
        <div class="d-md-flex">
            <a href="images/cause-6.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://fundsforngosmedia.s3.amazonaws.com/wp-content/uploads/2017/01/30100609/women-empowerment-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auto=compress&cs=tinysrgb&w=600);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_1.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://img.freepik.com/free-photo/happy-people-working-as-team_23-2148931094.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(https://img.freepik.com/free-photo/african-american-female-protective-face-mask-shopping-fruit-market_181624-43332.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/free-photo/countryside-people-working-field_23-2148761752.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 10, 2024</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Harvesting Hope: Transforming Lives in Agriculture</a></h3>
                            <p>Discover how our initiatives are sowing seeds of positive change in agriculture. From empowering farmers to fostering sustainable practices, join us on a journey to cultivate hope and transform lives in the heart of farming communities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/premium-photo/african-farmer-man-holding-fresh-corn-by-farm-land_73622-1261.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 12, 2024</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Maize Marvels: Nurturing Growth, Sowing Success</a></h3>
                            <p>Support maize farmers on their journey to sustainable cultivation. Your contribution fosters prosperity, enhances food security, and empowers communities. Join us in reaping the rewards of a thriving maize farming landscape!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/premium-photo/happy-black-agronomist-couple-enjoying-working-farmland-agriculture-concept_33799-15114.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 15, 2024</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Wings of Progress: Empowering Poultry Farmers</a></h3>
                            <p>Join our mission to empower poultry farmers. Your support fuels sustainable practices, promotes animal welfare, and strengthens local economies. Together, let's soar to new heights in poultry farming!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/free-photo/happy-people-working-as-team_23-2148931094.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=aisimages/event-1.jpg');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 20, 2024</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">Supporting Furniture Artisans</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>Join us in supporting furniture artisans. Your contribution enhances craftsmanship, promotes sustainable materials, and uplifts communities.</p>
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/free-photo/medium-shot-african-woman-working_23-2148789684.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 22, 2024</a></a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">SupportingLocal Groceries Sellers</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>Support local groceries sellers offering essentials like rice, beans, and grains. Your contribution sustains livelihoods, ensures access to quality food.
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('https://img.freepik.com/free-photo/close-up-woman-market_23-2148761602.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais');">
                        </a>
                        <div class="text d-block p-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 27, 2024</a></a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">Backing Fresh Vegetable Sellers</a></a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>Support local fresh vegetable sellers for a healthier community. Your contribution sustains local agriculture, promotes nutritional well-being.
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="text-light mb-3">Be a volunteer</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary px-5 py-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
