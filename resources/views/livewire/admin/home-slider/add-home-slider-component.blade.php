<div>
   <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form wire:submit.prevent='addSlider' enctype="multipart/form-data">
                <h1 class="bg-primary p-3 text-light text-center rounded">Add Home Slider</h1>
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" class="form-control" wire:model="title">
                    @error('title')<span class="text-danger">{{$message}}</span> @enderror <br>
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" id="image" class="form-control" wire:model="image">
                    @error('image')<span class="text-danger">{{$message}}</span> @enderror <br>
                </div>
                <button type="submit" class="btn btn-primary">Add Slider</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
   </div>
</div>
