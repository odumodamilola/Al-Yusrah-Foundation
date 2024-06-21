@extends('layouts.app')
@section('content')
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('https://img.freepik.com/free-photo/medium-shot-man-holding-small-plane_23-2149080857.jpg?w=1060&t=st=1706631255~exp=1706631855~hmac=a8855dfcb2782b4e4e969fd6b2871aa757af9911bba71c468fcecdc876329923');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home</a></span> <span>Missions</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Missions</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-5">
            <h1 class="text-center mt-5 text-primary">Mission Statements</h1>
            <p class="text-dark card`px-3 py-3 mt-4">
                Al Yusrah Foundation, our mission is a compass guiding us towards positive change. We're committed to
                innovating with purpose, creating a future where our actions resonate with impact. Through our key
                initiatives which drive positive change, transforming challenges into opportunities and building resilient
                communities., we aim to we innovate with purpose to create a future where actions lead to impactful change.
                Through strategic initiatives and a commitment to core values, we make a meaningful difference in lives,
                fostering empowerment and sustainable. Join us in the journey of making a meaningful difference—one
                initiative at a time.
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img"
                            style="background-image: url(https://img.freepik.com/premium-photo/we-se-well-when-we-work-together-shot-group-businesspeople-looking-something-computer-screen-office_590464-43825.jpg?size=626&ext=jpg&ga=GA1.1.1308267680.1706603080&semt=ais);"></a>
                        <div class="text p-3 p-md-4">
                            <h3><a href="#" class="text-primary">Our Vision</a></h3>
                            <p>we envision a future that transcends boundaries, a horizon where innovation, inclusivity, and prosperity converge. Our vision is to craft a tapestry of resilience—a vibrant masterpiece woven with threads of empowerment, sustainability, and economic vitality. Through pioneering initiatives and collaborative efforts, we strive to shape a legacy where shared aspirations flourish, and communities thrive with purpose, contributing to a brighter and more inclusive tomorrow.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img"
                            style="background-image: url(https://img.freepik.com/free-photo/male-employee-with-box-belongings-his-new-office-job_23-2149034584.jpg?size=626&ext=jpg&ga=GA1.1.1308267680.1706603080&semt=ais);"></a>
                        <div class="text p-3 p-md-4">
                            <h3><a href="#" class="text-success">Our Initiatives</a></h3>
                            <p>our initiatives span diverse fields, each a purposeful endeavor driving positive change. From empowering entrepreneurs to promoting sustainable living, our initiatives are strategic steps towards fostering innovation and making a lasting impact. Through these endeavors, we envision a future where our collective efforts contribute to the well-being of individuals and communities, creating a ripple effect of positive change across various sectors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6">
				<div class="col-md ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img"
                            style="background-image: url(https://img.freepik.com/free-photo/colleagues-clinking-glasses-close-up_23-2149006899.jpg?w=1060&t=st=1706630096~exp=1706630696~hmac=7d2df0b967b5ddbd1b78e91ef58291d0dcc3fc72ae17efa191a18b8c183cb960);"></a>
                        <div class="text p-3 p-md-4">
                            <h3><a href="#" class="text-danger">Our Values</a></h3>
                            <p>Our values serve as the bedrock of our identity, guiding our actions and decisions. Rooted in integrity, innovation, and community, our principles shape a culture of purpose and collaboration. We are committed to transparency, sustainability, and inclusivity, fostering an environment where every endeavor reflects our unwavering dedication to making a positive impact. Through these values, we pave the way for a future built on empowerment, respect, and collective growth</p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img"
                            style="background-image: url(https://img.freepik.com/premium-photo/young-african-man-standing-near-window-indoors-holding-laptop_93675-155005.jpg?size=626&ext=jpg&ga=GA1.1.1308267680.1706603080&semt=ais);"></a>
                        <div class="text p-3 p-md-4">
                            <h3><a href="#" class="text-primary">Impact Story: Empowering Lives Through Entrepreneurship</a></h3>
                            <p>Meet Ahmed, a small business owner whose journey transformed with Al Yusrah Foundation. Through our entrepreneurship program, Ahmed gained essential skills, expanded his business, and became a source of employment in the community. His success is a testament to the lasting impact Al Yusrah Foundation strives for.</p>
                        </div>
                    </div>
                </div>
            </div>
			</div>
            <div class="col-md-6"></div>
        </div>
    </div>
	



    {{-- <section class="ftco-section ftco-gallery">
    	<div class="container">
	    	<div class="d-md-flex">
		    	<a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-4.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
	    	</div>
	    	<div class="d-md-flex">
		    	<a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    </div>
		    <div class="d-md-flex">
		    	<a href="images/event-1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-1.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/event-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-2.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_4.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-4.jpg);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    </div>
	    </div>
    </section> --}}



    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3 text-light">Be a volunteer</h3>
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
                            <input type="submit"
                                style="background-color: #007bff; color: #fff; border: 1px solid #007bff; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
                                value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
