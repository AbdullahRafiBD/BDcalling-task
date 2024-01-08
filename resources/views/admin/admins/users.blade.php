@extends('admin.layout.layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">User Data </h3>
                            {{-- <h6 class="font-weight-normal mb-0">Update Admin Password</h6> --}}
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User table</h4>
                            <p class="card-description">
                                Add class <code>.table-bordered</code>
                            </p>
                            <div class="table-responsive pt-3">
                                <table id="users" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                User Id
                                            </th>
                                            <th>
                                                Name
                                            </th>

                                            <th>
                                                Mobile
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user['id'] }}
                                                </td>
                                                <td>
                                                    {{ $user['name'] }}
                                                </td>
                                                <td>
                                                    {{ $user['mobile'] }}
                                                </td>

                                                <td>
                                                    {{ $user['email'] }}
                                                </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.layout.footer')
        <!-- partial -->
    </div>
@endsection

@section('script')
    <script src="{{ url('admin/js/custom.js') }}"></script>
@endsection
