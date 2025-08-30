<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label required-label">Tiêu đề</label>
                    <input class="form-control " type="text" ng-model="form.title">
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.title[0] %></strong>
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group custom-group">
                    <label class="form-label">Link</label>
                    <input class="form-control " type="text" ng-model="form.link">
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group custom-group">
                    <label class="form-label">Vị trí</label>
                    <select class="form-control " ng-model="form.position">
                        <option value="1">Banner lớn</option>
                        <option value="2">Banner nhỏ</option>
                    </select>
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.position[0] %></strong>
                    </span>
                </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-6">
                <label class="form-label">Ảnh chính</label>
                <div class="main-img-preview">
                    <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 2MB.</p>
                    <img class="thumbnail img-preview" ng-src="<% form.image.path %>">
                </div>
                <div class="input-group" style="width: 100%; text-align: center">
                    <div class="input-group-btn" style="margin: 0 auto">
                        <div class="fileUpload fake-shadow cursor-pointer">
                            <label class="mb-0" for="<% form.image.element_id %>">
                                <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                            </label>
                            <input class="d-none" id="<% form.image.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.gif">
                        </div>
                    </div>
                </div>
                <span class="invalid-feedback d-block" role="alert">
                    <strong><% errors.image[0] %></strong>
                </span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label class="form-label">Ảnh thành phần</label>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="main-img-preview">
                            <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 2MB.</p>
                            <img class="thumbnail img-preview" ng-src="<% form.image_part1.path %>">
                        </div>
                        <div class="input-group" style="width: 100%; text-align: center">
                            <div class="input-group-btn" style="margin: 0 auto">
                                <div class="fileUpload fake-shadow cursor-pointer">
                                    <label class="mb-0" for="<% form.image_part1.element_id %>">
                                        <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                    </label>
                                    <input class="d-none" id="<% form.image_part1.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.gif">
                                </div>
                            </div>
                        </div>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><% errors.image_part1[0] %></strong>
                        </span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="main-img-preview">
                            <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 2MB.</p>
                            <img class="thumbnail img-preview" ng-src="<% form.image_part2.path %>">
                        </div>
                        <div class="input-group" style="width: 100%; text-align: center">
                            <div class="input-group-btn" style="margin: 0 auto">
                                <div class="fileUpload fake-shadow cursor-pointer">
                                    <label class="mb-0" for="<% form.image_part2.element_id %>">
                                        <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                    </label>
                                    <input class="d-none" id="<% form.image_part2.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.gif">
                                </div>
                            </div>
                        </div>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><% errors.image_part2[0] %></strong>
                        </span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="main-img-preview">
                            <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 2MB.</p>
                            <img class="thumbnail img-preview" ng-src="<% form.image_part3.path %>">
                        </div>
                        <div class="input-group" style="width: 100%; text-align: center">
                            <div class="input-group-btn" style="margin: 0 auto">
                                <div class="fileUpload fake-shadow cursor-pointer">
                                    <label class="mb-0" for="<% form.image_part3.element_id %>">
                                        <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                    </label>
                                    <input class="d-none" id="<% form.image_part3.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.gif">
                                </div>
                            </div>
                        </div>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><% errors.image_part3[0] %></strong>
                        </span>
                    </div>

                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label">Nội dung</label>
                    <textarea id="editor" class="form-control" ck-editor ng-model="form.intro" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
