<h1>Your details (manager) </h1>
<table border=1>
    <tr>
      <td>emp_id</td>
      <td>emp_firstname</td>
      <td>emp_lastname</td>
      <td>mobile_num</td>
      <td>date_of_birth</td>
      <td>gender</td>
      <td>comm_address</td>
      <td>city</td>
      <td>user_type</td>
      <td>user_name</td>
      <td>user_password</td>
      <td scope="col">Operation</td>
    </tr>
  
   
    @foreach ($employee as $emp)
    <tr>
      <td>{{$emp->emp_id}}</td>
      <td>{{$emp->emp_firstname}}</td>
      <td>{{$emp->emp_lastname}}</td>
      <td>{{$emp->mobile_num}}</td>
      <td>{{$emp->date_of_birth}}</td>
      <td>{{$emp->gender}}</td>
      <td>{{$emp->comm_address}}</td>
      <td>{{$emp->city}}</td>
      <td>{{$emp->user_type}}</td>
      <td>{{$emp->user_name}}</td>
      <td>{{$emp->user_password}}</td>
      <td>
        <a href={{"editMobile/".$emp->emp_id}}>Edit number</a>
      </td>
    </tr>
   @endforeach
   
    
</table>

</div>

<h3>Raise a issue </h3>
<div  id="d2">
<form action="/create" method="POST">
   @csrf
  <div class="form-group">
  <lable>Employee ID :</lable>
  <input type="text" name="emp_id" ><br><br>
  </div>
 
  <div class="form-group">
  <lable>Issue Type :</lable>
  <input type="text" name="issue_type" placeholder="Enter issue type"><br><br> 
  </div>

  <div class="form-group">
  <lable>Issue Description :</lable>
  <input type="text" name="issue_desc" placeholder="Enter issue description"><br><br>
  </div>
  
  
  <button type="submit">Submit issue </button>
</form>

</div>