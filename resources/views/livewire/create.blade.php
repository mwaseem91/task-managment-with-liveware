<form>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="fs-5 fw-semibold m-1">Title:</label>
        <input type="text" class="form-control m-1" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2" class="fs-5 fw-semibold m-1"> Description:</label>
        <textarea  class="form-control m-1" id="exampleFormControlInput2" wire:model="description" placeholder="Enter description"></textarea>
       
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2" class="fs-5 fw-semibold m-1"> Status:</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" wire:model="status" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Task Complete
            </label>
        </div>
    </div>
    <button wire:click.prevent="store()" class="btn btn-success mt-2">Save</button>
</form>