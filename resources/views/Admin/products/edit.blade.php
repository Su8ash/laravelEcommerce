<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">

                <h2>Edit Product: {{$product -> name}}</h2>
                <form action="/admin/products/update/{{$product -> id}}" method="POST">
                    @csrf
                    {{-- <x-forms.input type="text" name="full_name" /> --}}
                    Product Name: <input type="text" name="name" class="form-control"
                        value="{{$product -> name}}"><br><br>
                    Product Desc: <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$product -> desc}}
                    
                    </textarea><br><br>
                    Price: <input type="text" name="price" class="form-control" value="{{$product -> price}}"><br><br>


                    Category:
                    <x-forms.select name=" category" class="form-control" se>
                        <option value="0">Select your category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category -> id }}" selected="{{$category -> id == $product -> category_id}}">
                            {{$category -> name }}</option>
                        @endforeach
                    </x-forms.select><br><br>

                    {{-- Category: <select name="category">
        <option value="0">Select your category</option>
        @foreach ($categories as $category)
        <option value="{{$category -> id }}">{{$category -> name }}</option>
                    @endforeach
                    </select><br><br> --}}
                    <input type="submit" name="submit" value="Update product"><br><br>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>