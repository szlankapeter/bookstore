<form action="api/books/{{$book->book_id}}" method="post">
    @csrf
    {{method_field('PUT')}}
    <input type="text" name="author" placeholder="Author">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="pieces" placeholder="Pireces">
    <input type="submit" value="OK">
</form>