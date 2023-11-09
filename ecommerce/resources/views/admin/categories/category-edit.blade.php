@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edite Categories</h4>
        <form class="form-inline" method="POST" action="store-category">
            @csrf
            @method('patch')
          <label class="sr-only" for="inlineFormInputName2">Category Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="categoriesName" id="inlineFormInputName2" placeholder="Enter Category name">

          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endcomponent