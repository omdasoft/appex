<template>

    <form @submit.prevent="exhibitorReservation"  class="mt-5 text-right">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="hall-data">اختار الصالة</label>
                    <select id="hall-data" v-model="form.hall"  name="hall" @change="getWings" class="form-control" :class="{ 'is-invalid': form.errors.has('hall') }">
                        <option value="">اختار الصالة .. </option>
                        <option v-for="hall in halls" :value="hall.id" :key="hall.id">{{hall.name}}</option>
                    </select>
                    <has-error :form="form" field="hall"></has-error>
                </div>
                <div class="form-group col-md-6">
                    <label>اختار الجناح</label>
                    <select id="wing" v-model="form.wing" name="wing" class="form-control" :class="{ 'is-invalid': form.errors.has('wing') }">
                        <option value="">اختار الجناح .. </option>
                        <option v-for="wing in wings" :value="wing.id" :key="wing.id">{{wing.name}}</option>
                    </select>
                    <has-error :form="form" field="wing"></has-error>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>نوع الجناح</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" @change="getTotalAmmount" v-model="form.wing_type" name="wing_type" id="wing_type1" value="1" checked>&nbsp;&nbsp;
                        <label class="form-check-label" for="wing_type1"> مشيد</label>

                    </div>
                    <div class="form-check form-check-inline">

                        <input class="form-check-input" type="radio" @change="getTotalAmmount" v-model="form.wing_type" name="wing_type" id="wing_type2" value="0"> &nbsp;&nbsp;
                        <label class="form-check-label" for="wing_type2">غير مشيد</label>

                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="area"> المساحة</label>
                    <input type="text" class="form-control" v-model="form.area" @change="getTotalAmmount" name="area" id="area" :class="{ 'is-invalid': form.errors.has('area') }" size="4">
                    <has-error :form="form" field="area"></has-error>

                </div>
                <div class="form-group col-md-4">
                    <label for="ammount"> المبلغ المطلوب</label>
                    <input type="text" class="form-control"  v-model="form.ammount"  name="ammount" id="ammount" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="company">الجهة</label>
                    <input type="text" class="form-control" v-model="form.company" name="company" id="company" placeholder="الجهة" :class="{ 'is-invalid': form.errors.has('company') }" >
                    <has-error :form="form" field="company"></has-error>

                </div>
                <div class="form-group col-md-4">
                    <label for="work_nature">طبيعة العمل</label>
                    <input type="text" class="form-control" v-model="form.work_nature" name="work_nature" id="work_nature" placeholder="طبيعة العمل" :class="{ 'is-invalid': form.errors.has('work_nature') }">
                    <has-error :form="form" field="work_nature"></has-error>
                </div>
                <div class="form-group col-md-4">
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
            return{
                    halls: [],
                    wings: [],
                    loading: false,
                form: new Form({
                    hall: '',
                    wing: '',
                    wing_type: 1,
                    area: 0,
                    ammount:0,
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
            exhibitorReservation() {
                this.loading = true //the loading begin
                // submit the exhibitors reservation form to database
                this.form.post('/exhibitor_reservation')
                   //.then(({ data }) => { console.log(data) })
                    .then( (response) => {
                        if(response.status===200) {
                            //reset the form
                            this.form.reset()
                            this.form.logo = ''
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
            getTotalAmmount(){ //calculate the ammount is = wing_type * area
                let area = this.form.area;
                if(this.form.wing_type == 1){
                    this.form.ammount = 6500*area;
                }else {
                    this.form.ammount = 6000*area;
                }
            },
            getHalls(){
                axios.get('/api/get_halls')
                    .then(function (response) {
                        this.halls = response.data;
                        //console.log(response.data);
                    }.bind(this));
            },
            getWings(){
                axios.get('/api/get_wings',{
                   params:{
                       hall_id: this.form.hall
                   }
                }).then(function (response) {
                        this.wings = response.data

                    }.bind(this));
            }
        },
        mounted() {
            this.getHalls();
            console.log('Component mounted.')
        }
    }
</script>
