<div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Contact Us</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Contact For Any Queries</h1>
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hello !</strong>  {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                <form wire:submit.prevent='Contacts'>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-floating-1" placeholder="John Doe" wire:model='name'>
                                <label for="form-floating-1">Full Name</label>
                                @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="form-floating-2" placeholder="name@example.com" wire:model='email'>
                                <label for="form-floating-2">Email address</label>
                                @error('email')<span class="text-danger">{{$message}}</span> @enderror <br>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="form-floating-3" placeholder="Subject" wire:model='subject'>
                                <label for="form-floating-3">Subject</label>
                                @error('subject')<span class="text-danger">{{$message}}</span> @enderror <br>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Message" id="form-floating-4" style="height: 150px" wire:model='message'></textarea>
                                <label for="form-floating-4">Message</label>
                                @error('message')<span class="text-danger">{{$message}}</span> @enderror <br>
                                </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9060239473774!2d90.38469101498137!3d23.750730384589307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ac5fce59cb%3A0xfd3e17cbaa2f7805!2sKaizen%20IT%20Ltd.!5e0!3m2!1sen!2sbd!4v1678712608498!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>
