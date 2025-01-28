<div>
   <h1> Add New User</h1>
   
   <form action="adduser" method="post">
      <?php echo csrf_field(); ?>
      <div>
       <h5>user skill</h5>
       <!-- ek krta vadhu skill print krava name="skill[]" levu-->
         <input type="checkbox" name="skill[]" value="PHP" id="php">
         <label for="php">PHP</label>

         <input type="checkbox" name="skill[]" value="Node" id="node">
         <label for="node">Node</label>

         <input type="checkbox" name="skill[]" value="Java" id="java">
         <label for="java">Java</label>

       <h5>Gender</h5>
         <input type="radio" name="gender" value="male" id="male">
         <label for="male">Male</label>

         <input type="radio" name="gender" value="female" id="female">
         <label for="female">Female</label>

       <h5>City</h5>
        <select name="city">
         <option value="Delhi">Delhi</option>
         <option value="Noida">Noida</option>
         <option value="Gutgaon">Gurgaon</option>
        </select>
        <h5>age</h5>
        <div>
         <input type="range" name="age" min="18" max="100">
        </div>   
        <button>Add New User</button>
      </div>
   </form>
</div>
<?php /**PATH D:\xampp\htdocs\laravel\resources\views/user-formhandling.blade.php ENDPATH**/ ?>