@foreach($books as $book)
    <form action="/api/books/{{$book->book_id}}" method="post">
    @csrf
    {{method_field('GET')}}
    <div class="form-gorup">
        <input type="submit" value="{{$book->title}}">
    </div>
    </form>
@endforeach