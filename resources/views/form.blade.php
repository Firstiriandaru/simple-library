<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Form</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <h1>Tambah Buku Baru</h1>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('book.store') }}" method="POST">
                @csrf
                <div class="col-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="col-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>

                <div class="col-3">
                    <label for="page_count" class="form-label">Page Count</label>
                    <input type="number" class="form-control" id="page_count" name="page_count">
                </div>

                <div class="col-3">
                    <label for="author_name" class="form-label">Author Name</label>
                    <input type="text" class="form-control" id="author_name" name="author_name">
                </div>

                <div class="col-3">
                    <label for="author_email" class="form-label">Author Email</label>
                    <input type="email" class="form-control" id="author_email" name="author_email">
                </div>

                <div class="col-3">
                    <label for="published_date" class="form-label">Published Date</label>
                    <input type="date" class="form-control" id="published_date" name="published_date">
                </div>

                <button type="submit" class="btn btn-success mt-2">Kirim</button>
                <a class="btn btn-warning mt-2" href="{{ route('book')}}">Kembali</a>
            </form>
        </div>
    </div>


    @vite(['resources/js/app.js'])
</body>
</html>
