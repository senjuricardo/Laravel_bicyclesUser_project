<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">ID-user</th>
        <th scope="col">name</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>
            @foreach($country->users as $user)
                <p>{{$user ->first_name}}</p>
            @endforeach
            </td>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


