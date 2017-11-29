@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['page']) }}">{{ $item['label'] }} </a>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ $item['label'] }} 
            <span class="caret"></span>
        </a>

        <ul class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li>
                        <a href="{{ url($submenu['page']) }}">{{ $submenu['label'] }}</a>
                    </li>
                @else
                    @include('shared.tipoDocente_menu', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif