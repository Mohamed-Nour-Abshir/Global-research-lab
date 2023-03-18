<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Consuller</h6>
                    </div>
                    <div class="card-body">
                       <form wire:submit.prevent='addConsuller' enctype="multipart/form-data">
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
                            <input type="file" id="image" class="form-control  @error('image') is-invalid @enderror" wire:model='image'>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="120">
                            @endif
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary form-control" type="submit">Add</button>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

</div>
