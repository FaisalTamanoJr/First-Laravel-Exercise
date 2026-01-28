<x-layout>
    <x-slot:title>Users</x-slot:title>

    <div class="col-6 mx-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Middlename</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($users as $row)

                    <x-table :row="$row" />

                @empty

                    <div class="hero py-12">
                        <div class="hero-content text-center">
                            <div>
                                <p class="mt-4 text-base-content/60">There are no users yet :(</p>
                            </div>
                        </div>
                    </div>

                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>