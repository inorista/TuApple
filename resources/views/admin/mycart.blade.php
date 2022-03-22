  @include('customer/_menu')
  @include('customer/_inform')
  <div class="align-center">
    <h2 class="text-center">ITEM LIST</h2>
    <table class="datatable" border="1">
      <tr class="datatable">
        <th>ID</th>
        <th>Name</th>
        <th>CatID</th>
        <th>Image</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
      @foreach(Session::get('mycart')->items as $item)
      <tr class="datatable">
        <th><?= $item->product->ID ?></th>
        <td><?= $item->product->Name ?></td>
        <td><?= $item->product->CatID ?></td>
        <td><img src="data:image/jpg;base64,<?= $item->product->Image ?>" width="70" height="70" /></td>
        <td><?= $item->product->Price ?></td>
        <td><?= $item->quantity ?></td>
        <td><?= $item->product->Price * $item->quantity ?></td>
        <td><a href="remove2cart?id=<?= $item->product->ID ?>">Remove</a></td>
      </tr>
      @endforeach
      <tr>
        <td colspan="5"></td>
        <td>Total</td>
        <td>{{ Session::get('mycart')->getTotal() }}</td>
        <td><a href="checkout" onclick="return confirm('ARE YOU SURE?')">CHECKOUT</a></td>
      </tr>
    </table>
  </div>
</body>
@include('customer/footer')
</html>
