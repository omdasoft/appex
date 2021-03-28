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
                    <th>الرعاية</th>
                    <th>الحالة</th>
                    <th>الاجراءات</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="sponsor in sponsors" :key="sponsor.id">
                    <td><img :src="displayLogo(sponsor.logo)" width="100" height="50"></td>
                    <td>{{sponsor.name}}</td>
                    <td>{{sponsor.company}}</td>
                    <td>{{sponsor.work_nature}}</td>
                    <td>{{sponsor.address}}</td>
                    <td>{{sponsor.phone}}</td>
                    <td>{{sponsor.email}}</td>
                    <td>{{sponsor.sponsorship_type}}</td>
                    <td>{{getStatusName(sponsor.status)}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" @click="deleteSponsor(sponsor.id)"
                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                            <a href="#" v-show="!sponsor.status" @click="activateReservation(sponsor.id)"
                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تفعيل</a>

                            <a href="#" v-show="sponsor.status" @click="deactivateReservation(sponsor.id)"
                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">الغاء
                                التفعيل</a>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sponsors: {},
                sponsor: '',
                id: '',
                logo: '',
            }
        },
        methods: {
            //get all sponsors
            getAllSponsors() {
                axios.get('/api/get_sponsors')
                    .then(function (response) {
                        this.sponsors = response.data;
                    }.bind(this));
            },
            //activate sponsor and display activated message
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
                    this.getAllSponsors();
                });
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
                            this.getAllSponsors()
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
                this.logo = "/appex/public/uploads/sponsors/logos/" + logo;
                return this.logo;
            },
            //delete sponsor
            deleteSponsor(id) {
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
                        axios.get('/api/delete_sponsor', {
                            params: {
                                id: id
                            }
                        }).then((response) => {

                            swal.fire(
                                'تم بنجاح ',
                                'تم حذف السجل بنجاح',
                                'success'
                            );
                            this.getAllSponsors();

                        })

                    }
                })
            }
        },
        mounted() {
            this.getAllSponsors();
            console.log('Component mounted.')
        }
    }
</script>
