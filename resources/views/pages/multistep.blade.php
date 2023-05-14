<x-auth-layout>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 600px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                        <!--begin::Nav-->
                        <div class="stepper-nav flex-center mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 1
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 2
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 3
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->

                        </div>
                        <!--end::Nav-->

                        <!--begin::Form-->
                        <form class="form w-lg-500px mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form"
                            action="{{ theme()->getPageUrl('multiStep') }}">
                            <!--begin::Group-->
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control bg-transparent" name="name"
                                            placeholder="" value="" required />
                                        <div class="invalid-feedback"></div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Email</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="email" class="form-control bg-transparent" name="email"
                                            placeholder="" value="" required />
                                        <div class="invalid-feedback"></div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--begin::Step 1-->

                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Phone</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="tel" class="form-control bg-transparent" name="phone"
                                            placeholder="" value="" required />
                                        <div class="invalid-feedback"></div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Address</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <textarea class="form-control bg-transparent" rows="3" name="address"
                                            placeholder=""></textarea>
                                        <div class="invalid-feedback"></div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--begin::Step 1-->

                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">
                                            Linked Profile
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="url" class="form-control bg-transparent" name="url"
                                            placeholder="" value="" required />
                                        <div class="invalid-feedback"></div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--begin::Step 1-->

                            </div>
                            <!--end::Group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                        data-kt-stepper-action="previous" onClick="backForm()">
                                        Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="submit"
                                        onClick="submitForm()">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next"
                                        onClick="validateAndNext()">
                                        Continue
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
        myModal.show();


        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidUrl(url) {
            const urlRegex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w .-]*)*\/?$/;
            return urlRegex.test(url);
        }

        function isValidPhone(phone) {
            const phoneRegex = /^[+()\-0-9\s]+$/;
            return phoneRegex.test(phone);
        }


        function validateMessage(field, error, message) {
            field.classList.add('is-invalid');
            field.setCustomValidity(message + field.name);
            error.textContent = field.validationMessage;
        }

        // function checkValidity(field, error) {
        //     if (field.value.length === 0) {
        //         validateMessage(field, error, 'Please enter ');
        //     } else {
        //         field.classList.remove('is-invalid');
        //         field.setCustomValidity('');
        //         error.textContent = '';

        //         if (field.name === "email") {
        //             if (!isValidEmail(field.value)) {
        //                 validateMessage(field, error, 'Please enter valid ');
        //             }
        //         }

        //         if (field.name === "url") {
        //             if (!isValidUrl(field.value)) {
        //                 validateMessage(field, error, 'Please enter valid ');
        //             };
        //         }
        //     }
        // }

        function checkValidity(field, error) {
    if (field.hasAttribute('required') && field.value.length === 0) {
        validateMessage(field, error, 'Please enter ');
    } else {
        field.classList.remove('is-invalid');
        field.setCustomValidity('');
        error.textContent = '';

        if (field.type === "email") {
            if (!isValidEmail(field.value)) {
                validateMessage(field, error, 'Please enter valid ');
            }
        }

        if (field.type === "tel") {
            if (!isValidPhone(field.value)) {
                validateMessage(field, error, 'Please enter valid ');
            } 
        }

        if (field.type === "url") {
            if (!isValidUrl(field.value)) {
                validateMessage(field, error, 'Please enter valid ');
            };
        }
    }
}


        const formFields = document.querySelectorAll('.form-control');
        formFields.forEach((field, i) => {
            field.addEventListener('input', function () {
                const error = this.parentNode.querySelector('.invalid-feedback');
                checkValidity(this, error);
            });
        });

        function submitForm() {
            const currentStep = document.querySelector('.current[data-kt-stepper-element="content"]');
            const currentNav = document.querySelector('.current[data-kt-stepper-element="nav"]');

            const formFields = currentStep.querySelectorAll(".form-control");
            const errors = currentStep.querySelectorAll(".invalid-feedback");

            let formIsValid = true;

            // Check if any element is null
            if (formFields.length !== errors.length) {
                formIsValid = false;
            }

            // Check validation for each field in the form
            formFields.forEach((field, i) => {
                if (field) {
                    checkValidity(field, errors[i]);
                    if (field.checkValidity() === false) {
                        formIsValid = false;
                    }
                } else {
                    formIsValid = false;
                }
            });

            if (formIsValid) {
                Swal.fire({
                    text: "You have submitted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function (result) {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            }
        }

        function backForm() {
            const currentStep = document.querySelector('.current[data-kt-stepper-element="content"]');
            const currentNav = document.querySelector('.current[data-kt-stepper-element="nav"]');

            const nextStep = currentStep.nextElementSibling;

            const previousStep = currentStep.previousElementSibling;
            const previousNav = currentNav.previousElementSibling;

            $(".stepper [data-kt-stepper-action=submit]").hide();
            $(".stepper [data-kt-stepper-action=next]").show();
            if (previousStep.previousElementSibling === null) {
                $(".stepper [data-kt-stepper-action=previous]").hide();
            }


            currentStep.classList.remove('current');
            currentNav.classList.remove('current');

            previousStep.classList.add('current');
            previousNav.classList.add('current');
        }

        function validateAndNext() {
            const currentStep = document.querySelector('.current[data-kt-stepper-element="content"]');
            const currentNav = document.querySelector('.current[data-kt-stepper-element="nav"]');

            const nextStep = currentStep.nextElementSibling;
            const nextNav = currentNav.nextElementSibling;


            // const previousStep = nextStep.previousElementSibling;
            // const previousNav = nextNav.previousElementSibling;


            const formFields = currentStep.querySelectorAll(".form-control");
            const errors = currentStep.querySelectorAll(".invalid-feedback");

            let formIsValid = true;

            $(".stepper [data-kt-stepper-action=previous]").hide();
            $(".stepper [data-kt-stepper-action=submit]").hide();
            $(".stepper [data-kt-stepper-action=next]").show();

            if (currentStep !== null) {
                $(".stepper [data-kt-stepper-action=previous]").show();
            }

            
            if (nextStep === null) {
                $(".stepper [data-kt-stepper-action=submit]").show();
                $(".stepper [data-kt-stepper-action=next]").hide();
            }

            // Check if any element is null
            if (formFields.length !== errors.length) {
                formIsValid = false;
            }

            // Check validation for each field in the form
            formFields.forEach((field, i) => {
                if (field) {
                    checkValidity(field, errors[i]);
                    if (field.checkValidity() === false) {
                        formIsValid = false;
                    }
                } else {
                    formIsValid = false;
                }
            });

            if (formIsValid) {
                currentStep.classList.remove('current');
                currentNav.classList.remove('current');

                nextStep.classList.add('current');
                nextNav.classList.add('current');
            }
        }
    </script>

    @stop
</x-auth-layout>