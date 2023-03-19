<form method="POST" action="{{ route('organizations.update',$organizations->id) }}">
    @method('PATCH')
    @csrf

    Name : <input type="text" name="name" value="{{ old('name',$organizations->name) }}">
    Email : <input type="email" name="email" value="{{ old('email',$organizations->email) }}">
    phone number : <input type="text" name="phone_number"
        value="{{ old('phone_number',$organizations->phone_number) }}">
    <button type="submit">Save</button>
</form>
