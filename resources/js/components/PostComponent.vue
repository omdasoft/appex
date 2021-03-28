<template>

    <form @submit.prevent="newPost" class="mt-5 text-right">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title_ar" class="text-right">العنوان (عربي)</label>
                <input type="text" class="form-control" v-model="form.title_ar" name="title_ar" id="title_ar"
                       placeholder="ادخل العنوان" :class="{ 'is-invalid': form.errors.has('title_ar') }">
                <has-error :form="form" field="title_ar"></has-error>
            </div>
            <div class="form-group col-md-6">
                <label for="title_en" class="text-right">العنوان (english)</label>
                <input type="text" class="form-control" v-model="form.title_en" name="title_en" id="title_en"
                       placeholder="input the title" :class="{ 'is-invalid': form.errors.has('title_en') }">
                <has-error :form="form" field="title_en"></has-error>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="post_ar" class="text-right">الخبر (عربي)</label>
                <textarea class="form-control" id="post_ar" name="post_ar" v-model="form.post_ar" rows="15"
                          placeholder="اكتب الخبر بالعربي"
                          :class="{ 'is-invalid': form.errors.has('post_ar') }"></textarea>
                <has-error :form="form" field="post_ar"></has-error>
            </div>
            <div class="form-group col-md-6">
                <label for="post_en" class="text-right">الخبر (english)</label>
                <textarea class="form-control" id="post_en" name="post_en" v-model="form.post_en" rows="15"
                          placeholder="post in english"
                          :class="{ 'is-invalid': form.errors.has('post_en') }"></textarea>
                <has-error :form="form" field="post_en"></has-error>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">ارفق الصورة </label>
                <input type="file" class="form-control" @change="onImageChange" name="image" id="image"
                       placeholder="ارفق الصورة" :class="{ 'is-invalid': form.errors.has('image') }">
                <has-error :form="form" field="image"></has-error>
            </div>
        </div>
        <div class="form-row">
            <div class="form-md-6">
                <button :disabled="form.busy" type="submit" class="btn btn-primary">اضافة</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    title_ar: '',
                    title_en: '',
                    post_ar: '',
                    post_en: '',
                    image: '',
                }),
            }
        },
        methods: {
            onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.form.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            newPost() {
                this.form.post('/api/new-post')
                    .then((response) => {
                        if (response.status === 200) {
                            //reset the form
                            this.form.reset()
                            swal.fire(
                                'نجاح',
                                'تم اضافة الخبر بنجاح',
                                'success'
                            )
                            console.log('success')
                        }
                    })
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
