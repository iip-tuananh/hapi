@extends('layouts.main')

@section('css')
@endsection

@section('page_title')
Quản lý câu hỏi thường gặp
@endsection

@section('title')
Quản lý câu hỏi
@endsection

@section('buttons')
<a href="javascript:void(0)" class="btn btn-outline-success" data-toggle="modal" data-target="#create-question" class="btn btn-info" ng-click="errors = null"><i class="fa fa-plus"></i> Thêm mới</a>
@endsection
@section('content')
<div ng-cloak>
    <div class="row" ng-controller="Questions">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-list">
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- Form tạo mới --}}
    @include('admin.questions.create')
    @include('admin.questions.edit')
</div>
@endsection

@section('script')
@include('admin.questions.Question')
<script>
    let datatable = new DATATABLE('table-list', {
		ajax: {
			url: '/admin/questions/searchData',
			data: function (d, context) {
				DATATABLE.mergeSearch(d, context);
			}
		},
		columns: [
			{data: 'DT_RowIndex', orderable: false, title: "STT", className: "text-center"},
            {data: 'title', title: 'Câu hỏi'},
            {data: 'updated_at', title: 'Ngày cập nhật'},
            {data: 'updated_by', title: 'Người cập nhật'},
			{data: 'action', orderable: false, title: "Hành động"}
		],
		search_columns: [
			{data: 'title', search_type: "text", placeholder: "Câu hỏi"},
		],
	}).datatable;

    createQuestionCallback = (response) => {
        datatable.ajax.reload();
    }
    app.controller('Questions', function ($rootScope, $scope, $http) {
        $scope.loading = {};
        $scope.form = {}


        $('#table-list').on('click', '.edit', function () {
            $scope.data = datatable.row($(this).parents('tr')).data();
            $.ajax({
                type: 'GET',
                url: "/admin/questions/" + $scope.data.id + "/getDataForEdit",
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                data: $scope.data.id,

                success: function(response) {
                if (response.success) {
                    $scope.booking = response.data;
                    $rootScope.$emit("editQuestion", $scope.booking);
                } else {
                    toastr.warning(response.message);
                    $scope.errors = response.errors;
                }
                },
                error: function(e) {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function() {
                    $scope.loading.submit = false;
                    $scope.$applyAsync();
                }
            });
            $scope.errors = null;
            $scope.$apply();
            $('#edit-question').modal('show');
        });
    })
</script>
@include('partial.confirm')
@endsection
