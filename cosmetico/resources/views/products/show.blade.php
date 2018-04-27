<!DOCTYPE html>
<html>
  <head>
    <title>product {{ $product->id }}</title>
  </head>
  <body>
    <h1>product {{ $product->id }}</h1>
    <ul>
      <li>Product Name: {{ $product->name }}</li>
      <li>Description: {{ $product->description }}</li>
      <li>Price: {{ $product->price }}</li>
    </ul>
  </body>
</html>