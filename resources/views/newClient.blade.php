<h1>New Client</h1>

<form action="{{ route('client.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
    </div>

    <button type="submit">Save</button>
</form>
