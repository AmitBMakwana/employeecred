<form method="POST" action="{{ route('organizations.store') }}">
    @csrf

    Name : <input type="text" name="name">
    Email : <input type="email" name="email">
    phone number : <input type="text" name="phone_number">
    <button type="submit">Save</button>
</form>
