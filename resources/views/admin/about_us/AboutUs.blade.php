@include('admin.about_us.AboutUsGallery')
<script>
    class AboutUs extends BaseClass {
        no_set = [];
        before(form) {
            this.image = {};
            this.image_mission = {};
            this.image_vision = {};
            this.image_core_values = {};
            this.image_raw_material_area = {};
            this.home_image = {};
            this.galleries = [];
        }
        after(form) {
        }
        get image() {
            return this._image;
        }
        set image(value) {
            this._image = new Image(value, this);
        }
		clearImage() {
			if (this.image) this.image.clear();
		}

        get home_image() {
            return this._home_image;
        }
        set home_image(value) {
            this._home_image = new Image(value, this);
        }
        clearHomeImage() {
            if (this.home_image) this.home_image.clear();
        }

        get image_mission() {
            return this._image_mission;
        }
        set image_mission(value) {
            this._image_mission = new Image(value, this);
        }
        clearImageMission() {
            if (this.image_mission) this.image_mission.clear();
        }

        get image_vision() {
            return this._image_vision;
        }
        set image_vision(value) {
            this._image_vision = new Image(value, this);
        }
        clearImageVision() {
            if (this.image_vision) this.image_vision.clear();
        }

        get image_core_values() {
            return this._image_core_values;
        }
        set image_core_values(value) {
            this._image_core_values = new Image(value, this);
        }

        clearImageCoreValues() {
            if (this.image_core_values) this.image_core_values.clear();
        }

        get image_raw_material_area() {
            return this._image_raw_material_area;
        }
        set image_raw_material_area(value) {
            this._image_raw_material_area = new Image(value, this);
        }

        clearImageRawMaterialArea() {
            if (this.image_raw_material_area) this.image_raw_material_area.clear();
        }

        get galleries() {
            return this._galleries || [];
        }

        set galleries(value) {
            this._galleries = (value || []).map(val => new AboutUsGallery(val, this));
        }

        addGallery(gallery) {
            if (!this._galleries) this._galleries = [];
            let new_gallery = new AboutUsGallery(gallery, this);
            this._galleries.push(new_gallery);
            return new_gallery;
        }

        removeGallery(index) {
            this._galleries.splice(index, 1);
        }

        get submit_data() {
            let data = {
                name: this.name,
                slug: this.slug,
                youtube_link: this.youtube_link,
                mission: this.mission,
                vision: this.vision,
                core_values: this.core_values,
                raw_material_area: this.raw_material_area,
                description: this.description,
                content: this.content,
                home_title: this.home_title,
                home_description: this.home_description,
            }
            data = jsonToFormData(data);
            let image = this.image.submit_data;
            if (image) data.append('image', image);

            let home_image = this.home_image.submit_data;
            if (home_image) data.append('home_image', home_image);

            let image_mission = this.image_mission.submit_data;
            if (image_mission) data.append('image_mission', image_mission);

            let image_vision = this.image_vision.submit_data;
            if (image_vision) data.append('image_vision', image_vision);

            let image_core_values = this.image_core_values.submit_data;
            if (image_core_values) data.append('image_core_values', image_core_values);

            let image_raw_material_area = this.image_raw_material_area.submit_data;
            if (image_raw_material_area) data.append('image_raw_material_area', image_raw_material_area);

            this.galleries.forEach((g, i) => {
                if (g.id) data.append(`galleries[${i}][id]`, g.id);
                let gallery = g.image.submit_data;
                if (gallery) data.append(`galleries[${i}][image]`, gallery);
                else data.append(`galleries[${i}][image_obj]`, g.id);
            })

            return data;
        }
    }
</script>
