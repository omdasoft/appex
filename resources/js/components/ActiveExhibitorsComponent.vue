<template>
    <!-- Active exhibitors -->
    <div class="table-responsive">
        <table class="table table-de mb-0">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>الشركة</th>
                <th>رقم الهاتف</th>
                <th>البريد</th>
                <th>الصالة</th>
                <th>الجناح</th>
                <th>نوع الجناح</th>
                <th>المساحة</th>
                <th>المبلغ المدفوع</th>
                <th>الاجراءات</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="exhibitor in exhibitors">
                <td>{{exhibitor.name}}</td>
                <td>{{exhibitor.company}}</td>
                <td>{{exhibitor.phone}}</td>
                <td>{{exhibitor.email}}</td>
                <td>{{exhibitor.hall.name}}</td>
                <td>{{exhibitor.wing.name}}</td>
                <td>{{exhibitor.wing_type}}</td>
                <td>{{exhibitor.area}}</td>
                <td>{{exhibitor.ammount}}</td>
                <td>
                    <button @click="deactivateReservation(exhibitor.id)" class="btn btn-sm round btn-outline-warning">
                        الغاء التفعيل
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Active exhibitors -->
</template>

<script>
    export default {
        data() {
            return {
                exhibitors: {},
                exhibitor: ''
            }
        },
        methods: {

            //get all active exhibitors

            getActiveExhibitors() {
                axios.get('/api/active_exhibitors')
                    .then((response) => {
                        this.exhibitors = response.data
                        console.log(response.data)
                    })
            },

            //deactivate the reservation
            deactivateReservation(id) {
                swal.fire({
                    title: 'هل انت متأكد من الغاء تفعيل الاشتراك ؟',
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

                            swal.fire(
                                'تم بنجاح',
                                'تم الغاء التفعيل بنجاح',
                                'success'
                            );
                            this.getActiveExhibitors()
                        });
                    }
                });
            }
        },
        mounted() {
            this.getActiveExhibitors()
            console.log('Component mounted.')
        }
    }
</script>
