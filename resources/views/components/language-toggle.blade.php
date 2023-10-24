<div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2">

    {{-- Language switcher --}}
    @if (LaravelLocalization::getCurrentLocale() == 'en')
    <small class="nav-item">
        <a href="{{ LaravelLocalization::getLocalizedURL('my') }}" data-mdb-toggle="tooltip" title="@lang('nav.change_lan')" class="flex items-center gap-2" data-mdb-placement="left">

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/2560px-Flag_of_Myanmar.svg.png" class="img-fluid rounded" alt="" srcset="" width="20px" height="20px">
            <h1 class=" text-sm font-medium pl-8">@lang('home.change_lang')</h1>
        </a>
    </small>
    @endif

    @if (LaravelLocalization::getCurrentLocale() == 'my')
    <small class="nav-item">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" data-mdb-toggle="tooltip" title="@lang('nav.change_lan')" class="flex items-center gap-2" data-mdb-placement="left">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Great_Britain_%28English_version%29.png" class="img-fluid rounded" alt="" srcset="" width="20px" height="20px">
            <h1 class=" text-sm font-medium pl-8">@lang('home.change_lang')</h1>
        </a>

    </small>
    @endif
    {{-- end Language switcher --}}

</div>