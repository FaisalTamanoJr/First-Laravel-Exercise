<x-layout>
    <x-slot:title>Sign Up</x-slot:title>
    <div class="col-4 mx-auto">
        <form method="POST" action="/registration">
            @csrf
            <div class="mb-3">
                <label for="exampleInputFN" class="form-label">First Name</label>
                <input name="firstname" type="text" class="form-control" id="exampleInputFN">
            </div>
            <div class="mb-3">
                <label for="exampleInputMN" class="form-label">Middle Name</label>
                <input name="middlename" type="text" class="form-control" id="exampleInputMN">
            </div>
            <div class="mb-3">
                <label for="exampleInputLN" class="form-label">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="exampleInputLN">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="exampleInputAddress">
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Age</label>
                <input name="age" type="number" class="form-control" id="exampleInputAge">
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Register</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Do you really want to register this account
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>