<a href="{{ route('employees.create') }}">Create</a>
<table>
    <thead>
        <tr>First Name</tr>
        <tr>Last Name</tr>
        <tr>Email</tr>
        <tr>Phone Number</tr>
        <tr>Action</tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>
                    <a href="{{ route('employees.show',$employee->id) }}">View</a>
                    <a href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
