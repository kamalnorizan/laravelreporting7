@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Post <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#createPostMdl">
                    Create Post
                  </button></div>

                <div class="card-body">
                   <table id="poststbl" class="table">
                    <thead>
                        <tr>
                            <th {{-- width="15%" --}}>Bil</th>
                             <th {{-- width="15%" --}}>Title</th>
                            <th>Comment</th>
                            <th>Calculate</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                   </table>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createPostMdl" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="createForm">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="featured">Featured?</label>
                      <select class="form-control" name="featured" id="featured">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="published" id="published" value="1" checked>
                        Published?
                      </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="postSubmitBtn" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="updatePostMdl" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <span id="dataid"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#updatePostMdl').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $('#dataid').html(id);
    });

    $('#postSubmitBtn').click(function (e) {
        e.preventDefault();
        var published = '0';
        if($('#published').prop('checked')==true){
            published = '1';
        }
        $.ajax({
            type: "post",
            url: "{{route('post.store')}}",
            data: {
                _token: '{{ csrf_token() }}',
                'title': $('#title').val(),
                'content': $('#content').val(),
                'featured': $('#featured').val(),
                'published': published,
            },
            dataType: "json",
            success: function (response) {

            }
        });
    });

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
            {"data":'bil',
                'render': function(data,type,row,meta){
                    return meta.row+meta.settings._iDisplayStart + 1;
                },
                'searchable':false
            },
            {"data":'title'},
            {"data":'comment','searchable':false},
            {"data":'calculate','searchable':false, 'sortable': false},
            {"data":'name', 'name': 'user.name'},
            {"data":'created_at'},
            {"data":'featured'},
            {"data":'action'}
        ]
    });


</script>
@endsection

