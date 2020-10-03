
    @extends("layouts.app")
    @section("content")

<table class="table" style="width:800px;margin-left:250px;">
     <caption>All Users</catption>
     <thead class="thead-dark">
       <tr>
          <th>Id</th>
          <th>UserName</th>
          <th>First Name</th>
          <th>last Name</th>
          <th>Email</th>
          <th>Money</th>
          <th>IsBan</th>
          <th>Ban_User</th>
          <th>Un_BanUser</th>
          <th>Delete User</th>
          <th>Update User</th>
       </tr>
       <thead class="thead-dark">
       @foreach ($users as $user)
       <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->fname }}</td>
          <td>{{ $user->lname }}</td>
          <td>{{ $user->email }}</td>
          <td>{{$user->money}}</td>
          <td>{{ $user->isBan }}</td>
          <td> <a class="btn btn-default btn-sm" style="color: RebeccaPurple;" href='/BanUser/{{ $user->id }}'>Ban</a></td>
          <td> <a class="btn btn-default btn-sm" style="color:darkgreen;" href='/UnBanUser/{{ $user->id }}'>UnBan</a></td>
          <td> <a class="btn btn-default btn-sm" style="color: red;" href='/deleteUser/{{ $user->id }}'>Delete</a></td>
          <td> <a class="btn btn-default btn-sm" style="color:IndianRed ;" href='/UpdateUser/{{ $user->id }}/edite'>Update</a></td>
       </tr>
       @endforeach
    </table>
@endsection