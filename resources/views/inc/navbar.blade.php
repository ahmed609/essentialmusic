<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name','Essential Music')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="nav navbar-nav">
        <li>
            <a href="/">Home</a> 
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="/posts/create">Create Post</a></li>
      </ul>
    </div>
  </nav>
  
  