
@if ($item["submenu"] == [])
    <li class="{{getMenuActivo($item["url"])}} nav-item">
        <a href="{{url($item['url'])}}" class="nav-link">
          <i class="fa {{$item["icono"]}}"></i> <span>{{$item["nombre"]}}</span>
        </a>
    </li>
@else
    <li class="nav-item has-treeview">
        <a href="javascript:;" class="nav-link">
          <i class="nav-icon fa {{$item["icono"]}}"></i> <span>{{$item["nombre"]}}</span>
          <p>
            <i class="right fa fa-angle-left "></i>
          </p>
        </a>
        <ul class="nav-item nav-treeview">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif