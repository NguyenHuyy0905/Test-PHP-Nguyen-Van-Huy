<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style cho form */
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style cho các label và input */
    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
    }

    /* Style cho nút submit */
    button[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Style cho thông báo lỗi */
    .alert {
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }
</style>

<h1>Add New Book</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="authorid">Author ID:</label>
        <input type="number" id="authorid" name="authorid" value="{{ old('authorid') }}">
    </div>
    <div>
        <label for="ISBN">ISBN:</label>
        <input type="text" id="ISBN" name="ISBN" value="{{ old('ISBN') }}">
    </div>
    <div>
        <label for="pub_year">Publication Year:</label>
        <input type="number" id="pub_year" name="pub_year" value="{{ old('pub_year') }}">
    </div>
    <div>
        <label for="available">Available:</label>
        <input type="number" id="available" name="available" value="{{ old('available') }}">
    </div>
    <button type="submit">Add Book</button>
</form>

<a href="{{ route('books.index') }}">Back</a>
