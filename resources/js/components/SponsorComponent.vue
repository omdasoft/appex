<template>

    <form @submit.prevent="beSponsor"  class="mt-5 text-right">

            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="sponsorship_type">اختار الرعاية</label>
                        <select id="sponsorship_type" name="sponsorship_type" v-model="form.sponsorship_type" class="form-control" :class="{ 'is-invalid': form.errors.has('sponsorship_type') }">
                            <option value="">اختار نوع الرعاية .. </option>
                            <option value='راعي رئيسي'>راعي رئيسي</option>
                            <option value="راعي ماسي">راعي ماسي</option>
                            <option value="راعي ذهبي">راعي ذهبي</option>
                            <option value="رعاية متخصصة">رعاية متخصصة</option>
                        </select>
                        <has-error :form="form" field="sponsorship_type"></has-error>
                </div>
                <div class="form-group col-md-6">
                    <label for="company">الجهة</label>
                    <input type="text" class="form-control" v-model="form.company" name="company" id="company" placeholder="الجهة" :class="{ 'is-invalid': form.errors.has('company') }" >
                    <has-error :form="form" field="company"></has-error>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="work_nature">طبيعة العمل</label>
                    <input type="text" class="form-control" v-model="form.work_nature" name="work_nature" id="work_nature" placeholder="طبيعة العمل" :class="{ 'is-invalid': form.errors.has('work_nature') }">
                    <has-error :form="form" field="work_nature"></has-error>
                </div>
                <div class="form-group col-md-6">
                    <label for="logo">ارفق الشعار(png , jpg 200x60) </label>
                    <input type="file" class="form-control" @change="onLogoChange" name="logo" id="logo" placeholder="ارفق شعار الشركة" :class="{ 'is-invalid': form.errors.has('logo') }">
                    <div  v-if="form.logo">
                        <img :src="form.logo" class="img-responsive" height="60" width="200">
                    </div>
                    <has-error :form="form" field="logo"></has-error>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address">العنوان</label>
                    <input type="text" class="form-control" v-model="form.address" name="address" id="address" placeholder="العنوان" :class="{ 'is-invalid': form.errors.has('address') }">
                    <has-error :form="form" field="address"></has-error>

                </div>
                <div class="form-group col-md-6">
                    <label for="name">اسم الشخص</label>
                    <input type="text" class="form-control" v-model="form.name" name="name" id="name" placeholder="اسم الشخص" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">تلفون</label>
                    <input type="text" class="form-control" v-model="form.phone" name="phone" id="phone" placeholder="تلفون" :class="{ 'is-invalid': form.errors.has('phone') }">
                    <has-error :form="form" field="phone"></has-error>

                </div>
                <div class="form-group col-md-6">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" class="form-control" v-model="form.email" name="email" id="email" placeholder="البريد الإلكتروني" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <button :disabled="form.busy" type="submit" class="btn btn-primary">اشتراك</button>
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
                    sponsorship_type: '',
                    company: '',
                    work_nature: '',
                    logo: '',
                    address: '',
                    name: '',
                    phone: '',
                    email: '',
                }),
            }
        },
        methods: {
            beSponsor(){
                this.loading = true //the loading begin
                this.form.post('/be-sponsor')
                    .then( (response) => {
                        if(response.status===200) {
                            //reset the form
                            this.form.reset()
                            swal.fire(
                                'تم ارسال الطلب بنجاح',
                                ' الرجاء مراجعة الادارة لتكملة اجراءات الحجز',
                                'success'
                            )
                            console.log('success')
                        }
                    })
                .finally(() => (this.loading = false)) // set loading to false when request finish

            },

            onLogoChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.form.logo = e.target.result;
                };
                reader.readAsDataURL(file);
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
