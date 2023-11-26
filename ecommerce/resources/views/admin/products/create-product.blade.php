@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Create Product</h4>
        <form class="form-inline" method="POST" action="store-product">
            @csrf
          <label class="sr-only" for="title">Product Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="title" id="title" placeholder="Enter Product name" style="background-color:white !important; color:black !important;" required>

          <label for="description">Description</label>
          <textarea name="description" class="form-control" cols="30" rows="5" style="background-color:white !important; color:black !important;" required placeholder="Enter your discription" ></textarea>

          <label class="sr-only" for="price">Price</label>
          <input type="number" class="form-control mb-2 mr-sm-2" name="price" id="price" placeholder="Enter Product price" style="background-color:white !important; color:black !important;" required>

          <label class="sr-only" for="discount">Discount</label>
          <input type="number" class="form-control mb-2 mr-sm-2" name="discount" id="discount" placeholder="Enter Product discount" style="background-color:white !important; color:black !important;" required>

          <label class="sr-only" for="category">Category</label>
          <br>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endcomponent 