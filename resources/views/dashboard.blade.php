<x-app-layout>
    <slot >
        @auth
            @if (Auth::user()->role == 'admin')
                @include("Admin.dashboard")
            @elseif (Auth::user()->role == 'Vendor')
                @include("Vendor.dashboard")
            @else
                @include("Sales.dashboard")
            @endif
        @endauth
    </slot>

</x-app-layout>
