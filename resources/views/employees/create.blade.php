<form method="POST" action="{{ route('employees.store') }}">
    @csrf

    First Name : <input type="text" name="first_name" value="{{ old('first_name') }}">
    Last Name : <input type="text" name="last_name" value="{{ old('last_name') }}">
    organizationId : <input type="hidden" name="organizationId"
        value="{{ old('organizationId','1') }}">
    Email : <input type="email" name="email" value="{{ old('email') }}">
    phone number : <input type="text" name="phone_number" value="{{ old('phone_number') }}">
    <button type="submit">Save</button>
</form>
