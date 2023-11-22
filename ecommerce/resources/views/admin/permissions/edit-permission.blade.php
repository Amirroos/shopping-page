@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Edite Categories</h4>
        <form class="form-inline" method="POST" action="/admin/update-permission/{{$permission->id}}">
            @csrf
            @method('PUT')
          <label class="sr-only" for="inlineFormInputName2">Permission Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="name" id="inlineFormInputName2" placeholder="Enter Permission name" value={{old('name',$permission->name)}} style="background-color:white !important; color:black !important">
          
          
          <label class="sr-only" for="inlineFormInputName2">Permission Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="label" id="inlineFormInputName2" placeholder="Enter Permission name" value={{old('label',$permission->label)}} style="background-color:white !important; color:black !important">

          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endcomponent