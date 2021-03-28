<template>

    <form @submit.prevent="sendMessage"  class="mt-5 text-right">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="name">الاسم *</label>
                    <input type="text" class="form-control" v-model="form.name" name="name" id="name"  :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>

                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="email">البريد الإلكتروني *</label>
                    <input type="email" class="form-control" v-model="form.email" name="email" id="email"  :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>

                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="subject">الموضوع *</label>
                    <input type="text" class="form-control" v-model="form.subject" name="subject" id="subject"  :class="{ 'is-invalid': form.errors.has('subject') }">
                    <has-error :form="form" field="subject"></has-error>

                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="phone">رقم الهاتف *</label>
                    <input type="text" class="form-control" v-model="form.phone" name="phone" id="phone"  :class="{ 'is-invalid': form.errors.has('phone') }">
                    <has-error :form="form" field="phone"></has-error>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <label for="msg">الرسالة *</label>
                    <textarea name="msg" class="form-control" v-model="form.msg" id="msg" cols="30" rows="4"  :class="{ 'is-invalid': form.errors.has('msg') }"></textarea>
                    <has-error :form="form" field="msg"></has-error>

                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <button type="submit" class="btn btn-primary">إرسال </button>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6">
                <div v-if="loading"><img src="/front/img/loader.gif" width="150" height="150"></div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                loading: false,
                form: new Form({
                    name: '',
                    email: '',
                    subject: '',
                    phone: '',
                    msg: ''
                }),
            }
        },
        methods: {
            loading: false,
            sendMessage(){
                this.loading = true //the loading begin
                this.form.post('/send-message')
                    .then( (response) => {
                        if(response.status===200) {
                            //reset the form
                            this.form.reset()
                            swal.fire(
                                'تم الارسال بنجاح',
                                'شكرا علي مراسلتنا سوف يتم الرد علي رسالتك في اقرب وقت ممكن',
                                'success'
                            )

                            console.log('success')
                        }
                    })
                    .finally(() => (this.loading = false)) // set loading to false when request finish

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
