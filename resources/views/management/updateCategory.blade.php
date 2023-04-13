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
                <ul>
                    <li><a href="{{ route('category.index') }}">Category</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Table</a></li>
                    <li><a href="">User</a></li>
                </ul>
            </div>
            <div class="py-10 col-8">
                <h1 class="mb-5 text-3xl">New Category</h1>

                <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="">Categry Name</label>
                    <input value="{{ $category->name }}" type="text" name="name" class="form-control" placeholder="Category Name">
                    <hr>
                    <button class="mt-3 btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
