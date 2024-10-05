<div>
    <x-flash-message />
    <form wire:submit="save">
        <div class="mb-2">
            <label for="body" class="visually-hidden">Body</label>
            <textarea wire:model="form.body" class="form-control" name="body" id="body" cols="30"
                placeholder="What's on your mind... ?"></textarea>
            @error('form.body')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </form>
</div>
