<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Country_ID</th>
        <th scope="col">first-name</th>
        <th scope="col">last-name</th>
        <th scope="col">Birth_date</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">Bicycles</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->country->name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->birth_date}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                @foreach($user->bicyles as $bicycle)
                    <p>{{$bicycle ->brand}}</p>
                @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


