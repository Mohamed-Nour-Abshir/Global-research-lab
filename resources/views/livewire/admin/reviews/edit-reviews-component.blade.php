<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success text-center">Edit Review</h6>
                    </div>
                    <div class="card-body">
                       <form wire:submit.prevent='updateReview' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" wire:model='name'>
                            @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                        </div>

                        <div class="form-group">
                            <label for="destination">Profession</label>
                            <input id="destination" class="form-control  @error('destination') is-invalid @enderror" wire:model='destination'>
                            @error('destination')<span class="text-danger">{{$message}}</span> @enderror <br>
                        </div>

                        <div class="form-group">
                            <label for="destination">Comment</label>
                            <textarea id="destination" cols="30" rows="10" class="form-control  @error('comment') is-invalid @enderror" wire:model='comment'></textarea>
                            @error('comment')<span class="text-danger">{{$message}}</span> @enderror <br>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control  @error('image') is-invalid @enderror" wire:model='newimage'>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($newimage)
                            <img src="{{ $newimage->temporaryUrl() }}" width="300" height="200">
                            @else
                            <img  src="{{asset('assets/img/Reviews')}}/{{$image}}" width="100" height="100" alt="">
                            @endif
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success form-control" type="submit">Update</button>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

</div>



