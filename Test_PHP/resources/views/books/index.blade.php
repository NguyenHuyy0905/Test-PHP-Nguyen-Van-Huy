<style>
    table {
        width: 100%;
        border-collapse: collapse;
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

    /* Style cho hàng chẵn */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Hover effect */
    tr:hover {
        background-color: #ddd;
    }
</style>

<h1>List of Books</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
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
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->authorid }}</td>
            <td>{{ $book->ISBN }}</td>
            <td>{{ $book->pub_year }}</td>
            <td>{{ $book->available }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('books.search') }}">Go to SEARCH page</a>
<br>
<a href="{{ route('books.create') }}">Go to CREATE page</a>
