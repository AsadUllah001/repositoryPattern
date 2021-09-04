<!DOCTYPE html>
<html>
<body>

<h2>Add posts</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="subtitle">Subtitle:</label><br>
  <input type="text" id="subtitle" name="subtitle" value="Doe"><br><br>
  <label for="description">Discription:</label><br>
  <textarea name="description" rows="5"></textarea><br>
  <label for="image">Image:</label><br>
  <input type="file" name="image">
  <input type="submit" value="Submit">
</form> 


</body>
</html>
