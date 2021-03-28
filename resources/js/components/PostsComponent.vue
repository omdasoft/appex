<template>
    <div>
        <div class="table-responsive">
            <table class="table table-de mb-0">
                <thead>
                <tr>
                    <th>الصورة</th>
                    <th>العنوان عربي</th>
                    <th> العنوان انجليزي</th>
                    <th>التاريخ</th>
                    <th>الاجراءات</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="post in posts" :key="post.id">
                    <td><img :src="displayImage(post.image)" width="100" height="50"></td>
                    <td>{{post.title_ar}}</td>
                    <td>{{post.title_en}}</td>
                    <td>{{post.date}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" @click="viewPost(post)"
                               class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">عرض الخبر</a>

                            <a href="#" @click="deletePost(post.id)"
                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                            <a href="#" @click="editPost(post)"
                               class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!--start view post modal-->
        <div class="modal animated fadeInRight text-left" id="viewPost" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel56" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="viewPostLabel56">عرض الخبر</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table display nowrap table-striped table-bordered scroll-horizontal"
                               style="width: 100%">
                            <tbody>
                            <tr>
                                <td><img :src="displayImage(post.image)" width="400" height="200"></td>
                            </tr>
                            <tr>
                                <td>{{post.date}}</td>
                            </tr>
                            <tr>
                                <td>{{post.title_ar}}</td>
                            </tr>
                            <tr>
                                <td>{{post.post_ar}}</td>
                            </tr>
                            <tr>
                                <td>{{post.title_en}}</td>
                            </tr>
                            <tr>
                                <td>{{post.post_en}}</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end view post modal-->

        <!--start edit post modal-->
        <div class="modal animated fadeInRight text-left" id="editPost" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel56" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="editPostLabel56">تعديل الخبر</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="updatePost" class="mt-5 text-right">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title_ar" class="text-right">العنوان (عربي)</label>
                                    <input type="text" class="form-control" v-model="form.title_ar" name="title_ar"
                                           id="title_ar"
                                           placeholder="ادخل العنوان"
                                           :class="{ 'is-invalid': form.errors.has('title_ar') }">
                                    <has-error :form="form" field="title_ar"></has-error>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title_en" class="text-right">العنوان (english)</label>
                                    <input type="text" class="form-control" v-model="form.title_en" name="title_en"
                                           id="title_en"
                                           placeholder="input the title"
                                           :class="{ 'is-invalid': form.errors.has('title_en') }">
                                    <has-error :form="form" field="title_en"></has-error>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="post_ar" class="text-right">الخبر (عربي)</label>
                                    <textarea class="form-control" id="post_ar" name="post_ar" v-model="form.post_ar"
                                              rows="15"
                                              placeholder="اكتب الخبر بالعربي"
                                              :class="{ 'is-invalid': form.errors.has('post_ar') }"></textarea>
                                    <has-error :form="form" field="post_ar"></has-error>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="post_en" class="text-right">الخبر (english)</label>
                                    <textarea class="form-control" id="post_en" name="post_en" v-model="form.post_en"
                                              rows="15"
                                              placeholder="post in english"
                                              :class="{ 'is-invalid': form.errors.has('post_en') }"></textarea>
                                    <has-error :form="form" field="post_en"></has-error>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="image">ارفق الصورة </label>
                                    <input type="file" class="form-control"  @change="onImageChange" name="image"
                                           id="image"
                                           placeholder="ارفق الصورة"
                                           :class="{ 'is-invalid': form.errors.has('image') }">
                                    <has-error :form="form" field="image"></has-error>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-md-6">
                                    <button type="submit" class="btn btn-outline-primary">تحديث</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end edit post modal-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: {},
                post: '',
                id: '',
                image: '',
                form: new Form({
                    id: '',
                    title_ar: '',
                    title_en: '',
                    post_ar: '',
                    post_en: '',
                    image: ''
                }),
            }
        },
        methods: {
            //get all posts
            getAllPosts() {
                axios.get('/api/get_posts')
                    .then(function (response) {
                        this.posts = response.data;
                    }.bind(this));
            },
            updatePost(){
                this.form.put('/api/update_post',{
                    params:{
                        id:this.form.id
                    }
                }).then((response) => {
                    $("#editPost").modal('hide');
                    swal.fire(
                        'تم بنجاح',
                        'تم تحديث الخبر بنجاح',
                        'success'
                    );
                    this.getAllPosts();
                });
            },
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
            //display the image
            displayImage(image) {
                this.image = "/appex/public/uploads/posts/" + image;
                return this.image;
            },
            viewPost(post) {
                $("#viewPost").modal('show');
                this.post = post;
            },
            editPost(post) {
                $("#editPost").modal('show');
                this.form.fill(post);
            },
            //delete post
            deletePost(id) {
                swal.fire({
                    title: 'هل انت متأكد من حذف هذا السجل ؟',
                    text: "هذا الامر لا يمكن التراجع عنه",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'نعم ، حذف',
                    cancelButtonText: 'رجوع'
                }).then((result) => {
                    if (result.value) {
                        axios.get('/api/delete_post', {
                            params: {
                                id: id
                            }
                        }).then((response) => {

                            swal.fire(
                                'تم بنجاح ',
                                'تم حذف الخبر بنجاح',
                                'success'
                            );
                            this.getAllPosts();

                        })

                    }
                })
            }
        },
        mounted() {
            this.getAllPosts();
            console.log('Component mounted.')
        }
    }
</script>
