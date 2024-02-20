@props(['id', 'title' => $title ?? '', 'btnTitle'])
<div class="modal fade step-form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close all-center" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="step-form">
                            {{-- <form action="" id="step-form"> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="step-form-wrap">
                                            <div class="header">
                                                <ul class="progress-bar-wrap d-flex ps-0 mb-0 justify-content-between ">
                                                    <li
                                                        class=" list-unstyled d-flex align-items-center text-22 f-700 f-ibm text-dark-brown indicators">
                                                        <span class="step-numbers  all-center me-3">1</span> Vehicle
                                                    </li>
                                                    <li class="list-unstyled"> <span class="right-arrow-icon"><i
                                                                class="fa-solid fa-chevron-right"></i></span></li>
                                                    <li
                                                        class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                                                        <span
                                                            class="step-numbers  all-center me-3 bg-light-gray">2</span>
                                                        Ownership
                                                    </li>
                                                    <li class="list-unstyled"> <span class="right-arrow-icon"><i
                                                                class="fa-solid fa-chevron-right"></i></span></li>
                                                    <li
                                                        class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                                                        <span
                                                            class="step-numbers  all-center me-3 bg-light-gray">3</span>
                                                        Condition
                                                    </li>
                                                </ul>
                                                <div class="border-bottom-light mb-40"></div>
                                                <x-auth.form submit="{{ route('posts.store') }}" method="post" title="" description="">
                                                    <x-slot name="inputs">
                                                        <x-button value="Test" type="submit"/>
                                                    </x-slot>
                                                </x-auth.form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
