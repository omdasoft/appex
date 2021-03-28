<template>
    <div>
        <div class="table-responsive">
            <table class="table table-de mb-0">
                <thead>
                <tr>
                    <th>الشعار</th>
                    <th>الاسم</th>
                    <th> الجهة</th>
                    <th>طبيعة العمل</th>
                    <th>العنوان</th>
                    <th>الهاتف</th>
                    <th>البريد</th>
                    <th>الحالة</th>
                    <th>الاجراءات</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="exhibitor in exhibitors" :key="exhibitor.id">
                    <td><img :src="displayLogo(exhibitor.logo)" width="100" height="50"></td>
                    <td>{{exhibitor.name}}</td>
                    <td>{{exhibitor.company}}</td>
                    <td>{{exhibitor.work_nature}}</td>
                    <td>{{exhibitor.address}}</td>
                    <td>{{exhibitor.phone}}</td>
                    <td>{{exhibitor.email}}</td>
                    <td>{{getStatusName(exhibitor.status)}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" @click="deleteExhibitor(exhibitor.id)"
                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                            <a href="#" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1"
                               @click="getReservationDetails(exhibitor)">تفاصيل الحجز</a>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal animated fadeInRight text-left" id="fadeInRight" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel56" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel56">تفاصيل الحجز</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table display nowrap table-striped table-bordered scroll-horizontal"
                               style="width: 100%">
                            <thead>
                            <tr>
                                <th>الصالة</th>
                                <th> الجناح</th>
                                <th>المساحة</th>
                                <th>نوع الجناح</th>
                                <th>المبلغ</th>
                                <th>الحالة</th>
                                <th>الاجراءات</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{hall.name}}</td>
                                <td>{{wing.name}}</td>
                                <td>{{exhibitor.area}}</td>
                                <td>{{exhibitor.wing_type}}</td>
                                <td>{{exhibitor.ammount}}</td>
                                <td>{{getStatusName(exhibitor.status)}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="#" v-show="!active" @click="activateReservation(exhibitor.id)"
                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تفعيل</a>

                                        <a href="#" v-show="active" @click="deactivateReservation(exhibitor.id)"
                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">الغاء
                                            التفعيل</a>
                                    </div>
                                </td>
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                exhibitors: {},
                exhibitor: '',
                id: '',
                exhibitor_id: '',
                active: '',
                logo: '',
                wing: [],
                hall: []
            }
        },
        methods: {
            //get all exhibitors
            getAllExhibitors() {
                axios.get('/api/get_exhibitors')
                    .then(function (response) {
                        this.exhibitors = response.data;
                    }.bind(this));
            },
            //display the reservation details modal
            getReservationDetails(exhibitor) {
                $("#fadeInRight").modal('show');
                this.active = exhibitor.status;
                this.wing = exhibitor.wing;
                this.hall = exhibitor.hall;
                this.exhibitor = exhibitor;
            },
            //activate reservation and display activated message
            activateReservation(id) {
                axios.get('/api/activate_reservation', {
                    params: {
                        id: id
                    }
                }).then((response) => {
                    $("#fadeInRight").modal('hide');
                    swal.fire(
                        'تم بنجاح',
                        'تم تفعيل الاشتراك بنجاح',
                        'success'
                    );
                    this.getAllExhibitors();
                });
            },
            //deactivate the reservation
            deactivateReservation(id) {
                swal.fire({
                    title: 'هل انت متأكد من الغاء تفعيل هذا الاشتراك ؟',
                    text: "هذا الامر لا يمكن التراجع عنه",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'نعم ، الغاء التفعيل',
                    cancelButtonText: 'رجوع'
                }).then((result) => {
                    if (result.value) {
                        axios.get('/api/deactivate_reservation', {
                            params: {
                                id: id
                            }
                        }).then((response) => {
                            $("#fadeInRight").modal('hide');
                            swal.fire(
                                'تم بنجاح',
                                'تم الغاء التفعيل بنجاح',
                                'success'
                            );
                        });
                    }
                });

            },
            //display the title of status
            getStatusName(status) {
                if (status == 1) {
                    return "مفعل";
                } else {
                    return "غير مفعل";
                }
            },
            //display the logo
            displayLogo(logo) {
                this.logo = "/appex/public/uploads/exhibitors/logos/" + logo;
                return this.logo;
            },
            //delete exhibitor
            deleteExhibitor(id) {
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
                        axios.get('/api/delete_exhibitor', {
                            params: {
                                id: id
                            }
                        }).then((response) => {

                            swal.fire(
                                'تم بنجاح ',
                                'تم حذف السجل بنجاح',
                                'success'
                            );
                            this.getAllExhibitors();

                        })

                    }
                })
            }
        },
        mounted() {
            this.getAllExhibitors();
            console.log('Component mounted.')
        }
    }
</script>
