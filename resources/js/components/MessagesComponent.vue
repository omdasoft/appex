<template>
    <div class="table-responsive">
        <table class="table table-de mb-0">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>البريد</th>
                <th>الهاتف</th>
                <th>الموضوع</th>
                <th>الرسالة</th>
                <th>التاريخ</th>
                <th>الاجراءات</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="msg in messages">
                <td>{{msg.name}}</td>
                <td>{{msg.email}}</td>
                <td>{{msg.phone}}</td>
                <td>{{msg.subject}}</td>
                <td>{{msg.msg}}</td>
                <td>{{msg.created_at}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" @click="deleteMessage(msg.id)"
                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                messages: {},
                msg: '',
                id: '',
            }
        },
        methods: {
            //get all messages
            getAllMessages() {
                axios.get('/api/get_messages')
                    .then(function (response) {
                        this.messages = response.data;
                    }.bind(this));
            },
            deleteMessage(id) {
                swal.fire({
                    title: 'هل انت متأكد من حذف الرسالة  ؟',
                    text: "هذا الامر لا يمكن التراجع عنه",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'نعم ، حذف',
                    cancelButtonText: 'رجوع'
                }).then((result) => {
                    if (result.value) {
                        axios.get('/api/delete_message', {
                            params: {
                                id: id
                            }
                        }).then((response) => {

                            swal.fire(
                                'تم بنجاح ',
                                'تم حذف الرسالة بنجاح',
                                'success'
                            );
                            this.getAllMessages();

                        })

                    }
                })
            }
        },
        mounted() {
            this.getAllMessages();
            console.log('Component mounted.')
        }
    }
</script>
