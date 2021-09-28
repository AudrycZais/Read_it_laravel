<h3>Categories</h3>

@foreach($categories as $categorie)
<li><a href="#">{{$categorie->name}} <span class="ion-ios-arrow-forward"></span></a></li>
@endforeach