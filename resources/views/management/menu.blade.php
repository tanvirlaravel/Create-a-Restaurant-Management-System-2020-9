<x-app-layout>
    {{--  --}}

    <div class="container">
        <div class="row">

            <div class="col-3">
               @include('management.inc.sidebar')
            </div>

            <div class="col-9">
                <div class="flex items-center justify-between p-2 my-4">
                    <h1 class="text-3xl text-red-400">Menu</h1>
                    <a class="btn btn-info" href="{{ route('menu.create') }}">Create menu</a>
                </div>

                @if (Session()->has('status'))
                <hr>
                <p class="text-red-600">{{ Session('status') }}</p>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Picture</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($menus as $m)
                    {{-- {{ dump($m) }} --}}
                        <tr>
                            <td>{{ $m->id }}</td>
                            <td>{{ $m->name }}</td>
                            <td>{{ $m->price }}</td>
                            <td>
                                <img src='{{ asset("/menu_images" ) }}/{{ $m->image }}' width="100" height="100"  alt="{{ $m->name }}">
                            </td>
                            <td>{{ $m->description === NULL ? "No Description" : $m->description }}</td>
                            <td>{{ $m->category->name }}</td>
                            <td>
                                <a href="{{ route('menu.edit', ['menu' => $m->id]) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                               <form action="{{ route('category.destroy', ['category' => $m->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                               </form>
                            </td>
                        </tr>
                    @endforeach</tbody>
                </table>

                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
