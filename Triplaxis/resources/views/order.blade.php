@include ('header', ['title' => 'Order Tracking|Triplaxis'])
@include ('navigation')
<div id="order">
    <h1>Track My Order</h1>

    <!-- 
    table of status
        1. Product ID
        2. Product Name
        3. Date
        4. Invoice No.
        5. Order Status (Not processed, printed, delivered, received)
        6. Tracking Number (N/A , 1234567890)
    -->

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Product ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Date</th>
          <th scope="col">Invoice No.</th>
          <th scope="col">Order Status</th>
          <th scope="col">Tracking No.</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1 </th>
          <td>123123123</td>
          <td>Supreme iPhone X Phone Casing</td>
          <td>25/5/2018</td>
          <td>inv1010</td>
          <td>Not Processed</td>
          <td>EF 00 614 486 4MY</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>123123111</td>
          <td>Men's Bvlgari Wallet</td>
          <td>@fat</td>
          <td>inv1011</td>
          <td>Delivered</td>
          <td>EF 00 613 386 3MY</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">123123222</td>
          <td>@twitter</td>
          <td>inv1012</td>
          <td>Printed</td>
          <td>EF 00 612 286 2MY</td>
        </tr>
      </tbody>
    </table>

    <small id="track1" class="text-muted">
          Copy the Tracking Number and check delivery status <a href="https://www.poslaju.com.my/track-trace-v2/">HERE
          </a>.</small>
</div>
@include ('footer')
