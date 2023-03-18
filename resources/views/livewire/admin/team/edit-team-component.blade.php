<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success text-center">Edit Consuller</h6>
                    </div>
                    <div class="card-body">
                       <form wire:submit.prevent='editConsuller' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" wire:model='name'>
                            @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                        </div>

                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <input type="text" id="destination" class="form-control  @error('destination') is-invalid @enderror" wire:model='destination'>
                            @error('destination')<span class="text-danger">{{$message}}</span> @enderror <br>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control  @error('image') is-invalid @enderror" wire:model='newimage'>
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror <br>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="300" height="200">
                                @else
                                 <img  src="{{asset('assets/img/Team')}}/{{$image}}" width="300" height="200" alt="">
                                @endif
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
