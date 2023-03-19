<div>
       <!-- Page Header Start -->
       <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Latest News</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Blog</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">

                    @foreach ($blogs as $blog)
                        <div class="col-xl-6 col-lg-12 col-md-6">
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

                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            {{$blogs->links()}}
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Study Abroad</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Counselling</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Application Processing</a>
                        <a class="h5 mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Visa Support</a>
                        <a class="h5" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Accomodation</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    @foreach ($recents as $recent)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{asset('assets/img/Blogs')}}/{{$recent->image}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-secondary px-3 mb-0">{{$recent->description}}
                            </a>
                        </div>
                    @endforeach


                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{asset('assets/img/blog.jpg')}}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">study</a>
                        <a href="" class="btn btn-secondary m-1">counselling</a>
                        <a href="" class="btn btn-secondary m-1">immigration</a>
                        <a href="" class="btn btn-secondary m-1">visa support</a>
                        <a href="" class="btn btn-secondary m-1">bank statement</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                        <a href="" class="btn btn-secondary m-1">study abroad</a>
                        <a href="" class="btn btn-secondary m-1">accomodation</a>
                        <a href="" class="btn btn-secondary m-1">100% visa success</a>
                        <a href="" class="btn btn-secondary m-1">application processing</a>
                        <a href="" class="btn btn-secondary m-1">free assesment</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">GLOBAL RESEARCH LAB</h2>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>GRL is a British Council accredited student consultancy company. We offer counseling services to international students who intend to undertake higher education in the UK, USA, Canada, Australia & Sweden</p>
                        <a href="/about" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
</div>
