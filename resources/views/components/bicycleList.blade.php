<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">User</th>
        <th scope="col">brand</th>
        <th scope="col">model</th>
        <th scope="col">color</th>
        <th scope="col">price</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bicycles as $bicycle)
        <tr>
            <th scope="row">{{$bicycle->id}}</th>
            <td>{{$bicycle->user->first_name}}</td>
            <td>{{$bicycle->brand}}</td>
            <td>{{$bicycle->model}}</td>
            <td>{{$bicycle->color}}</td>
            <td>{{$bicycle->price}}</td>
            <td>{{$bicycle->created_at}}</td>
            <td>{{$bicycle->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


