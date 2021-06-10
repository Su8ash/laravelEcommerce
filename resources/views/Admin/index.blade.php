{{-- <a href="/admin/products/create">Create Products</a> --}}

<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <table width="900" align="center" border="1px solid black">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($productList as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->desc}}</td>
                        <td>{{$item->price}}</td>
                        <td><img src="{{$item -> image }}" width="100px" height="100px"></td>
                        <td>
                            <a href="/admin/products/edit/{{$item -> id}}">Edit </a> |
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>