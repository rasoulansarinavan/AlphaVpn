
<div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

        <div class="row">

            <div
                class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                <div class="auth-cover-bg-image"></div>
                <div class="auth-overlay"></div>

                <div class="auth-cover">

                    <div class="position-relative">

                        <img src="/admin/assets/img/vpn1.png" alt="auth-img">

                        <h2 class="mt-5 text-white font-weight-bolder px-2">The VPN that just works
                        </h2>
                        <p class="text-white px-2">Go further with the #1 trusted leader in VPN
                        </p>
                    </div>

                </div>

            </div>

            <div
                class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form method="post"
                              wire:submit.prevent="authentication(Object.fromEntries(new FormData($event.target)))">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="alert alert-gradient alert-dismissible fade show mb-4" role="alert">

                                        <strong>Warning !</strong> If you don't have a <b>Referral</b> code, leave it blank.
                                    </div>
                                    <div class="mb-3">
                                        <label style="color: inherit" class="form-label">Referral Code
                                            (optional)</label>
                                        <input type="text" name="referral"
                                               value="{{$referral}}"
                                               class="@error('referral') error-input-border  @enderror form-control add-billing-address-input">
                                        @foreach ($errors->get('referral') as $message)
                                            <span wire:loading.remove
                                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="col-12 text-end">
                                    <div class="mb-4">
                                        <button type="submit" wire:target="authentication"
                                                href="{{route('client.register.gmail')}}"
                                                class="btn  btn-social-login ">
                                            <img src="/admin/src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
