<div class="navigation nav">
    <nav class="navbar border">
        <div class="navbar--outer">
            <div class="navbar--inner">
                <a href="/home" class="navbar--link">
                    <span class="navbar--title">somestuff</span>
                </a>
            </div>
            <div class="navbar--inner">
                <a href="/home" class="navbar--link">
                    <span class="navbar--title">someaccount</span>
                </a>
            </div>
        </div>
        <div class="navbar--outer">
            @auth
                <div class="navbar--inner">
                    <a href="/home" class="navbar--link">
                        <span class="navbar--title">hi, {{ auth() -> user() -> name }}!</span>
                    </a>
                </div>
                <div class="navbar--inner">
                    <form class="navbar--link" action="/logout" method="post"> @csrf
                        <button class="navbar--title btn-small">logout</button>
                    </form>
                </div>
            @else
                <div class="navbar--inner">
                    <a href="/register" class="navbar--link">
                        <span class="navbar--title">someinfo</span>
                    </a>
                </div>
                <div class="navbar--inner">
                    <a href="/login" class="navbar--link">
                        <span class="navbar--title">somesession</span>
                    </a>
                </div>
            @endauth
        </div>       
    </nav>
    
    @stack('styles')
</div>
