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
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</x-layout>