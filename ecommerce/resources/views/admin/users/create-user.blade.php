@component('admin.layout.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('admin.layout.errors')
        <h4 class="card-title">Create User</h4>
        <form class="form-inline" method="POST" action="store-user">
            @csrf
          <label class="sr-only" for="name">User Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="name" name="name" id="inlineFormInputName2" placeholder="Enter User name" style="background-color:white !important; color:black !important;">

          <label class="sr-only" for="email">User Email</label>
          <input type="email" class="form-control mb-2 mr-sm-2" id="email" name="email" placeholder="Enter User Email" style="background-color:white !important; color:black !important;">
          
          <label class="sr-only" for="phone">User Phone No.</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="phone" name="phone" placeholder="Enter User phone NO." style="background-color:white !important; color:black !important;">
          
          <label class="sr-only" for="address">User Address</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="address" name="address" placeholder="Enter User Address" style="background-color:white !important; color:black !important;">

          <label class="sr-only" for="password">Password</label>
          <input type="password" class="form-control mb-2 mr-sm-2" id="password" name="password" placeholder="Enter User Password" style="background-color:white !important; color:black !important;">
          
          <label class="sr-only" for="password_confirmation">Confirmation</label>
          <input type="password" class="form-control mb-2 mr-sm-2" id="password_confirmation" name="password_confirmation" placeholder="Enter Password Confirmation" style="background-color:white !important; color:black !important;">

          <label class="sr-only" for="verfiy">User Verification</label> 
          <input type="checkbox" class="form-check-input" id="verfiy" name="verfiy">
          <br>
          
          <button type="submit" class="btn btn-primary mb-2">Submit</button>

        </form>
    </div>
    </div>
  </div>
@endcomponent 