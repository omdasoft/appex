<template>
    <!-- Modal -->
    <div
        class="modal fade"
        id="digitalTransformationRegistrationModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        v-if="modalShow"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button
                        type="button"
                        class="close pull-left"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card text-center">
                        <div class="card-header text-center">
                            <h5 class="text-center">
                                <i class="icofont-user"></i> التسجيل في ملتقي التحول الرقمي
                            </h5>
                        </div>
                        <div class="card-body">
                            <form @submit.prevent="register">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name">{{trans.get('pages.name-label')}}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="form.name"
                                            name="name"
                                            id="name"
                                            maxlength="30"
                                            required
                                            
                                        />
                                      
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email"
                                            >{{trans.get('pages.email-label')}}</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            v-model="form.email"
                                            name="email"
                                            id="email"
                                            required
                                           
                                        />
                                      
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="phone"
                                            >{{trans.get('pages.phone-label')}}</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="form.phone"
                                            name="phone"
                                            id="phone"
                                            maxlength="15"
                                           required
                                        />
                                      
                                    </div>
                                    <div class="form-md-12"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button
                                            :disabled="form.busy"
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            {{trans.get('pages.register')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
            modalShow: true,
            form: new Form({
                name: "",
                email: "",
                phone: ""
            })
        };
    },
    methods: {
        register() {
            
                this.form.post('/api/digital-transformation-register')
                    .then((response) => {
                        if (response.status === 200) {
                            this.form.reset()
                            swal.fire(
                                'success',
                                'you have successfuly registered',
                                'success'
                            )
                            console.log('success')
                        }
                    })
                    
        }
    },
    mounted() {
        console.log("Component mounted.");
    }
};

</script>
