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
            <tr v-for="exhibitor in exhibitors" :key="exhibitor.id">
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
                    <button @click="activateReservation(exhibitor.id)" class="btn btn-sm round btn-outline-success">
                        تفعيل
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

            //get all inactive exhibitors
            getInactiveExhibitors() {
                axios.get('/api/inactive_exhibitors')
                    .then((response) => {
                        this.exhibitors = response.data
                        console.log(response.data)
                    })
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

                    this.getInactiveExhibitors();
                });
            },

        },
        mounted() {
            this.getInactiveExhibitors()
            console.log('Component mounted.')
        }
    }
</script>
