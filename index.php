<?php include 'header.php'?>
<div class="container-fluid">
<div class="row">
    <div class="offset-sm-4 col-sm-5 mx-auto border shadow heightDiv h ">
        <form action="schoolSearch.php" method="POST">
        <div class="form-group ">
        <select name="schoolName" class="form-control my-3 mt-5" id="" required>
            <option value="">Select the school</option>
            <option value="New Angels Homw">New Angels Home</option>
            <option value="Royal High School">Royal High School</option>
            <option value="Denobli">Denobli</option>
        </select>
        <select name="class" class="form-control" id="" required>
           <option value="0">select the class</option>
            <option value="1">class 1</option>
            <option value="2">class 2</option>
            <option value="3">class 3</option>
            <option value="4">class 4</option>
            <option value="5">class 5</option>
            <option value="6">class 6</option>
            <option value="7">class 7</option>
            <option value="8">class 8</option>
        </select>
        <button class="form-control btn btn-primary my-5">Book Price</button>
        </div>
</form>
    </div>
</div>
</div>    
</body>
</html>