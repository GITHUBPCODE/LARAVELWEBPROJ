<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 6px 10px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Add Brand</h2>
  </div>
  <div class="row">
   @if(Session::has('msg'))
	  <h2 style="color:green">Brand Added !</h2>
	   @endif
    <div class="column">
      <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
	    @csrf
        <label for="fname">Category</label>
        <input type="text" id="Category" name="Category" placeholder="Category..">
        <label for="lname">Image</label>
        <input type="file" id="file" name="file" placeholder="file">
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
