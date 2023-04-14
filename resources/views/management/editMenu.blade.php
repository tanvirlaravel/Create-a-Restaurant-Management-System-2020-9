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
                <h1 class="mb-5 text-3xl">Edit Menu</h1>

                <form action="{{ route('menu.update', ['menu' => $menu->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Menu Name</label>
                        <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Menu Name">
                    </div>

                    <div class="form-group">
                        <label for="category_id">category_id</label>
                        <select name="category_id" value="{{ old('category_id') }}" class="form-control" id="category_id">

                         @foreach ($categories as $c)
                         <option
                            value="{{ $c->id }}"
                            {{ $c->id === $menu->category_id ?  "selected" : "" }}
                           >
                            {{ $c->name }}
                        </option>
                         @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="">Price</label>

                        <div class="mb-3 input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" value="{{ $menu->price }}" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Image</label>
                        <input name="image" type="file" value="{{ old('image') }}" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{ $menu->description  }}</textarea>
                      </div>


                    <button class="mt-3 btn btn-warning">Edit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
