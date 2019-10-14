
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="#" class="navbar-brand">@yield('title1')</a>
            <ul>
                <li class="{{ setActive('home')}}"><a href="/">@lang('Home')</a>   				</li>
				<li class="{{ setActive ('gastos.*')}}" >	<a href="/gastos">@lang('Gastos')</a>		</li>
				<li class="{{ setActive('ingresos.*') }}">	<a  href="/ingresos">@lang('Ingresos')</a>	</li>
				<li class="{{ setActive('contacto.*') }}" >	<a href="/contacto ">@lang('Contacto')</a> 	</li>
				@guest
				<li>	<a href="{{route('login')}}">--LOGIN--</a> 	</li>
				@else
				<li>
					<a href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
					Cerrar Sesion</a>
				</li>
				@endguest
				</ul>   
				
		</nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
        </form>