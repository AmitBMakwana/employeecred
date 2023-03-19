<form method="POST" action="{{ route('employees.update',$employees->id) }}">
    @csrf
    @method('PATCH');

    First Name : <input type="text" name="first_name" value="{{ old('first_name',$employees->first_name) }}">
    Last Name : <input type="text" name="last_name" value="{{ old('last_name',$employees->last_name) }}">
    organizationId : <input type="hidden" name="organizationId"
        value="{{ old('organizationId',$employees->organizationId) }}">
    Email : <input type="email" name="email" value="{{ old('email',$employees->email) }}">
    phone number : <input type="text" name="phone_number" value="{{ old('phone_number',$employees->phone_number) }}">
    <button type="submit">Save</button>
</form>