<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="center"><a class="navbar-brand" href="/"><h2>Your Logo</h2></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{Request::is('about')? 'active' : ''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link disabled" href="/contact">Contact</a>
          </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>