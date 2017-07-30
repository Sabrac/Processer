<?php
    /**
     * $projectList
     */
    namespace App\Http\Controllers\Guest;
?>
@extends('guest.layouts.master')

@section('css')
    <link href="{{ asset('assets/guest/guest_index.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('contents')
    <!-- BEGIN LOGIN FORM -->

    <h3 class="form-title">Project List</h3>
    <!-- BEGIN LIST PROJECT -->
    <div class="table-scrollable">
        @if($projectList == null || count($projectList) <= 0)
            <h4 class="text-center">No project found</h4>
        @else
            <table class="table table-striped table-bordered table-advance table-hover">
                <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        <i class="fa fa-briefcase"></i> Project Name
                    </th>
                    <th class="hidden-xs">
                        <i class="fa fa-users"></i> Team Capacity
                    </th>
                    <th>
                        <i class="fa fa-tasks"></i> Status
                    </th>
                    <th>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($projectList as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td class="hidden-xs">{{ $project->capacity }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="javascript:;" class="btn default btn-xs red-stripe">
                                View
                            </a>
                            <a href="javascript:;" class="btn default btn-xs purple">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="javascript:;" class="btn default btn-xs black">
                                <i class="fa fa-trash-o"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- END LIST PROJECT -->
    <!-- END LOGIN FORM -->
@endsection