<style>
    #categories {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #categories td, #categories th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #categories tr:nth-child(even){background-color: #f2f2f2;}

    #categories tr:hover {background-color: #ddd;}

    #categories th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<table id="nasabah" width="100%">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Contact</td>
    </tr>
    </thead>
    @foreach($nasabah as $n)
        <tbody>
        <tr>
            <td>{{ $n->id }}</td>
            <td>{{ $n->name }}</td>
            <td>{{ $n->email }}</td>
            <td>{{ $n->no_hp }}</td>
        </tr>
        </tbody>
    @endforeach

</table>
