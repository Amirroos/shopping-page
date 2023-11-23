@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Create Role</h4>
        <form class="form-inline" method="POST" action="store-role">
            @csrf
          <label class="sr-only" for="inlineFormInputName2">Role</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="name" name="name" id="inlineFormInputName2" placeholder="Enter Role name" style="background-color:white !important; color:black !important;">

          <label class="sr-only" for="inlineFormInputName2">label</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="label" name="label" placeholder="Enter Label" style="background-color:white !important; color:black !important;">
          
          <label class="sr-only" for=" inlineFormInputName2">Permission List</label>
          <select name="permissions[]" id="permissions" class="form-control mb-2 mr-sm-2" style="background-color: rgb(255, 255, 255)">
            
            @foreach ($permissions as $permission)
                <option value={{$permission->id}}>{{$permission->name}} - {{$permission->label}}</option>
            @endforeach
          </select>

          <button type="submit" class="btn btn-primary mb-2">Submit</button>

        </form>
    </div>
    </div>
  </div>
@endcomponent 