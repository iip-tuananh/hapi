<script>
    class Banner extends BaseClass {
        no_set = [];

        before(form) {
            this.image = {};
            this.image_part1 = {};
            this.image_part2 = {};
            this.image_part3 = {};
        }

        after(form) {

        }

        // Ảnh đại diện
        get image() {
            return this._image;
        }

        set image(value) {
            this._image = new Image(value, this);

        }

        clearImage() {
            if (this.image) this.image.clear();
        }

        // Ảnh thành phần
        get image_part1() {
            return this._image_part1;
        }

        set image_part1(value) {
            this._image_part1 = new Image(value, this);
        }

        clearImagePart1() {
            if (this.image_part1) this.image_part1.clear();
        }

        // Ảnh thành phần
        get image_part2() {
            return this._image_part2;
        }

        set image_part2(value) {
            this._image_part2 = new Image(value, this);
        }


        clearImagePart2() {
            if (this.image_part2) this.image_part2.clear();
        }

        // Ảnh thành phần
        get image_part3() {
            return this._image_part3;
        }

        set image_part3(value) {
            this._image_part3 = new Image(value, this);
        }

        clearImagePart3() {
            if (this.image_part3) this.image_part3.clear();
        }

        get submit_data() {
            let data = {
                title: this.title,
                link: this.link,
                intro: this.intro,
                position: this.position,
            }

            data = jsonToFormData(data);

            let image = this.image.submit_data;
            let image_part1 = this.image_part1.submit_data;
            let image_part2 = this.image_part2.submit_data;
            let image_part3 = this.image_part3.submit_data;

            if (image) data.append('image', image);
            if (image_part1) data.append('image_part1', image_part1);
            if (image_part2) data.append('image_part2', image_part2);
            if (image_part3) data.append('image_part3', image_part3);

            return data;
        }
    }
</script>
