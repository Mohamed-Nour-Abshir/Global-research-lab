<div>
        <!-- Page Header Start -->
        <div class="container-fluid bg-dark p-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Services</h1>
                    <a href="">Home</a>
                    <i class="far fa-square text-primary px-2"></i>
                    <a href="">Services</a>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

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
                            <i><img src="{{asset('assets/img/Services')}}/{{$service->image}}" class="img-fluid" alt=""></i>
                        </div>
                        <h3 class="mb-3">{{$service->name}}</h3>
                        <p class="mb-0">{{$service->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Services End -->


        <!-- Quote Start -->
        <div class="container-fluid bg-secondary px-0">
            <div class="row g-0">
                <div class="col-lg-6 py-6 px-5">
                    <h1 class="display-5 mb-4">Request A Free Assesment</h1>
                    <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et dolor diam tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea at lorem sed et, lorem et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam ipsum dolore stet stet elitr ut. Ipsum amet labore lorem lorem diam magna sea, eos sed dolore elitr.</p>
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
</div>
