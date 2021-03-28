<template>
    <!-- inactive sponsors -->
    <div class="table-responsive">
        <table class="table table-de mb-0">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>الشركة</th>
                <th>رقم الهاتف</th>
                <th>البريد</th>
                <th>نوع الرعاية</th>
                <th>الاجراءات</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="sponsor in sponsors">
                <td>{{sponsor.name}}</td>
                <td>{{sponsor.company}}</td>
                <td>{{sponsor.phone}}</td>
                <td>{{sponsor.email}}</td>
                <td>{{sponsor.sponsorship_type}}</td>
                <td>
                    <button @click="activateReservation(sponsor.id)" class="btn btn-sm round btn-outline-success">
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
                sponsors: {},
                sponsor: ''
            }
        },
        methods: {

            //get all inactive sponsors
            getInactiveSponsors() {
                axios.get('/api/inactive_sponsors')
                    .then((response) => {
                        this.sponsors = response.data
                        console.log(response.data)
                    })
            },

            //activate reservation and display activated message
            activateReservation(id) {
                axios.get('/api/activate_sponsor', {
                    params: {
                        id: id
                    }
                }).then((response) => {
                    swal.fire(
                        'تم بنجاح',
                        'تم تفعيل الاشتراك بنجاح',
                        'success'
                    );

                    this.getInactiveSponsors();
                });
            },

        },
        mounted() {
            this.getInactiveSponsors()
            console.log('Component mounted.')
        }
    }
</script>
