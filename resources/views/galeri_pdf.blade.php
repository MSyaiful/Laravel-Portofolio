<table class="table table-striped table-bordered mt-3" border="1">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th >Gambar</th>
            <th >Dibuat</th>
            <th >Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach($galeri as $gallery)
        <tr class="bg-light">
            <td>{{ $gallery->id }}</td>
            <td>{{ $gallery->gambar }}</td>
            <td>{{ date("d F Y",strtotime($gallery->created_at)) }}</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
