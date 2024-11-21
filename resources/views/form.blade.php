<form name="user-form" id="user-form" method="post" action="{{url ('store-user') }}">
    @csrf
    <div class="form-group">
        <label for="nane">Name</label>
        <input type="text" id="nane" name="name" class="farm-control" required="true">
    </div>
    <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" id="position" name="surname" class="farm-control" required="true">
    </div>
    <div class="form-group">
        <label for="enall">Email</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

