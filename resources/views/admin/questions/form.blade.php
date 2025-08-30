<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label required-label">Câu hỏi</label>
                    <input class="form-control " type="text" ng-model="form.title">
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.title[0] %></strong>
                    </span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label">Câu trả lời</label>
                    <textarea class="form-control ck-editor" ck-editor rows="5" ng-model="form.content"></textarea>
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.content[0] %></strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
