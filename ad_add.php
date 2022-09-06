<div class="container">
        <div class="row">
                <h2>Add new product</h2>
                <form class="col-md-7" method="post">
                        <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                                <label for="name">Code:</label>
                                <input type="text" class="form-control" id="code" placeholder="Enter code" name="name">
                        </div>
                        <div class="form-group">
                                <label for="price"> Price:</label>
                                <input class="form-control" type="number" id="price" name="price" min="1" max="10000">
                        </div>

                        <label for="inputGroupSelect01">Type:</label>

                        <select class="form-select form-select-sm" id="inputGroupSelect01" aria-label=".form-select-sm example">
                                <option selected>Vegetables</option>
                                <option value="1">Vegetables</option>
                                <option value="2">Fruits</option>
                                <option value="3">Spices</option>
                                <option value="4">Others</option>
                        </select>


                        <label for="qty">Quantity:</label>
                        <div class="d-flex">
                                <input class="form-control mx-1" type="number" id="qty" name="qty" min="1" max="1000">

                                <select class="form-select form-select-sm" id="inputGroupSelect02" aria-label=".form-select-sm example">
                                        <option selected>pcs</option>
                                        <option value="1">pcs</option>
                                        <option value="2">kg</option>
                                        <option value="3">mL</option>
                                        < </select>
                        </div>


                        <div class="mb-3">
                                <label for="path" class="form-label">Add display image</label>
                                <input class="form-control" type="file" id="path">
                        </div>



                </form>
        </div>
        <button type="submit" class="btn btn-secondary border-white  text-light add" style="width:30%">Add</button>

</div>