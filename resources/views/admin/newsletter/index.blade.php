@extends('layouts.admin_layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Newsletter Subscriptions</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> List of Newsletter Subscriptions</div>
                <div class="card-body">
                    @if (count($newsletters) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($newsletters as $newsletter)
                                    <tr>
                                        <td>{{ $newsletter->created_at }}</td>
                                        <td>{{ $newsletter->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        Sorry, No Newsletter Subscribers yet.
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
