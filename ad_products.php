<h2>Products</h2>
<br>
<input type="text" class="mb-2 bg-transparent text-light rounded" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


<div class=" x mx-2 col-md-9 bg-transparent rounded shadow "style="height:400px;">
  <div class="v1">

    <table id="myTable" class="table  text-light " style="">
    <tr class="header">
        <th style="">Name</th>
        <th style="">ID</th>
        <th style="">Price</th>
        <th style="">Type</th>
        <th style="">Quantity</th>

      </tr>
      <?php  product_list() ?>
    </table>









  </div>
</div>