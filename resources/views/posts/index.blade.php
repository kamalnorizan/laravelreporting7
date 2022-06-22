@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Post</div>

                <div class="card-body">
                   <table id="poststbl" class="table">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($posts as $key => $post)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>Tindakan</td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#poststbl').DataTable({
        'order': [[3,'desc']],
        'processing': true,
        'serverSide': true,
        'ajax':{
            'url': "{{route('post.ajaxLoadPostTable')}}",
            'method': 'post',
            'dataType': 'json',
            "data":{ _token: "{{csrf_token()}}"}
        },
        'columns': [
            {"data":'bil'},
            {"data":'title'},
            {"data":'name'},
            {"data":'created_at'},
            {"data":'action'}
        ]
    });


</script>
@endsection

