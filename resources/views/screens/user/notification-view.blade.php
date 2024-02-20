@extends('layouts.user')
@section('content')
    <div class="notification-page">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-12">
                    <div class="notify-head d-flex justify-content-between">
                        <div class="row">
                            <div class="col-lg-8 col-md-10 col-sm-12 ">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active tabs-link" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">Inbox</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">Archived</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                                            aria-controls="contact-tab-pane" aria-selected="false">All</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-2 col-sm-12">
                                <div class="notify-options d-flex">
                                    <i class="fa-solid fa-filter fa-3x"></i>
                                    <i class="fa-solid fa-gear fa-3x"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="notify-content">
                        <div class="notify-btns">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inbox-btn">
                                        <button>mark as read</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inbox-btn">
                                        <button>Archived</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notify-tabs">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="inbox">
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Lois Griffin <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name">Lois Griffin</h6>
                                                    <p>@Brian Griffin <span>when you you wanna go out buddy?</span>
                                                    </p>
                                                    <h6 class="user-name">Brian Griffin</h6>
                                                    <p>@Lois Griffin <span>I HAVE TO GO PETER</span>
                                                    </p>
                                                </div>
                                                <button class="reply-btn">Reply</button>
                                            </div>
                                        </div>
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Lois Griffin <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name">Lois Griffin</h6>
                                                    <p>@Brian Griffin <span>when you you wanna go out buddy?</span>
                                                    </p>
                                                    <h6 class="user-name">Brian Griffin</h6>
                                                    <p>@Lois Griffin <span>I HAVE TO GO PETER</span>
                                                    </p>
                                                </div>
                                                <button class="reply-btn">Reply</button>
                                            </div>
                                        </div>
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user2.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Glenn Quagmire <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name"></h6>
                                                    <p><span></span>
                                                    </p>
                                                    <h6 class="user-name"></h6>
                                                    <p><span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0"></div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-links">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">
                                        << /a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="notify-head ">
                        <div class="row justify-content-between">
                            <div class="col-lg-8 col-md-10 col-sm-12 ">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active tabs-link" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">Inbox</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">Archived</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                                            aria-controls="contact-tab-pane" aria-selected="false">All</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-2 col-sm-12">
                                <div class="notify-options d-flex">
                                    <i class="fa-solid fa-filter fa-3x"></i>
                                    <i class="fa-solid fa-gear fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="notify-content">
                        <div class="notify-btns">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inbox-btn">
                                        <button>mark as read</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inbox-btn">
                                        <button>Archived</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notify-tabs">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="inbox">
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Lois Griffin <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name">Lois Griffin</h6>
                                                    <p>@Brian Griffin <span>when you you wanna go out buddy?</span>
                                                    </p>
                                                    <h6 class="user-name">Brian Griffin</h6>
                                                    <p>@Lois Griffin <span>I HAVE TO GO PETER</span>
                                                    </p>
                                                </div>
                                                <button class="reply-btn">Reply</button>
                                            </div>
                                        </div>
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Lois Griffin <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name">Lois Griffin</h6>
                                                    <p>@Brian Griffin <span>when you you wanna go out buddy?</span>
                                                    </p>
                                                    <h6 class="user-name">Brian Griffin</h6>
                                                    <p>@Lois Griffin <span>I HAVE TO GO PETER</span>
                                                    </p>
                                                </div>
                                                <button class="reply-btn">Reply</button>
                                            </div>
                                        </div>
                                        <div class="inbox-info d-flex">
                                            <div class="user-img">
                                                <img src="{{ asset('/assets/images/inbox-user2.png') }}" alt="kc">
                                            </div>
                                            <div class="user-title">
                                                <p>Glenn Quagmire <span> commented in 🐶</span> Take Brian on a walk</p>
                                                <p class="task-time">11 hours ago • Task List</p>
                                                <div class="task">
                                                    <h6 class="user-name"></h6>
                                                    <p><span></span>
                                                    </p>
                                                    <h6 class="user-name"></h6>
                                                    <p><span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0"></div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-links">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
