@extends('layouts.admin_layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Community</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> List of Comunities</div>
                <div class="card-body">
                    @if (count($communities) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Branch</th>
                                        <th>Acad Year</th>
                                        <th>Higher Studies?</th>
                                        <th>Work After Grad?</th>
                                        <th>No Work Then What?</th>
                                        <th>Interested Domain?</th>
                                        <th>Rate Skills?</th>
                                        <th>Carreer Guidance?</th>
                                        <th>Feedback</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Branch</th>
                                        <th>Acad Year</th>
                                        <th>Higher Studies?</th>
                                        <th>Work After Grad?</th>
                                        <th>No Work Then What?</th>
                                        <th>Interested Domain?</th>
                                        <th>Rate Skills?</th>
                                        <th>Carreer Guidance?</th>
                                        <th>Feedback</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($communities as $community)
                                    <tr>
                                        <td>{{ $community->created_at }}</td>
                                        <td>{{ $community->name }}</td>
                                        <td>{{ $community->email }}</td>
                                        <td>{{ $community->phone }}</td>
                                        <td>{{ $community->branch }}</td>
                                        <td>{{ $community->acad_year }}</td>
                                        <td>{{ $community->higher_studies }}</td>
                                        <td>{{ $community->work_after_grad }}</td>
                                        <td>{{ $community->no_work_then_what }}</td>
                                        <td>{{ $community->intrested_domain }}</td>
                                        <td>{{ $community->rate_skills }}</td>
                                        <td>{{ $community->carreer_guidance }}</td>
                                        <td>{{ $community->message }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        Sorry, No Community yet.
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
