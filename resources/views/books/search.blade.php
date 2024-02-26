<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style cho form tìm kiếm */
    form {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="text"] {
        width: 300px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

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

    /* Style cho bảng kết quả */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

<h1>Search Results</h1>

<form action="{{ route('books.search') }}" method="GET">
    <input type="text" name="search" placeholder="Enter book title">
    <button type="submit">Search</button>
</form>

@if ($books->count() > 0)
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Author ID</th>
            <th>ISBN</th>
            <th>Publication Year</th>
            <th>Available</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->authorid }}</td>
                <td>{{ $book->ISBN }}</td>
                <td>{{ $book->pub_year }}</td>
                <td>{{ $book->available }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No books found.</p>
@endif

<a href="{{ route('books.index') }}">Back</a>
