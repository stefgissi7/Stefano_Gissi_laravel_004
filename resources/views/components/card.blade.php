<div class="card" style="width: 18rem;">
  <img src="{{ $image ?? 'default.jpg' }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $content }}</p>
    <a href="{{ $link }}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>