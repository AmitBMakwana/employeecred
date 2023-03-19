@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizations</div>

                <div class="card-body">
                    <a href="{{ route('organizations.create') }}" class="btn btn-primary mb-3">Create Organization</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($organizations as $organization)
                            <tr>
                                <td>{{ $organization->name }}</td>
                                <td>{{ $organization->email }}</td>
                                <td>{{ $organization->phone_number }}</td>
                                <td>
                                    <a href="{{ route('organizations.show', $organization->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('organizations.edit', $organization->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this organization?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection