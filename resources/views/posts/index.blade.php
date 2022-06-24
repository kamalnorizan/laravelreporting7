@extends('layouts.modern')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.css"/>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Print Filter</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="totalRows">Total Rows</label>
                            <input type="number" value="200" class="form-control" name="totalRows" id="totalRows" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="rowsPerPage">Rows Per Page</label>
                            <input type="number" value="10" class="form-control" name="rowsPerPage" id="rowsPerPage" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Senarai Post <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#createPostMdl">
                    Create Post
                  </button> <button type="button" id="refreshTable" class="btn btn-info btn-sm float-right" >
                    Refresh
                  </button> </div>

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
                <div id="errorDiv" class="alert alert-danger d-none" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Error!</strong><br>
                  <span id="errorMessages">

                  </span>
                </div>
                <form id="createForm">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      <small id="titleHelp" class="form-text errorTxt text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                      <small id="contentHelp" class="form-text errorTxt text-danger"></small>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.js"></script>
<script>
    var poststbl = $('#poststbl').DataTable({
        dom: 'Blfrtip',
        buttons: [
            'excel','pdf',{
                text: 'Print',
                action: function(e, dt, node, config){
                    var ids='';
                    $.each(dt.data(), function (indexInArray, row) {
                        ids = ids+'|'+row.id
                    });
                    var url = 'http://laravelreporting7.test/post/reportDataTable';
                    var totalRows = $('#totalRows').val();
                    var rowsPerPage = $('#rowsPerPage').val();
                    var form = $("<form target='_blank' method='POST' style='display:none'></form>").attr({
                        action: url
                    }).appendTo(document.body);

                    var inputId = $('<input type="text" class="form-control" name="ids" id="" >').val(ids);
                    var inputToken = $('<input type="text" class="form-control" name="_token" id="" >').val('{{ csrf_token() }}');

                    $(inputId).appendTo(form);
                    $(inputToken).appendTo(form);
                    form.submit();
                    form.remove();
                    // console.log(inputId);
                    // window.open('http://laravelreporting7.test/post/report/'+totalRows+'/'+rowsPerPage);
                    // window.open('http://laravelreporting7.test/post/reportDataTable/'+ids);
                }
            }
        ],
        lengthMenu:[[10,25,50,-1],[10,25,50,"All"]],
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
                    // return '<button type="button" class="button showid2">'+meta.row+meta.settings._iDisplayStart + 1+'</button>';
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

    $('#refreshTable').click(function (e) {
        e.preventDefault();
        poststbl.ajax.reload();
    });

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
                if($.isEmptyObject(response.error)){
                    $('.errorTxt').empty();
                    $('#errorDiv').addClass('d-none');
                    $('#createForm').get(0).reset();
                    $('#createPostMdl').modal('hide');
                    poststbl.ajax.reload();
                    $('.modal-backdrop').remove();
                    swal("Post telah berjaya direkodkan",{
                        icon:'success',
                        buttons: {
                            cancel: {
                                text: "OK",
                                value: null,
                                visible: true,
                                className: "",
                                closeModal: true,
                            }
                        }
                    });
                }else{
                    $('.errorTxt').empty();
                    $('#errorMessages').empty();
                    $('.form-control').removeClass('is-invalid');
                    $.each(response.error, function (indexInArray, message) {
                        $('#errorMessages').append(message+'<br>');
                        $('#'+indexInArray+'Help').text(message);
                        $('#'+indexInArray).addClass('is-invalid');
                    });

                    $('#errorDiv').removeClass('d-none');
                    // console.log(response.error);
                }
            }
        });
    });

    $('.showid2').click(function (e) {
        e.preventDefault();
        alert('test');
    });

    $(document).on('click','.showid',function(e){
        alert($(this).attr('data-id'));
    });

</script>
@endsection

