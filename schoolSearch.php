<?php
$school=$_POST['schoolName'];
$class=$_POST['class'];
$i=0;
$conn=mysqli_connect("localhost","root","","book_store") or die("Connect Failed");
$sql="select *from school_Book where school_name='{$school}' and class ='{$class}'";
$res = mysqli_query($conn,$sql) or die("query failed");

include 'header.php';
?>
<div class="container-fluild">
    <div class="row">
        <div class="col-10 mx-auto my-5">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">BookName</th>
      <th scope="col">Class</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <?php if(mysqli_num_rows($res)>0){
       
        while($row=mysqli_fetch_assoc($res)){
        $i++;?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row['BookName']?></td>
      <td><?php echo $row['class']?></td>
      <td><input id="price<?php echo$i?>" class="form-control"style="width:100px;"  value="<?php echo$row['price']?>" disabled></td>
      <td><input id="quantity<?php echo$i?>"   class="form-control" style="width:45px;"value="1" ></td>
      <td><input id="total<?php echo$i?>"      class="form-control" style="width:60px;"disabled></td>
      <td><input id="check<?php echo$i?>"      type="checkbox" class="form-check-input" checked></td>
    </tr>
  </tbody>
  <?php } } $i++;?>
     <tr>
         <td><?php echo $i?></td>
         <td><?php echo "Stationary"?></td>
        <td> </td>
        <td><input id="price<?php echo$i?>" class="form-control"style="width:100px;"  value="0" ></td>
        <td><input id="quantity<?php echo$i?>"   class="form-control" style="width:45px;"value="1" disabled ></td>
      <td><input id="total<?php echo$i?>"      class="form-control" style="width:60px;"disabled></td>
      <td><input id="check<?php echo$i?>"      type="checkbox" class="form-check-input" checked></td>

        
</table>
<table class="table table-striped">
    <tr>
        <td><input class="btn btn-primary" id="button" type="button" value="Total" onclick="sum()"></td>
        <td>Total</td>
        
        <td>Quantity<input id="quan11" class="form-control" style="width:45px;"value="1" disabled></td>
        <td> Price <input id="price11" class="form-control"style="width:100px;"  disabled></td>
    </tr>
  

</table>


        </div>
    </div>
</div>
<script>
    var k=<?php echo$i?>; 
    console.log(k);   
    const price = [];
    const quantity = [];
    const total =[];
    const check =[];
    //price[0]="price1";
    //let text2="price1";
    //let hello=text1.concat("price1",text1);

    for(var j=1;j<=k;j++){
         price[j]="price"+j;
        // price[j]=text1.concat(text2,text1);
         quantity[j]="quantity"+j;
        // quantity[j]=text1.concat(text3,text1);
         total[j]="total"+j;
        // total[j]=text1.concat(text4,text1);
         check[j]="check"+j;
        // check[j]=text1.concat(text5,text1);
    }
    
    var val=0;
    var cal=0;
    var p=1;
    if(p==1){
    for(var a=1;a<=k;a++){
            if(document.getElementById(check[a]).checked==false){
           // document.getElementById(quantity[a]).value=0;
            document.getElementById(total[a]).value=0;
        document.getElementById(total[a]).value=document.getElementById(price[a]).value *document.getElementById(quantity[a]).value;
      
                
            }
            else{
                document.getElementById(total[a]).value=document.getElementById(price[a]).value *document.getElementById(quantity[a]).value;
        val = val+parseInt(document.getElementById(quantity[a]).value);
        cal = cal +parseInt(document.getElementById(total[a]).value);
            }
        }
        document.getElementById("price11").value=cal;
        document.getElementById("quan11").value=val;
        val=0;
        cal=0;
        p++;
    }
    var sum=()=>{
        for(var a=1;a<=k;a++){
            if(document.getElementById(check[a]).checked==false){
           // document.getElementById(quantity[a]).value=0;
            document.getElementById(total[a]).value=0;
        document.getElementById(total[a]).value=document.getElementById(price[a]).value * document.getElementById(quantity[a]).value;
      
                
            }
            else{
                document.getElementById(total[a]).value=document.getElementById(price[a]).value *document.getElementById(quantity[a]).value;
        val = val+parseInt(document.getElementById(quantity[a]).value);
        cal = cal +parseInt(document.getElementById(total[a]).value);
            }
        }
        document.getElementById("price11").value=cal;
        document.getElementById("quan11").value=val;
        val=0;
        cal=0;
    }
</script>