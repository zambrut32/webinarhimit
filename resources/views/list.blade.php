@extends('index.index')
@section('content')
    <div class="wrapper">
        <center>

        <h2>Daftar Pengumpulan Link Webinar</h2><br><br><br>
        <table id="example" class="mdl-data-table" style="width:100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>link</th>

            </tr>
            </thead>
            <tbody>
            @foreach($liat as $li)
            <tr>
                <td>{{$li->name }}</td>
                <td>{{$li->email}}</td>
                <td><a href="{{$li->link}}">{{$li->link}}</a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Link</th>

            </tr>
            </tfoot>
        </table>
        </center>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                autoWidth: false,
                columnDefs: [
                    {
                        targets: ['_all'],
                        className: 'mdc-data-table__cell'
                    }
                ],
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endsection
