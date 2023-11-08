@extends('admin.master')

@section('content')
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
                {{ $slot }}
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
@endsection