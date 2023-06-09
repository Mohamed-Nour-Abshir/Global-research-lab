<div>
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Study Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">We Provide Study abroad for students</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Apply Now</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Study Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Take Our Help To Reach The Top Level</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Apply Now</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">GRL</span></h1>
                <h4 class="text-primary mb-4">GRL is a British Council accredited student consultancy company. We offer counseling services to international students who intend to undertake higher education in the UK, USA, Canada, Australia & Sweden.</h4>
                <p class="mb-4">Our experienced counselors POSSESS in-depth knowledge Regarding Higher Education Institutions, Which Enables them to assist our client-students in choosing the right program at the right institution. Our expert advice is Particularly beneficial for Students from Middle-Eastern Countries.</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Apply Now</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-3">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Counseling</h3>
                            <p class="mb-0">At GRL, our emphasise is on providing our client-students with intensive...</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-3">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Application Processing</h3>
                            <p class="mb-0">GRL offers full support in processing applications to respected...</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-3">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>99% Visa Support</h3>
                            <p class="mb-0">It is of crucial importance to ensure that you have successfully completed...</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Accommodation</h3>
                            <p class="mb-0">We understand the individual needs of our client-students and we endeavour...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">

            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-secondary text-center px-5">
                        <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <!-- <i class="fa fa-user-tie fa-2x"></i> -->
                            <i><img src="{{asset('assets/img/Services')}}/{{$service->image}}" class="img-fluid rounded-circle" alt="" width="90" height="90"></i>
                        </div>
                        <h3 class="mb-3">{{$service->name}}</h3>
                        <p class="mb-0">{{$service->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3>Best Counseling</h3>
                        <p class="mb-0">At GRL Studies, our emphasise is on providing our client-students with intensive education counseling. </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
                        <h3>99% Visa Success Rate</h3>
                        <p class="mb-0">It is of crucial importance to ensure that you have successfully completed the immigration procedures. Meeting the immigration requirements on time will ensure you are able to join your chosen educational institution</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Accommodation</h3>
                        <p class="mb-0">We understand the individual needs of our client-students and we endeavour to ensure that you secure an appropriate place to live before arriving at your chosen institution.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="{{asset('assets/img/ceo.jpg')}}" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">Our counsellors are international education specialists who are ready to do whatever it takes to help you find the right course and country. Best part, all sessions are free!. We understand the individual needs of our client-students and we endeavour to ensure that you secure an appropriate place to live before arriving at your chosen institution. Our experienced counselors possess in-depth knowledge regarding higher education institutions, which enables them to assist our client-students in choosing the right programme at the right institution.</p>
                        <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3>100% Free study abroad counselling</h3>
                        <p class="mb-0">Our counsellors are international education specialists who are ready to do whatever it takes to help you find the right course and country. Best part, all sessions are free!</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3>Professional Counsellors</h3>
                        <p class="mb-0">Our counsellors are international education specialists who are ready to do whatever it takes to help you find the right course and country. Best part, all sessions are free!</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>24/7 Student Support</h3>
                        <p class="mb-0">We’ll guide you through the application process and help you prepare the right documents for your visa submission in 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Request A Free Assesment</h1>
                <p class="mb-4">Please request free assesment. Our experienced counselors POSSESS in-depth knowledge Regarding Higher Education Institutions, Which Enables them to assist our client-students in choosing the right program at the right institution. Our expert advice is Particularly beneficial for Students from Middle-Eastern Countries.</p>
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hello !</strong>  {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form wire:submit.prevent='requestAssisment'>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="form-floating-1" placeholder="John Doe" wire:model='name'>
                                <label for="form-floating-1">Full Name</label>
                                @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="form-floating-2" placeholder="name@example.com" wire:model='email'>
                                <label for="form-floating-2">Email address</label>
                                @error('email')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="form-floating-1" placeholder="John Doe" wire:model='phone'>
                                <label for="form-floating-1">Phone No.</label>
                                @error('phone')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <select class="form-select @error('study_level') is-invalid @enderror" id="floatingSelect" aria-label="Financial Consultancy" wire:model='study_level'>
                                    <option value="Undergraduate" selected>Undergraduate</option>
                                    <option value="Postgraduate">Postgraduate</option>
                                    <option value="Vacational">Vacational</option>
                                    <option value="Doctorate">Doctorate</option>
                                </select>
                                <label for="floatingSelect">Preferred Study Level</label>
                                @error('study_level')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select @error('country') is-invalid @enderror" id="floatingSelect1" aria-label="Financial Consultancy" wire:model='country'>
                                    <option value="UK" selected>UK</option>
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Sweden">Sweden</option>
                                </select>
                                <label for="floatingSelect1">Preferred Study Destination</label>
                                @error('country')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Request Assesment</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('assets/img/nour.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Counsellors</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            @foreach ($consullers as $consuller)
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets/img/Team')}}/{{$consuller->image}}" alt="" style="width: 500px; height:400px;">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">{{$consuller->name}}</h3>
                        <p class="text-white text-uppercase mb-0">{{$consuller->destination}} </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('assets/img/testimonial.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
                <div class="owl-carousel testimonial-carousel">

                    @foreach ($reviews as $review)
                        <div class="testimonial-item">
                            <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>{{$review->comment}}</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{asset('assets/img/Reviews')}}/{{$review->image}}" alt="">
                                <div class="ps-4">
                                    <h3>{{$review->name}}</h3>
                                    <span class="text-uppercase">{{$review->destination}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Latest Blog Post</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">

            @foreach ($news as $blog)
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/Blogs')}}/{{$blog->image}}" alt="">
                        </div>
                        <div class="bg-secondary d-flex">
                            <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                <span>{{date("d", strtotime($blog->date))}}</span>
                                <h5 class="text-uppercase m-0">{{date("M", strtotime($blog->date))}}</h5>
                                <span>{{date("Y", strtotime($blog->date))}}</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center py-3 px-4">
                                <div class="d-flex mb-2">
                                    <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Admin</small>
                                    <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>{{$blog->name}}</small>
                                </div>
                                <a class="h4" href="">{{$blog->description}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!-- Blog End -->
</div>
