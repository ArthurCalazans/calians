<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//PT"  "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    @include('comuns.head')
    <body>        
        <div class="page">
            @include('comuns.preloader')
            @include('comuns.menu')
            @include('comuns.header')
            @yield('content')
            @include('comuns.footer')
        </div>

            <a href="#0" class="cd-top js-cd-top waves-effect waves-circle gradient-color hoverable">
                <i class="fa fa-chevron-up"></i>
            </a>
            
        @include('comuns.bottom')
    </body>
</html>
