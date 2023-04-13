<x-app-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-4">
                @include('management.inc.sidebar')
            </div>
            <div class="py-10 col-8">
                <h1 class="mb-5 text-3xl">New Category</h1>

                <form action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <label for="">Categry Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Category Name">
                    <hr>
                    <button class="mt-3 btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
