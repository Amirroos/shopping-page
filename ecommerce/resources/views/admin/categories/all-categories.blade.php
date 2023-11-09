@component('admin.layout.content')
<div class="card-body">
  @if (session('status'))
    <div class="card-header">
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    </div>
  @endif
    <div class="d-flex justify-content-between">
        <h4 class="card-title">categories list</h4>
        <a class="nav-link btn btn-success btn-sm" href="create-categories">+ Create New Project</a>    
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> # </th>
            <th> Category name </th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->categoriesName}}</td>
            <td>
                <a href={{route('category-edit' ,$category->id)}} class="btn btn-sm btn-info">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endcomponent