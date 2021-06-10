<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">

                <h2>Create Product</h2>



                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/admin/products/store" method="POST">
                    @csrf
                    {{-- <x-forms.input type="text" name="full_name" /> --}}
                    Product Name: <input type="text" name="name" class="form-control"><br>
                    @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                    @enderror
                    <br>
                    Product Desc: <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea><br>
                    @error('desc')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                    @enderror
                    <br>

                    Price: <input type="text" name="price" class="form-control"><br>

                    @error('price')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                    @enderror
                    <br>


                    Category:
                    <x-forms.select name="category" class="form-control">
                        <option value="0">Select your category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category -> id }}" {{old('category') == $category -> id ? 'selected':''}}>
                            {{$category -> name }}</option>
                        @endforeach
                    </x-forms.select><br><br>

                    {{-- Category: <select name="category">
        <option value="0">Select your category</option>
        @foreach ($categories as $category)
        <option value="{{$category -> id }}">{{$category -> name }}</option>
                    @endforeach
                    </select><br><br> --}}
                    <input type="submit" name="submit" value="Save product"><br><br>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>