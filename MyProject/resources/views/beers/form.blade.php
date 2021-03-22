@php
    // EDIT
if (isset($edit) && !empty($edit)) {
     $method = 'PUT';
    $url = route('beers.update', compact('beer'));
} else {
    // CREATE
    $method = 'POST';
    $url = route('beers.store');
}
@endphp

<form action="{{ $url }}" method="post">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="title">Brand</label>
        <input class="form-control" type="text" name="brand" placeholder="Brand" value="{{ isset($beer) ? $beer->brand : ''}}">
    </div>

    <div class="form-group">
        <label for="content">Country</label>
        <input class="form-control" type="text" name="country" placeholder="Country" value="{{ isset($beer) ? $beer->country : ''}}">
    </div>

    <div class="form-group">
        <label for="content">Price</label>
        <input class="form-control" type="text" name="price" placeholder="Price" value="{{ isset($beer) ? $beer->price : ''}}">
    </div>

    <div class="form-group">
        <label for="content">Image</label>
        <input class="form-control" type="text" name="image" placeholder="Image" value="{{ isset($beer) ? $beer->image : ''}}">
    </div>

    <input type="submit" value="Invia">
</form>

