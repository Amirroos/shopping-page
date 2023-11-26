@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Edite Categories</h4>
        <form class="form-inline" method="POST" action="/admin/category-update/{{$category->id}}">
            @csrf
            @method('PUT')
          <label class="sr-only" for="inlineFormInputName2">Category Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="categoriesName" id="inlineFormInputName2" placeholder="Enter Category name" value={{old('categoriesName',$category->categoriesName)}} style="background-color:white !important; color:black !important">

          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endcomponent