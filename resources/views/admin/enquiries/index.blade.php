@extends('layouts.admin_layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Courses Enquiries</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> List of Courses Enquiries</div>
                <div class="card-body">
                    @if (count($enquirys) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($enquirys as $enquiry)
                                    <tr>
                                        <td>{{ $enquiry->created_at }}</td>
                                        <td>{{ $enquiry->fname }}</td>
                                        <td>{{ $enquiry->lname }}</td>
                                        <td>{{ $enquiry->email }}</td>
                                        <td>{{ $enquiry->phone }}</td>
                                        <td>{{ $enquiry->message }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        Sorry, No Courses Enquirys yet.
                    @endif
                </div>
                <div class="card-footer small text-muted">Updated at {{ $timeNow }}</div>
            </div>
        <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->

@endsection

@section('secific_js')

    <script type="text/javascript" src="{{ asset('js/admin/admin-datatables.js') }}"></script>

@endsection
