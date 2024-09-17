<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Library</title>
</head>

<body>
    <div class="container mt-4">
        <a href="{{ route('book.form') }}" class="btn btn-primary mb-3">Tambah Buku</a>
        <h1>Daftar Buku</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <table class="table table-striped table-bordered border-dark mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Page Count</th>
                    <th>Author Name</th>
                    <th>Author Email</th>
                    <th>Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->page_count }}</td>
                    <td>{{ $book->author_name }}</td>
                    <td>{{ $book->author_email }}</td>
                    <td>{{ $book->published_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
