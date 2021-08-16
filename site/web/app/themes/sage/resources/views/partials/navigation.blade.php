@if ($navigation)
  <nav class="collapse navbar-collapse" id="main-navbar">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    @foreach ($navigation as $item)
      <li class="nav-item{{ $item->children ? ' dropdown' : '' }}">
        @if (!$item->children)
        <a class="nav-link {{ $item->classes ?? '' }} {{ $item->active ? ' active' : '' }}" href="{{ $item->url }}">{!! $item->label !!}</a>
        @else
        <a class="nav-link dropdown-toggle" href="#" id="dropdown-{{ $loop->index }}" data-bs-toggle="dropdown" aria-expanded="false">{!! $item->label !!}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdown-{{ $loop->index }}">
          @foreach ($item->children as $child)
          <li>
            <a class="dropdown-item {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}" href="{!! $child->url !!}">{!! $child->label !!}</a>
          </li>
          @endforeach
        </ul>
        @endif
      </li>
    @endforeach
    </ul>
    <form>
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </form>
  </nav>
@endif
