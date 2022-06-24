<!doctype html>
<html lang="en">
  <head>
    <title>Posts Reports</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @page {
            size: A4;
            margin-left: 1.5cm;
            margin-right: 1.5cm;
        }



        @media print{
            html. body {
                width: 210mm;
                height: 297mm;
            }

            .pageHeader{
                margin-top: 5cm;
            }

            .endpage{
                page-break-after: always;
            }

            td{
                border: 2px solid black;
                padding: 5px;
            }
        }


    </style>

  </head>
  <body onload="window.print()">
    {{-- table>(thead>tr>th*5)+(tbody>tr>td*5) --}}
    @foreach ($postsSplit as $mainkey=>$posts)
    @if ($mainkey==0)
        <div class="pageHeader"></div>
    @endif
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Published?</th>
                <th>Featured></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key=>$post)
            <tr>
                <td>{{($key+1)}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{\Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}</td>
                <td>{{$post->published ? 'Yes' : 'No'}}</td>
                <td>{{$post->Featured ? 'Yes' : 'No'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="endpage"></div>
    @endforeach

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
