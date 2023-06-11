<div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create new todolist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="todo" class="form-label">Todo</label>
                        <input type="text" class="form-control" id="todo" name="todo"
                            placeholder="type here..." required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time"
                            placeholder="type here..." required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="update" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">fitur belum bisa digunakan, kela lieur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form action="/{{ $todo->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="todo" class="form-label">Todo</label>
                        <input type="text" class="form-control" id="todo" name="todo"
                            placeholder="type here..." value="{{ $todo->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time"
                            placeholder="type here..." required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form> --}}
        </div>
    </div>
</div>

@if (session()->has('success'))
    <div class="modal fade" id="flashMessagePopup" tabindex="-1" role="dialog"
        aria-labelledby="flashMessagePopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center"><i class="bi bi-check-circle fs-1 text-success"></i></div>
                    <p class="text-center fs-5">{{ session('success') }}</p>
                    <div class="text-center">
                        <button type="button" class="bg-success text-white border-0 p-2 rounded w-25"
                            data-bs-dismiss="modal" aria-label="Close">OK!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    function openFlashMessage() {
        var flashMessage = new bootstrap.Modal(document.getElementById('flashMessagePopup'));
        flashMessage.show();
    }

    window.onload = openFlashMessage;
</script>
