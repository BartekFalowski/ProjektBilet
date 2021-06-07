@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="form-v8-content">
        <a href="/">
            <div class="form-left">
                <img src="login_assets/foto/form-v8.jpg" alt="form">
            </div>
        </a>
        <div class="form-right">
            <div class="tab">
                <div class="tab-inner">
                    <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Zarejestruj</button>
                </div>
                <div class="tab-inner">
                    <button class="tablinks" onclick="openCity(event, 'sign-in')">Zaloguj</button>
                </div>
            </div>
            <form class="form-detail" action="{{ route('register') }}" method="post">
                @csrf

                <div class="tabcontent" id="sign-up">
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="text" name="name" id="name" class="input-text" required>
                            <span class="label">Imie</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="text" name="surname" id="surname" class="input-text" required>
                            <span class="label">Nazwisko</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="text" name="email" id="email" class="input-text" required>
                            <span class="label">E-Mail</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="password" name="password" id="password" class="input-text" required>
                            <span class="label">Hasło</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="password" name="password-confirm" id="password-confirm" class="input-text" required>
                            <span class="label">Potwierdź Hasło</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="{{ __('Zarejestruj') }}">
                    </div>
                </div>
            </form>
            <form class="form-detail" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="tabcontent" id="sign-in">
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="text" name="email" id="email" class="input-text" required>
                            <span class="label">E-Mail</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-row-inner">
                            <input type="password" name="password" id="password" class="input-text" required>
                            <span class="label">Hasło</span>
                            <span class="border"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection
