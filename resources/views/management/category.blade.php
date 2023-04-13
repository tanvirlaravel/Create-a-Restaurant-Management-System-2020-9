<x-app-layout>
    {{--  --}}

    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul class="mt-6">
                    <li><a href="{{ route('category.index') }}">Category</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Table</a></li>
                    <li><a href="">User</a></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="flex items-center justify-between p-2 my-4">
                    <h1 class="text-3xl text-red-400">Category</h1>
                    <a class="btn btn-info" href="{{ route('category.create') }}">Create category</a>
                </div>

                @if (Session()->has('status'))
                <hr>
                <p class="text-red-600">{{ Session('status') }}</p>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($categories as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['category' => $c->id]) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                               <form action="{{ route('category.destroy', ['category' => $c->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                               </form>
                            </td>
                        </tr>
                    @endforeach</tbody>
                </table>

                {{ $categories->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
