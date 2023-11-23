@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Edite User</h4>
        <form class="form-inline" method="POST" action="/admin/update-role/{{$role->id}}" method="POST">
            @csrf
            @method('put')
          <label class="sr-only" for="name">Role Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="name" name="name" id="inlineFormInputName2" placeholder="Enter User name" style="background-color:white !important; color:black !important;" value={{old('name',$role->name)}}>

          <label class="sr-only" for="label">label</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="label" name="label" placeholder="Enter User Label" style="background-color:white !important; color:black !important;" value={{old('label',$role->label)}}>



          
          <button type="submit" class="btn btn-primary mb-2">Submit</button>

        </form>
    </div>
    </div>
  </div>
@endcomponent 