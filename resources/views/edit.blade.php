<form action="{{ url('products/' . $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <label for="description">Description</label>
    <textarea name="description">{{ $product->description }}</textarea>
    <label for="price">Price</label>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    <button type="submit">Update Product</button>
</form>