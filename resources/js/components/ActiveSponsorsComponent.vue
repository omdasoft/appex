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
                    <button @click="deactivateReservation(sponsor.id)" class="btn btn-sm round btn-outline-warning">
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
                sponsors: {},
                sponsor: ''
            }
        },
        methods: {

            //get all inactive sponsors
            getActiveSponsors() {
                axios.get('/api/active_sponsors')
                    .then((response) => {
                        this.sponsors = response.data
                        console.log(response.data)
                    })
            },

            //deactivate the sponsor reservation
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
                        axios.get('/api/deactivate_sponsor', {
                            params: {
                                id: id
                            }
                        }).then((response) => {
                            swal.fire(
                                'تم بنجاح',
                                'تم الغاء التفعيل بنجاح',
                                'success'
                            );
                            this.getActiveSponsors()
                        });
                    }
                });

            },

        },
        mounted() {
            this.getActiveSponsors()
            console.log('Component mounted.')
        }
    }
</script>
