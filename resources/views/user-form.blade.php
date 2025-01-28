<div>
    <h2>Add New user</h2>

  <!-- @if($errors->any())
   @foreach($errors->all() as $error)
   <div style="color:red">
         {{$errors}}
  </div>
   @endforeach
   @endif -->
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Username" name="username">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Useremail" name="email">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Usercity" name="city">
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>
     <div class="input-wrapper">
        <h5>Skills</h5>
         <input type="checkbox" name="skill" value="PHP" id="php">
         <label for="php">PHP</label>

         <input type="checkbox" name="skill" value="Node" id="node">
         <label for="node">Node</label>

         <input type="checkbox" name="skill" value="Java" id="java">
         <label for="java">Java</label>
     </div>
     <span style="color:red">@error('skill'){{$message}}@enderror</span>
     <div class="input-wrapper">   
        <button>Add New User</button>
     </div>
    </form>
</div>
<style>
    input{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;    color: orange;
}
.input-wrapper{
    margin:10px
}
button{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
    background-color:#fff;
    cursor:pointer;
}
</style>
