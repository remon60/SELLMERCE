<h2>Orders</h2>
<br>
<input type="text" class="mb-2 bg-transparent text-light rounded" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names.." title="Type in a name">


<div class=" x mx-2 col-md-10  rounded shadow " style="height:400px;">
  <div class="v1">

    <table id="myTable1" class="table  text-light " style="">
    <tr class="header">
        <th style="">ID</th>
        <th style="">Items</th>
        <th style="">Status</th>
        <th style="">Email</th>
        <th style="">Address</th>
         

      </tr>
    <?php 
      order_list();
    ?>
    </table>









  </div>
</div>