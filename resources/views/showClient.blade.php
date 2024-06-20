<h1>CLIENT DETAILS</h1>

<form action="{{ route('client.update') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$client['client']['id']}}">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$client['client']['name']}}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$client['client']['email']}}">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" value="{{$client['client']['phone']}}">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{$client['client']['address']}}">
    </div>

    <button type="submit">Update</button>
</form>
