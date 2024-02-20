<ul class="dropdown-menu ">
    <div class="notification-body">
        <div class="notification-header">
            <p>Notifications</p>
        </div>
        <div class="notification-content">
            <div class="content-head d-flex justify-content-between">
                <div class="unread">
                    <p>Unread</p>
                </div>
                {{-- <div class="mark-read  rounded-2">
                    <button>mark as read</button>
                </div> --}}
            </div>
            <div class="notify-main">
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <div class="first d-flex">
                        {{-- <div class="dot">
                            .
                        </div> --}}
                        <div class="notify-title">
                            <p class="px-2">{!! $notification->data['message'] !!}</p>
                            {{-- <div class="notify-file d-flex px-2">
                                <img src="{{ asset('/assets/images/dropbox.png') }}" alt="kc">
                                <p class="pl-2">Resources_ Product_Growth_Org Design....</p>
                            </div> --}}
                            <p class="notify-time text-secondary mt-2">{{ $notification->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <h3 class="px-3">Recent</h3> --}}
            {{-- <div class="notify-main">
                <div class="first d-flex">
                    <div class="image pl-2">
                        <img src="{{ asset('/assets/images/Avatar -2.png') }}" alt="kc">
                    </div>
                    <div class="notify-title">
                        <p class="px-2">Meg Griffin invited you to edit the folder Logo graphics</p>
                        <div class="notify-file d-flex px-2">
                            <img src="{{ asset('/assets/images/file-2.png') }}" alt="kc">
                            <p class="pl-2">Files</p>
                        </div>
                        <p class="notify-time text-secondary mt-2">july 1,2023</p>
                    </div>
                </div>
            </div> --}}

        </div>
        <x-button href="{{ route('notification-view') }}" type="a" classes="text-secondary notify-link"
            value="View More" />
    </div>
</ul>
