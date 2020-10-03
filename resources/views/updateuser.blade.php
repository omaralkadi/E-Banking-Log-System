@extends("layouts.app")
@section("content")

    @if(count($errors)>0)
        @foreach($errors->all() as $error)

        <p class="alert alert-danger">{{$error}}</p>

        @endforeach

     @endif  

     @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
      @endif

    <div style='margin-left:100px;margin-top:50px'> 
	<form method="POST" action = "edite">
				{{ csrf_field() }}
    <table>
     <h1>Update User's Data</h1>

        
     <tr>
    
       <td> First name</td>
       <td> <input style='height:30px;width:300px' type='text' required name='firstname' value="{{$user[0]->fname}}" ></td>
        
     </tr>  
      
      <tr>
    
       <td> Last name</td>
       <td> <input style='height:30px;width:300px'  required type='text' name='lastname' value="{{$user[0]->lname}}"> </td>
        
     </tr>
  
     <tr>
    
       <td>Username</td>
       <td><input style='height:30px;width:300px' type='text' required name='username' value="{{$user[0]->username}}"> </td>
        
     </tr>

     <tr>
    
       <td>Balance </td>
       <td><input style='height:30px;width:300px' type='Balance' required name='Balance' value="{{$user[0]->money}}"> </td>
        
     </tr>
      
     <tr>
       <td>Email </td>
       <td><input style='height:30px;width:300px' type='Email' required name='Email' value="{{$user[0]->email}}"> </td>
     </tr>
      
     <tr>
       <td>password</td>
       <td><input style='height:30px;width:300px' required type='password' name='password' placeholder="please enter your password"> </td>
     </tr>

     <tr>
       <td>re password</td>
       <td><input style='height:30px;width:300px' required type='password' name='repassword' placeholder="please enter your password again"> </td>
     </tr>
      
     <tr>
        <td colspan='2' style='b'> <input style='height:30px;color:white;background-color:black;' type='submit' name='submit' value='Submit'>   
        </td>
     </tr>
              
  </table> 	       
    </form>
@endsection
