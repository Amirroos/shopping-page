@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Create Permission</h4>
        <form class="form-inline" method="POST" action="store-permission">
            @csrf
          <label class="sr-only" for="name">Permission Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="name" id="name" placeholder="Enter Permission name" style="background-color:white !important; color:black !important;" required>

          <label class="sr-only" for="inlineFormInputName2">Permission label</label>
          <input type="text" class="form-control mb-2 mr-sm-2" name="lable" id="inlineFormInputName2" placeholder="Enter permission label" style="background-color:white !important; color:black !important;" required>

          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endcomponent 