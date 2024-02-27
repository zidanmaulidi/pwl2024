<a href="{{ route('profile') }}">Profil Pengguna</a>
@auth
    {{ first() }}
@endauth
