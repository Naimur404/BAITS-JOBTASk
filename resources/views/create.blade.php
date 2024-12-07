<form action="{{ url('products') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" required>
    <label for="description">Description</label>
    <textarea name="description"></textarea>
    <label for="price">Price</label>
    <input type="number" name="price" required>
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" required>
    <button type="submit">Add Product</button>
</form>

